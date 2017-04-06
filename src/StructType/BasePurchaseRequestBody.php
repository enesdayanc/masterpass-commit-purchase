<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePurchaseRequestBody StructType
 * @subpackage Structs
 */
class BasePurchaseRequestBody extends AbstractStructBase
{
    /**
     * The macro_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $macro_merchant_id;
    /**
     * The payment_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $payment_type;
    /**
     * The RewardLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList
     */
    public $RewardLists;
    /**
     * The ChequeLists
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList
     */
    public $ChequeLists;
    /**
     * The MoneyCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard
     */
    public $MoneyCard;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_no;
    /**
     * The installment_count
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $installment_count;
    /**
     * The bank_ica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $bank_ica;
    /**
     * Constructor method for BasePurchaseRequestBody
     * @uses BasePurchaseRequestBody::setMacro_merchant_id()
     * @uses BasePurchaseRequestBody::setPayment_type()
     * @uses BasePurchaseRequestBody::setRewardLists()
     * @uses BasePurchaseRequestBody::setChequeLists()
     * @uses BasePurchaseRequestBody::setMoneyCard()
     * @uses BasePurchaseRequestBody::setAmount()
     * @uses BasePurchaseRequestBody::setOrder_no()
     * @uses BasePurchaseRequestBody::setInstallment_count()
     * @uses BasePurchaseRequestBody::setBank_ica()
     * @param string $macro_merchant_id
     * @param string $payment_type
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard
     * @param int $amount
     * @param string $order_no
     * @param string $installment_count
     * @param string $bank_ica
     */
    public function __construct($macro_merchant_id = null, $payment_type = null, \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists = null, \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists = null, \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard = null, $amount = null, $order_no = null, $installment_count = null, $bank_ica = null)
    {
        $this
            ->setMacro_merchant_id($macro_merchant_id)
            ->setPayment_type($payment_type)
            ->setRewardLists($rewardLists)
            ->setChequeLists($chequeLists)
            ->setMoneyCard($moneyCard)
            ->setAmount($amount)
            ->setOrder_no($order_no)
            ->setInstallment_count($installment_count)
            ->setBank_ica($bank_ica);
    }
    /**
     * Get macro_merchant_id value
     * @return string
     */
    public function getMacro_merchant_id()
    {
        return $this->macro_merchant_id;
    }
    /**
     * Set macro_merchant_id value
     * @param string $macro_merchant_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setMacro_merchant_id($macro_merchant_id = null)
    {
        // validation for constraint: string
        if (!is_null($macro_merchant_id) && !is_string($macro_merchant_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($macro_merchant_id)), __LINE__);
        }
        $this->macro_merchant_id = $macro_merchant_id;
        return $this;
    }
    /**
     * Get payment_type value
     * @return string
     */
    public function getPayment_type()
    {
        return $this->payment_type;
    }
    /**
     * Set payment_type value
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\PaymentType::valueIsValid()
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payment_type
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setPayment_type($payment_type = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassCommitPurchase\EnumType\PaymentType::valueIsValid($payment_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payment_type, implode(', ', \Enesdayanc\MasterpassCommitPurchase\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->payment_type = $payment_type;
        return $this;
    }
    /**
     * Get RewardLists value
     * @return \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList|null
     */
    public function getRewardLists()
    {
        return $this->RewardLists;
    }
    /**
     * Set RewardLists value
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setRewardLists(\Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists = null)
    {
        $this->RewardLists = $rewardLists;
        return $this;
    }
    /**
     * Get ChequeLists value
     * @return \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList|null
     */
    public function getChequeLists()
    {
        return $this->ChequeLists;
    }
    /**
     * Set ChequeLists value
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setChequeLists(\Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists = null)
    {
        $this->ChequeLists = $chequeLists;
        return $this;
    }
    /**
     * Get MoneyCard value
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard|null
     */
    public function getMoneyCard()
    {
        return $this->MoneyCard;
    }
    /**
     * Set MoneyCard value
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setMoneyCard(\Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard = null)
    {
        $this->MoneyCard = $moneyCard;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get order_no value
     * @return string|null
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    /**
     * Set order_no value
     * @param string $order_no
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setOrder_no($order_no = null)
    {
        // validation for constraint: string
        if (!is_null($order_no) && !is_string($order_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_no)), __LINE__);
        }
        $this->order_no = $order_no;
        return $this;
    }
    /**
     * Get installment_count value
     * @return string|null
     */
    public function getInstallment_count()
    {
        return $this->installment_count;
    }
    /**
     * Set installment_count value
     * @param string $installment_count
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setInstallment_count($installment_count = null)
    {
        // validation for constraint: string
        if (!is_null($installment_count) && !is_string($installment_count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($installment_count)), __LINE__);
        }
        $this->installment_count = $installment_count;
        return $this;
    }
    /**
     * Get bank_ica value
     * @return string|null
     */
    public function getBank_ica()
    {
        return $this->bank_ica;
    }
    /**
     * Set bank_ica value
     * @param string $bank_ica
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
     */
    public function setBank_ica($bank_ica = null)
    {
        // validation for constraint: string
        if (!is_null($bank_ica) && !is_string($bank_ica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bank_ica)), __LINE__);
        }
        $this->bank_ica = $bank_ica;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BasePurchaseRequestBody
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
