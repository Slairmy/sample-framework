<?php


class HTTPServer
{

    protected array $routers;



    public function start(string $host, string $port)
    {
        $http = new Swoole\Http\Server($host, $port);
        $http->on('Request', function ($request, $response) {
            // 查找路由处理函数去处理



        });

        echo sprintf("开始启动服务: %s", "{$host}:{$port}");
        $http->start();
    }


}