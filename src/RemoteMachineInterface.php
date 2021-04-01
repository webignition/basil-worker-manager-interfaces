<?php

namespace webignition\BasilWorkerManagerInterfaces;

interface RemoteMachineInterface
{
    public function getId(): int;

    /**
     * @return string[]
     */
    public function getIpAddresses(): array;

    /**
     * @return MachineInterface::STATE_UP_STARTED|MachineInterface::STATE_UP_ACTIVE|null
     */
    public function getState(): ?string;
}
