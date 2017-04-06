<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDetails StructType
 * @subpackage Structs
 */
class DeliveryDetails extends AbstractStructBase
{
    /**
     * The delivery_last_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_last_name;
    /**
     * The delivery_first_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_first_name;
    /**
     * The delivery_email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_email;
    /**
     * The delivery_phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_phone;
    /**
     * The delivery_company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_company;
    /**
     * The delivery_address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_address;
    /**
     * The delivery_address2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_address2;
    /**
     * The delivery_zip_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_zip_code;
    /**
     * The delivery_city
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_city;
    /**
     * The delivery_state
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_state;
    /**
     * The delivery_country_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delivery_country_code;
    /**
     * Constructor method for DeliveryDetails
     * @uses DeliveryDetails::setDelivery_last_name()
     * @uses DeliveryDetails::setDelivery_first_name()
     * @uses DeliveryDetails::setDelivery_email()
     * @uses DeliveryDetails::setDelivery_phone()
     * @uses DeliveryDetails::setDelivery_company()
     * @uses DeliveryDetails::setDelivery_address()
     * @uses DeliveryDetails::setDelivery_address2()
     * @uses DeliveryDetails::setDelivery_zip_code()
     * @uses DeliveryDetails::setDelivery_city()
     * @uses DeliveryDetails::setDelivery_state()
     * @uses DeliveryDetails::setDelivery_country_code()
     * @param string $delivery_last_name
     * @param string $delivery_first_name
     * @param string $delivery_email
     * @param string $delivery_phone
     * @param string $delivery_company
     * @param string $delivery_address
     * @param string $delivery_address2
     * @param string $delivery_zip_code
     * @param string $delivery_city
     * @param string $delivery_state
     * @param string $delivery_country_code
     */
    public function __construct($delivery_last_name = null, $delivery_first_name = null, $delivery_email = null, $delivery_phone = null, $delivery_company = null, $delivery_address = null, $delivery_address2 = null, $delivery_zip_code = null, $delivery_city = null, $delivery_state = null, $delivery_country_code = null)
    {
        $this
            ->setDelivery_last_name($delivery_last_name)
            ->setDelivery_first_name($delivery_first_name)
            ->setDelivery_email($delivery_email)
            ->setDelivery_phone($delivery_phone)
            ->setDelivery_company($delivery_company)
            ->setDelivery_address($delivery_address)
            ->setDelivery_address2($delivery_address2)
            ->setDelivery_zip_code($delivery_zip_code)
            ->setDelivery_city($delivery_city)
            ->setDelivery_state($delivery_state)
            ->setDelivery_country_code($delivery_country_code);
    }
    /**
     * Get delivery_last_name value
     * @return string
     */
    public function getDelivery_last_name()
    {
        return $this->delivery_last_name;
    }
    /**
     * Set delivery_last_name value
     * @param string $delivery_last_name
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_last_name($delivery_last_name = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_last_name) && !is_string($delivery_last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_last_name)), __LINE__);
        }
        $this->delivery_last_name = $delivery_last_name;
        return $this;
    }
    /**
     * Get delivery_first_name value
     * @return string
     */
    public function getDelivery_first_name()
    {
        return $this->delivery_first_name;
    }
    /**
     * Set delivery_first_name value
     * @param string $delivery_first_name
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_first_name($delivery_first_name = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_first_name) && !is_string($delivery_first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_first_name)), __LINE__);
        }
        $this->delivery_first_name = $delivery_first_name;
        return $this;
    }
    /**
     * Get delivery_email value
     * @return string
     */
    public function getDelivery_email()
    {
        return $this->delivery_email;
    }
    /**
     * Set delivery_email value
     * @param string $delivery_email
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_email($delivery_email = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_email) && !is_string($delivery_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_email)), __LINE__);
        }
        $this->delivery_email = $delivery_email;
        return $this;
    }
    /**
     * Get delivery_phone value
     * @return string
     */
    public function getDelivery_phone()
    {
        return $this->delivery_phone;
    }
    /**
     * Set delivery_phone value
     * @param string $delivery_phone
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_phone($delivery_phone = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_phone) && !is_string($delivery_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_phone)), __LINE__);
        }
        $this->delivery_phone = $delivery_phone;
        return $this;
    }
    /**
     * Get delivery_company value
     * @return string
     */
    public function getDelivery_company()
    {
        return $this->delivery_company;
    }
    /**
     * Set delivery_company value
     * @param string $delivery_company
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_company($delivery_company = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_company) && !is_string($delivery_company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_company)), __LINE__);
        }
        $this->delivery_company = $delivery_company;
        return $this;
    }
    /**
     * Get delivery_address value
     * @return string
     */
    public function getDelivery_address()
    {
        return $this->delivery_address;
    }
    /**
     * Set delivery_address value
     * @param string $delivery_address
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_address($delivery_address = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_address) && !is_string($delivery_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_address)), __LINE__);
        }
        $this->delivery_address = $delivery_address;
        return $this;
    }
    /**
     * Get delivery_address2 value
     * @return string
     */
    public function getDelivery_address2()
    {
        return $this->delivery_address2;
    }
    /**
     * Set delivery_address2 value
     * @param string $delivery_address2
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_address2($delivery_address2 = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_address2) && !is_string($delivery_address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_address2)), __LINE__);
        }
        $this->delivery_address2 = $delivery_address2;
        return $this;
    }
    /**
     * Get delivery_zip_code value
     * @return string
     */
    public function getDelivery_zip_code()
    {
        return $this->delivery_zip_code;
    }
    /**
     * Set delivery_zip_code value
     * @param string $delivery_zip_code
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_zip_code($delivery_zip_code = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_zip_code) && !is_string($delivery_zip_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_zip_code)), __LINE__);
        }
        $this->delivery_zip_code = $delivery_zip_code;
        return $this;
    }
    /**
     * Get delivery_city value
     * @return string
     */
    public function getDelivery_city()
    {
        return $this->delivery_city;
    }
    /**
     * Set delivery_city value
     * @param string $delivery_city
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_city($delivery_city = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_city) && !is_string($delivery_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_city)), __LINE__);
        }
        $this->delivery_city = $delivery_city;
        return $this;
    }
    /**
     * Get delivery_state value
     * @return string
     */
    public function getDelivery_state()
    {
        return $this->delivery_state;
    }
    /**
     * Set delivery_state value
     * @param string $delivery_state
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_state($delivery_state = null)
    {
        // validation for constraint: string
        if (!is_null($delivery_state) && !is_string($delivery_state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delivery_state)), __LINE__);
        }
        $this->delivery_state = $delivery_state;
        return $this;
    }
    /**
     * Get delivery_country_code value
     * @return string
     */
    public function getDelivery_country_code()
    {
        return $this->delivery_country_code;
    }
    /**
     * Set delivery_country_code value
     * @uses \EnumType\ISOCountryCodeType::valueIsValid()
     * @uses \EnumType\ISOCountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $delivery_country_code
     * @return \StructType\DeliveryDetails
     */
    public function setDelivery_country_code($delivery_country_code = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ISOCountryCodeType::valueIsValid($delivery_country_code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $delivery_country_code, implode(', ', \EnumType\ISOCountryCodeType::getValidValues())), __LINE__);
        }
        $this->delivery_country_code = $delivery_country_code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeliveryDetails
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
