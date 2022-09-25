<?php


require_once "./vendor/autoload.php";



$httpServer = new \Hyf\SampleFramework\Server\HttpServer();;

// 注册路由
require_once "routes.php";


$httpServer->start("127.0.0.1", 9503);

