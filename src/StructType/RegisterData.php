<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegisterData StructType
 * @subpackage Structs
 */
class RegisterData extends AbstractStructBase
{
    /**
     * The action_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $action_type;
    /**
     * The account_number
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $account_number;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $first_name;
    /**
     * The middle_initial
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $middle_initial;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $last_name;
    /**
     * The account_alias_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $account_alias_name;
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
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $msisdn;
    /**
     * Constructor method for RegisterData
     * @uses RegisterData::setAction_type()
     * @uses RegisterData::setAccount_number()
     * @uses RegisterData::setFirst_name()
     * @uses RegisterData::setMiddle_initial()
     * @uses RegisterData::setLast_name()
     * @uses RegisterData::setAccount_alias_name()
     * @uses RegisterData::setCard_holder_name()
     * @uses RegisterData::setMsisdn()
     * @param string $action_type
     * @param string $account_number
     * @param string $first_name
     * @param string $middle_initial
     * @param string $last_name
     * @param string $account_alias_name
     * @param string $card_holder_name
     * @param string $msisdn
     */
    public function __construct($action_type = null, $account_number = null, $first_name = null, $middle_initial = null, $last_name = null, $account_alias_name = null, $card_holder_name = null, $msisdn = null)
    {
        $this
            ->setAction_type($action_type)
            ->setAccount_number($account_number)
            ->setFirst_name($first_name)
            ->setMiddle_initial($middle_initial)
            ->setLast_name($last_name)
            ->setAccount_alias_name($account_alias_name)
            ->setCard_holder_name($card_holder_name)
            ->setMsisdn($msisdn);
    }
    /**
     * Get action_type value
     * @return string
     */
    public function getAction_type()
    {
        return $this->action_type;
    }
    /**
     * Set action_type value
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ActionType::valueIsValid()
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action_type
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setAction_type($action_type = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassCommitPurchase\EnumType\ActionType::valueIsValid($action_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action_type, implode(', ', \Enesdayanc\MasterpassCommitPurchase\EnumType\ActionType::getValidValues())), __LINE__);
        }
        $this->action_type = $action_type;
        return $this;
    }
    /**
     * Get account_number value
     * @return string
     */
    public function getAccount_number()
    {
        return $this->account_number;
    }
    /**
     * Set account_number value
     * @param string $account_number
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setAccount_number($account_number = null)
    {
        // validation for constraint: string
        if (!is_null($account_number) && !is_string($account_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_number)), __LINE__);
        }
        $this->account_number = $account_number;
        return $this;
    }
    /**
     * Get first_name value
     * @return string
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get middle_initial value
     * @return string
     */
    public function getMiddle_initial()
    {
        return $this->middle_initial;
    }
    /**
     * Set middle_initial value
     * @param string $middle_initial
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setMiddle_initial($middle_initial = null)
    {
        // validation for constraint: string
        if (!is_null($middle_initial) && !is_string($middle_initial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middle_initial)), __LINE__);
        }
        $this->middle_initial = $middle_initial;
        return $this;
    }
    /**
     * Get last_name value
     * @return string
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get account_alias_name value
     * @return string
     */
    public function getAccount_alias_name()
    {
        return $this->account_alias_name;
    }
    /**
     * Set account_alias_name value
     * @param string $account_alias_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
     */
    public function setAccount_alias_name($account_alias_name = null)
    {
        // validation for constraint: string
        if (!is_null($account_alias_name) && !is_string($account_alias_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_alias_name)), __LINE__);
        }
        $this->account_alias_name = $account_alias_name;
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\RegisterData
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
