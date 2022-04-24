<?php

namespace App\Services;

class TextConcatService
{
    private RedisConnectorService $redisConnectorService;

    public function __construct(RedisConnectorService $redisConnectorService)
    {
        $this->redisConnectorService = $redisConnectorService;
    }

    public function store(string $text): void
    {
        $this->redisConnectorService->store($this->prepareKeyName(), array_merge(
            $this->get(),
            [$text]
        ));
    }

    public function get(): array
    {
        return $this->redisConnectorService->read($this->prepareKeyName()) ?? [];
    }

    private function prepareKeyName(): string
    {
        return 'text_' . session()->getId();
    }
}
