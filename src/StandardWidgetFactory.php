<?php

namespace Phpfox\Widget;

use Phpfox\Service\ServiceFactoryInterface;
use Phpfox\Service\ServiceContainer;

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