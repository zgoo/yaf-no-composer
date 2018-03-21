<?php


class IndexController extends Yaf\Controller_Abstract
{
    static $sayHello = 'Hello Yaf';

    public function IndexAction()
    {
        $this->getView()->assign('content', self::$sayHello);
    }
}