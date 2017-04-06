<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MPGAccountResponse StructType
 * @subpackage Structs
 */
class MPGAccountResponse extends AbstractStructBase
{
    /**
     * The custom_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\MPGAccountCustomField
     */
    public $custom_fields;
    /**
     * Constructor method for MPGAccountResponse
     * @uses MPGAccountResponse::setCustom_fields()
     * @param \StructType\MPGAccountCustomField $custom_fields
     */
    public function __construct(\StructType\MPGAccountCustomField $custom_fields = null)
    {
        $this
            ->setCustom_fields($custom_fields);
    }
    /**
     * Get custom_fields value
     * @return \StructType\MPGAccountCustomField
     */
    public function getCustom_fields()
    {
        return $this->custom_fields;
    }
    /**
     * Set custom_fields value
     * @param \StructType\MPGAccountCustomField $custom_fields
     * @return \StructType\MPGAccountResponse
     */
    public function setCustom_fields(\StructType\MPGAccountCustomField $custom_fields = null)
    {
        $this->custom_fields = $custom_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MPGAccountResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
