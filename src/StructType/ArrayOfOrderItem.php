<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfOrderItem StructType
 * @subpackage Structs
 */
class ArrayOfOrderItem extends AbstractStructBase
{
    /**
     * The list_item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[]
     */
    public $list_item;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[]
     */
    public $order;
    /**
     * Constructor method for ArrayOfOrderItem
     * @uses ArrayOfOrderItem::setList_item()
     * @uses ArrayOfOrderItem::setOrder()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[] $list_item
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[] $order
     */
    public function __construct(array $list_item = array(), array $order = array())
    {
        $this
            ->setList_item($list_item)
            ->setOrder($order);
    }
    /**
     * Get list_item value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[]|null
     */
    public function getList_item()
    {
        return isset($this->list_item) ? $this->list_item : null;
    }
    /**
     * Set list_item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[] $list_item
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ArrayOfOrderItem
     */
    public function setList_item(array $list_item = array())
    {
        foreach ($list_item as $arrayOfOrderItemList_itemItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderItemList_itemItem instanceof \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem) {
                throw new \InvalidArgumentException(sprintf('The list_item property can only contain items of \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem, "%s" given', is_object($arrayOfOrderItemList_itemItem) ? get_class($arrayOfOrderItemList_itemItem) : gettype($arrayOfOrderItemList_itemItem)), __LINE__);
            }
        }
        if (is_null($list_item) || (is_array($list_item) && empty($list_item))) {
            unset($this->list_item);
        } else {
            $this->list_item = $list_item;
        }
        return $this;
    }
    /**
     * Add item to list_item value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem $item
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ArrayOfOrderItem
     */
    public function addToList_item(\Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem) {
            throw new \InvalidArgumentException(sprintf('The list_item property can only contain items of \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->list_item[] = $item;
        return $this;
    }
    /**
     * Get order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[]|null
     */
    public function getOrder()
    {
        return isset($this->order) ? $this->order : null;
    }
    /**
     * Set order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem[] $order
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ArrayOfOrderItem
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $arrayOfOrderItemOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderItemOrderItem instanceof \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem, "%s" given', is_object($arrayOfOrderItemOrderItem) ? get_class($arrayOfOrderItemOrderItem) : gettype($arrayOfOrderItemOrderItem)), __LINE__);
            }
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->order);
        } else {
            $this->order = $order;
        }
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem $item
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ArrayOfOrderItem
     */
    public function addToOrder(\Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Enesdayanc\MasterpassCommitPurchase\StructType\OrderItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ArrayOfOrderItem
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
