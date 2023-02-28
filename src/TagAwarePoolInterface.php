<?php

namespace Hyqo\Contract\Cache;

interface TagAwarePoolInterface extends PoolInterface
{
    public function flushTag(array $tagIds): bool;
}
