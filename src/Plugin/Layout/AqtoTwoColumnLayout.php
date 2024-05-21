<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\layout_builder\Plugin\Layout\LayoutBase;

/**
 * Two column layout.
 *
 * @Layout(
 *   id = "aqto_two_column_layout",
 *   label = @Translation("AQTO Two Column Layout"),
 *   category = @Translation("AQTO Layouts"),
 *   template = "templates/aqto-two-column-layout.html.twig",
 *   regions = {
 *     "left" = {
 *       "label" = @Translation("Left")
 *     },
 *     "right" = {
 *       "label" = @Translation("Right")
 *     }
 *   }
 * )
 */
class AqtoTwoColumnLayout extends LayoutBase {
}
