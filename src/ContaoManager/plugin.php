<?php

namespace lindesbs\Bootstrap4Contao\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use lindesbs\Bootstrap4Contao\Bootstrap4ContaoBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(Bootstrap4ContaoBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}