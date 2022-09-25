<?php

namespace Hyf\SampleFramework\Server;

use Hyf\SampleFramework\DI\SimpleContainer;

class Router
{
    protected static array $routers;

    public static function POST(string $route, string | array $handler)
    {
        self::$routers['POST'] = self::handleController($handler);
    }

    public static function GET(string $route, string | array $handler)
    {
        var_dump("开始注册路由");
        self::$routers['GET'] = self::handleController($handler);
    }

    public static function PUT(string $route, string | array $handler)
    {
        self::$routers['PUT'] = self::handleController($handler);
    }

    public static function DELETE(string $route, string | array $handler)
    {
        self::$routers['DELETE'] = self::handleController($handler);
    }

    // 解析handler分离控制器类和方法
    protected static function handleController(string | array $handler): array
    {
        $container = new SimpleContainer();

        if (is_array($handler)) {
            $controller = $handler[0];
            $fn = $handler[1];
        } else {
            $controllerAndFn = explode('@', $handler);
            $controller = $controllerAndFn[0];
            $fn = $controllerAndFn[1];
        }

        return [$container->get($controller), $fn];
    }

}