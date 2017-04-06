<?php

namespace Enesdayanc\MasterpassCommitPurchase\ServiceType;

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
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchase $parameters
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponse|bool
     */
    public function CommitPurchase(\Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchase $parameters)
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
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CommitPurchaseResponse
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
