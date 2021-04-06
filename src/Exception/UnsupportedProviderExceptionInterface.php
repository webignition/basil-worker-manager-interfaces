<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception;

interface UnsupportedProviderExceptionInterface extends \Throwable
{
    public function getProvider(): string;
}
