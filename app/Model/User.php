<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel

{

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_user';

/**
 * Validation rules
 *
 * @var array
 */

	public $validate = array(
        'username' => array(
        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'El nombre del administrador es requerido.'
            )
        ),
        'password' => array(
        'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'El password del administrador es requerido.'
            )
        )
    );

	public function beforeSave($options = array())

	{

    if (isset($this->data[$this->alias]['password']))

		{

      $passwordHasher = new SimplePasswordHasher();
      $this->data[$this->alias]['password'] = $passwordHasher->hash(
      $this->data[$this->alias]['password']
      );

    }

    return true;

	}
	
}
