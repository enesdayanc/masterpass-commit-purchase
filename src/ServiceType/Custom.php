<?php

namespace Enesdayanc\MasterpassCommitPurchase\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Custom ServiceType
 * @subpackage Services
 */
class Custom extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CustomCommitPurchase
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchase $parameters
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseResponse|bool
     */
    public function CustomCommitPurchase(\Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchase $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->CustomCommitPurchase($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Enesdayanc\MasterpassCommitPurchase\StructType\CustomCommitPurchaseResponse
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
