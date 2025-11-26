<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Xibo\Connector\ProviderImport;

/**
 * Event raised when one or more provider search results have been chosen for importing on a layout
 */
class LibraryProviderImportEvent extends Event
{
    protected static $NAME = 'connector.provider.library.import';

    /** @var ProviderImport[] */
    private $ids;

    /**
     * @param ProviderImport[] $ids
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }

    public function getItems(): array
    {
        return $this->ids;
    }
}
