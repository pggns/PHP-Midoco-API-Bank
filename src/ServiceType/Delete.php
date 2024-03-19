<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteBankCache
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankCacheRequest $paramDeleteBankCacheRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCacheResponse|bool
     */
    public function deleteBankCache(\Pggns\MidocoApi\Bank\StructType\DeleteBankCacheRequest $paramDeleteBankCacheRequest)
    {
        try {
            $this->setResult($resultDeleteBankCache = $this->getSoapClient()->__soapCall('deleteBankCache', [
                $paramDeleteBankCacheRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankCache;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournalRequest $paramDeleteBankBookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournalResponse|bool
     */
    public function deleteBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournalRequest $paramDeleteBankBookingJournalRequest)
    {
        try {
            $this->setResult($resultDeleteBankBookingJournal = $this->getSoapClient()->__soapCall('deleteBankBookingJournal', [
                $paramDeleteBankBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDebitFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteDebitFileRequest $paramDeleteDebitFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteDebitFileResponse|bool
     */
    public function deleteDebitFile(\Pggns\MidocoApi\Bank\StructType\DeleteDebitFileRequest $paramDeleteDebitFileRequest)
    {
        try {
            $this->setResult($resultDeleteDebitFile = $this->getSoapClient()->__soapCall('deleteDebitFile', [
                $paramDeleteDebitFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDebitFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteBankBookingJournal4StatementEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournal4StatementEntryRequest $paramDeleteBankBookingJournal4StatementEntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournal4StatementEntryResponse|bool
     */
    public function deleteBankBookingJournal4StatementEntry(\Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournal4StatementEntryRequest $paramDeleteBankBookingJournal4StatementEntryRequest)
    {
        try {
            $this->setResult($resultDeleteBankBookingJournal4StatementEntry = $this->getSoapClient()->__soapCall('deleteBankBookingJournal4StatementEntry', [
                $paramDeleteBankBookingJournal4StatementEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankBookingJournal4StatementEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankCachePosition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionRequest $paramDeleteBankCachePositionRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionResponse|bool
     */
    public function deleteBankCachePosition(\Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionRequest $paramDeleteBankCachePositionRequest)
    {
        try {
            $this->setResult($resultDeleteBankCachePosition = $this->getSoapClient()->__soapCall('deleteBankCachePosition', [
                $paramDeleteBankCachePositionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankCachePosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteStatementFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteStatementFileRequest $paramDeleteStatementFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteStatementFileResponse|bool
     */
    public function deleteStatementFile(\Pggns\MidocoApi\Bank\StructType\DeleteStatementFileRequest $paramDeleteStatementFileRequest)
    {
        try {
            $this->setResult($resultDeleteStatementFile = $this->getSoapClient()->__soapCall('deleteStatementFile', [
                $paramDeleteStatementFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteStatementFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankStatementEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryRequest $paramDeleteBankStatementEntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryResponse|bool
     */
    public function deleteBankStatementEntry(\Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryRequest $paramDeleteBankStatementEntryRequest)
    {
        try {
            $this->setResult($resultDeleteBankStatementEntry = $this->getSoapClient()->__soapCall('deleteBankStatementEntry', [
                $paramDeleteBankStatementEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankStatementEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankStatementProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementProtocolRequest $paramDeleteBankStatementProtocolRequest
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementProtocolResponse|bool
     */
    public function deleteBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\DeleteBankStatementProtocolRequest $paramDeleteBankStatementProtocolRequest)
    {
        try {
            $this->setResult($resultDeleteBankStatementProtocol = $this->getSoapClient()->__soapCall('deleteBankStatementProtocol', [
                $paramDeleteBankStatementProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankStatementProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournal4StatementEntryResponse|\Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournalResponse|\Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionResponse|\Pggns\MidocoApi\Bank\StructType\DeleteBankCacheResponse|\Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryResponse|\Pggns\MidocoApi\Bank\StructType\DeleteBankStatementProtocolResponse|\Pggns\MidocoApi\Bank\StructType\DeleteDebitFileResponse|\Pggns\MidocoApi\Bank\StructType\DeleteStatementFileResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
