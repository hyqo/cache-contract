<?php

namespace Hyqo\Cache\Contract;

interface PoolInterface
{
    public function has(string $id): bool;

    public function get(string $id, ?callable $handle = null): ItemInterface;

    public function delete(string $id): bool;

    public function save(ItemInterface $item): bool;

    public function flush(): bool;
}
