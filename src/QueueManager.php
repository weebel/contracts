<?php

namespace Waxwink\Contracts;

interface QueueManager
{
    public function addJob(Queueable $listener, array $input): void;
}
