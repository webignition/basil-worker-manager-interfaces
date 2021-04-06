<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception\MachineProvider;

interface UnprocessableRequestExceptionInterface
{
    public const CODE_REMOTE_PROVIDER_RESOURCE_LIMIT_REACHED = 100;
    public const REASON_REMOTE_PROVIDER_RESOURCE_LIMIT_REACHED = 'remote provider resource limit reached';

    public function getReason(): string;
}
