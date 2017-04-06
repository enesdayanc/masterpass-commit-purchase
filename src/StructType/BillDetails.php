<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillDetails StructType
 * @subpackage Structs
 */
class BillDetails extends AbstractStructBase
{
    /**
     * The bill_last_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_last_name;
    /**
     * The bill_first_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_first_name;
    /**
     * The bill_email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_email;
    /**
     * The bill_phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_phone;
    /**
     * The bill_country_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_country_code;
    /**
     * The bill_fax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_fax;
    /**
     * The bill_address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_address;
    /**
     * The bill_address2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_address2;
    /**
     * The bill_zip_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_zip_code;
    /**
     * The bill_city
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_city;
    /**
     * The bill_state
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bill_state;
    /**
     * Constructor method for BillDetails
     * @uses BillDetails::setBill_last_name()
     * @uses BillDetails::setBill_first_name()
     * @uses BillDetails::setBill_email()
     * @uses BillDetails::setBill_phone()
     * @uses BillDetails::setBill_country_code()
     * @uses BillDetails::setBill_fax()
     * @uses BillDetails::setBill_address()
     * @uses BillDetails::setBill_address2()
     * @uses BillDetails::setBill_zip_code()
     * @uses BillDetails::setBill_city()
     * @uses BillDetails::setBill_state()
     * @param string $bill_last_name
     * @param string $bill_first_name
     * @param string $bill_email
     * @param string $bill_phone
     * @param string $bill_country_code
     * @param string $bill_fax
     * @param string $bill_address
     * @param string $bill_address2
     * @param string $bill_zip_code
     * @param string $bill_city
     * @param string $bill_state
     */
    public function __construct($bill_last_name = null, $bill_first_name = null, $bill_email = null, $bill_phone = null, $bill_country_code = null, $bill_fax = null, $bill_address = null, $bill_address2 = null, $bill_zip_code = null, $bill_city = null, $bill_state = null)
    {
        $this
            ->setBill_last_name($bill_last_name)
            ->setBill_first_name($bill_first_name)
            ->setBill_email($bill_email)
            ->setBill_phone($bill_phone)
            ->setBill_country_code($bill_country_code)
            ->setBill_fax($bill_fax)
            ->setBill_address($bill_address)
            ->setBill_address2($bill_address2)
            ->setBill_zip_code($bill_zip_code)
            ->setBill_city($bill_city)
            ->setBill_state($bill_state);
    }
    /**
     * Get bill_last_name value
     * @return string
     */
    public function getBill_last_name()
    {
        return $this->bill_last_name;
    }
    /**
     * Set bill_last_name value
     * @param string $bill_last_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_last_name($bill_last_name = null)
    {
        // validation for constraint: string
        if (!is_null($bill_last_name) && !is_string($bill_last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_last_name)), __LINE__);
        }
        $this->bill_last_name = $bill_last_name;
        return $this;
    }
    /**
     * Get bill_first_name value
     * @return string
     */
    public function getBill_first_name()
    {
        return $this->bill_first_name;
    }
    /**
     * Set bill_first_name value
     * @param string $bill_first_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_first_name($bill_first_name = null)
    {
        // validation for constraint: string
        if (!is_null($bill_first_name) && !is_string($bill_first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_first_name)), __LINE__);
        }
        $this->bill_first_name = $bill_first_name;
        return $this;
    }
    /**
     * Get bill_email value
     * @return string
     */
    public function getBill_email()
    {
        return $this->bill_email;
    }
    /**
     * Set bill_email value
     * @param string $bill_email
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_email($bill_email = null)
    {
        // validation for constraint: string
        if (!is_null($bill_email) && !is_string($bill_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_email)), __LINE__);
        }
        $this->bill_email = $bill_email;
        return $this;
    }
    /**
     * Get bill_phone value
     * @return string
     */
    public function getBill_phone()
    {
        return $this->bill_phone;
    }
    /**
     * Set bill_phone value
     * @param string $bill_phone
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_phone($bill_phone = null)
    {
        // validation for constraint: string
        if (!is_null($bill_phone) && !is_string($bill_phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_phone)), __LINE__);
        }
        $this->bill_phone = $bill_phone;
        return $this;
    }
    /**
     * Get bill_country_code value
     * @return string
     */
    public function getBill_country_code()
    {
        return $this->bill_country_code;
    }
    /**
     * Set bill_country_code value
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCountryCodeType::valueIsValid()
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bill_country_code
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_country_code($bill_country_code = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCountryCodeType::valueIsValid($bill_country_code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bill_country_code, implode(', ', \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCountryCodeType::getValidValues())), __LINE__);
        }
        $this->bill_country_code = $bill_country_code;
        return $this;
    }
    /**
     * Get bill_fax value
     * @return string
     */
    public function getBill_fax()
    {
        return $this->bill_fax;
    }
    /**
     * Set bill_fax value
     * @param string $bill_fax
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_fax($bill_fax = null)
    {
        // validation for constraint: string
        if (!is_null($bill_fax) && !is_string($bill_fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_fax)), __LINE__);
        }
        $this->bill_fax = $bill_fax;
        return $this;
    }
    /**
     * Get bill_address value
     * @return string
     */
    public function getBill_address()
    {
        return $this->bill_address;
    }
    /**
     * Set bill_address value
     * @param string $bill_address
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_address($bill_address = null)
    {
        // validation for constraint: string
        if (!is_null($bill_address) && !is_string($bill_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_address)), __LINE__);
        }
        $this->bill_address = $bill_address;
        return $this;
    }
    /**
     * Get bill_address2 value
     * @return string
     */
    public function getBill_address2()
    {
        return $this->bill_address2;
    }
    /**
     * Set bill_address2 value
     * @param string $bill_address2
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_address2($bill_address2 = null)
    {
        // validation for constraint: string
        if (!is_null($bill_address2) && !is_string($bill_address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_address2)), __LINE__);
        }
        $this->bill_address2 = $bill_address2;
        return $this;
    }
    /**
     * Get bill_zip_code value
     * @return string
     */
    public function getBill_zip_code()
    {
        return $this->bill_zip_code;
    }
    /**
     * Set bill_zip_code value
     * @param string $bill_zip_code
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_zip_code($bill_zip_code = null)
    {
        // validation for constraint: string
        if (!is_null($bill_zip_code) && !is_string($bill_zip_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_zip_code)), __LINE__);
        }
        $this->bill_zip_code = $bill_zip_code;
        return $this;
    }
    /**
     * Get bill_city value
     * @return string
     */
    public function getBill_city()
    {
        return $this->bill_city;
    }
    /**
     * Set bill_city value
     * @param string $bill_city
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_city($bill_city = null)
    {
        // validation for constraint: string
        if (!is_null($bill_city) && !is_string($bill_city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_city)), __LINE__);
        }
        $this->bill_city = $bill_city;
        return $this;
    }
    /**
     * Get bill_state value
     * @return string
     */
    public function getBill_state()
    {
        return $this->bill_state;
    }
    /**
     * Set bill_state value
     * @param string $bill_state
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
     */
    public function setBill_state($bill_state = null)
    {
        // validation for constraint: string
        if (!is_null($bill_state) && !is_string($bill_state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bill_state)), __LINE__);
        }
        $this->bill_state = $bill_state;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BillDetails
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
