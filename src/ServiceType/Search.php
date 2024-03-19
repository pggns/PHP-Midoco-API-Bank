<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchBankStatements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsRequest $paramSearchBankStatementsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsResponse|bool
     */
    public function searchBankStatements(\Pggns\MidocoApi\Bank\StructType\SearchBankStatementsRequest $paramSearchBankStatementsRequest)
    {
        try {
            $this->setResult($resultSearchBankStatements = $this->getSoapClient()->__soapCall('searchBankStatements', [
                $paramSearchBankStatementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBankStatements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBankCache
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchBankCacheRequest $paramSearchBankCacheRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCacheResponse|bool
     */
    public function searchBankCache(\Pggns\MidocoApi\Bank\StructType\SearchBankCacheRequest $paramSearchBankCacheRequest)
    {
        try {
            $this->setResult($resultSearchBankCache = $this->getSoapClient()->__soapCall('searchBankCache', [
                $paramSearchBankCacheRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBankCache;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBankCache4Entry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest $paramSearchBankCache4EntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryResponse|bool
     */
    public function searchBankCache4Entry(\Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest $paramSearchBankCache4EntryRequest)
    {
        try {
            $this->setResult($resultSearchBankCache4Entry = $this->getSoapClient()->__soapCall('searchBankCache4Entry', [
                $paramSearchBankCache4EntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBankCache4Entry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAccountEntriesBalances4Bank
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest $paramSearchAccountEntriesBalances4BankRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankResponse|bool
     */
    public function searchAccountEntriesBalances4Bank(\Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest $paramSearchAccountEntriesBalances4BankRequest)
    {
        try {
            $this->setResult($resultSearchAccountEntriesBalances4Bank = $this->getSoapClient()->__soapCall('searchAccountEntriesBalances4Bank', [
                $paramSearchAccountEntriesBalances4BankRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAccountEntriesBalances4Bank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchOrder4Bank
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchOrder4BankRequest $paramSearchOrder4BankRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchOrder4BankResponse|bool
     */
    public function searchOrder4Bank(\Pggns\MidocoApi\Bank\StructType\SearchOrder4BankRequest $paramSearchOrder4BankRequest)
    {
        try {
            $this->setResult($resultSearchOrder4Bank = $this->getSoapClient()->__soapCall('searchOrder4Bank', [
                $paramSearchOrder4BankRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOrder4Bank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchDebitFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest $paramSearchDebitFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileResponse|bool
     */
    public function searchDebitFile(\Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest $paramSearchDebitFileRequest)
    {
        try {
            $this->setResult($resultSearchDebitFile = $this->getSoapClient()->__soapCall('searchDebitFile', [
                $paramSearchDebitFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchDebitFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCreditor4SupplierSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest $paramSearchCreditor4SupplierSettlementRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementResponse|bool
     */
    public function searchCreditor4SupplierSettlement(\Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest $paramSearchCreditor4SupplierSettlementRequest)
    {
        try {
            $this->setResult($resultSearchCreditor4SupplierSettlement = $this->getSoapClient()->__soapCall('searchCreditor4SupplierSettlement', [
                $paramSearchCreditor4SupplierSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCreditor4SupplierSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankResponse|\Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryResponse|\Pggns\MidocoApi\Bank\StructType\SearchBankCacheResponse|\Pggns\MidocoApi\Bank\StructType\SearchBankStatementsResponse|\Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementResponse|\Pggns\MidocoApi\Bank\StructType\SearchDebitFileResponse|\Pggns\MidocoApi\Bank\StructType\SearchOrder4BankResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
