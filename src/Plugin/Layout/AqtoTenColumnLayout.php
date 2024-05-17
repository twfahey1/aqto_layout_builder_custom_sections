<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\Core\Layout\LayoutDefault;

/**
 * A custom layout for a ten column section.
 *
 * @Layout(
 *   id = "aqto_ten_column_layout",
 *   label = @Translation("AQTO 10 Column Layout"),
 *   category = @Translation("AQTO Layouts"),
 *   template = "templates/aqto-ten-column-layout",
 *   library = "aqto_layout_builder_custom_sections/aqto_layout_builder_custom_sections",
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
 *     },
 *     "column_7" = {
 *       "label" = @Translation("Column 7"),
 *     },
 *     "column_8" = {
 *       "label" = @Translation("Column 8"),
 *     },
 *     "column_9" = {
 *       "label" = @Translation("Column 9"),
 *     },
 *     "column_10" = {
 *       "label" = @Translation("Column 10"),
 *     }
 *   }
 * )
 */
class AqtoTenColumnLayout extends LayoutDefault {
}
