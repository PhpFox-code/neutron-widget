<?php

namespace Phpfox\WidgetManager;

use Phpfox\ServiceManager\FactoryInterface;
use Phpfox\ServiceManager\ServiceManager;

/**
 * Class StandardWidgetFactory
 *
 * @package Phpfox\WidgetManager
 */
class StandardWidgetFactory implements FactoryInterface
{
    public function factory(
        ServiceManager $serviceManager,
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