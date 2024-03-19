<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getBankStatements4Account
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountRequest $paramGetBankStatements4AccountRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountResponse|bool
     */
    public function getBankStatements4Account(\Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountRequest $paramGetBankStatements4AccountRequest)
    {
        try {
            $this->setResult($resultGetBankStatements4Account = $this->getSoapClient()->__soapCall('getBankStatements4Account', [
                $paramGetBankStatements4AccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankStatements4Account;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllBankStatements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest $paramGetAllBankStatementsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsResponse|bool
     */
    public function getAllBankStatements(\Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest $paramGetAllBankStatementsRequest)
    {
        try {
            $this->setResult($resultGetAllBankStatements = $this->getSoapClient()->__soapCall('getAllBankStatements', [
                $paramGetAllBankStatementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllBankStatements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankCache
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankCacheRequest $paramGetBankCacheRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankCacheResponse|bool
     */
    public function getBankCache(\Pggns\MidocoApi\Bank\StructType\GetBankCacheRequest $paramGetBankCacheRequest)
    {
        try {
            $this->setResult($resultGetBankCache = $this->getSoapClient()->__soapCall('getBankCache', [
                $paramGetBankCacheRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankCache;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankBookingJournalRequest $paramGetBankBookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankBookingJournalResponse|bool
     */
    public function getBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\GetBankBookingJournalRequest $paramGetBankBookingJournalRequest)
    {
        try {
            $this->setResult($resultGetBankBookingJournal = $this->getSoapClient()->__soapCall('getBankBookingJournal', [
                $paramGetBankBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankAccount4StatementEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryRequest $paramGetBankAccount4StatementEntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryResponse|bool
     */
    public function getBankAccount4StatementEntry(\Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryRequest $paramGetBankAccount4StatementEntryRequest)
    {
        try {
            $this->setResult($resultGetBankAccount4StatementEntry = $this->getSoapClient()->__soapCall('getBankAccount4StatementEntry', [
                $paramGetBankAccount4StatementEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankAccount4StatementEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankStatementEntryPurpose
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeRequest $paramGetBankStatementEntryPurposeRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse|bool
     */
    public function getBankStatementEntryPurpose(\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeRequest $paramGetBankStatementEntryPurposeRequest)
    {
        try {
            $this->setResult($resultGetBankStatementEntryPurpose = $this->getSoapClient()->__soapCall('getBankStatementEntryPurpose', [
                $paramGetBankStatementEntryPurposeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankStatementEntryPurpose;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllBankStatementEntryPurpose
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeRequest $paramGetAllBankStatementEntryPurposeRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeResponse|bool
     */
    public function getAllBankStatementEntryPurpose(\Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeRequest $paramGetAllBankStatementEntryPurposeRequest)
    {
        try {
            $this->setResult($resultGetAllBankStatementEntryPurpose = $this->getSoapClient()->__soapCall('getAllBankStatementEntryPurpose', [
                $paramGetAllBankStatementEntryPurposeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllBankStatementEntryPurpose;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllBankCache
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheRequest $paramGetAllBankCacheRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheResponse|bool
     */
    public function getAllBankCache(\Pggns\MidocoApi\Bank\StructType\GetAllBankCacheRequest $paramGetAllBankCacheRequest)
    {
        try {
            $this->setResult($resultGetAllBankCache = $this->getSoapClient()->__soapCall('getAllBankCache', [
                $paramGetAllBankCacheRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllBankCache;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVat4VatCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetVat4VatCodeRequest $paramGetVat4VatCodeRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetVat4VatCodeResponse|bool
     */
    public function getVat4VatCode(\Pggns\MidocoApi\Bank\StructType\GetVat4VatCodeRequest $paramGetVat4VatCodeRequest)
    {
        try {
            $this->setResult($resultGetVat4VatCode = $this->getSoapClient()->__soapCall('getVat4VatCode', [
                $paramGetVat4VatCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVat4VatCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllNotCompletedBankStatements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsRequest $paramGetAllNotCompletedBankStatementsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsResponse|bool
     */
    public function getAllNotCompletedBankStatements(\Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsRequest $paramGetAllNotCompletedBankStatementsRequest)
    {
        try {
            $this->setResult($resultGetAllNotCompletedBankStatements = $this->getSoapClient()->__soapCall('getAllNotCompletedBankStatements', [
                $paramGetAllNotCompletedBankStatementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllNotCompletedBankStatements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetDebitFileRequest $paramGetDebitFileRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetDebitFileResponse|bool
     */
    public function getDebitFile(\Pggns\MidocoApi\Bank\StructType\GetDebitFileRequest $paramGetDebitFileRequest)
    {
        try {
            $this->setResult($resultGetDebitFile = $this->getSoapClient()->__soapCall('getDebitFile', [
                $paramGetDebitFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetEntryRequest $paramGetEntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryResponse|bool
     */
    public function getEntry(\Pggns\MidocoApi\Bank\StructType\GetEntryRequest $paramGetEntryRequest)
    {
        try {
            $this->setResult($resultGetEntry = $this->getSoapClient()->__soapCall('getEntry', [
                $paramGetEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEntryHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest $paramGetEntryHistoryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryResponse|bool
     */
    public function getEntryHistory(\Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest $paramGetEntryHistoryRequest)
    {
        try {
            $this->setResult($resultGetEntryHistory = $this->getSoapClient()->__soapCall('getEntryHistory', [
                $paramGetEntryHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEntryHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEntryRestAsProv
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest $paramGetEntryRestAsProvRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse|bool
     */
    public function getEntryRestAsProv(\Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest $paramGetEntryRestAsProvRequest)
    {
        try {
            $this->setResult($resultGetEntryRestAsProv = $this->getSoapClient()->__soapCall('getEntryRestAsProv', [
                $paramGetEntryRestAsProvRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEntryRestAsProv;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankCachePositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsRequest $paramGetBankCachePositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsResponse|bool
     */
    public function getBankCachePositions(\Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsRequest $paramGetBankCachePositionsRequest)
    {
        try {
            $this->setResult($resultGetBankCachePositions = $this->getSoapClient()->__soapCall('getBankCachePositions', [
                $paramGetBankCachePositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankCachePositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountPlan4OrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitRequest $paramGetAccountPlan4OrgUnitRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitResponse|bool
     */
    public function getAccountPlan4OrgUnit(\Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitRequest $paramGetAccountPlan4OrgUnitRequest)
    {
        try {
            $this->setResult($resultGetAccountPlan4OrgUnit = $this->getSoapClient()->__soapCall('getAccountPlan4OrgUnit', [
                $paramGetAccountPlan4OrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountPlan4OrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankStatementEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryRequest $paramGetBankStatementEntryRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryResponse|bool
     */
    public function getBankStatementEntry(\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryRequest $paramGetBankStatementEntryRequest)
    {
        try {
            $this->setResult($resultGetBankStatementEntry = $this->getSoapClient()->__soapCall('getBankStatementEntry', [
                $paramGetBankStatementEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankStatementEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRevenueInfoForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderRequest $paramGetRevenueInfoForOrderRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderResponse|bool
     */
    public function getRevenueInfoForOrder(\Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderRequest $paramGetRevenueInfoForOrderRequest)
    {
        try {
            $this->setResult($resultGetRevenueInfoForOrder = $this->getSoapClient()->__soapCall('getRevenueInfoForOrder', [
                $paramGetRevenueInfoForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRevenueInfoForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankStatementEntryWorkingUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest $paramGetBankStatementEntryWorkingUserRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserResponse|bool
     */
    public function getBankStatementEntryWorkingUser(\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest $paramGetBankStatementEntryWorkingUserRequest)
    {
        try {
            $this->setResult($resultGetBankStatementEntryWorkingUser = $this->getSoapClient()->__soapCall('getBankStatementEntryWorkingUser', [
                $paramGetBankStatementEntryWorkingUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankStatementEntryWorkingUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDtazvTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsRequest $paramGetDtazvTransactionsRequest
     * @return GetDtazvTransactionsResponse|bool
     */
    public function getDtazvTransactions(\Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsRequest $paramGetDtazvTransactionsRequest)
    {
        try {
            $this->setResult($resultGetDtazvTransactions = $this->getSoapClient()->__soapCall('getDtazvTransactions', [
                $paramGetDtazvTransactionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDtazvTransactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankStatementProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest $paramGetBankStatementProtocolRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolResponse|bool
     */
    public function getBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest $paramGetBankStatementProtocolRequest)
    {
        try {
            $this->setResult($resultGetBankStatementProtocol = $this->getSoapClient()->__soapCall('getBankStatementProtocol', [
                $paramGetBankStatementProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankStatementProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMidocoSearchBankStatementProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest $paramGetMidocoSearchBankStatementProtocolRequest
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolResponse|bool
     */
    public function getMidocoSearchBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest $paramGetMidocoSearchBankStatementProtocolRequest)
    {
        try {
            $this->setResult($resultGetMidocoSearchBankStatementProtocol = $this->getSoapClient()->__soapCall('getMidocoSearchBankStatementProtocol', [
                $paramGetMidocoSearchBankStatementProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSearchBankStatementProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return GetDtazvTransactionsResponse|\Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitResponse|\Pggns\MidocoApi\Bank\StructType\GetAllBankCacheResponse|\Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeResponse|\Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsResponse|\Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsResponse|\Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryResponse|\Pggns\MidocoApi\Bank\StructType\GetBankBookingJournalResponse|\Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsResponse|\Pggns\MidocoApi\Bank\StructType\GetBankCacheResponse|\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse|\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryResponse|\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserResponse|\Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolResponse|\Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountResponse|\Pggns\MidocoApi\Bank\StructType\GetDebitFileResponse|\Pggns\MidocoApi\Bank\StructType\GetEntryHistoryResponse|\Pggns\MidocoApi\Bank\StructType\GetEntryResponse|\Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse|\Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolResponse|\Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderResponse|\Pggns\MidocoApi\Bank\StructType\GetVat4VatCodeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
