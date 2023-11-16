<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckBankBookingJournalRequest StructType
 * @subpackage Structs
 */
class CheckBankBookingJournalRequest extends AbstractStructBase
{
    /**
     * The CheckMidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: CheckMidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[]
     */
    protected array $CheckMidocoBankBookingJournal = [];
    /**
     * The bookingValue
     * @var float|null
     */
    protected ?float $bookingValue = null;
    /**
     * The checkBookingValue
     * @var bool|null
     */
    protected ?bool $checkBookingValue = null;
    /**
     * The dontStopByFirstError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $dontStopByFirstError = null;
    /**
     * Constructor method for CheckBankBookingJournalRequest
     * @uses CheckBankBookingJournalRequest::setCheckMidocoBankBookingJournal()
     * @uses CheckBankBookingJournalRequest::setBookingValue()
     * @uses CheckBankBookingJournalRequest::setCheckBookingValue()
     * @uses CheckBankBookingJournalRequest::setDontStopByFirstError()
     * @param \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[] $checkMidocoBankBookingJournal
     * @param float $bookingValue
     * @param bool $checkBookingValue
     * @param bool $dontStopByFirstError
     */
    public function __construct(array $checkMidocoBankBookingJournal = [], ?float $bookingValue = null, ?bool $checkBookingValue = null, ?bool $dontStopByFirstError = null)
    {
        $this
            ->setCheckMidocoBankBookingJournal($checkMidocoBankBookingJournal)
            ->setBookingValue($bookingValue)
            ->setCheckBookingValue($checkBookingValue)
            ->setDontStopByFirstError($dontStopByFirstError);
    }
    /**
     * Get CheckMidocoBankBookingJournal value
     * @return \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType[]
     */
    public function getCheckMidocoBankBookingJournal(): array
    {
        return $this->CheckMidocoBankBookingJournal;
    }
    /**
     * This method is responsible for validating the values passed to the setCheckMidocoBankBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCheckMidocoBankBookingJournal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCheckMidocoBankBookingJournalForArrayConstraintsFromSetCheckMidocoBankBookingJournal(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType) {
                $invalidValues[] = is_object($checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem) ? get_class($checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem), var_export($checkBankBookingJournalRequestCheckMidocoBankBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest
     */
    public function setCheckMidocoBankBookingJournal(array $checkMidocoBankBookingJournal = []): self
    {
        // validation for constraint: array
        if ('' !== ($checkMidocoBankBookingJournalArrayErrorMessage = self::validateCheckMidocoBankBookingJournalForArrayConstraintsFromSetCheckMidocoBankBookingJournal($checkMidocoBankBookingJournal))) {
            throw new InvalidArgumentException($checkMidocoBankBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->CheckMidocoBankBookingJournal = $checkMidocoBankBookingJournal;
        
        return $this;
    }
    /**
     * Add item to CheckMidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType $item
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest
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
     * Get bookingValue value
     * @return float|null
     */
    public function getBookingValue(): ?float
    {
        return $this->bookingValue;
    }
    /**
     * Set bookingValue value
     * @param float $bookingValue
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest
     */
    public function setBookingValue(?float $bookingValue = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingValue) && !(is_float($bookingValue) || is_numeric($bookingValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingValue, true), gettype($bookingValue)), __LINE__);
        }
        $this->bookingValue = $bookingValue;
        
        return $this;
    }
    /**
     * Get checkBookingValue value
     * @return bool|null
     */
    public function getCheckBookingValue(): ?bool
    {
        return $this->checkBookingValue;
    }
    /**
     * Set checkBookingValue value
     * @param bool $checkBookingValue
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest
     */
    public function setCheckBookingValue(?bool $checkBookingValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkBookingValue) && !is_bool($checkBookingValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkBookingValue, true), gettype($checkBookingValue)), __LINE__);
        }
        $this->checkBookingValue = $checkBookingValue;
        
        return $this;
    }
    /**
     * Get dontStopByFirstError value
     * @return bool|null
     */
    public function getDontStopByFirstError(): ?bool
    {
        return $this->dontStopByFirstError;
    }
    /**
     * Set dontStopByFirstError value
     * @param bool $dontStopByFirstError
     * @return \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest
     */
    public function setDontStopByFirstError(?bool $dontStopByFirstError = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dontStopByFirstError) && !is_bool($dontStopByFirstError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontStopByFirstError, true), gettype($dontStopByFirstError)), __LINE__);
        }
        $this->dontStopByFirstError = $dontStopByFirstError;
        
        return $this;
    }
}
