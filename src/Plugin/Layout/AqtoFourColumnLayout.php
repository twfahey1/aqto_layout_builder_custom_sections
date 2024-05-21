<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\layout_builder\Plugin\Layout\LayoutBase;

/**
 * Four column layout.
 *
 * @Layout(
 *   id = "aqto_four_column_layout",
 *   label = @Translation("AQTO Four Column Layout"),
 *   category = @Translation("AQTO Layouts"),
 *   template = "templates/aqto-four-column-layout.html.twig",
 *   regions = {
 *     "left" = {
 *       "label" = @Translation("Left")
 *     },
 *     "left_center" = {
 *       "label" = @Translation("Left Center")
 *     },
 *     "right_center" = {
 *       "label" = @Translation("Right Center")
 *     },
 *     "right" = {
 *       "label" = @Translation("Right")
 *     }
 *   }
 * )
 */
class AqtoFourColumnLayout extends LayoutBase {
}
