<?php

namespace Hyqo\Cache\Contract;

interface TagAwarePoolInterface extends PoolInterface
{
    public function flushTag(array $tagIds): bool;
}
