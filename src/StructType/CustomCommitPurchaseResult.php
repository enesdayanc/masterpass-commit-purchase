<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomCommitPurchaseResult StructType
 * @subpackage Structs
 */
class CustomCommitPurchaseResult extends AbstractStructBase
{
    /**
     * The transaction_header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ResponseHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CustomCommitPurchaseResponseBody
     */
    public $transaction_body;
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * Constructor method for CustomCommitPurchaseResult
     * @uses CustomCommitPurchaseResult::setTransaction_header()
     * @uses CustomCommitPurchaseResult::setTransaction_body()
     * @uses CustomCommitPurchaseResult::setAdditional_fields()
     * @param \StructType\ResponseHeader $transaction_header
     * @param \StructType\CustomCommitPurchaseResponseBody $transaction_body
     * @param \StructType\AdditionalFields $additional_fields
     */
    public function __construct(\StructType\ResponseHeader $transaction_header = null, \StructType\CustomCommitPurchaseResponseBody $transaction_body = null, \StructType\AdditionalFields $additional_fields = null)
    {
        $this
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body)
            ->setAdditional_fields($additional_fields);
    }
    /**
     * Get transaction_header value
     * @return \StructType\ResponseHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \StructType\ResponseHeader $transaction_header
     * @return \StructType\CustomCommitPurchaseResult
     */
    public function setTransaction_header(\StructType\ResponseHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \StructType\CustomCommitPurchaseResponseBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \StructType\CustomCommitPurchaseResponseBody $transaction_body
     * @return \StructType\CustomCommitPurchaseResult
     */
    public function setTransaction_body(\StructType\CustomCommitPurchaseResponseBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Get additional_fields value
     * @return \StructType\AdditionalFields|null
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \StructType\AdditionalFields $additional_fields
     * @return \StructType\CustomCommitPurchaseResult
     */
    public function setAdditional_fields(\StructType\AdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomCommitPurchaseResult
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
