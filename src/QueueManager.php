<?php

namespace Weebel\Contracts;

interface QueueManager
{
    public function addJob(Queueable $listener, array $input): void;
}
