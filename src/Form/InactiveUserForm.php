<?php

namespace Drupal\inactive_user\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Inactive user edit forms.
 *
 * @ingroup inactive_user
 */
class InactiveUserForm extends ContentEntityForm {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\inactive_user\Entity\InactiveUser */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Inactive user.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Inactive user.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.inactive_user.canonical', ['inactive_user' => $entity->id()]);
  }

}
