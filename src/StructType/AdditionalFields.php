<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalFields StructType
 * @subpackage Structs
 */
class AdditionalFields extends AbstractStructBase
{
    /**
     * The custom_field_01
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_01;
    /**
     * The custom_field_02
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_02;
    /**
     * The custom_field_03
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_03;
    /**
     * The custom_field_04
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_04;
    /**
     * The custom_field_05
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_05;
    /**
     * The custom_field_06
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_06;
    /**
     * The custom_field_07
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_07;
    /**
     * The custom_field_08
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_08;
    /**
     * The custom_field_09
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_09;
    /**
     * The custom_field_10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_10;
    /**
     * The custom_field_11
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_11;
    /**
     * The custom_field_12
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_12;
    /**
     * The custom_field_13
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_13;
    /**
     * The custom_field_14
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_14;
    /**
     * The custom_field_15
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\CustomField
     */
    public $custom_field_15;
    /**
     * The transaction_fee_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $transaction_fee_1;
    /**
     * The transaction_fee_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $transaction_fee_2;
    /**
     * The transaction_fee_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $transaction_fee_3;
    /**
     * Constructor method for AdditionalFields
     * @uses AdditionalFields::setCustom_field_01()
     * @uses AdditionalFields::setCustom_field_02()
     * @uses AdditionalFields::setCustom_field_03()
     * @uses AdditionalFields::setCustom_field_04()
     * @uses AdditionalFields::setCustom_field_05()
     * @uses AdditionalFields::setCustom_field_06()
     * @uses AdditionalFields::setCustom_field_07()
     * @uses AdditionalFields::setCustom_field_08()
     * @uses AdditionalFields::setCustom_field_09()
     * @uses AdditionalFields::setCustom_field_10()
     * @uses AdditionalFields::setCustom_field_11()
     * @uses AdditionalFields::setCustom_field_12()
     * @uses AdditionalFields::setCustom_field_13()
     * @uses AdditionalFields::setCustom_field_14()
     * @uses AdditionalFields::setCustom_field_15()
     * @uses AdditionalFields::setTransaction_fee_1()
     * @uses AdditionalFields::setTransaction_fee_2()
     * @uses AdditionalFields::setTransaction_fee_3()
     * @param \StructType\CustomField $custom_field_01
     * @param \StructType\CustomField $custom_field_02
     * @param \StructType\CustomField $custom_field_03
     * @param \StructType\CustomField $custom_field_04
     * @param \StructType\CustomField $custom_field_05
     * @param \StructType\CustomField $custom_field_06
     * @param \StructType\CustomField $custom_field_07
     * @param \StructType\CustomField $custom_field_08
     * @param \StructType\CustomField $custom_field_09
     * @param \StructType\CustomField $custom_field_10
     * @param \StructType\CustomField $custom_field_11
     * @param \StructType\CustomField $custom_field_12
     * @param \StructType\CustomField $custom_field_13
     * @param \StructType\CustomField $custom_field_14
     * @param \StructType\CustomField $custom_field_15
     * @param float $transaction_fee_1
     * @param float $transaction_fee_2
     * @param float $transaction_fee_3
     */
    public function __construct(\StructType\CustomField $custom_field_01 = null, \StructType\CustomField $custom_field_02 = null, \StructType\CustomField $custom_field_03 = null, \StructType\CustomField $custom_field_04 = null, \StructType\CustomField $custom_field_05 = null, \StructType\CustomField $custom_field_06 = null, \StructType\CustomField $custom_field_07 = null, \StructType\CustomField $custom_field_08 = null, \StructType\CustomField $custom_field_09 = null, \StructType\CustomField $custom_field_10 = null, \StructType\CustomField $custom_field_11 = null, \StructType\CustomField $custom_field_12 = null, \StructType\CustomField $custom_field_13 = null, \StructType\CustomField $custom_field_14 = null, \StructType\CustomField $custom_field_15 = null, $transaction_fee_1 = null, $transaction_fee_2 = null, $transaction_fee_3 = null)
    {
        $this
            ->setCustom_field_01($custom_field_01)
            ->setCustom_field_02($custom_field_02)
            ->setCustom_field_03($custom_field_03)
            ->setCustom_field_04($custom_field_04)
            ->setCustom_field_05($custom_field_05)
            ->setCustom_field_06($custom_field_06)
            ->setCustom_field_07($custom_field_07)
            ->setCustom_field_08($custom_field_08)
            ->setCustom_field_09($custom_field_09)
            ->setCustom_field_10($custom_field_10)
            ->setCustom_field_11($custom_field_11)
            ->setCustom_field_12($custom_field_12)
            ->setCustom_field_13($custom_field_13)
            ->setCustom_field_14($custom_field_14)
            ->setCustom_field_15($custom_field_15)
            ->setTransaction_fee_1($transaction_fee_1)
            ->setTransaction_fee_2($transaction_fee_2)
            ->setTransaction_fee_3($transaction_fee_3);
    }
    /**
     * Get custom_field_01 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_01()
    {
        return $this->custom_field_01;
    }
    /**
     * Set custom_field_01 value
     * @param \StructType\CustomField $custom_field_01
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_01(\StructType\CustomField $custom_field_01 = null)
    {
        $this->custom_field_01 = $custom_field_01;
        return $this;
    }
    /**
     * Get custom_field_02 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_02()
    {
        return $this->custom_field_02;
    }
    /**
     * Set custom_field_02 value
     * @param \StructType\CustomField $custom_field_02
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_02(\StructType\CustomField $custom_field_02 = null)
    {
        $this->custom_field_02 = $custom_field_02;
        return $this;
    }
    /**
     * Get custom_field_03 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_03()
    {
        return $this->custom_field_03;
    }
    /**
     * Set custom_field_03 value
     * @param \StructType\CustomField $custom_field_03
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_03(\StructType\CustomField $custom_field_03 = null)
    {
        $this->custom_field_03 = $custom_field_03;
        return $this;
    }
    /**
     * Get custom_field_04 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_04()
    {
        return $this->custom_field_04;
    }
    /**
     * Set custom_field_04 value
     * @param \StructType\CustomField $custom_field_04
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_04(\StructType\CustomField $custom_field_04 = null)
    {
        $this->custom_field_04 = $custom_field_04;
        return $this;
    }
    /**
     * Get custom_field_05 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_05()
    {
        return $this->custom_field_05;
    }
    /**
     * Set custom_field_05 value
     * @param \StructType\CustomField $custom_field_05
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_05(\StructType\CustomField $custom_field_05 = null)
    {
        $this->custom_field_05 = $custom_field_05;
        return $this;
    }
    /**
     * Get custom_field_06 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_06()
    {
        return $this->custom_field_06;
    }
    /**
     * Set custom_field_06 value
     * @param \StructType\CustomField $custom_field_06
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_06(\StructType\CustomField $custom_field_06 = null)
    {
        $this->custom_field_06 = $custom_field_06;
        return $this;
    }
    /**
     * Get custom_field_07 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_07()
    {
        return $this->custom_field_07;
    }
    /**
     * Set custom_field_07 value
     * @param \StructType\CustomField $custom_field_07
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_07(\StructType\CustomField $custom_field_07 = null)
    {
        $this->custom_field_07 = $custom_field_07;
        return $this;
    }
    /**
     * Get custom_field_08 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_08()
    {
        return $this->custom_field_08;
    }
    /**
     * Set custom_field_08 value
     * @param \StructType\CustomField $custom_field_08
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_08(\StructType\CustomField $custom_field_08 = null)
    {
        $this->custom_field_08 = $custom_field_08;
        return $this;
    }
    /**
     * Get custom_field_09 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_09()
    {
        return $this->custom_field_09;
    }
    /**
     * Set custom_field_09 value
     * @param \StructType\CustomField $custom_field_09
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_09(\StructType\CustomField $custom_field_09 = null)
    {
        $this->custom_field_09 = $custom_field_09;
        return $this;
    }
    /**
     * Get custom_field_10 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_10()
    {
        return $this->custom_field_10;
    }
    /**
     * Set custom_field_10 value
     * @param \StructType\CustomField $custom_field_10
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_10(\StructType\CustomField $custom_field_10 = null)
    {
        $this->custom_field_10 = $custom_field_10;
        return $this;
    }
    /**
     * Get custom_field_11 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_11()
    {
        return $this->custom_field_11;
    }
    /**
     * Set custom_field_11 value
     * @param \StructType\CustomField $custom_field_11
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_11(\StructType\CustomField $custom_field_11 = null)
    {
        $this->custom_field_11 = $custom_field_11;
        return $this;
    }
    /**
     * Get custom_field_12 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_12()
    {
        return $this->custom_field_12;
    }
    /**
     * Set custom_field_12 value
     * @param \StructType\CustomField $custom_field_12
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_12(\StructType\CustomField $custom_field_12 = null)
    {
        $this->custom_field_12 = $custom_field_12;
        return $this;
    }
    /**
     * Get custom_field_13 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_13()
    {
        return $this->custom_field_13;
    }
    /**
     * Set custom_field_13 value
     * @param \StructType\CustomField $custom_field_13
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_13(\StructType\CustomField $custom_field_13 = null)
    {
        $this->custom_field_13 = $custom_field_13;
        return $this;
    }
    /**
     * Get custom_field_14 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_14()
    {
        return $this->custom_field_14;
    }
    /**
     * Set custom_field_14 value
     * @param \StructType\CustomField $custom_field_14
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_14(\StructType\CustomField $custom_field_14 = null)
    {
        $this->custom_field_14 = $custom_field_14;
        return $this;
    }
    /**
     * Get custom_field_15 value
     * @return \StructType\CustomField
     */
    public function getCustom_field_15()
    {
        return $this->custom_field_15;
    }
    /**
     * Set custom_field_15 value
     * @param \StructType\CustomField $custom_field_15
     * @return \StructType\AdditionalFields
     */
    public function setCustom_field_15(\StructType\CustomField $custom_field_15 = null)
    {
        $this->custom_field_15 = $custom_field_15;
        return $this;
    }
    /**
     * Get transaction_fee_1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTransaction_fee_1()
    {
        return isset($this->transaction_fee_1) ? $this->transaction_fee_1 : null;
    }
    /**
     * Set transaction_fee_1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $transaction_fee_1
     * @return \StructType\AdditionalFields
     */
    public function setTransaction_fee_1($transaction_fee_1 = null)
    {
        if (is_null($transaction_fee_1) || (is_array($transaction_fee_1) && empty($transaction_fee_1))) {
            unset($this->transaction_fee_1);
        } else {
            $this->transaction_fee_1 = $transaction_fee_1;
        }
        return $this;
    }
    /**
     * Get transaction_fee_2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTransaction_fee_2()
    {
        return isset($this->transaction_fee_2) ? $this->transaction_fee_2 : null;
    }
    /**
     * Set transaction_fee_2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $transaction_fee_2
     * @return \StructType\AdditionalFields
     */
    public function setTransaction_fee_2($transaction_fee_2 = null)
    {
        if (is_null($transaction_fee_2) || (is_array($transaction_fee_2) && empty($transaction_fee_2))) {
            unset($this->transaction_fee_2);
        } else {
            $this->transaction_fee_2 = $transaction_fee_2;
        }
        return $this;
    }
    /**
     * Get transaction_fee_3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getTransaction_fee_3()
    {
        return isset($this->transaction_fee_3) ? $this->transaction_fee_3 : null;
    }
    /**
     * Set transaction_fee_3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $transaction_fee_3
     * @return \StructType\AdditionalFields
     */
    public function setTransaction_fee_3($transaction_fee_3 = null)
    {
        if (is_null($transaction_fee_3) || (is_array($transaction_fee_3) && empty($transaction_fee_3))) {
            unset($this->transaction_fee_3);
        } else {
            $this->transaction_fee_3 = $transaction_fee_3;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalFields
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
