<?php

class IndexController extends BaseController {
    public
    function getIndex()
    {
        return View::make('site/index/index');
    }
}
