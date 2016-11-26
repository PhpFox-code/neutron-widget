<?php

namespace Phpfox\Widget;

use Phpfox\Service\FactoryInterface;
use Phpfox\Service\ServiceManager;

/**
 * Class StandardWidgetFactory
 *
 * @package Phpfox\WidgetManager
 */
class StandardWidgetFactory
{
    public function factory(
        $name,
        $options = []
    ) {
        return new $name($options);
    }

    public function shouldCache()
    {
        return true;
    }
}