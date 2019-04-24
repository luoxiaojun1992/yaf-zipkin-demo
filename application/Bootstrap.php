<?php

class Bootstrap extends Yaf_Bootstrap_Abstract{
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        //注册一个插件
        $dispatcher->registerPlugin(new \Lxj\Yaf\Zipkin\Plugin());
    }
}
