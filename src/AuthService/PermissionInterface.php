<?php

namespace ERP\AuthService;

interface PermissionInterface
{
    public static function getKey(): string;
    public static function getDescription(): string;
}