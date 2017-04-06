<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDetails StructType
 * @subpackage Structs
 */
class OrderDetails extends AbstractStructBase
{
    /**
     * The order_timeout
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_timeout;
    /**
     * The card_program_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $card_program_name;
    /**
     * The campaign_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $campaign_type;
    /**
     * The order_shipping
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_shipping;
    /**
     * The order_discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_discount;
    /**
     * The basket_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $basket_id;
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\ArrayOfOrderItem
     */
    public $orders;
    /**
     * Constructor method for OrderDetails
     * @uses OrderDetails::setOrder_timeout()
     * @uses OrderDetails::setCard_program_name()
     * @uses OrderDetails::setCampaign_type()
     * @uses OrderDetails::setOrder_shipping()
     * @uses OrderDetails::setOrder_discount()
     * @uses OrderDetails::setBasket_id()
     * @uses OrderDetails::setOrders()
     * @param string $order_timeout
     * @param string $card_program_name
     * @param string $campaign_type
     * @param string $order_shipping
     * @param string $order_discount
     * @param string $basket_id
     * @param \StructType\ArrayOfOrderItem $orders
     */
    public function __construct($order_timeout = null, $card_program_name = null, $campaign_type = null, $order_shipping = null, $order_discount = null, $basket_id = null, \StructType\ArrayOfOrderItem $orders = null)
    {
        $this
            ->setOrder_timeout($order_timeout)
            ->setCard_program_name($card_program_name)
            ->setCampaign_type($campaign_type)
            ->setOrder_shipping($order_shipping)
            ->setOrder_discount($order_discount)
            ->setBasket_id($basket_id)
            ->setOrders($orders);
    }
    /**
     * Get order_timeout value
     * @return string
     */
    public function getOrder_timeout()
    {
        return $this->order_timeout;
    }
    /**
     * Set order_timeout value
     * @param string $order_timeout
     * @return \StructType\OrderDetails
     */
    public function setOrder_timeout($order_timeout = null)
    {
        // validation for constraint: string
        if (!is_null($order_timeout) && !is_string($order_timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_timeout)), __LINE__);
        }
        $this->order_timeout = $order_timeout;
        return $this;
    }
    /**
     * Get card_program_name value
     * @return string
     */
    public function getCard_program_name()
    {
        return $this->card_program_name;
    }
    /**
     * Set card_program_name value
     * @param string $card_program_name
     * @return \StructType\OrderDetails
     */
    public function setCard_program_name($card_program_name = null)
    {
        // validation for constraint: string
        if (!is_null($card_program_name) && !is_string($card_program_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($card_program_name)), __LINE__);
        }
        $this->card_program_name = $card_program_name;
        return $this;
    }
    /**
     * Get campaign_type value
     * @return string
     */
    public function getCampaign_type()
    {
        return $this->campaign_type;
    }
    /**
     * Set campaign_type value
     * @uses \EnumType\CampaignType::valueIsValid()
     * @uses \EnumType\CampaignType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $campaign_type
     * @return \StructType\OrderDetails
     */
    public function setCampaign_type($campaign_type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CampaignType::valueIsValid($campaign_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $campaign_type, implode(', ', \EnumType\CampaignType::getValidValues())), __LINE__);
        }
        $this->campaign_type = $campaign_type;
        return $this;
    }
    /**
     * Get order_shipping value
     * @return string
     */
    public function getOrder_shipping()
    {
        return $this->order_shipping;
    }
    /**
     * Set order_shipping value
     * @param string $order_shipping
     * @return \StructType\OrderDetails
     */
    public function setOrder_shipping($order_shipping = null)
    {
        // validation for constraint: string
        if (!is_null($order_shipping) && !is_string($order_shipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_shipping)), __LINE__);
        }
        $this->order_shipping = $order_shipping;
        return $this;
    }
    /**
     * Get order_discount value
     * @return string
     */
    public function getOrder_discount()
    {
        return $this->order_discount;
    }
    /**
     * Set order_discount value
     * @param string $order_discount
     * @return \StructType\OrderDetails
     */
    public function setOrder_discount($order_discount = null)
    {
        // validation for constraint: string
        if (!is_null($order_discount) && !is_string($order_discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_discount)), __LINE__);
        }
        $this->order_discount = $order_discount;
        return $this;
    }
    /**
     * Get basket_id value
     * @return string
     */
    public function getBasket_id()
    {
        return $this->basket_id;
    }
    /**
     * Set basket_id value
     * @param string $basket_id
     * @return \StructType\OrderDetails
     */
    public function setBasket_id($basket_id = null)
    {
        // validation for constraint: string
        if (!is_null($basket_id) && !is_string($basket_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basket_id)), __LINE__);
        }
        $this->basket_id = $basket_id;
        return $this;
    }
    /**
     * Get orders value
     * @return \StructType\ArrayOfOrderItem
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \StructType\ArrayOfOrderItem $orders
     * @return \StructType\OrderDetails
     */
    public function setOrders(\StructType\ArrayOfOrderItem $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\OrderDetails
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
