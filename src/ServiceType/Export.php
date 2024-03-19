<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Export ServiceType
 * @subpackage Services
 */
class Export extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Bank\ServiceType\Export
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named exportBankJournal2BookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalRequest $paramExportBankJournal2BookingJournalRequest
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse|bool
     */
    public function exportBankJournal2BookingJournal(\Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalRequest $paramExportBankJournal2BookingJournalRequest)
    {
        try {
            $this->setResult($resultExportBankJournal2BookingJournal = $this->getSoapClient()->__soapCall('exportBankJournal2BookingJournal', [
                $paramExportBankJournal2BookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportBankJournal2BookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
