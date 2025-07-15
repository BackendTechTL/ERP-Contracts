<?php

namespace ErpContracts\Controller;

interface MicroserviceControllerInterface
{
    public function healthCheck();
    public function permissions();
}