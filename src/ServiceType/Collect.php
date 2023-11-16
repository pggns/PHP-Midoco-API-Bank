<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Collect ServiceType
 * @subpackage Services
 */
class Collect extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Collect
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named collectDirectDebitPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest $paramCollectDirectDebitPositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsResponse|bool
     */
    public function collectDirectDebitPositions(\Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest $paramCollectDirectDebitPositionsRequest)
    {
        try {
            $this->setResult($resultCollectDirectDebitPositions = $this->getSoapClient()->__soapCall('collectDirectDebitPositions', [
                $paramCollectDirectDebitPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCollectDirectDebitPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named collectCreditCardPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest $paramCollectCreditCardPositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsResponse|bool
     */
    public function collectCreditCardPositions(\Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest $paramCollectCreditCardPositionsRequest)
    {
        try {
            $this->setResult($resultCollectCreditCardPositions = $this->getSoapClient()->__soapCall('collectCreditCardPositions', [
                $paramCollectCreditCardPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCollectCreditCardPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named collectCreditorDtazvPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest $paramCollectCreditorDtazvPositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsResponse|bool
     */
    public function collectCreditorDtazvPositions(\Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest $paramCollectCreditorDtazvPositionsRequest)
    {
        try {
            $this->setResult($resultCollectCreditorDtazvPositions = $this->getSoapClient()->__soapCall('collectCreditorDtazvPositions', [
                $paramCollectCreditorDtazvPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCollectCreditorDtazvPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named collectBankPaymentPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest $paramCollectBankPaymentPositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsResponse|bool
     */
    public function collectBankPaymentPositions(\Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest $paramCollectBankPaymentPositionsRequest)
    {
        try {
            $this->setResult($resultCollectBankPaymentPositions = $this->getSoapClient()->__soapCall('collectBankPaymentPositions', [
                $paramCollectBankPaymentPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCollectBankPaymentPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsResponse|\Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsResponse|\Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsResponse|\Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
