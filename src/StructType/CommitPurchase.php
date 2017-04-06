<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitPurchase StructType
 * @subpackage Structs
 */
class CommitPurchase extends AbstractStructBase
{
    /**
     * The CommitPurchaseRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:CommitPurchaseRequest
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest
     */
    public $CommitPurchaseRequest;
    /**
     * Constructor method for CommitPurchase
     * @uses CommitPurchase::setCommitPurchaseRequest()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest $commitPurchaseRequest
     */
    public function __construct(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest $commitPurchaseRequest = null)
    {
        $this
            ->setCommitPurchaseRequest($commitPurchaseRequest);
    }
    /**
     * Get CommitPurchaseRequest value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest
     */
    public function getCommitPurchaseRequest()
    {
        return $this->CommitPurchaseRequest;
    }
    /**
     * Set CommitPurchaseRequest value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest $commitPurchaseRequest
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchase
     */
    public function setCommitPurchaseRequest(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseRequest $commitPurchaseRequest = null)
    {
        $this->CommitPurchaseRequest = $commitPurchaseRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchase
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
