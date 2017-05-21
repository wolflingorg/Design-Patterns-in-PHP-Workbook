<?php
namespace Task_003\Solution_001\CacheStrategy;

class InMemoryCacheStrategy implements CacheStrategyInterface
{
    private $data = [];

    public function set(string $key, $data): bool
    {
        $this->data[$key] = $data;

        return true;
    }

    public function get(string $key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }
}