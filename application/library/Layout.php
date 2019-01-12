<?php
/*
 * @desc     : layout library
 * @author   : yuan
 * @date     : 2018.08.25
 * @location : LongYao.quan cheng bao bao
 */
class Layout{
  public static function render( $layout, array $data = [] ) { 
    $configEngine      = Yaf\Application::app()->getConfig();
    $applicationConfig = $configEngine->get('application'); 
    $viewExt           = $applicationConfig['view']['ext'];
    $view              = new Yaf\View\Simple( ROOT.'application'.DS.'views'.DS.'public' );
    $viewHtml          = $view->render( $layout.$viewExt, $data );  
    return $viewHtml;
  }
}
