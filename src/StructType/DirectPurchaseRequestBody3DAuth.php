<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectPurchaseRequestBody3DAuth StructType
 * @subpackage Structs
 */
class DirectPurchaseRequestBody3DAuth extends BasePurchaseRequestBody
{
    /**
     * The rta_cvc2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $rta_cvc2;
    /**
     * The card_holder_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $card_holder_name;
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * The rta_pan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $rta_pan;
    /**
     * The expiry_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $expiry_date;
    /**
     * Constructor method for DirectPurchaseRequestBody3DAuth
     * @uses DirectPurchaseRequestBody3DAuth::setRta_cvc2()
     * @uses DirectPurchaseRequestBody3DAuth::setCard_holder_name()
     * @uses DirectPurchaseRequestBody3DAuth::setAdditional_fields()
     * @uses DirectPurchaseRequestBody3DAuth::setRta_pan()
     * @uses DirectPurchaseRequestBody3DAuth::setExpiry_date()
     * @param string $rta_cvc2
     * @param string $card_holder_name
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields
     * @param string $rta_pan
     * @param string $expiry_date
     */
    public function __construct($rta_cvc2 = null, $card_holder_name = null, \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields = null, $rta_pan = null, $expiry_date = null)
    {
        $this
            ->setRta_cvc2($rta_cvc2)
            ->setCard_holder_name($card_holder_name)
            ->setAdditional_fields($additional_fields)
            ->setRta_pan($rta_pan)
            ->setExpiry_date($expiry_date);
    }
    /**
     * Get rta_cvc2 value
     * @return string
     */
    public function getRta_cvc2()
    {
        return $this->rta_cvc2;
    }
    /**
     * Set rta_cvc2 value
     * @param string $rta_cvc2
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
     */
    public function setRta_cvc2($rta_cvc2 = null)
    {
        // validation for constraint: string
        if (!is_null($rta_cvc2) && !is_string($rta_cvc2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rta_cvc2)), __LINE__);
        }
        $this->rta_cvc2 = $rta_cvc2;
        return $this;
    }
    /**
     * Get card_holder_name value
     * @return string
     */
    public function getCard_holder_name()
    {
        return $this->card_holder_name;
    }
    /**
     * Set card_holder_name value
     * @param string $card_holder_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
     */
    public function setCard_holder_name($card_holder_name = null)
    {
        // validation for constraint: string
        if (!is_null($card_holder_name) && !is_string($card_holder_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($card_holder_name)), __LINE__);
        }
        $this->card_holder_name = $card_holder_name;
        return $this;
    }
    /**
     * Get additional_fields value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
     */
    public function setAdditional_fields(\Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Get rta_pan value
     * @return string|null
     */
    public function getRta_pan()
    {
        return $this->rta_pan;
    }
    /**
     * Set rta_pan value
     * @param string $rta_pan
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
     */
    public function setRta_pan($rta_pan = null)
    {
        // validation for constraint: string
        if (!is_null($rta_pan) && !is_string($rta_pan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rta_pan)), __LINE__);
        }
        $this->rta_pan = $rta_pan;
        return $this;
    }
    /**
     * Get expiry_date value
     * @return string|null
     */
    public function getExpiry_date()
    {
        return $this->expiry_date;
    }
    /**
     * Set expiry_date value
     * @param string $expiry_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
     */
    public function setExpiry_date($expiry_date = null)
    {
        // validation for constraint: string
        if (!is_null($expiry_date) && !is_string($expiry_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiry_date)), __LINE__);
        }
        $this->expiry_date = $expiry_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\DirectPurchaseRequestBody3DAuth
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
