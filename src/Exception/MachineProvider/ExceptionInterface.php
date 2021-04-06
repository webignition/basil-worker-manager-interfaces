<?php

namespace webignition\BasilWorkerManagerInterfaces\Exception\MachineProvider;

use webignition\BasilWorkerManagerInterfaces\RemoteRequestActionInterface;

interface ExceptionInterface extends \Throwable
{
    public function getRemoteException(): \Throwable;

    /**
     * @return RemoteRequestActionInterface::ACTION_*
     */
    public function getAction(): string;
}
