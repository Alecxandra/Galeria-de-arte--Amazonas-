<?php
App::uses('AppModel', 'Model');
/**
 * Type Model
 *
 */
class Type extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_type';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'type_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
