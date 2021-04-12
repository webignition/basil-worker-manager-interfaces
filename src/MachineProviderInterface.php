<?php

namespace webignition\BasilWorkerManagerInterfaces;

interface MachineProviderInterface
{
    public function getId(): string;
    public function getRemoteId(): ?int;
    public function setRemoteId(int $remoteId): void;

    /**
     * @return ProviderInterface::NAME_*
     */
    public function getName(): string;
}
