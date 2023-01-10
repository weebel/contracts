<?php

namespace Weebel\Contracts;

interface CommandContainer
{
    public function register(string $commandClassName): void;

    public function has(string $commandName): bool;

    public function get(string $commandName): string;
}
