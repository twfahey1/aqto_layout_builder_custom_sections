<?php

namespace Drupal\aqto_layout_builder_custom_sections\Plugin\Layout;

use Drupal\layout_builder\Plugin\Layout\LayoutBase;

/**
 * One column layout.
 *
 * @Layout(
 *   id = "aqto_one_column_layout",
 *   label = @Translation("AQTO One Column Layout"),
 *   category = @Translation("AQTO Layouts"),
 *   template = "templates/aqto-one-column-layout.html.twig",
 *   regions = {
 *     "content" = {
 *       "label" = @Translation("Content")
 *     }
 *   }
 * )
 */
class AqtoOneColumnLayout extends LayoutBase {
}
