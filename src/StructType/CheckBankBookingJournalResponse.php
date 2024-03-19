<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckBankBookingJournalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckBankBookingJournalResponse extends AbstractStructBase
{
    /**
     * The CheckMidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: CheckMidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[]
     */
    protected ?array $CheckMidocoBankBookingJournal = null;
    /**
     * The noOfErrors
     * @var int|null
     */
    protected ?int $noOfErrors = null;
    /**
     * Constructor method for CheckBankBookingJournalResponse
     * @uses CheckBankBookingJournalResponse::setCheckMidocoBankBookingJournal()
     * @uses CheckBankBookingJournalResponse::setNoOfErrors()
     * @param \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[] $checkMidocoBankBookingJournal
     * @param int $noOfErrors
     */
    public function __construct(?array $checkMidocoBankBookingJournal = null, ?int $noOfErrors = null)
    {
        $this
            ->setCheckMidocoBankBookingJournal($checkMidocoBankBookingJournal)
            ->setNoOfErrors($noOfErrors);
    }
    /**
     * Get CheckMidocoBankBookingJournal value
     * @return \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[]
     */
    public function getCheckMidocoBankBookingJournal(): ?array
    {
        return $this->CheckMidocoBankBookingJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCheckMidocoBankBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCheckMidocoBankBookingJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCheckMidocoBankBookingJournalForArrayConstraintFromSetCheckMidocoBankBookingJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType) {
                $invalidValues[] = is_object($checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem) ? get_class($checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem), var_export($checkBankBookingJournalResponseCheckMidocoBankBookingJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CheckMidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CheckMidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[] $checkMidocoBankBookingJournal
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse
     */
    public function setCheckMidocoBankBookingJournal(?array $checkMidocoBankBookingJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($checkMidocoBankBookingJournalArrayErrorMessage = self::validateCheckMidocoBankBookingJournalForArrayConstraintFromSetCheckMidocoBankBookingJournal($checkMidocoBankBookingJournal))) {
            throw new InvalidArgumentException($checkMidocoBankBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->CheckMidocoBankBookingJournal = $checkMidocoBankBookingJournal;
        
        return $this;
    }
    /**
     * Add item to CheckMidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType $item
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse
     */
    public function addToCheckMidocoBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType) {
            throw new InvalidArgumentException(sprintf('The CheckMidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CheckMidocoBankBookingJournal[] = $item;
        
        return $this;
    }
    /**
     * Get noOfErrors value
     * @return int|null
     */
    public function getNoOfErrors(): ?int
    {
        return $this->noOfErrors;
    }
    /**
     * Set noOfErrors value
     * @param int $noOfErrors
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalResponse
     */
    public function setNoOfErrors(?int $noOfErrors = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfErrors) && !(is_int($noOfErrors) || ctype_digit($noOfErrors))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfErrors, true), gettype($noOfErrors)), __LINE__);
        }
        $this->noOfErrors = $noOfErrors;
        
        return $this;
    }
}
