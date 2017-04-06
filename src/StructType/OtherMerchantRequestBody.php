<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherMerchantRequestBody StructType
 * @subpackage Structs
 */
class OtherMerchantRequestBody extends BasePurchaseRequestBody
{
    /**
     * The send_sms_merchant
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $send_sms_merchant;
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $msisdn;
    /**
     * The list_account_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $list_account_name;
    /**
     * Constructor method for OtherMerchantRequestBody
     * @uses OtherMerchantRequestBody::setSend_sms_merchant()
     * @uses OtherMerchantRequestBody::setAdditional_fields()
     * @uses OtherMerchantRequestBody::setMsisdn()
     * @uses OtherMerchantRequestBody::setList_account_name()
     * @param string $send_sms_merchant
     * @param \StructType\AdditionalFields $additional_fields
     * @param string $msisdn
     * @param string $list_account_name
     */
    public function __construct($send_sms_merchant = null, \StructType\AdditionalFields $additional_fields = null, $msisdn = null, $list_account_name = null)
    {
        $this
            ->setSend_sms_merchant($send_sms_merchant)
            ->setAdditional_fields($additional_fields)
            ->setMsisdn($msisdn)
            ->setList_account_name($list_account_name);
    }
    /**
     * Get send_sms_merchant value
     * @return string
     */
    public function getSend_sms_merchant()
    {
        return $this->send_sms_merchant;
    }
    /**
     * Set send_sms_merchant value
     * @uses \EnumType\YesNoFlag::valueIsValid()
     * @uses \EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $send_sms_merchant
     * @return \StructType\OtherMerchantRequestBody
     */
    public function setSend_sms_merchant($send_sms_merchant = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\YesNoFlag::valueIsValid($send_sms_merchant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $send_sms_merchant, implode(', ', \EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        $this->send_sms_merchant = $send_sms_merchant;
        return $this;
    }
    /**
     * Get additional_fields value
     * @return \StructType\AdditionalFields
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \StructType\AdditionalFields $additional_fields
     * @return \StructType\OtherMerchantRequestBody
     */
    public function setAdditional_fields(\StructType\AdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \StructType\OtherMerchantRequestBody
     */
    public function setMsisdn($msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        return $this;
    }
    /**
     * Get list_account_name value
     * @return string|null
     */
    public function getList_account_name()
    {
        return $this->list_account_name;
    }
    /**
     * Set list_account_name value
     * @param string $list_account_name
     * @return \StructType\OtherMerchantRequestBody
     */
    public function setList_account_name($list_account_name = null)
    {
        // validation for constraint: string
        if (!is_null($list_account_name) && !is_string($list_account_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_account_name)), __LINE__);
        }
        $this->list_account_name = $list_account_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OtherMerchantRequestBody
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
