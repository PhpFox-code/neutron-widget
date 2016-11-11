<?php

namespace Phpfox\WidgetManager;


/**
 * Class WidgetManagerFactory
 *
 * @package Phpfox\WidgetManager
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