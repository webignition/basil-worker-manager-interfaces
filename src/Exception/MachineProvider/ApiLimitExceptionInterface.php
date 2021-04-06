<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception\MachineProvider;

interface ApiLimitExceptionInterface extends ExceptionInterface
{
    public function getResetTimestamp(): int;
}
