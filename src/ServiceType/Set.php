<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Set
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named setBankStatementEntryWorkingUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryWorkingUserRequest $paramSetBankStatementEntryWorkingUserRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryWorkingUserResponse|bool
     */
    public function setBankStatementEntryWorkingUser(\Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryWorkingUserRequest $paramSetBankStatementEntryWorkingUserRequest)
    {
        try {
            $this->setResult($resultSetBankStatementEntryWorkingUser = $this->getSoapClient()->__soapCall('setBankStatementEntryWorkingUser', [
                $paramSetBankStatementEntryWorkingUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetBankStatementEntryWorkingUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setBankStatementEntryComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest $paramSetBankStatementEntryCommentRequest
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentResponse|bool
     */
    public function setBankStatementEntryComment(\Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest $paramSetBankStatementEntryCommentRequest)
    {
        try {
            $this->setResult($resultSetBankStatementEntryComment = $this->getSoapClient()->__soapCall('setBankStatementEntryComment', [
                $paramSetBankStatementEntryCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetBankStatementEntryComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentResponse|\Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryWorkingUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
