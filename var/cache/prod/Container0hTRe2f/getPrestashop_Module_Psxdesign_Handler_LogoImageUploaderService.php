<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.handler.logo_image_uploader' shared service.

return $this->services['prestashop.module.psxdesign.handler.logo_image_uploader'] = new \PrestaShop\Module\PsxDesign\Handler\LogoImageUploadHandler(($this->services['prestashop.core.shop.logo_uploader'] ?? $this->load('getPrestashop_Core_Shop_LogoUploaderService.php')), ($this->services['prestashop.module.psxdesign.repository.psxdesign_logo_repository'] ?? $this->load('getPrestashop_Module_Psxdesign_Repository_PsxdesignLogoRepositoryService.php')), ($this->services['prestashop.module.psxdesign.utility.logo_utility'] ?? $this->load('getPrestashop_Module_Psxdesign_Utility_LogoUtilityService.php')), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), (\dirname(__DIR__, 4).'/img/'));
