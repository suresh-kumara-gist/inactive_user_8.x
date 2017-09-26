<?php

namespace Drupal\inactive_user;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Inactive user entities.
 *
 * @ingroup inactive_user
 */
interface InactiveUserInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Inactive user name.
   *
   * @return string
   *   Name of the Inactive user.
   */
  public function getName();

  /**
   * Sets the Inactive user name.
   *
   * @param string $name
   *   The Inactive user name.
   *
   * @return \Drupal\inactive_user\InactiveUserInterface
   *   The called Inactive user entity.
   */
  public function setName($name);

  /**
   * Gets the Inactive user creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Inactive user.
   */
  public function getCreatedTime();

  /**
   * Sets the Inactive user creation timestamp.
   *
   * @param int $timestamp
   *   The Inactive user creation timestamp.
   *
   * @return \Drupal\inactive_user\InactiveUserInterface
   *   The called Inactive user entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Inactive user published status indicator.
   *
   * Unpublished Inactive user are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Inactive user is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Inactive user.
   *
   * @param bool $published
   *   TRUE to set this Inactive user to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\inactive_user\InactiveUserInterface
   *   The called Inactive user entity.
   */
  public function setPublished($published);

}
