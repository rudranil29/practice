<?php

namespace Drupal\adminform\Form;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class exampleSettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'example.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('example.settings');

    $form['url'] = array(
      '#type' => 'url',
      '#title' => $this->t('url'),
      '#default_value' => $config->get('url'),
    );

    $form['script'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('script'),
      '#default_value' => $config->get('script'),
    );

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration
    $this->config('example.settings')
      // Set the submitted configuration setting
      ->set('url', $form_state->getValue('url'))
      // You can set multiple configurations at once by making
      // multiple calls to set()
      ->set('script', $form_state->getValue('script'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
