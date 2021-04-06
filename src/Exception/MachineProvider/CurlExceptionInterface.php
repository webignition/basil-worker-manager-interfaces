<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception\MachineProvider;

interface CurlExceptionInterface extends ExceptionInterface
{
    public function getCurlCode(): int;
}
