<?php

namespace Phpfox\Widget;


/**
 * Class WidgetManagerFactory
 *
 * @package Phpfox\Widget
 */
class WidgetManagerFactory
{

    /**
     * @return WidgetManager
     */
    public function factory()
    {
        return new WidgetManager();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}