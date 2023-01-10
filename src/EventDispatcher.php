<?php

namespace Weebel\Contracts;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcher extends EventDispatcherInterface
{
    public function addListener(string $event, string $listener): void;

    public function dispatchByTag(string $tag, mixed $payload = null);

}
