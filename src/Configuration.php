<?php

namespace Weebel\Contracts;

interface Configuration
{
    public function get(string $string, mixed $default = null): mixed;

    public function getEnv(): string;

    public function isDebug(): bool;

    public function getBasePath(): mixed;

    public function getConfigPath(): string;
}
