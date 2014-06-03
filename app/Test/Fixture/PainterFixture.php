<?php
/**
 * PainterFixture
 *
 */
class PainterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_painter' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'painter_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'painter_birthday' => array('type' => 'date', 'null' => false, 'default' => null),
		'painter_cityofbirth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'painter_countryofbirth' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'painters_biography' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 700, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_painter', 'unique' => 1)
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
			'id_painter' => 1,
			'painter_name' => 'Lorem ipsum dolor sit amet',
			'painter_birthday' => '2014-06-03',
			'painter_cityofbirth' => 'Lorem ipsum dolor sit amet',
			'painter_countryofbirth' => 'Lorem ipsum dolor sit amet',
			'painters_biography' => 'Lorem ipsum dolor sit amet'
		),
	);

}
