<?php


class Router
{
    protected static array $routers;

    public function POST(string $route, string | array $handler)
    {
        self::$routers['POST'] = $handler;
    }

    public function GET(string $route, string | array $handler)
    {
    }

    public function PUT(string $route, string | array $handler)
    {

    }

    public function DELETE(string $route, string | array $handler)
    {
    }

    // 解析handler分离控制器类和方法
    protected function handleController(string | array $handler)
    {
        if (is_array($handler)) {

            $controller = $handler[0];
            $function = $handler[1];

            return [];
        }


        return [];

    }


}