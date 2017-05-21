<?php
namespace Task_003\Solution_001\Decorator;

use Task_003\Solution_001\App\AppInterface;
use Task_003\Solution_001\CacheStrategy\CacheStrategyInterface;

class CacheDecorator implements AppInterface
{
    private $app;

    private $cacheStrategy;

    public function __construct(AppInterface $app, CacheStrategyInterface $cacheStrategy)
    {
        $this->app = $app;
        $this->cacheStrategy = $cacheStrategy;
    }

    public function handleRequest(string $request): string
    {
        $key = md5($request);

        if($response = $this->cacheStrategy->get($key)) {
            return $response;
        }

        $response = $this->app->handleRequest($request) . " (from a cache)";
        $this->cacheStrategy->set($key, $response);

        return $response;
    }
}