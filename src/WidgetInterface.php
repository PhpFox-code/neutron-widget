<?php

namespace Phpfox\Widget;

interface WidgetInterface
{
    /**
     * @param $params
     *
     * @return mixed
     */
    public function resolve($params);
}