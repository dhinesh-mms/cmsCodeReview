<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Entity;

use Xibo\Service\LogServiceInterface;
use Xibo\Storage\StorageServiceInterface;
use Xibo\Support\Exception\InvalidArgumentException;

/**
 * @SWG\Definition()
 */
class TagLink implements \JsonSerializable
{
    use EntityTrait;
    /**
     * @SWG\Property(description="The Tag")
     * @var string
     */
    public $tag;
    /**
     * @SWG\Property(description="The Tag ID")
     * @var int
     */
    public $tagId;
    /**
     * @SWG\Property(description="The Tag Value")
     * @var string
     */
    public $value = null;

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

    public function validateOptions(Tag $tag)
    {
        if ($tag->options) {
            if (!is_array($tag->options)) {
                $tag->options = json_decode($tag->options);
            }

            if (!empty($this->value) && !in_array($this->value, $tag->options)) {
                throw new InvalidArgumentException(
                    sprintf(
                        __('Provided tag value %s, not found in tag %s options, please select the correct value'),
                        $this->value,
                        $this->tag
                    ),
                    'tagValue'
                );
            }
        }

        if (empty($this->value) && $tag->isRequired === 1) {
            throw new InvalidArgumentException(
                sprintf(
                    __('Selected Tag %s requires a value, please enter the Tag in %s|Value format or provide Tag value in the dedicated field.'),
                    $this->tag,
                    $this->tag
                ),
                'tagValue'
            );
        }
    }
}
