<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Commit ServiceType
 * @subpackage Services
 */
class Commit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CommitPurchase
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CommitPurchase $parameters
     * @return \StructType\CommitPurchaseResponse|bool
     */
    public function CommitPurchase(\StructType\CommitPurchase $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CommitPurchase($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CommitPurchaseResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
