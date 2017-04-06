<?php

namespace Enesdayanc\MasterpassCommitPurchase\EnumType;

/**
 * This class stands for CampaignType EnumType
 * @subpackage Enumerations
 */
class CampaignType
{
    /**
     * Constant for value 'EXTRA_INSTALLMENTS'
     * @return string 'EXTRA_INSTALLMENTS'
     */
    const VALUE_EXTRA_INSTALLMENTS = 'EXTRA_INSTALLMENTS';
    /**
     * Constant for value 'DELAY_INSTALLMENTS'
     * @return string 'DELAY_INSTALLMENTS'
     */
    const VALUE_DELAY_INSTALLMENTS = 'DELAY_INSTALLMENTS';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EXTRA_INSTALLMENTS
     * @uses self::VALUE_DELAY_INSTALLMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXTRA_INSTALLMENTS,
            self::VALUE_DELAY_INSTALLMENTS,
        );
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
