<?php

namespace Drupal\inactive_user\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Inactive user entities.
 */
class InactiveUserViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['inactive_user']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Inactive user'),
      'help' => $this->t('The Inactive user ID.'),
    );

    return $data;
  }

}
