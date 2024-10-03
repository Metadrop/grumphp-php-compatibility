<?php
namespace Metadrop\PhpCompatibilityTask;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class ExtensionLoader
 *
 * @author Hannes Kirsman <hkirsman@gmail.com>
 * @package wunderio\PhpCompatibilityTask
 */
class ExtensionLoader implements ExtensionInterface
{

  /**
   * {@inheritdoc}
   */
  public function imports(): iterable {
    yield dirname(__DIR__) . '/config/extension.yml';
  }

}
