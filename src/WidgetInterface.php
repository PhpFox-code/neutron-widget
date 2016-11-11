<?php

namespace Phpfox\WidgetManager;

interface WidgetInterface
{
    /**
     * @param $params
     *
     * @return mixed
     */
    public function resolve($params);
}