<?php

class ViewHelper {

    public static
    function isActive($current, $item, $class = 'active')
    {
        return ($current == $item) ? $class : '';
    }

    public static
    function isUrlActive($pattern, $class = 'active')
    {
        return Request::is($pattern) ? $class : '';
    }
}
