<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Widget\Provider;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * A trait to set common objects on a Widget Provider Interface
 */
trait WidgetProviderTrait
{
    private $log;
    private $dispatcher;

    public function getLog(): LoggerInterface
    {
        if ($this->log === null) {
            $this->log = new NullLogger();
        }
        return $this->log;
    }

    public function setLog(LoggerInterface $logger): WidgetProviderInterface
    {
        $this->log = $logger;
        return $this;
    }

    /** @inheritDoc */
    public function getDispatcher(): EventDispatcherInterface
    {
        if ($this->dispatcher === null) {
            $this->dispatcher = new EventDispatcher();
        }
        return $this->dispatcher;
    }

    /** @inheritDoc */
    public function setDispatcher(EventDispatcherInterface $dispatcher): WidgetProviderInterface
    {
        $this->dispatcher = $dispatcher;
        return $this;
    }
}
