<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitPurchaseRequestBody StructType
 * @subpackage Structs
 */
class CommitPurchaseRequestBody extends BasePurchaseRequestBody
{
    /**
     * The custom_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \StructType\MasterPassRequestCustomField
     */
    public $custom_fields;
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $msisdn;
    /**
     * The order_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OrderDetails
     */
    public $order_details;
    /**
     * The bill_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BillDetails
     */
    public $bill_details;
    /**
     * The delivery_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DeliveryDetails
     */
    public $delivery_details;
    /**
     * The buyer_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\BuyerDetails
     */
    public $buyer_details;
    /**
     * The anti_fraud_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AntiFraudDetails
     */
    public $anti_fraud_details;
    /**
     * The other_details
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OtherDetails
     */
    public $other_details;
    /**
     * Constructor method for CommitPurchaseRequestBody
     * @uses CommitPurchaseRequestBody::setCustom_fields()
     * @uses CommitPurchaseRequestBody::setToken()
     * @uses CommitPurchaseRequestBody::setMsisdn()
     * @uses CommitPurchaseRequestBody::setOrder_details()
     * @uses CommitPurchaseRequestBody::setBill_details()
     * @uses CommitPurchaseRequestBody::setDelivery_details()
     * @uses CommitPurchaseRequestBody::setBuyer_details()
     * @uses CommitPurchaseRequestBody::setAnti_fraud_details()
     * @uses CommitPurchaseRequestBody::setOther_details()
     * @param \StructType\MasterPassRequestCustomField $custom_fields
     * @param string $token
     * @param string $msisdn
     * @param \StructType\OrderDetails $order_details
     * @param \StructType\BillDetails $bill_details
     * @param \StructType\DeliveryDetails $delivery_details
     * @param \StructType\BuyerDetails $buyer_details
     * @param \StructType\AntiFraudDetails $anti_fraud_details
     * @param \StructType\OtherDetails $other_details
     */
    public function __construct(\StructType\MasterPassRequestCustomField $custom_fields = null, $token = null, $msisdn = null, \StructType\OrderDetails $order_details = null, \StructType\BillDetails $bill_details = null, \StructType\DeliveryDetails $delivery_details = null, \StructType\BuyerDetails $buyer_details = null, \StructType\AntiFraudDetails $anti_fraud_details = null, \StructType\OtherDetails $other_details = null)
    {
        $this
            ->setCustom_fields($custom_fields)
            ->setToken($token)
            ->setMsisdn($msisdn)
            ->setOrder_details($order_details)
            ->setBill_details($bill_details)
            ->setDelivery_details($delivery_details)
            ->setBuyer_details($buyer_details)
            ->setAnti_fraud_details($anti_fraud_details)
            ->setOther_details($other_details);
    }
    /**
     * Get custom_fields value
     * @return \StructType\MasterPassRequestCustomField
     */
    public function getCustom_fields()
    {
        return $this->custom_fields;
    }
    /**
     * Set custom_fields value
     * @param \StructType\MasterPassRequestCustomField $custom_fields
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setCustom_fields(\StructType\MasterPassRequestCustomField $custom_fields = null)
    {
        $this->custom_fields = $custom_fields;
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setMsisdn($msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        return $this;
    }
    /**
     * Get order_details value
     * @return \StructType\OrderDetails|null
     */
    public function getOrder_details()
    {
        return $this->order_details;
    }
    /**
     * Set order_details value
     * @param \StructType\OrderDetails $order_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setOrder_details(\StructType\OrderDetails $order_details = null)
    {
        $this->order_details = $order_details;
        return $this;
    }
    /**
     * Get bill_details value
     * @return \StructType\BillDetails|null
     */
    public function getBill_details()
    {
        return $this->bill_details;
    }
    /**
     * Set bill_details value
     * @param \StructType\BillDetails $bill_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setBill_details(\StructType\BillDetails $bill_details = null)
    {
        $this->bill_details = $bill_details;
        return $this;
    }
    /**
     * Get delivery_details value
     * @return \StructType\DeliveryDetails|null
     */
    public function getDelivery_details()
    {
        return $this->delivery_details;
    }
    /**
     * Set delivery_details value
     * @param \StructType\DeliveryDetails $delivery_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setDelivery_details(\StructType\DeliveryDetails $delivery_details = null)
    {
        $this->delivery_details = $delivery_details;
        return $this;
    }
    /**
     * Get buyer_details value
     * @return \StructType\BuyerDetails|null
     */
    public function getBuyer_details()
    {
        return $this->buyer_details;
    }
    /**
     * Set buyer_details value
     * @param \StructType\BuyerDetails $buyer_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setBuyer_details(\StructType\BuyerDetails $buyer_details = null)
    {
        $this->buyer_details = $buyer_details;
        return $this;
    }
    /**
     * Get anti_fraud_details value
     * @return \StructType\AntiFraudDetails|null
     */
    public function getAnti_fraud_details()
    {
        return $this->anti_fraud_details;
    }
    /**
     * Set anti_fraud_details value
     * @param \StructType\AntiFraudDetails $anti_fraud_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setAnti_fraud_details(\StructType\AntiFraudDetails $anti_fraud_details = null)
    {
        $this->anti_fraud_details = $anti_fraud_details;
        return $this;
    }
    /**
     * Get other_details value
     * @return \StructType\OtherDetails|null
     */
    public function getOther_details()
    {
        return $this->other_details;
    }
    /**
     * Set other_details value
     * @param \StructType\OtherDetails $other_details
     * @return \StructType\CommitPurchaseRequestBody
     */
    public function setOther_details(\StructType\OtherDetails $other_details = null)
    {
        $this->other_details = $other_details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CommitPurchaseRequestBody
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
