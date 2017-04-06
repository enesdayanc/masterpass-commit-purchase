<?php

namespace EnumType;

/**
 * This class stands for ActionType EnumType
 * @subpackage Enumerations
 */
class ActionType
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'U'
     * @return string 'U'
     */
    const VALUE_U = 'U';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_D
     * @uses self::VALUE_U
     * @uses self::VALUE_E
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_D,
            self::VALUE_U,
            self::VALUE_E,
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
