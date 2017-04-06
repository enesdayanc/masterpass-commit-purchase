<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

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
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody
     */
    public $transaction_body;
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * Constructor method for CommitPurchaseResult
     * @uses CommitPurchaseResult::setTransaction_header()
     * @uses CommitPurchaseResult::setTransaction_body()
     * @uses CommitPurchaseResult::setAdditional_fields()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader $transaction_header
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody $transaction_body
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields
     */
    public function __construct(\Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader $transaction_header = null, \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody $transaction_body = null, \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields = null)
    {
        $this
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body)
            ->setAdditional_fields($additional_fields);
    }
    /**
     * Get transaction_header value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader $transaction_header
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult
     */
    public function setTransaction_header(\Enesdayanc\MasterpassCommitPurchase\StructType\ResponseHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody $transaction_body
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult
     */
    public function setTransaction_body(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponseBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Get additional_fields value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields|null
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult
     */
    public function setAdditional_fields(\Enesdayanc\MasterpassCommitPurchase\StructType\AdditionalFields $additional_fields = null)
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResult
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
