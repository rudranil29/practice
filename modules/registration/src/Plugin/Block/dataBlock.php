<?php
namespace Drupal\registration\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'data_block' block.
 *
 * @Block(
 *  id = "data_block",
 *  admin_label = @Translation("Registration form"),
 * )
 */
class dataBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    ////$build = [];
    //$build['mydata_block']['#markup'] = 'Implement MydataBlock.';
    $form = \Drupal::formBuilder()->getForm('Drupal\registration\Form\dataForm');
    return $form;
  }
}
