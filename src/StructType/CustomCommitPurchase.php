<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomCommitPurchase StructType
 * @subpackage Structs
 */
class CustomCommitPurchase extends AbstractStructBase
{
    /**
     * The CustomCommitPurchaseRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:CustomCommitPurchaseRequest
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest
     */
    public $CustomCommitPurchaseRequest;
    /**
     * Constructor method for CustomCommitPurchase
     * @uses CustomCommitPurchase::setCustomCommitPurchaseRequest()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest $customCommitPurchaseRequest
     */
    public function __construct(\Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest $customCommitPurchaseRequest = null)
    {
        $this
            ->setCustomCommitPurchaseRequest($customCommitPurchaseRequest);
    }
    /**
     * Get CustomCommitPurchaseRequest value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest
     */
    public function getCustomCommitPurchaseRequest()
    {
        return $this->CustomCommitPurchaseRequest;
    }
    /**
     * Set CustomCommitPurchaseRequest value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest $customCommitPurchaseRequest
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchase
     */
    public function setCustomCommitPurchaseRequest(\Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseRequest $customCommitPurchaseRequest = null)
    {
        $this->CustomCommitPurchaseRequest = $customCommitPurchaseRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchase
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
