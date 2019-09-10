<?php

namespace Drupal\auto_save_form\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AutoSaveFormsIdForm.
 */
class AutoSaveFormsIdForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'auto_save_form.autosaveformsid',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'auto_save_forms_id_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('auto_save_form.autosaveformsid');
    $form['form_ids'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Form Ids'),
      '#description' => $this->t('Enter comma seperated form ids.'),
      '#default_value' => $config->get('form_ids'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('auto_save_form.autosaveformsid')
      ->set('form_ids', $form_state->getValue('form_ids'))
      ->save();
  }

}
