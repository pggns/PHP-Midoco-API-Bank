<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankStatementEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankStatementEntry extends BankStatementEntryDTO
{
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The purpose
     * @var string|null
     */
    protected ?string $purpose = null;
    /**
     * The valueAfterAccounted
     * Meta information extracted from the WSDL
     * - documentation: Aspecially fx entries could have a different value (base currency) after accounted/kontierung, but we have to keep the old value in case of error or deletion.
     * @var float|null
     */
    protected ?float $valueAfterAccounted = null;
    /**
     * The MidocoBankStatementEntryPurpose
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntryPurpose
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[]
     */
    protected ?array $MidocoBankStatementEntryPurpose = null;
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
     * The MidocoBankStatementEntryDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntryDetail
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail[]
     */
    protected ?array $MidocoBankStatementEntryDetail = null;
    /**
     * The MidocoBankStatementEntryCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntryCharge
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge[]
     */
    protected ?array $MidocoBankStatementEntryCharge = null;
    /**
     * The extraPurpose
     * @var string|null
     */
    protected ?string $extraPurpose = null;
    /**
     * Constructor method for MidocoBankStatementEntry
     * @uses MidocoBankStatementEntry::setReceiptNo()
     * @uses MidocoBankStatementEntry::setBookingText()
     * @uses MidocoBankStatementEntry::setPurpose()
     * @uses MidocoBankStatementEntry::setValueAfterAccounted()
     * @uses MidocoBankStatementEntry::setMidocoBankStatementEntryPurpose()
     * @uses MidocoBankStatementEntry::setMidocoBankBookingJournal()
     * @uses MidocoBankStatementEntry::setMidocoBankStatementEntryDetail()
     * @uses MidocoBankStatementEntry::setMidocoBankStatementEntryCharge()
     * @uses MidocoBankStatementEntry::setExtraPurpose()
     * @param string $receiptNo
     * @param string $bookingText
     * @param string $purpose
     * @param float $valueAfterAccounted
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[] $midocoBankStatementEntryPurpose
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail[] $midocoBankStatementEntryDetail
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge[] $midocoBankStatementEntryCharge
     * @param string $extraPurpose
     */
    public function __construct(?string $receiptNo = null, ?string $bookingText = null, ?string $purpose = null, ?float $valueAfterAccounted = null, ?array $midocoBankStatementEntryPurpose = null, ?array $midocoBankBookingJournal = null, ?array $midocoBankStatementEntryDetail = null, ?array $midocoBankStatementEntryCharge = null, ?string $extraPurpose = null)
    {
        $this
            ->setReceiptNo($receiptNo)
            ->setBookingText($bookingText)
            ->setPurpose($purpose)
            ->setValueAfterAccounted($valueAfterAccounted)
            ->setMidocoBankStatementEntryPurpose($midocoBankStatementEntryPurpose)
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setMidocoBankStatementEntryDetail($midocoBankStatementEntryDetail)
            ->setMidocoBankStatementEntryCharge($midocoBankStatementEntryCharge)
            ->setExtraPurpose($extraPurpose);
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get purpose value
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }
    /**
     * Set purpose value
     * @param string $purpose
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setPurpose(?string $purpose = null): self
    {
        // validation for constraint: string
        if (!is_null($purpose) && !is_string($purpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purpose, true), gettype($purpose)), __LINE__);
        }
        $this->purpose = $purpose;
        
        return $this;
    }
    /**
     * Get valueAfterAccounted value
     * @return float|null
     */
    public function getValueAfterAccounted(): ?float
    {
        return $this->valueAfterAccounted;
    }
    /**
     * Set valueAfterAccounted value
     * @param float $valueAfterAccounted
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setValueAfterAccounted(?float $valueAfterAccounted = null): self
    {
        // validation for constraint: float
        if (!is_null($valueAfterAccounted) && !(is_float($valueAfterAccounted) || is_numeric($valueAfterAccounted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueAfterAccounted, true), gettype($valueAfterAccounted)), __LINE__);
        }
        $this->valueAfterAccounted = $valueAfterAccounted;
        
        return $this;
    }
    /**
     * Get MidocoBankStatementEntryPurpose value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[]
     */
    public function getMidocoBankStatementEntryPurpose(): ?array
    {
        return $this->MidocoBankStatementEntryPurpose;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementEntryPurpose method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntryPurpose method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryPurposeForArrayConstraintFromSetMidocoBankStatementEntryPurpose(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBankStatementEntryMidocoBankStatementEntryPurposeItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementEntryMidocoBankStatementEntryPurposeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose) {
                $invalidValues[] = is_object($midocoBankStatementEntryMidocoBankStatementEntryPurposeItem) ? get_class($midocoBankStatementEntryMidocoBankStatementEntryPurposeItem) : sprintf('%s(%s)', gettype($midocoBankStatementEntryMidocoBankStatementEntryPurposeItem), var_export($midocoBankStatementEntryMidocoBankStatementEntryPurposeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntryPurpose property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntryPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[] $midocoBankStatementEntryPurpose
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setMidocoBankStatementEntryPurpose(?array $midocoBankStatementEntryPurpose = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryPurposeArrayErrorMessage = self::validateMidocoBankStatementEntryPurposeForArrayConstraintFromSetMidocoBankStatementEntryPurpose($midocoBankStatementEntryPurpose))) {
            throw new InvalidArgumentException($midocoBankStatementEntryPurposeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntryPurpose = $midocoBankStatementEntryPurpose;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntryPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function addToMidocoBankStatementEntryPurpose(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntryPurpose property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntryPurpose[] = $item;
        
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
        foreach ($values as $midocoBankStatementEntryMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementEntryMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($midocoBankStatementEntryMidocoBankBookingJournalItem) ? get_class($midocoBankStatementEntryMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($midocoBankStatementEntryMidocoBankBookingJournalItem), var_export($midocoBankStatementEntryMidocoBankBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
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
     * Get MidocoBankStatementEntryDetail value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail[]
     */
    public function getMidocoBankStatementEntryDetail(): ?array
    {
        return $this->MidocoBankStatementEntryDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementEntryDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntryDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryDetailForArrayConstraintFromSetMidocoBankStatementEntryDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBankStatementEntryMidocoBankStatementEntryDetailItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementEntryMidocoBankStatementEntryDetailItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail) {
                $invalidValues[] = is_object($midocoBankStatementEntryMidocoBankStatementEntryDetailItem) ? get_class($midocoBankStatementEntryMidocoBankStatementEntryDetailItem) : sprintf('%s(%s)', gettype($midocoBankStatementEntryMidocoBankStatementEntryDetailItem), var_export($midocoBankStatementEntryMidocoBankStatementEntryDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntryDetail property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntryDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail[] $midocoBankStatementEntryDetail
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setMidocoBankStatementEntryDetail(?array $midocoBankStatementEntryDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryDetailArrayErrorMessage = self::validateMidocoBankStatementEntryDetailForArrayConstraintFromSetMidocoBankStatementEntryDetail($midocoBankStatementEntryDetail))) {
            throw new InvalidArgumentException($midocoBankStatementEntryDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntryDetail = $midocoBankStatementEntryDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntryDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function addToMidocoBankStatementEntryDetail(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntryDetail property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntryDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBankStatementEntryCharge value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge[]
     */
    public function getMidocoBankStatementEntryCharge(): ?array
    {
        return $this->MidocoBankStatementEntryCharge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementEntryCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntryCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryChargeForArrayConstraintFromSetMidocoBankStatementEntryCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBankStatementEntryMidocoBankStatementEntryChargeItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementEntryMidocoBankStatementEntryChargeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge) {
                $invalidValues[] = is_object($midocoBankStatementEntryMidocoBankStatementEntryChargeItem) ? get_class($midocoBankStatementEntryMidocoBankStatementEntryChargeItem) : sprintf('%s(%s)', gettype($midocoBankStatementEntryMidocoBankStatementEntryChargeItem), var_export($midocoBankStatementEntryMidocoBankStatementEntryChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntryCharge property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntryCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge[] $midocoBankStatementEntryCharge
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setMidocoBankStatementEntryCharge(?array $midocoBankStatementEntryCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryChargeArrayErrorMessage = self::validateMidocoBankStatementEntryChargeForArrayConstraintFromSetMidocoBankStatementEntryCharge($midocoBankStatementEntryCharge))) {
            throw new InvalidArgumentException($midocoBankStatementEntryChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntryCharge = $midocoBankStatementEntryCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntryCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function addToMidocoBankStatementEntryCharge(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntryCharge property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryCharge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntryCharge[] = $item;
        
        return $this;
    }
    /**
     * Get extraPurpose value
     * @return string|null
     */
    public function getExtraPurpose(): ?string
    {
        return $this->extraPurpose;
    }
    /**
     * Set extraPurpose value
     * @param string $extraPurpose
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
     */
    public function setExtraPurpose(?string $extraPurpose = null): self
    {
        // validation for constraint: string
        if (!is_null($extraPurpose) && !is_string($extraPurpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraPurpose, true), gettype($extraPurpose)), __LINE__);
        }
        $this->extraPurpose = $extraPurpose;
        
        return $this;
    }
}
