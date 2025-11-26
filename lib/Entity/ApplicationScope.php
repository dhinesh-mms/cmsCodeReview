<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Entity;

use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;
use Xibo\Support\Exception\AccessDeniedException;

/**
 * Class ApplicationScope
 * @package Xibo\Entity
 */
class ApplicationScope implements \JsonSerializable
{
    use EntityTrait;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $useRegex;

    /**
     * Entity constructor.
     * @param StorageServiceInterface $store
     * @param LogServiceInterface $log
     * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
     */
    public function __construct($store, $log, $dispatcher)
    {
        $this->setCommonDependencies($store, $log, $dispatcher);
    }

    public function __serialize(): array
    {
        return $this->jsonSerialize();
    }

    public function __unserialize(array $data): void
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * Get Id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function getSqlOperator()
    {
        return ($this->useRegex) ? 'RLIKE' : '=';
    }

    /**
     * Check whether this scope has permission for this route
     * @param $method
     * @param $route
     * @throws AccessDeniedException
     */
    public function checkRoute($method, $route)
    {
        $operator = $this->getSqlOperator();

        $route = $this->getStore()->select('
            SELECT *
              FROM `oauth_scope_routes`
             WHERE scopeId = :scope
              AND method '.$operator.' :method
              AND route '.$operator.' :route
        ', [
            'scope' => $this->getId(),
            'method' => $method,
            'route' => $route
        ]);

        if (count($route) <= 0) {
            throw new AccessDeniedException();
        } else {
            return true;
        }
    }
}
