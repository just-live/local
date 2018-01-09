<?php

namespace Drupal\my_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements counter form.
 */
class CounterForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'my_module_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['count_number'] = array(
      '#type' => 'number',
      '#title' => $this->t('Write a number to add it to the counter'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Add'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('count_number')) < 1) {
      $form_state->setErrorByName('counter', $this->t('The number is too short. Please enter again.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $data = [];
$query = \Drupal::database()->select('table_counter', 't');
$query->fields('t', ['id', 'counter']);
$result = $query->execute();
while ($row = $result->fetchAssoc()) {
  array_push($data, [
    'id' => $row['id'],
    'counter' => $row['counter']
  ]);  
}

    $query = \Drupal::database()->update('table_counter')
  ->condition('id' , '1')
  ->fields([
    'counter' => $form_state->getValue('count_number') + $data[0]['counter'],
  ])
  ->execute();

  }

}