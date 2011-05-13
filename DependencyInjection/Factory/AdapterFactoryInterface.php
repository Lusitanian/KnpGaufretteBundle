<?php

namespace Knplabs\Bundle\GaufretteBundle\DependencyInjection\Factory;

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Interface that must be implemented by the adapater factories
 *
 * @author Antoine Hérault <antoine.herault@gmail.com>
 */
interface AdapterFactoryInterface
{
    /**
     * Creates the adapter, registers it and returns its id
     *
     * @param  ContainerBuilder $container
     * @param  string           $id
     * @param  array            $config
     *
     * @return string The Adapter service id in the DIC
     */
    function create(ContainerBuilder $container, $id, array $config);

    /**
     * Returns the key for the factory configuration
     *
     * @return string
     */
    function getKey();

    /**
     * Adds configuration nodes for the factory
     *
     * @param  NodeBuilder $builder
     */
    function addConfiguration(NodeDefinition $builder);
}