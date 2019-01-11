<?php
/*
 * @desc : 基础控制器，其他控制器来继承 
 */
class BaseController extends Yaf\Controller_Abstract{
  
  public function init(){
  }

  /*
   * @desc : 调用simpleView模版引擎
   */
  public function display( $view, array $data = array() ) {
    // 获取配置里配置的模板文件后缀名
    $configEngine      = Yaf\Application::app()->getConfig();
    $applicationConfig = $configEngine->get('application'); 
    $viewExt = $applicationConfig['view']['ext'];
    $yafViewEngine = $this->getView(); 
    $yafViewEngine->display( "public/header".$viewExt, $data );
    $yafViewEngine->display( $view.$viewExt, $data );
    $yafViewEngine->display( "public/footer".$viewExt, $data );
  }

}
