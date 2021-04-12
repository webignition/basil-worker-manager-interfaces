<?php

namespace webignition\BasilWorkerManagerInterfaces;

interface MachineProviderInterface extends \JsonSerializable
{
    public function getId(): string;
    public function getRemoteId(): ?int;
    public function setRemoteId(int $remoteId): void;

    /**
     * @return ProviderInterface::NAME_*
     */
    public function getProvider(): string;
}
