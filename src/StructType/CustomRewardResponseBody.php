<?php

namespace Enesdayanc\MasterpassCommitPurchase\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomRewardResponseBody StructType
 * @subpackage Structs
 */
class CustomRewardResponseBody extends ConsumerRewardResponseBody
{
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
     * The merchant_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $merchant_name;
    /**
     * The reconciliation_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reconciliation_date;
    /**
     * The masked_sender_rta
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_sender_rta;
    /**
     * Constructor method for CustomRewardResponseBody
     * @uses CustomRewardResponseBody::setRewardLists()
     * @uses CustomRewardResponseBody::setChequeLists()
     * @uses CustomRewardResponseBody::setMerchant_name()
     * @uses CustomRewardResponseBody::setReconciliation_date()
     * @uses CustomRewardResponseBody::setMasked_sender_rta()
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists
     * @param \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists
     * @param string $merchant_name
     * @param string $reconciliation_date
     * @param string $masked_sender_rta
     */
    public function __construct(\Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfRewardList $rewardLists = null, \Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists = null, $merchant_name = null, $reconciliation_date = null, $masked_sender_rta = null)
    {
        $this
            ->setRewardLists($rewardLists)
            ->setChequeLists($chequeLists)
            ->setMerchant_name($merchant_name)
            ->setReconciliation_date($reconciliation_date)
            ->setMasked_sender_rta($masked_sender_rta);
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
     */
    public function setChequeLists(\Enesdayanc\MasterpassCommitPurchase\ArrayType\ArrayOfChequeList $chequeLists = null)
    {
        $this->ChequeLists = $chequeLists;
        return $this;
    }
    /**
     * Get merchant_name value
     * @return string|null
     */
    public function getMerchant_name()
    {
        return $this->merchant_name;
    }
    /**
     * Set merchant_name value
     * @param string $merchant_name
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
     */
    public function setMerchant_name($merchant_name = null)
    {
        // validation for constraint: string
        if (!is_null($merchant_name) && !is_string($merchant_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchant_name)), __LINE__);
        }
        $this->merchant_name = $merchant_name;
        return $this;
    }
    /**
     * Get reconciliation_date value
     * @return string|null
     */
    public function getReconciliation_date()
    {
        return $this->reconciliation_date;
    }
    /**
     * Set reconciliation_date value
     * @param string $reconciliation_date
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
     */
    public function setReconciliation_date($reconciliation_date = null)
    {
        // validation for constraint: string
        if (!is_null($reconciliation_date) && !is_string($reconciliation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reconciliation_date)), __LINE__);
        }
        $this->reconciliation_date = $reconciliation_date;
        return $this;
    }
    /**
     * Get masked_sender_rta value
     * @return string|null
     */
    public function getMasked_sender_rta()
    {
        return $this->masked_sender_rta;
    }
    /**
     * Set masked_sender_rta value
     * @param string $masked_sender_rta
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
     */
    public function setMasked_sender_rta($masked_sender_rta = null)
    {
        // validation for constraint: string
        if (!is_null($masked_sender_rta) && !is_string($masked_sender_rta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_sender_rta)), __LINE__);
        }
        $this->masked_sender_rta = $masked_sender_rta;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomRewardResponseBody
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
