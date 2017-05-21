<?php
namespace Task_003\Solution_001\CacheStrategy;

interface CacheStrategyInterface
{
    public function set(string $key, $data) :bool;

    public function get(string $key);
}