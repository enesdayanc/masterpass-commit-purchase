<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomCommitPurchaseResponse StructType
 * @subpackage Structs
 */
class CustomCommitPurchaseResponse extends AbstractStructBase
{
    /**
     * The CustomCommitPurchaseResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustomCommitPurchaseResult
     */
    public $CustomCommitPurchaseResult;
    /**
     * Constructor method for CustomCommitPurchaseResponse
     * @uses CustomCommitPurchaseResponse::setCustomCommitPurchaseResult()
     * @param \StructType\CustomCommitPurchaseResult $customCommitPurchaseResult
     */
    public function __construct(\StructType\CustomCommitPurchaseResult $customCommitPurchaseResult = null)
    {
        $this
            ->setCustomCommitPurchaseResult($customCommitPurchaseResult);
    }
    /**
     * Get CustomCommitPurchaseResult value
     * @return \StructType\CustomCommitPurchaseResult|null
     */
    public function getCustomCommitPurchaseResult()
    {
        return $this->CustomCommitPurchaseResult;
    }
    /**
     * Set CustomCommitPurchaseResult value
     * @param \StructType\CustomCommitPurchaseResult $customCommitPurchaseResult
     * @return \StructType\CustomCommitPurchaseResponse
     */
    public function setCustomCommitPurchaseResult(\StructType\CustomCommitPurchaseResult $customCommitPurchaseResult = null)
    {
        $this->CustomCommitPurchaseResult = $customCommitPurchaseResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomCommitPurchaseResponse
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
