<?php

namespace webignition\BasilWorkerManagerInterfaces;

interface MachineProviderInterface
{
    public function getId(): string;

    /**
     * @return ProviderInterface::NAME_*
     */
    public function getName(): string;
}
