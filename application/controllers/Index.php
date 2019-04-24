<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        \Yaf_Dispatcher::getInstance()->disableView();
        $this->getResponse()->setBody('Hello world.');
    }
}
