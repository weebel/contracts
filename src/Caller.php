<?php

namespace Weebel\Contracts;

interface Caller
{
    public function call(string $class, string $method, array $arguments = []): mixed;

}