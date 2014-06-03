<?php
/**
 * GalleryInformationFixture
 *
 */
class GalleryInformationFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'gallery_information';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'gallery_name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'url' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_phonenumber1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_phonenumber2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'gallery_name' => 1,
			'url' => 'Lorem ipsum dolor sit amet',
			'gallery_address' => 'Lorem ipsum dolor sit amet',
			'gallery_phonenumber1' => 'Lorem ipsum dolor ',
			'gallery_phonenumber2' => 'Lorem ipsum dolor ',
			'gallery_fax' => 'Lorem ipsum dolor sit amet',
			'gallery_email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
