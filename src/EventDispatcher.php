<?php

namespace Weebel\Contracts;

use Psr\EventDispatcher\EventDispatcher as PsrEventDispatcherInterface;

interface EventDispatcher extends PsrEventDispatcherInterface
{
    public function addListener(string $event, string $listener): void;

    public function dispatchByTag(string $tag, mixed $payload = null);

}
