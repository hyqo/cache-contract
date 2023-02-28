<?php

namespace Hyqo\Cache\Contract;

interface ItemInterface
{
    public function getKey(): string;

    public function get(): mixed;

    public function set(mixed $value): static;

    public function getExpiresAt(): ?int;

    public function getExpiresAfter(): ?int;

    public function expiresAt(?int $timestamp): static;

    public function expiresAfter(?int $seconds): static;

    public function getTags(): array;

    public function tag(string|array $tag): static;
}
