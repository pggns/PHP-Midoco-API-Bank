<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createDtazvTransaction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest $paramCreateDtazvTransactionRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionResponse|bool
     */
    public function createDtazvTransaction(\Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest $paramCreateDtazvTransactionRequest)
    {
        try {
            $this->setResult($resultCreateDtazvTransaction = $this->getSoapClient()->__soapCall('createDtazvTransaction', [
                $paramCreateDtazvTransactionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateDtazvTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createDtazvFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest $paramCreateDtazvFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse|bool
     */
    public function createDtazvFile(\Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest $paramCreateDtazvFileRequest)
    {
        try {
            $this->setResult($resultCreateDtazvFile = $this->getSoapClient()->__soapCall('createDtazvFile', [
                $paramCreateDtazvFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateDtazvFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse|\Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
