<?php

/**
 *
 */
class bInfo extends bBaseModel
{
	protected $tableName = 'info';

	protected $attributes = array(
		'edition' => array('type' => bAttributeType::Enum, 'values' => array('Pro','Standard','Personal'), 'required' => true),
		'version' => array('type' => bAttributeType::String, 'maxLength' => 15, 'required' => true),
		'build'   => array('type' => bAttributeType::Integer, 'required' => true, 'unsigned' => true)
	);

	/**
	 * Returns an instance of the specified model
	 * @return object The model instance
	 * @static
	 */
	public static function model($class = __CLASS__)
	{
		return parent::model($class);
	}
}
