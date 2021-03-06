<?php

/**
 * (c) Thibault Duplessis <thibault.duplessis@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Knp\Bundle\PaginatorBundle;

use Knp\Bundle\PaginatorBundle\DependencyInjection\Compiler\PaginatorAwarePass;
use Knp\Bundle\PaginatorBundle\DependencyInjection\Compiler\PaginatorConfigurationPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class KnpPaginatorBundle extends Bundle
{
	/**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new PaginatorConfigurationPass());
        $container->addCompilerPass(new PaginatorAwarePass());
    }
}
