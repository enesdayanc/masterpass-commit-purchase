<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerDetails StructType
 * @subpackage Structs
 */
class BuyerDetails extends AbstractStructBase
{
    /**
     * The buyer_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $buyer_id;
    /**
     * The identity_number
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $identity_number;
    /**
     * The last_login_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $last_login_date;
    /**
     * The registration_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $registration_date;
    /**
     * Constructor method for BuyerDetails
     * @uses BuyerDetails::setBuyer_id()
     * @uses BuyerDetails::setIdentity_number()
     * @uses BuyerDetails::setLast_login_date()
     * @uses BuyerDetails::setRegistration_date()
     * @param string $buyer_id
     * @param string $identity_number
     * @param string $last_login_date
     * @param string $registration_date
     */
    public function __construct($buyer_id = null, $identity_number = null, $last_login_date = null, $registration_date = null)
    {
        $this
            ->setBuyer_id($buyer_id)
            ->setIdentity_number($identity_number)
            ->setLast_login_date($last_login_date)
            ->setRegistration_date($registration_date);
    }
    /**
     * Get buyer_id value
     * @return string
     */
    public function getBuyer_id()
    {
        return $this->buyer_id;
    }
    /**
     * Set buyer_id value
     * @param string $buyer_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BuyerDetails
     */
    public function setBuyer_id($buyer_id = null)
    {
        // validation for constraint: string
        if (!is_null($buyer_id) && !is_string($buyer_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyer_id)), __LINE__);
        }
        $this->buyer_id = $buyer_id;
        return $this;
    }
    /**
     * Get identity_number value
     * @return string
     */
    public function getIdentity_number()
    {
        return $this->identity_number;
    }
    /**
     * Set identity_number value
     * @param string $identity_number
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BuyerDetails
     */
    public function setIdentity_number($identity_number = null)
    {
        // validation for constraint: string
        if (!is_null($identity_number) && !is_string($identity_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identity_number)), __LINE__);
        }
        $this->identity_number = $identity_number;
        return $this;
    }
    /**
     * Get last_login_date value
     * @return string
     */
    public function getLast_login_date()
    {
        return $this->last_login_date;
    }
    /**
     * Set last_login_date value
     * @param string $last_login_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BuyerDetails
     */
    public function setLast_login_date($last_login_date = null)
    {
        // validation for constraint: string
        if (!is_null($last_login_date) && !is_string($last_login_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_login_date)), __LINE__);
        }
        $this->last_login_date = $last_login_date;
        return $this;
    }
    /**
     * Get registration_date value
     * @return string
     */
    public function getRegistration_date()
    {
        return $this->registration_date;
    }
    /**
     * Set registration_date value
     * @param string $registration_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BuyerDetails
     */
    public function setRegistration_date($registration_date = null)
    {
        // validation for constraint: string
        if (!is_null($registration_date) && !is_string($registration_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration_date)), __LINE__);
        }
        $this->registration_date = $registration_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BuyerDetails
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
