<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomCommitPurchaseRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * @subpackage Structs
 */
class CustomCommitPurchaseRequest extends AbstractStructBase
{
    /**
     * The transaction_header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RequestHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustomCommitPurchaseRequestBody
     */
    public $transaction_body;
    /**
     * Constructor method for CustomCommitPurchaseRequest
     * @uses CustomCommitPurchaseRequest::setTransaction_header()
     * @uses CustomCommitPurchaseRequest::setTransaction_body()
     * @param \StructType\RequestHeader $transaction_header
     * @param \StructType\CustomCommitPurchaseRequestBody $transaction_body
     */
    public function __construct(\StructType\RequestHeader $transaction_header = null, \StructType\CustomCommitPurchaseRequestBody $transaction_body = null)
    {
        $this
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body);
    }
    /**
     * Get transaction_header value
     * @return \StructType\RequestHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \StructType\RequestHeader $transaction_header
     * @return \StructType\CustomCommitPurchaseRequest
     */
    public function setTransaction_header(\StructType\RequestHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \StructType\CustomCommitPurchaseRequestBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \StructType\CustomCommitPurchaseRequestBody $transaction_body
     * @return \StructType\CustomCommitPurchaseRequest
     */
    public function setTransaction_body(\StructType\CustomCommitPurchaseRequestBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomCommitPurchaseRequest
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
