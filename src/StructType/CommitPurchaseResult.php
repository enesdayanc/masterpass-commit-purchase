<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitPurchaseResult StructType
 * @subpackage Structs
 */
class CommitPurchaseResult extends AbstractStructBase
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
     * @var \StructType\CommitPurchaseResponseBody
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
     * Constructor method for CommitPurchaseResult
     * @uses CommitPurchaseResult::setTransaction_header()
     * @uses CommitPurchaseResult::setTransaction_body()
     * @uses CommitPurchaseResult::setAdditional_fields()
     * @param \StructType\ResponseHeader $transaction_header
     * @param \StructType\CommitPurchaseResponseBody $transaction_body
     * @param \StructType\AdditionalFields $additional_fields
     */
    public function __construct(\StructType\ResponseHeader $transaction_header = null, \StructType\CommitPurchaseResponseBody $transaction_body = null, \StructType\AdditionalFields $additional_fields = null)
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
     * @return \StructType\CommitPurchaseResult
     */
    public function setTransaction_header(\StructType\ResponseHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \StructType\CommitPurchaseResponseBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \StructType\CommitPurchaseResponseBody $transaction_body
     * @return \StructType\CommitPurchaseResult
     */
    public function setTransaction_body(\StructType\CommitPurchaseResponseBody $transaction_body = null)
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
     * @return \StructType\CommitPurchaseResult
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
     * @return \StructType\CommitPurchaseResult
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
