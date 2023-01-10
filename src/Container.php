<?php

namespace Weebel\Contracts;

use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    public function set(string $id, $value): static;
    
    public function alias(string $id, string $value): static;

    public function make(string $class, array $arguments): mixed;

    public function addArgument(string $tag, string $key, string $value): static;
}
