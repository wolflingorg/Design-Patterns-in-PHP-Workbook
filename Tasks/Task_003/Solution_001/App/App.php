<?php
namespace Task_003\Solution_001\App;

class App implements AppInterface
{
    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function getInstance()
    {
        static $instance = null;
        if($instance === null) {
            $instance = new static();
        }

        return $instance;
    }

    public function handleRequest(string $request): string
    {
        return "Your request is: ${request}";
    }
}