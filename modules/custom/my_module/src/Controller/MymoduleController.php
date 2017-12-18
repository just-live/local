<?php

/**
* contains \Drupal\my_module\Controller\MymoduleController.
*/

namespace Drupal\my_module\Controller;

class MyModuleController {

	/**
* an example page
*/
public function test(){
	return array(
		'#markup' => t('Hello World!'),
	);
}

public function page2($id){

    return [
      '#theme' => 'test',
      '#content' =>  $id,
    ];
}

// public function employees(){

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
}
