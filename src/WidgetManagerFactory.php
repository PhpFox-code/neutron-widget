<?php

namespace Phpfox\ViewWidget;


/**
 * Class WidgetManagerFactory
 *
 * @package Phpfox\ViewWidget
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