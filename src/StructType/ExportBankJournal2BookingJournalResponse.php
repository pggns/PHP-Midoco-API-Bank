<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBankJournal2BookingJournalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBankJournal2BookingJournalResponse extends AbstractStructBase
{
    /**
     * The MidocoBankExportProtocolType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankExportProtocolType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType[]
     */
    protected ?array $MidocoBankExportProtocolType = null;
    /**
     * The noExported
     * @var int|null
     */
    protected ?int $noExported = null;
    /**
     * The noErrors
     * @var int|null
     */
    protected ?int $noErrors = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for ExportBankJournal2BookingJournalResponse
     * @uses ExportBankJournal2BookingJournalResponse::setMidocoBankExportProtocolType()
     * @uses ExportBankJournal2BookingJournalResponse::setNoExported()
     * @uses ExportBankJournal2BookingJournalResponse::setNoErrors()
     * @uses ExportBankJournal2BookingJournalResponse::setRepositoryId()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType[] $midocoBankExportProtocolType
     * @param int $noExported
     * @param int $noErrors
     * @param int $repositoryId
     */
    public function __construct(?array $midocoBankExportProtocolType = null, ?int $noExported = null, ?int $noErrors = null, ?int $repositoryId = null)
    {
        $this
            ->setMidocoBankExportProtocolType($midocoBankExportProtocolType)
            ->setNoExported($noExported)
            ->setNoErrors($noErrors)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get MidocoBankExportProtocolType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType[]
     */
    public function getMidocoBankExportProtocolType(): ?array
    {
        return $this->MidocoBankExportProtocolType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankExportProtocolType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankExportProtocolType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankExportProtocolTypeForArrayConstraintFromSetMidocoBankExportProtocolType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem) {
            // validation for constraint: itemType
            if (!$exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType) {
                $invalidValues[] = is_object($exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem) ? get_class($exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem) : sprintf('%s(%s)', gettype($exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem), var_export($exportBankJournal2BookingJournalResponseMidocoBankExportProtocolTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankExportProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankExportProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType[] $midocoBankExportProtocolType
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function setMidocoBankExportProtocolType(?array $midocoBankExportProtocolType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankExportProtocolTypeArrayErrorMessage = self::validateMidocoBankExportProtocolTypeForArrayConstraintFromSetMidocoBankExportProtocolType($midocoBankExportProtocolType))) {
            throw new InvalidArgumentException($midocoBankExportProtocolTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankExportProtocolType = $midocoBankExportProtocolType;
        
        return $this;
    }
    /**
     * Add item to MidocoBankExportProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function addToMidocoBankExportProtocolType(\Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType) {
            throw new InvalidArgumentException(sprintf('The MidocoBankExportProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankExportProtocolType[] = $item;
        
        return $this;
    }
    /**
     * Get noExported value
     * @return int|null
     */
    public function getNoExported(): ?int
    {
        return $this->noExported;
    }
    /**
     * Set noExported value
     * @param int $noExported
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function setNoExported(?int $noExported = null): self
    {
        // validation for constraint: int
        if (!is_null($noExported) && !(is_int($noExported) || ctype_digit($noExported))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noExported, true), gettype($noExported)), __LINE__);
        }
        $this->noExported = $noExported;
        
        return $this;
    }
    /**
     * Get noErrors value
     * @return int|null
     */
    public function getNoErrors(): ?int
    {
        return $this->noErrors;
    }
    /**
     * Set noErrors value
     * @param int $noErrors
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function setNoErrors(?int $noErrors = null): self
    {
        // validation for constraint: int
        if (!is_null($noErrors) && !(is_int($noErrors) || ctype_digit($noErrors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noErrors, true), gettype($noErrors)), __LINE__);
        }
        $this->noErrors = $noErrors;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
