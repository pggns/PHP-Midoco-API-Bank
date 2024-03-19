<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Check
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named checkBankBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest $paramCheckBankBookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse|bool
     */
    public function checkBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest $paramCheckBankBookingJournalRequest)
    {
        try {
            $this->setResult($resultCheckBankBookingJournal = $this->getSoapClient()->__soapCall('checkBankBookingJournal', [
                $paramCheckBankBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckBankBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkManualBankBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest $paramCheckBankBookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse|bool
     */
    public function checkManualBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest $paramCheckBankBookingJournalRequest)
    {
        try {
            $this->setResult($resultCheckManualBankBookingJournal = $this->getSoapClient()->__soapCall('checkManualBankBookingJournal', [
                $paramCheckBankBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckManualBankBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
