<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "Employees_block",
 *   admin_label = @Translation("Employee block"),
 *   category = @Translation("Blocks"),
 * )
 */
// class EmployeesBlock extends BlockBase {

//   /**
//    * {@inheritdoc}
//    */
//   public function build() {
//     return array(
//       // '#markup' => $this->t('Hello, World from a custom module!'),
//     	'#theme' => 'employees',
//     	'#content' =>  self::getEmployee(),
//     );
//   }

//   public function employees(){

//     return [
//       '#theme' => 'employees',
//       '#content' =>  self::getEmployee(),
//     ];
// }


// static public function getEmployee(){
// 	$employees = [];
// 	$nids = \Drupal::entityQuery('node')->condition('type','add_employee')->sort( 'field_order_by_number' , '')->execute();
// 	$nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
// 	foreach ($nodes as $node) {
// 		array_push($employees, [
// 			'title' => $node->getTitle(),
// 			'email' => $node->get('field_email')->getString(),
// 			'phone' => $node->get('field_phone_no_')->getString(),
// 			'depName' => $node->get('field_dep_name')->getString(),
// 			'gender' => $node->get('field_gender')->getString(),
// 			'category' => $node->get('field_category')->getString(),
// 			'imageUrl' => file_create_url($node->field_picture->entity->getFileUri()),
			
// 		]);
// 	}
// 	return $employees;
// }

// }