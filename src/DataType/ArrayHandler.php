<?php

namespace Plank\Metable\DataType;

class ArrayHandler implements Handler
{

	/**
	 * {@InheritDoc}
	 */
	public function getDataType() : string
	{
		return 'array';
	}

	/**
	 * {@InheritDoc}
	 */
	public function canHandleValue($value) : bool
	{
		return is_array($value);
	}

	/**
	 * {@InheritDoc}
	 */
	public function serializeValue($value) : string
	{
		return json_encode($value);
	}

	/**
	 * {@InheritDoc}
	 */
	public function unserializeValue(string $value)
	{
		return json_decode($value, true);
	}
}