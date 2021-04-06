<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception\MachineProvider;

interface HttpExceptionInterface extends ExceptionInterface
{
    public function getStatusCode(): int;
}
