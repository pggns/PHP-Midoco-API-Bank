<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sepa ServiceType
 * @subpackage Services
 */
class Sepa extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Sepa
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named sepaOnlineDirectDebit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest $paramSepaOnlineDirectDebitRequest
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitResponse|bool
     */
    public function sepaOnlineDirectDebit(\Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest $paramSepaOnlineDirectDebitRequest, \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSepaOnlineDirectDebit = $this->getSoapClient()->__soapCall('sepaOnlineDirectDebit', [
                $paramSepaOnlineDirectDebitRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSepaOnlineDirectDebit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
