<?php declare(strict_types=1);

namespace lindesbs\bootstrap4contao\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use lindesbs\bootstrap4contao\Bootstrap4ContaoBundle;

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