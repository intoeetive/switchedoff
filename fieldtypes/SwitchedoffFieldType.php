<?php

namespace Craft;

class SwitchedoffFieldType extends BaseFieldType
{
	public function getName()
	{
		return Craft::t('Switched Off');
	}
    
    public function defineContentAttribute()
    {
        return AttributeType::Number;
    }

	public function getInputHtml($name, $value)
	{
		$inputId = craft()->templates->formatInputId($name);
		return craft()->templates->render('switchedoff/_fieldtype/index', array(
			"name"   => $name,
			"id"     => $inputId,
			"value"  => $value
		));
	}
    
   	/**
	 *
	 *
	 * @inheritDoc IFieldType::prepValueFromPost()
	 *
	 * @param mixed   $value
	 *
	 * @return mixed
	 */
	public function prepValueFromPost( $value ) {
		return $value == '' ? 0 : 1;
	}

	/**
	 *
	 *
	 * @inheritDoc IFieldType::prepValue()
	 *
	 * @param mixed   $value
	 *
	 * @return mixed
	 */
	public function prepValue( $value ) {
		// It's stored as '0' in the database, but it's returned as false. Change it back to '0'.
		return $value; //== false ? '0' : 1;
	}

}
