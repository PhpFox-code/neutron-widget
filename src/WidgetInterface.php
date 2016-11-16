<?php

namespace Phpfox\ViewWidget;

interface WidgetInterface
{
    /**
     * @param $params
     *
     * @return mixed
     */
    public function resolve($params);
}