<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessBankStatementsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessBankStatementsResponse extends AbstractStructBase
{
    /**
     * The MidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[]
     */
    protected ?array $MidocoBankBookingJournal = null;
    /**
     * The MidocoBankProcessProtocolType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankProcessProtocolType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[]
     */
    protected ?array $MidocoBankProcessProtocolType = null;
    /**
     * Constructor method for ProcessBankStatementsResponse
     * @uses ProcessBankStatementsResponse::setMidocoBankBookingJournal()
     * @uses ProcessBankStatementsResponse::setMidocoBankProcessProtocolType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[] $midocoBankProcessProtocolType
     */
    public function __construct(?array $midocoBankBookingJournal = null, ?array $midocoBankProcessProtocolType = null)
    {
        $this
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setMidocoBankProcessProtocolType($midocoBankProcessProtocolType);
    }
    /**
     * Get MidocoBankBookingJournal value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[]
     */
    public function getMidocoBankBookingJournal(): ?array
    {
        return $this->MidocoBankBookingJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankBookingJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankBookingJournalForArrayConstraintFromSetMidocoBankBookingJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $processBankStatementsResponseMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$processBankStatementsResponseMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($processBankStatementsResponseMidocoBankBookingJournalItem) ? get_class($processBankStatementsResponseMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($processBankStatementsResponseMidocoBankBookingJournalItem), var_export($processBankStatementsResponseMidocoBankBookingJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse
     */
    public function setMidocoBankBookingJournal(?array $midocoBankBookingJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankBookingJournalArrayErrorMessage = self::validateMidocoBankBookingJournalForArrayConstraintFromSetMidocoBankBookingJournal($midocoBankBookingJournal))) {
            throw new InvalidArgumentException($midocoBankBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankBookingJournal = $midocoBankBookingJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $item
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse
     */
    public function addToMidocoBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankBookingJournal[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBankProcessProtocolType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[]
     */
    public function getMidocoBankProcessProtocolType(): ?array
    {
        return $this->MidocoBankProcessProtocolType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankProcessProtocolType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankProcessProtocolType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankProcessProtocolTypeForArrayConstraintFromSetMidocoBankProcessProtocolType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $processBankStatementsResponseMidocoBankProcessProtocolTypeItem) {
            // validation for constraint: itemType
            if (!$processBankStatementsResponseMidocoBankProcessProtocolTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType) {
                $invalidValues[] = is_object($processBankStatementsResponseMidocoBankProcessProtocolTypeItem) ? get_class($processBankStatementsResponseMidocoBankProcessProtocolTypeItem) : sprintf('%s(%s)', gettype($processBankStatementsResponseMidocoBankProcessProtocolTypeItem), var_export($processBankStatementsResponseMidocoBankProcessProtocolTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankProcessProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankProcessProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[] $midocoBankProcessProtocolType
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse
     */
    public function setMidocoBankProcessProtocolType(?array $midocoBankProcessProtocolType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankProcessProtocolTypeArrayErrorMessage = self::validateMidocoBankProcessProtocolTypeForArrayConstraintFromSetMidocoBankProcessProtocolType($midocoBankProcessProtocolType))) {
            throw new InvalidArgumentException($midocoBankProcessProtocolTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankProcessProtocolType = $midocoBankProcessProtocolType;
        
        return $this;
    }
    /**
     * Add item to MidocoBankProcessProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsResponse
     */
    public function addToMidocoBankProcessProtocolType(\Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType) {
            throw new InvalidArgumentException(sprintf('The MidocoBankProcessProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankProcessProtocolType[] = $item;
        
        return $this;
    }
}
