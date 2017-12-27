<?php

/**
* contains \Drupal\my_module\Controller\MymoduleController.
*/

namespace Drupal\my_module\Controller;


class MyModuleController {


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

public function counter(){
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
    
    $output = array(
      '#theme' => 'counter1',
      '#content' => [
      	'data' => $data,
        'form' => \Drupal::formBuilder()->getForm('Drupal\my_module\Form\CounterForm'),
      ],
      '#test' => 'from ctrl'
    );
    return $output;
}

}
