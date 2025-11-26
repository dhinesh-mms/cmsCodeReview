<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

use Xibo\Widget\Provider\DataProviderInterface;

/**
 * Menu Board Product Request.
 */
class MenuBoardProductRequest extends Event
{
    public static $NAME = 'menuboard.product.request.event';

    /** @var \Xibo\Widget\Provider\DataProviderInterface */
    private DataProviderInterface $dataProvider;

    public function __construct(DataProviderInterface $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    /**
     * The data provider should be updated with data for its widget.
     * @return \Xibo\Widget\Provider\DataProviderInterface
     */
    public function getDataProvider(): DataProviderInterface
    {
        return $this->dataProvider;
    }
}
