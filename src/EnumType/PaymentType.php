<?php

namespace EnumType;

/**
 * This class stands for PaymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType
{
    /**
     * Constant for value 'DIRECT_PAYMENT'
     * @return string 'DIRECT_PAYMENT'
     */
    const VALUE_DIRECT_PAYMENT = 'DIRECT_PAYMENT';
    /**
     * Constant for value 'SECURE_3D'
     * @return string 'SECURE_3D'
     */
    const VALUE_SECURE_3_D = 'SECURE_3D';
    /**
     * Constant for value 'PRE_AUTH'
     * @return string 'PRE_AUTH'
     */
    const VALUE_PRE_AUTH = 'PRE_AUTH';
    /**
     * Constant for value 'POST_AUTH'
     * @return string 'POST_AUTH'
     */
    const VALUE_POST_AUTH = 'POST_AUTH';
    /**
     * Constant for value 'PRE_AUTH_3D'
     * @return string 'PRE_AUTH_3D'
     */
    const VALUE_PRE_AUTH_3_D = 'PRE_AUTH_3D';
    /**
     * Constant for value 'POST_AUTH_3D'
     * @return string 'POST_AUTH_3D'
     */
    const VALUE_POST_AUTH_3_D = 'POST_AUTH_3D';
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
     * @uses self::VALUE_DIRECT_PAYMENT
     * @uses self::VALUE_SECURE_3_D
     * @uses self::VALUE_PRE_AUTH
     * @uses self::VALUE_POST_AUTH
     * @uses self::VALUE_PRE_AUTH_3_D
     * @uses self::VALUE_POST_AUTH_3_D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DIRECT_PAYMENT,
            self::VALUE_SECURE_3_D,
            self::VALUE_PRE_AUTH,
            self::VALUE_POST_AUTH,
            self::VALUE_PRE_AUTH_3_D,
            self::VALUE_POST_AUTH_3_D,
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
