<?php

namespace Custom\UiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('custom_ui');

        $rootNode = $treeBuilder->getRootNode();

        SettingsBuilder::append(
            $rootNode,
            [
                'language' => ['value' => 'en_US'],
                'loading_message_enabled' => ['value' => false],
                'loading_messages' => [
                    'value' => null,
                ],
            ]
        );

        return $treeBuilder;
    }
}
