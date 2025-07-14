<?php

namespace ERP\RegistryService;

use DateTimeImmutable;

interface GatewayServiceInterface
{
    public const SERVICE_FRONTEND = 'frontend';
    public const SERVICE_USER = 'user_service_api';
    public const SERVICE_TRANSLATOR = 'translator_api';


    public function getId(): int;

    public function getName(): string;

    public function getBaseUrl(): string;

    public function IsHealthy(): bool;

    public function getLatestHealthCheckedAt(): ?DateTimeImmutable;

    public function getHealthcheckPath(): ?string;
}