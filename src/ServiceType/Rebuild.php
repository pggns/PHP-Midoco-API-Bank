<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rebuild ServiceType
 * @subpackage Services
 */
class Rebuild extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Rebuild
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * rebuildDocument4BankStatementProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\RebuildDocument4BankStatementProtocolRequest $paramRebuildDocument4BankStatementProtocolRequest
     * @return \Pggns\MidocoApi\Bank\StructType\RebuildDocument4BankStatementProtocolResponse|bool
     */
    public function rebuildDocument4BankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\RebuildDocument4BankStatementProtocolRequest $paramRebuildDocument4BankStatementProtocolRequest)
    {
        try {
            $this->setResult($resultRebuildDocument4BankStatementProtocol = $this->getSoapClient()->__soapCall('rebuildDocument4BankStatementProtocol', [
                $paramRebuildDocument4BankStatementProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRebuildDocument4BankStatementProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\RebuildDocument4BankStatementProtocolResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
