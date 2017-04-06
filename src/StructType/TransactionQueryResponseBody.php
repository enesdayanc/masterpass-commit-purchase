<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionQueryResponseBody StructType
 * @subpackage Structs
 */
class TransactionQueryResponseBody extends ResponseBody
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ArrayOfOrderItem
     */
    public $orders;
    /**
     * Constructor method for TransactionQueryResponseBody
     * @uses TransactionQueryResponseBody::setOrders()
     * @param \StructType\ArrayOfOrderItem $orders
     */
    public function __construct(\StructType\ArrayOfOrderItem $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \StructType\ArrayOfOrderItem|null
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \StructType\ArrayOfOrderItem $orders
     * @return \StructType\TransactionQueryResponseBody
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
     * @return \StructType\TransactionQueryResponseBody
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
