<?php

namespace EnumType;

/**
 * This class stands for OrderPriceType EnumType
 * @subpackage Enumerations
 */
class OrderPriceType
{
    /**
     * Constant for value 'NET'
     * @return string 'NET'
     */
    const VALUE_NET = 'NET';
    /**
     * Constant for value 'GROSS'
     * @return string 'GROSS'
     */
    const VALUE_GROSS = 'GROSS';
    /**
     * Constant for value 'PHYSICAL'
     * @return string 'PHYSICAL'
     */
    const VALUE_PHYSICAL = 'PHYSICAL';
    /**
     * Constant for value 'VIRTUAL'
     * @return string 'VIRTUAL'
     */
    const VALUE_VIRTUAL = 'VIRTUAL';
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
     * @uses self::VALUE_NET
     * @uses self::VALUE_GROSS
     * @uses self::VALUE_PHYSICAL
     * @uses self::VALUE_VIRTUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NET,
            self::VALUE_GROSS,
            self::VALUE_PHYSICAL,
            self::VALUE_VIRTUAL,
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
