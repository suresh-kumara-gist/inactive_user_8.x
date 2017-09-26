<?php

/**
 * @file
 * Contains inactive_user.page.inc.
 *
 * Page callback for Inactive user entities.
 */

use Drupal\Core\Render\Element;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Prepares variables for Inactive user templates.
 *
 * Default template: inactive_user.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_inactive_user(array &$variables) {
  // Fetch InactiveUser Entity Object.
  $inactive_user = $variables['elements']['#inactive_user'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
