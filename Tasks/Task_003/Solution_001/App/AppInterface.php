<?php
namespace Task_003\Solution_001\App;

interface AppInterface
{
    public function handleRequest(string $request) :string;
}