<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Om Verde Chile theme.
 */
function om_verde_chile_html_head_alter(&$head_elements) {
  // The metatag module prints all images into the og:image metatag if there is
  // a multiple value imagefield. Use only the first image.
  $images = $head_elements['metatag_og:image']['#value'];
  $head_elements['metatag_og:image']['#value']; = $variable = substr($images, 0, strpos($images, ", "));
}
