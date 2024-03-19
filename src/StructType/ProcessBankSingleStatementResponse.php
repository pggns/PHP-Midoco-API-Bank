<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessBankSingleStatementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessBankSingleStatementResponse extends AbstractStructBase
{
    /**
     * The assigned
     * @var bool|null
     */
    protected ?bool $assigned = null;
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
     * Constructor method for ProcessBankSingleStatementResponse
     * @uses ProcessBankSingleStatementResponse::setAssigned()
     * @uses ProcessBankSingleStatementResponse::setMidocoBankBookingJournal()
     * @uses ProcessBankSingleStatementResponse::setMidocoBankProcessProtocolType()
     * @param bool $assigned
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[] $midocoBankProcessProtocolType
     */
    public function __construct(?bool $assigned = null, ?array $midocoBankBookingJournal = null, ?array $midocoBankProcessProtocolType = null)
    {
        $this
            ->setAssigned($assigned)
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setMidocoBankProcessProtocolType($midocoBankProcessProtocolType);
    }
    /**
     * Get assigned value
     * @return bool|null
     */
    public function getAssigned(): ?bool
    {
        return $this->assigned;
    }
    /**
     * Set assigned value
     * @param bool $assigned
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse
     */
    public function setAssigned(?bool $assigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assigned) && !is_bool($assigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assigned, true), gettype($assigned)), __LINE__);
        }
        $this->assigned = $assigned;
        
        return $this;
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
        foreach ($values as $processBankSingleStatementResponseMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$processBankSingleStatementResponseMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($processBankSingleStatementResponseMidocoBankBookingJournalItem) ? get_class($processBankSingleStatementResponseMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($processBankSingleStatementResponseMidocoBankBookingJournalItem), var_export($processBankSingleStatementResponseMidocoBankBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse
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
        foreach ($values as $processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem) {
            // validation for constraint: itemType
            if (!$processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType) {
                $invalidValues[] = is_object($processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem) ? get_class($processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem) : sprintf('%s(%s)', gettype($processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem), var_export($processBankSingleStatementResponseMidocoBankProcessProtocolTypeItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementResponse
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
