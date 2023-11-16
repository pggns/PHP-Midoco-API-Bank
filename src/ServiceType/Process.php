<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Process
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named processBankStatements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsRequest $paramProcessBankStatementsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse|bool
     */
    public function processBankStatements(\Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsRequest $paramProcessBankStatementsRequest)
    {
        try {
            $this->setResult($resultProcessBankStatements = $this->getSoapClient()->__soapCall('processBankStatements', [
                $paramProcessBankStatementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessBankStatements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processBankSingleStatement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementRequest $paramProcessBankSingleStatementRequest
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse|bool
     */
    public function processBankSingleStatement(\Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementRequest $paramProcessBankSingleStatementRequest)
    {
        try {
            $this->setResult($resultProcessBankSingleStatement = $this->getSoapClient()->__soapCall('processBankSingleStatement', [
                $paramProcessBankSingleStatementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessBankSingleStatement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processCreditCardPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsRequest $paramProcessCreditCardPositionsRequest
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsResponse|bool
     */
    public function processCreditCardPositions(\Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsRequest $paramProcessCreditCardPositionsRequest)
    {
        try {
            $this->setResult($resultProcessCreditCardPositions = $this->getSoapClient()->__soapCall('processCreditCardPositions', [
                $paramProcessCreditCardPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessCreditCardPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse|\Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse|\Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
