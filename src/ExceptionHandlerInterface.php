<?php

namespace Weebel\Contracts;

use Throwable;

interface ExceptionHandlerInterface
{
    public function handle(Throwable $exception): void;
}
