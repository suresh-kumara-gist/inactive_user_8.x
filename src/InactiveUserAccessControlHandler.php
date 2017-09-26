<?php

namespace Drupal\inactive_user;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Inactive user entity.
 *
 * @see \Drupal\inactive_user\Entity\InactiveUser.
 */
class InactiveUserAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\inactive_user\InactiveUserInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished inactive user entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published inactive user entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit inactive user entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete inactive user entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add inactive user entities');
  }

}
