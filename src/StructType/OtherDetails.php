<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherDetails StructType
 * @subpackage Structs
 */
class OtherDetails extends AbstractStructBase
{
    /**
     * The client_ip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $client_ip;
    /**
     * The client_time
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $client_time;
    /**
     * Constructor method for OtherDetails
     * @uses OtherDetails::setClient_ip()
     * @uses OtherDetails::setClient_time()
     * @param string $client_ip
     * @param string $client_time
     */
    public function __construct($client_ip = null, $client_time = null)
    {
        $this
            ->setClient_ip($client_ip)
            ->setClient_time($client_time);
    }
    /**
     * Get client_ip value
     * @return string
     */
    public function getClient_ip()
    {
        return $this->client_ip;
    }
    /**
     * Set client_ip value
     * @param string $client_ip
     * @return \StructType\OtherDetails
     */
    public function setClient_ip($client_ip = null)
    {
        // validation for constraint: string
        if (!is_null($client_ip) && !is_string($client_ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_ip)), __LINE__);
        }
        $this->client_ip = $client_ip;
        return $this;
    }
    /**
     * Get client_time value
     * @return string
     */
    public function getClient_time()
    {
        return $this->client_time;
    }
    /**
     * Set client_time value
     * @param string $client_time
     * @return \StructType\OtherDetails
     */
    public function setClient_time($client_time = null)
    {
        // validation for constraint: string
        if (!is_null($client_time) && !is_string($client_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_time)), __LINE__);
        }
        $this->client_time = $client_time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OtherDetails
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
