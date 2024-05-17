<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\Core\Layout\LayoutDefault;

/**
 * 5 Column Layout.
 *
 * @Layout(
 *   id = "aqto_five_column_layout",
 *   label = @Translation("Aqto 5 column"),
 *   category = @Translation("AQTO Custom Layouts"),
 *   template = "templates/aqto-five-column-layout",
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
 *   }
 * )
 */
class AqtoFiveColumnLayout extends LayoutDefault {
  // You can add custom methods and properties here if needed.
}
