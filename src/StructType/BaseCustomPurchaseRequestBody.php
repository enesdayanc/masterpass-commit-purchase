<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCustomPurchaseRequestBody StructType
 * @subpackage Structs
 */
class BaseCustomPurchaseRequestBody extends AbstractStructBase
{
    /**
     * The payment_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $payment_type;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $currency_code;
    /**
     * The vpos_store_key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $vpos_store_key;
    /**
     * The vpos_posnet_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $vpos_posnet_id;
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
     * The acquirer_ica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $acquirer_ica;
    /**
     * The vpos_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_merchant_id;
    /**
     * The vpos_merchant_terminal_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_merchant_terminal_id;
    /**
     * The vpos_merchant_email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_merchant_email;
    /**
     * The vpos_terminal_user_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_terminal_user_id;
    /**
     * The vpos_provision_user_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_provision_user_id;
    /**
     * The vpos_provision_password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_provision_password;
    /**
     * Constructor method for BaseCustomPurchaseRequestBody
     * @uses BaseCustomPurchaseRequestBody::setPayment_type()
     * @uses BaseCustomPurchaseRequestBody::setCurrency_code()
     * @uses BaseCustomPurchaseRequestBody::setVpos_store_key()
     * @uses BaseCustomPurchaseRequestBody::setVpos_posnet_id()
     * @uses BaseCustomPurchaseRequestBody::setRewardLists()
     * @uses BaseCustomPurchaseRequestBody::setChequeLists()
     * @uses BaseCustomPurchaseRequestBody::setMoneyCard()
     * @uses BaseCustomPurchaseRequestBody::setAmount()
     * @uses BaseCustomPurchaseRequestBody::setOrder_no()
     * @uses BaseCustomPurchaseRequestBody::setInstallment_count()
     * @uses BaseCustomPurchaseRequestBody::setAcquirer_ica()
     * @uses BaseCustomPurchaseRequestBody::setVpos_merchant_id()
     * @uses BaseCustomPurchaseRequestBody::setVpos_merchant_terminal_id()
     * @uses BaseCustomPurchaseRequestBody::setVpos_merchant_email()
     * @uses BaseCustomPurchaseRequestBody::setVpos_terminal_user_id()
     * @uses BaseCustomPurchaseRequestBody::setVpos_provision_user_id()
     * @uses BaseCustomPurchaseRequestBody::setVpos_provision_password()
     * @param string $payment_type
     * @param string $currency_code
     * @param string $vpos_store_key
     * @param string $vpos_posnet_id
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard
     * @param int $amount
     * @param string $order_no
     * @param string $installment_count
     * @param string $acquirer_ica
     * @param string $vpos_merchant_id
     * @param string $vpos_merchant_terminal_id
     * @param string $vpos_merchant_email
     * @param string $vpos_terminal_user_id
     * @param string $vpos_provision_user_id
     * @param string $vpos_provision_password
     */
    public function __construct($payment_type = null, $currency_code = null, $vpos_store_key = null, $vpos_posnet_id = null, \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists = null, \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists = null, \Enesdayanc\MasterpassCommitPurchase\StructType\MoneyCard $moneyCard = null, $amount = null, $order_no = null, $installment_count = null, $acquirer_ica = null, $vpos_merchant_id = null, $vpos_merchant_terminal_id = null, $vpos_merchant_email = null, $vpos_terminal_user_id = null, $vpos_provision_user_id = null, $vpos_provision_password = null)
    {
        $this
            ->setPayment_type($payment_type)
            ->setCurrency_code($currency_code)
            ->setVpos_store_key($vpos_store_key)
            ->setVpos_posnet_id($vpos_posnet_id)
            ->setRewardLists($rewardLists)
            ->setChequeLists($chequeLists)
            ->setMoneyCard($moneyCard)
            ->setAmount($amount)
            ->setOrder_no($order_no)
            ->setInstallment_count($installment_count)
            ->setAcquirer_ica($acquirer_ica)
            ->setVpos_merchant_id($vpos_merchant_id)
            ->setVpos_merchant_terminal_id($vpos_merchant_terminal_id)
            ->setVpos_merchant_email($vpos_merchant_email)
            ->setVpos_terminal_user_id($vpos_terminal_user_id)
            ->setVpos_provision_user_id($vpos_provision_user_id)
            ->setVpos_provision_password($vpos_provision_password);
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * Get currency_code value
     * @return string
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }
    /**
     * Set currency_code value
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCurrencyCodeType::valueIsValid()
     * @uses \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currency_code
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setCurrency_code($currency_code = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCurrencyCodeType::valueIsValid($currency_code)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currency_code, implode(', ', \Enesdayanc\MasterpassCommitPurchase\EnumType\ISOCurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Get vpos_store_key value
     * @return string
     */
    public function getVpos_store_key()
    {
        return $this->vpos_store_key;
    }
    /**
     * Set vpos_store_key value
     * @param string $vpos_store_key
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_store_key($vpos_store_key = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_store_key) && !is_string($vpos_store_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_store_key)), __LINE__);
        }
        $this->vpos_store_key = $vpos_store_key;
        return $this;
    }
    /**
     * Get vpos_posnet_id value
     * @return string
     */
    public function getVpos_posnet_id()
    {
        return $this->vpos_posnet_id;
    }
    /**
     * Set vpos_posnet_id value
     * @param string $vpos_posnet_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_posnet_id($vpos_posnet_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_posnet_id) && !is_string($vpos_posnet_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_posnet_id)), __LINE__);
        }
        $this->vpos_posnet_id = $vpos_posnet_id;
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
     * Get acquirer_ica value
     * @return string|null
     */
    public function getAcquirer_ica()
    {
        return $this->acquirer_ica;
    }
    /**
     * Set acquirer_ica value
     * @param string $acquirer_ica
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setAcquirer_ica($acquirer_ica = null)
    {
        // validation for constraint: string
        if (!is_null($acquirer_ica) && !is_string($acquirer_ica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acquirer_ica)), __LINE__);
        }
        $this->acquirer_ica = $acquirer_ica;
        return $this;
    }
    /**
     * Get vpos_merchant_id value
     * @return string|null
     */
    public function getVpos_merchant_id()
    {
        return $this->vpos_merchant_id;
    }
    /**
     * Set vpos_merchant_id value
     * @param string $vpos_merchant_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_merchant_id($vpos_merchant_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_merchant_id) && !is_string($vpos_merchant_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_merchant_id)), __LINE__);
        }
        $this->vpos_merchant_id = $vpos_merchant_id;
        return $this;
    }
    /**
     * Get vpos_merchant_terminal_id value
     * @return string|null
     */
    public function getVpos_merchant_terminal_id()
    {
        return $this->vpos_merchant_terminal_id;
    }
    /**
     * Set vpos_merchant_terminal_id value
     * @param string $vpos_merchant_terminal_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_merchant_terminal_id($vpos_merchant_terminal_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_merchant_terminal_id) && !is_string($vpos_merchant_terminal_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_merchant_terminal_id)), __LINE__);
        }
        $this->vpos_merchant_terminal_id = $vpos_merchant_terminal_id;
        return $this;
    }
    /**
     * Get vpos_merchant_email value
     * @return string|null
     */
    public function getVpos_merchant_email()
    {
        return $this->vpos_merchant_email;
    }
    /**
     * Set vpos_merchant_email value
     * @param string $vpos_merchant_email
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_merchant_email($vpos_merchant_email = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_merchant_email) && !is_string($vpos_merchant_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_merchant_email)), __LINE__);
        }
        $this->vpos_merchant_email = $vpos_merchant_email;
        return $this;
    }
    /**
     * Get vpos_terminal_user_id value
     * @return string|null
     */
    public function getVpos_terminal_user_id()
    {
        return $this->vpos_terminal_user_id;
    }
    /**
     * Set vpos_terminal_user_id value
     * @param string $vpos_terminal_user_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_terminal_user_id($vpos_terminal_user_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_terminal_user_id) && !is_string($vpos_terminal_user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_terminal_user_id)), __LINE__);
        }
        $this->vpos_terminal_user_id = $vpos_terminal_user_id;
        return $this;
    }
    /**
     * Get vpos_provision_user_id value
     * @return string|null
     */
    public function getVpos_provision_user_id()
    {
        return $this->vpos_provision_user_id;
    }
    /**
     * Set vpos_provision_user_id value
     * @param string $vpos_provision_user_id
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_provision_user_id($vpos_provision_user_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_provision_user_id) && !is_string($vpos_provision_user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_provision_user_id)), __LINE__);
        }
        $this->vpos_provision_user_id = $vpos_provision_user_id;
        return $this;
    }
    /**
     * Get vpos_provision_password value
     * @return string|null
     */
    public function getVpos_provision_password()
    {
        return $this->vpos_provision_password;
    }
    /**
     * Set vpos_provision_password value
     * @param string $vpos_provision_password
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
     */
    public function setVpos_provision_password($vpos_provision_password = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_provision_password) && !is_string($vpos_provision_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_provision_password)), __LINE__);
        }
        $this->vpos_provision_password = $vpos_provision_password;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\BaseCustomPurchaseRequestBody
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
