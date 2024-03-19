<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveBankStatementFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileRequest $paramSaveBankStatementFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileResponse|bool
     */
    public function saveBankStatementFile(\Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileRequest $paramSaveBankStatementFileRequest)
    {
        try {
            $this->setResult($resultSaveBankStatementFile = $this->getSoapClient()->__soapCall('saveBankStatementFile', [
                $paramSaveBankStatementFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBankStatementFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBankCache
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SaveBankCacheRequest $paramSaveBankCacheRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankCacheResponse|bool
     */
    public function saveBankCache(\Pggns\MidocoApi\Bank\StructType\SaveBankCacheRequest $paramSaveBankCacheRequest)
    {
        try {
            $this->setResult($resultSaveBankCache = $this->getSoapClient()->__soapCall('saveBankCache', [
                $paramSaveBankCacheRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBankCache;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBankBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest $paramSaveBankBookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalResponse|bool
     */
    public function saveBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest $paramSaveBankBookingJournalRequest)
    {
        try {
            $this->setResult($resultSaveBankBookingJournal = $this->getSoapClient()->__soapCall('saveBankBookingJournal', [
                $paramSaveBankBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBankBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBankStatementProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolRequest $paramSaveBankStatementProtocolRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolResponse|bool
     */
    public function saveBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolRequest $paramSaveBankStatementProtocolRequest)
    {
        try {
            $this->setResult($resultSaveBankStatementProtocol = $this->getSoapClient()->__soapCall('saveBankStatementProtocol', [
                $paramSaveBankStatementProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBankStatementProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalResponse|\Pggns\MidocoApi\Bank\StructType\SaveBankCacheResponse|\Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileResponse|\Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
