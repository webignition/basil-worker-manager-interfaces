<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception;

use webignition\BasilWorkerManagerInterfaces\ProviderInterface;

interface UnsupportedProviderExceptionInterface extends \Throwable
{
    /**
     * @return ProviderInterface::NAME_*
     */
    public function getProvider(): string;
}
