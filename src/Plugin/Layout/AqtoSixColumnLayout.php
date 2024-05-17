<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\Core\Layout\LayoutDefault;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'aqto_six_column_layout' layout.
 *
 * @Layout(
 *   id = "aqto_six_column_layout",
 *   label = @Translation("Aqto 6 column"),
 *   category = @Translation("Aqto Layouts"),
 *   template = "templates/aqto-six-column-layout",
 *   regions = {
 *     "column_1" = {
 *       "label" = @Translation("Column 1"),
 *     },
 *     "column_2" = {
 *       "label" = @Translation("Column 2"),
 *     },
 *     "column_3" = {
 *       "label" = @Translation("Column 3"),
 *     },
 *     "column_4" = {
 *       "label" = @Translation("Column 4"),
 *     },
 *     "column_5" = {
 *       "label" = @Translation("Column 5"),
 *     },
 *     "column_6" = {
 *       "label" = @Translation("Column 6"),
 *     }
 *   }
 * )
 */
class AqtoSixColumnLayout extends LayoutDefault implements ContainerFactoryPluginInterface {

  /**
   * Constructs a AqtoSixColumnLayout object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   The container.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ContainerInterface $container) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container
    );
  }

}
