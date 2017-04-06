<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoneyCard StructType
 * @subpackage Structs
 */
class MoneyCard extends AbstractStructBase
{
    /**
     * The InvoiceAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $InvoiceAmount;
    /**
     * The MigrosCCDiscountAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $MigrosCCDiscountAmount;
    /**
     * The PaymentAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $PaymentAmount;
    /**
     * The ExtraDiscountAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ExtraDiscountAmount;
    /**
     * The ProductBasedDiscountAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ProductBasedDiscountAmount;
    /**
     * Constructor method for MoneyCard
     * @uses MoneyCard::setInvoiceAmount()
     * @uses MoneyCard::setMigrosCCDiscountAmount()
     * @uses MoneyCard::setPaymentAmount()
     * @uses MoneyCard::setExtraDiscountAmount()
     * @uses MoneyCard::setProductBasedDiscountAmount()
     * @param string $invoiceAmount
     * @param string $migrosCCDiscountAmount
     * @param string $paymentAmount
     * @param string $extraDiscountAmount
     * @param string $productBasedDiscountAmount
     */
    public function __construct($invoiceAmount = null, $migrosCCDiscountAmount = null, $paymentAmount = null, $extraDiscountAmount = null, $productBasedDiscountAmount = null)
    {
        $this
            ->setInvoiceAmount($invoiceAmount)
            ->setMigrosCCDiscountAmount($migrosCCDiscountAmount)
            ->setPaymentAmount($paymentAmount)
            ->setExtraDiscountAmount($extraDiscountAmount)
            ->setProductBasedDiscountAmount($productBasedDiscountAmount);
    }
    /**
     * Get InvoiceAmount value
     * @return string
     */
    public function getInvoiceAmount()
    {
        return $this->InvoiceAmount;
    }
    /**
     * Set InvoiceAmount value
     * @param string $invoiceAmount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public function setInvoiceAmount($invoiceAmount = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceAmount) && !is_string($invoiceAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceAmount)), __LINE__);
        }
        $this->InvoiceAmount = $invoiceAmount;
        return $this;
    }
    /**
     * Get MigrosCCDiscountAmount value
     * @return string
     */
    public function getMigrosCCDiscountAmount()
    {
        return $this->MigrosCCDiscountAmount;
    }
    /**
     * Set MigrosCCDiscountAmount value
     * @param string $migrosCCDiscountAmount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public function setMigrosCCDiscountAmount($migrosCCDiscountAmount = null)
    {
        // validation for constraint: string
        if (!is_null($migrosCCDiscountAmount) && !is_string($migrosCCDiscountAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($migrosCCDiscountAmount)), __LINE__);
        }
        $this->MigrosCCDiscountAmount = $migrosCCDiscountAmount;
        return $this;
    }
    /**
     * Get PaymentAmount value
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param string $paymentAmount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public function setPaymentAmount($paymentAmount = null)
    {
        // validation for constraint: string
        if (!is_null($paymentAmount) && !is_string($paymentAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentAmount)), __LINE__);
        }
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Get ExtraDiscountAmount value
     * @return string
     */
    public function getExtraDiscountAmount()
    {
        return $this->ExtraDiscountAmount;
    }
    /**
     * Set ExtraDiscountAmount value
     * @param string $extraDiscountAmount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public function setExtraDiscountAmount($extraDiscountAmount = null)
    {
        // validation for constraint: string
        if (!is_null($extraDiscountAmount) && !is_string($extraDiscountAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extraDiscountAmount)), __LINE__);
        }
        $this->ExtraDiscountAmount = $extraDiscountAmount;
        return $this;
    }
    /**
     * Get ProductBasedDiscountAmount value
     * @return string
     */
    public function getProductBasedDiscountAmount()
    {
        return $this->ProductBasedDiscountAmount;
    }
    /**
     * Set ProductBasedDiscountAmount value
     * @param string $productBasedDiscountAmount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public function setProductBasedDiscountAmount($productBasedDiscountAmount = null)
    {
        // validation for constraint: string
        if (!is_null($productBasedDiscountAmount) && !is_string($productBasedDiscountAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productBasedDiscountAmount)), __LINE__);
        }
        $this->ProductBasedDiscountAmount = $productBasedDiscountAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
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
