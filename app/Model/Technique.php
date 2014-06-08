<?php
App::uses('AppModel', 'Model');
/**
 * Technique Model
 *
 */
class Technique extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_technique';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'technique_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'technique_name' => array(
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
 
  public $hasMany = array(
        'Painting' => array(
            'className' => 'Painting',
        )
    );
}
