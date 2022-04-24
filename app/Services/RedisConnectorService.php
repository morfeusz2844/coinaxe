<?php

namespace App\Services;

use Illuminate\Redis\Connections\Connection;
use Illuminate\Support\Facades\Redis;

class RedisConnectorService
{
    public function store(string $key_name, array $data): void
    {
        $this->getConnection()->set($key_name, json_encode($data));
    }

    public function read(string $key_name): ?array
    {
        return json_decode($this->getConnection()->get($key_name));
    }

    private function getConnection(): Connection
    {
        return Redis::connection();
    }
}
