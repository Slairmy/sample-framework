<?php

require_once "./vendor/autoload.php";

\Hyf\SampleFramework\Server\Router::GET("/", [\Hyf\SampleFramework\Controller\TestController::class, 'index']);