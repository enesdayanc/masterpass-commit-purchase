<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AntiFraudDetails StructType
 * @subpackage Structs
 */
class AntiFraudDetails extends AbstractStructBase
{
    /**
     * The number_time
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $number_time;
    /**
     * The owner_time
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $owner_time;
    /**
     * Constructor method for AntiFraudDetails
     * @uses AntiFraudDetails::setNumber_time()
     * @uses AntiFraudDetails::setOwner_time()
     * @param string $number_time
     * @param string $owner_time
     */
    public function __construct($number_time = null, $owner_time = null)
    {
        $this
            ->setNumber_time($number_time)
            ->setOwner_time($owner_time);
    }
    /**
     * Get number_time value
     * @return string
     */
    public function getNumber_time()
    {
        return $this->number_time;
    }
    /**
     * Set number_time value
     * @param string $number_time
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\AntiFraudDetails
     */
    public function setNumber_time($number_time = null)
    {
        // validation for constraint: string
        if (!is_null($number_time) && !is_string($number_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number_time)), __LINE__);
        }
        $this->number_time = $number_time;
        return $this;
    }
    /**
     * Get owner_time value
     * @return string
     */
    public function getOwner_time()
    {
        return $this->owner_time;
    }
    /**
     * Set owner_time value
     * @param string $owner_time
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\AntiFraudDetails
     */
    public function setOwner_time($owner_time = null)
    {
        // validation for constraint: string
        if (!is_null($owner_time) && !is_string($owner_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owner_time)), __LINE__);
        }
        $this->owner_time = $owner_time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\AntiFraudDetails
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
