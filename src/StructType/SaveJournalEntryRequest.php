<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveJournalEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveJournalEntryRequest extends AbstractStructBase
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
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * Constructor method for SaveJournalEntryRequest
     * @uses SaveJournalEntryRequest::setMidocoBankBookingJournal()
     * @uses SaveJournalEntryRequest::setPlanId()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @param string $planId
     */
    public function __construct(?array $midocoBankBookingJournal = null, ?string $planId = null)
    {
        $this
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setPlanId($planId);
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
        foreach ($values as $saveJournalEntryRequestMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$saveJournalEntryRequestMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($saveJournalEntryRequestMidocoBankBookingJournalItem) ? get_class($saveJournalEntryRequestMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($saveJournalEntryRequestMidocoBankBookingJournalItem), var_export($saveJournalEntryRequestMidocoBankBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveJournalEntryRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveJournalEntryRequest
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
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Bank\StructType\SaveJournalEntryRequest
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
}
