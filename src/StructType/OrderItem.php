<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderItem StructType
 * @subpackage Structs
 */
class OrderItem extends AbstractStructBase
{
    /**
     * The order_product_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_product_name;
    /**
     * The order_product_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_product_code;
    /**
     * The order_price
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $order_price;
    /**
     * The order_vat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_vat;
    /**
     * The order_price_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_price_type;
    /**
     * The order_qty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_qty;
    /**
     * The order_product_info
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_product_info;
    /**
     * The order_ver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_ver;
    /**
     * The order_mplace_merchant
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_mplace_merchant;
    /**
     * The charge_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $charge_type;
    /**
     * The preAuth_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $preAuth_amount;
    /**
     * The preAuth_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $preAuth_date;
    /**
     * The auth_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $auth_amount;
    /**
     * The auth_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $auth_date;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The order_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_id;
    /**
     * Constructor method for OrderItem
     * @uses OrderItem::setOrder_product_name()
     * @uses OrderItem::setOrder_product_code()
     * @uses OrderItem::setOrder_price()
     * @uses OrderItem::setOrder_vat()
     * @uses OrderItem::setOrder_price_type()
     * @uses OrderItem::setOrder_qty()
     * @uses OrderItem::setOrder_product_info()
     * @uses OrderItem::setOrder_ver()
     * @uses OrderItem::setOrder_mplace_merchant()
     * @uses OrderItem::setCharge_type()
     * @uses OrderItem::setPreAuth_amount()
     * @uses OrderItem::setPreAuth_date()
     * @uses OrderItem::setAuth_amount()
     * @uses OrderItem::setAuth_date()
     * @uses OrderItem::setStatus()
     * @uses OrderItem::setOrder_id()
     * @param string $order_product_name
     * @param string $order_product_code
     * @param int $order_price
     * @param string $order_vat
     * @param string $order_price_type
     * @param string $order_qty
     * @param string $order_product_info
     * @param string $order_ver
     * @param string $order_mplace_merchant
     * @param string $charge_type
     * @param string $preAuth_amount
     * @param string $preAuth_date
     * @param string $auth_amount
     * @param string $auth_date
     * @param string $status
     * @param string $order_id
     */
    public function __construct($order_product_name = null, $order_product_code = null, $order_price = null, $order_vat = null, $order_price_type = null, $order_qty = null, $order_product_info = null, $order_ver = null, $order_mplace_merchant = null, $charge_type = null, $preAuth_amount = null, $preAuth_date = null, $auth_amount = null, $auth_date = null, $status = null, $order_id = null)
    {
        $this
            ->setOrder_product_name($order_product_name)
            ->setOrder_product_code($order_product_code)
            ->setOrder_price($order_price)
            ->setOrder_vat($order_vat)
            ->setOrder_price_type($order_price_type)
            ->setOrder_qty($order_qty)
            ->setOrder_product_info($order_product_info)
            ->setOrder_ver($order_ver)
            ->setOrder_mplace_merchant($order_mplace_merchant)
            ->setCharge_type($charge_type)
            ->setPreAuth_amount($preAuth_amount)
            ->setPreAuth_date($preAuth_date)
            ->setAuth_amount($auth_amount)
            ->setAuth_date($auth_date)
            ->setStatus($status)
            ->setOrder_id($order_id);
    }
    /**
     * Get order_product_name value
     * @return string
     */
    public function getOrder_product_name()
    {
        return $this->order_product_name;
    }
    /**
     * Set order_product_name value
     * @param string $order_product_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_product_name($order_product_name = null)
    {
        // validation for constraint: string
        if (!is_null($order_product_name) && !is_string($order_product_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_product_name)), __LINE__);
        }
        $this->order_product_name = $order_product_name;
        return $this;
    }
    /**
     * Get order_product_code value
     * @return string
     */
    public function getOrder_product_code()
    {
        return $this->order_product_code;
    }
    /**
     * Set order_product_code value
     * @param string $order_product_code
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_product_code($order_product_code = null)
    {
        // validation for constraint: string
        if (!is_null($order_product_code) && !is_string($order_product_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_product_code)), __LINE__);
        }
        $this->order_product_code = $order_product_code;
        return $this;
    }
    /**
     * Get order_price value
     * @return int
     */
    public function getOrder_price()
    {
        return $this->order_price;
    }
    /**
     * Set order_price value
     * @param int $order_price
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_price($order_price = null)
    {
        // validation for constraint: int
        if (!is_null($order_price) && !is_numeric($order_price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order_price)), __LINE__);
        }
        $this->order_price = $order_price;
        return $this;
    }
    /**
     * Get order_vat value
     * @return string
     */
    public function getOrder_vat()
    {
        return $this->order_vat;
    }
    /**
     * Set order_vat value
     * @param string $order_vat
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_vat($order_vat = null)
    {
        // validation for constraint: string
        if (!is_null($order_vat) && !is_string($order_vat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_vat)), __LINE__);
        }
        $this->order_vat = $order_vat;
        return $this;
    }
    /**
     * Get order_price_type value
     * @return string
     */
    public function getOrder_price_type()
    {
        return $this->order_price_type;
    }
    /**
     * Set order_price_type value
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\OrderPriceType::valueIsValid()
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\OrderPriceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order_price_type
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_price_type($order_price_type = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassCommitPurchase\EnumType\OrderPriceType::valueIsValid($order_price_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order_price_type, implode(', ', \Enesdayanc\MasterpassCommitPurchase\EnumType\OrderPriceType::getValidValues())), __LINE__);
        }
        $this->order_price_type = $order_price_type;
        return $this;
    }
    /**
     * Get order_qty value
     * @return string
     */
    public function getOrder_qty()
    {
        return $this->order_qty;
    }
    /**
     * Set order_qty value
     * @param string $order_qty
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_qty($order_qty = null)
    {
        // validation for constraint: string
        if (!is_null($order_qty) && !is_string($order_qty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_qty)), __LINE__);
        }
        $this->order_qty = $order_qty;
        return $this;
    }
    /**
     * Get order_product_info value
     * @return string
     */
    public function getOrder_product_info()
    {
        return $this->order_product_info;
    }
    /**
     * Set order_product_info value
     * @param string $order_product_info
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_product_info($order_product_info = null)
    {
        // validation for constraint: string
        if (!is_null($order_product_info) && !is_string($order_product_info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_product_info)), __LINE__);
        }
        $this->order_product_info = $order_product_info;
        return $this;
    }
    /**
     * Get order_ver value
     * @return string
     */
    public function getOrder_ver()
    {
        return $this->order_ver;
    }
    /**
     * Set order_ver value
     * @param string $order_ver
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_ver($order_ver = null)
    {
        // validation for constraint: string
        if (!is_null($order_ver) && !is_string($order_ver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_ver)), __LINE__);
        }
        $this->order_ver = $order_ver;
        return $this;
    }
    /**
     * Get order_mplace_merchant value
     * @return string
     */
    public function getOrder_mplace_merchant()
    {
        return $this->order_mplace_merchant;
    }
    /**
     * Set order_mplace_merchant value
     * @param string $order_mplace_merchant
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_mplace_merchant($order_mplace_merchant = null)
    {
        // validation for constraint: string
        if (!is_null($order_mplace_merchant) && !is_string($order_mplace_merchant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_mplace_merchant)), __LINE__);
        }
        $this->order_mplace_merchant = $order_mplace_merchant;
        return $this;
    }
    /**
     * Get charge_type value
     * @return string|null
     */
    public function getCharge_type()
    {
        return $this->charge_type;
    }
    /**
     * Set charge_type value
     * @param string $charge_type
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setCharge_type($charge_type = null)
    {
        // validation for constraint: string
        if (!is_null($charge_type) && !is_string($charge_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charge_type)), __LINE__);
        }
        $this->charge_type = $charge_type;
        return $this;
    }
    /**
     * Get preAuth_amount value
     * @return string|null
     */
    public function getPreAuth_amount()
    {
        return $this->preAuth_amount;
    }
    /**
     * Set preAuth_amount value
     * @param string $preAuth_amount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setPreAuth_amount($preAuth_amount = null)
    {
        // validation for constraint: string
        if (!is_null($preAuth_amount) && !is_string($preAuth_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preAuth_amount)), __LINE__);
        }
        $this->preAuth_amount = $preAuth_amount;
        return $this;
    }
    /**
     * Get preAuth_date value
     * @return string|null
     */
    public function getPreAuth_date()
    {
        return $this->preAuth_date;
    }
    /**
     * Set preAuth_date value
     * @param string $preAuth_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setPreAuth_date($preAuth_date = null)
    {
        // validation for constraint: string
        if (!is_null($preAuth_date) && !is_string($preAuth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preAuth_date)), __LINE__);
        }
        $this->preAuth_date = $preAuth_date;
        return $this;
    }
    /**
     * Get auth_amount value
     * @return string|null
     */
    public function getAuth_amount()
    {
        return $this->auth_amount;
    }
    /**
     * Set auth_amount value
     * @param string $auth_amount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setAuth_amount($auth_amount = null)
    {
        // validation for constraint: string
        if (!is_null($auth_amount) && !is_string($auth_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auth_amount)), __LINE__);
        }
        $this->auth_amount = $auth_amount;
        return $this;
    }
    /**
     * Get auth_date value
     * @return string|null
     */
    public function getAuth_date()
    {
        return $this->auth_date;
    }
    /**
     * Set auth_date value
     * @param string $auth_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setAuth_date($auth_date = null)
    {
        // validation for constraint: string
        if (!is_null($auth_date) && !is_string($auth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auth_date)), __LINE__);
        }
        $this->auth_date = $auth_date;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get order_id value
     * @return string|null
     */
    public function getOrder_id()
    {
        return $this->order_id;
    }
    /**
     * Set order_id value
     * @param string $order_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
     */
    public function setOrder_id($order_id = null)
    {
        // validation for constraint: string
        if (!is_null($order_id) && !is_string($order_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_id)), __LINE__);
        }
        $this->order_id = $order_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem
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
