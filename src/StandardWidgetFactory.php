<?php

namespace Neutron\Widget;

use Neutron\Service\ServiceFactoryInterface;
use Neutron\Service\ServiceContainer;

/**
 * Class StandardWidgetFactory
 *
 * @package Neutron\WidgetManager
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