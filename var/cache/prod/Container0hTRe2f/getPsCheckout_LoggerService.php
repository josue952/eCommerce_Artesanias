<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger' shared service.

return $this->services['ps_checkout.logger'] = ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] ?? $this->load('getLoggerFactoryService.php'))->build(($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] ?? ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('8.0.1', \dirname(__DIR__, 4)))));
