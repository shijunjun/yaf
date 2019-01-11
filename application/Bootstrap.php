<?php

class Bootstrap extends Yaf\Bootstrap_Abstract{

	public function _initLoader( Yaf\Dispatcher $dispatcher ){
 
    // 引入对composer的支持
		if( is_file( ROOT.'vendor/autoload.php' ) ){
		  require ROOT.'vendor/autoload.php';
		}
    
    // 禁止自动渲染模板
    $dispatcher = Yaf\Dispatcher::getInstance();
    $dispatcher->disableView();
 
	}

}

