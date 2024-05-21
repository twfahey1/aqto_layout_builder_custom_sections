<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\layout_builder\Plugin\Layout\LayoutBase;

/**
 * Three column layout.
 *
 * @Layout(
 *   id = "aqto_three_column_layout",
 *   label = @Translation("AQTO Three Column Layout"),
 *   category = @Translation("AQTO Layouts"),
 *   template = "templates/aqto-three-column-layout.html.twig",
 *   regions = {
 *     "left" = {
 *       "label" = @Translation("Left")
 *     },
 *     "center" = {
 *       "label" = @Translation("Center")
 *     },
 *     "right" = {
 *       "label" = @Translation("Right")
 *     }
 *   }
 * )
 */
class AqtoThreeColumnLayout extends LayoutBase {
}
