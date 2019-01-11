<?php
defined( 'DS' ) || define( 'DS', DIRECTORY_SEPARATOR );
defined( 'ROOT' ) || define( 'ROOT', __DIR__.DS.'..'.DS );

$app = new Yaf\Application( ROOT."conf".DS."application.ini" );
$app->bootstrap()->run();
