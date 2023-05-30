<?php declare(strict_types=1);

namespace lindesbs\bootstrap4contao;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Bootstrap4ContaoBundle extends Bundle
{
    function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}

