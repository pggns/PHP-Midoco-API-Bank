<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseMidocoBankStatementEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BaseMidocoBankStatementEntry extends BankStatementEntryDTO
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
     * The preAccounted
     * @var bool|null
     */
    protected ?bool $preAccounted = null;
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
     * Constructor method for BaseMidocoBankStatementEntry
     * @uses BaseMidocoBankStatementEntry::setReceiptNo()
     * @uses BaseMidocoBankStatementEntry::setBookingText()
     * @uses BaseMidocoBankStatementEntry::setPreAccounted()
     * @uses BaseMidocoBankStatementEntry::setPurpose()
     * @uses BaseMidocoBankStatementEntry::setValueAfterAccounted()
     * @param string $receiptNo
     * @param string $bookingText
     * @param bool $preAccounted
     * @param string $purpose
     * @param float $valueAfterAccounted
     */
    public function __construct(?string $receiptNo = null, ?string $bookingText = null, ?bool $preAccounted = null, ?string $purpose = null, ?float $valueAfterAccounted = null)
    {
        $this
            ->setReceiptNo($receiptNo)
            ->setBookingText($bookingText)
            ->setPreAccounted($preAccounted)
            ->setPurpose($purpose)
            ->setValueAfterAccounted($valueAfterAccounted);
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
     * @return \Pggns\MidocoApi\Bank\StructType\BaseMidocoBankStatementEntry
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
     * @return \Pggns\MidocoApi\Bank\StructType\BaseMidocoBankStatementEntry
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
     * Get preAccounted value
     * @return bool|null
     */
    public function getPreAccounted(): ?bool
    {
        return $this->preAccounted;
    }
    /**
     * Set preAccounted value
     * @param bool $preAccounted
     * @return \Pggns\MidocoApi\Bank\StructType\BaseMidocoBankStatementEntry
     */
    public function setPreAccounted(?bool $preAccounted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preAccounted) && !is_bool($preAccounted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preAccounted, true), gettype($preAccounted)), __LINE__);
        }
        $this->preAccounted = $preAccounted;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\BaseMidocoBankStatementEntry
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
     * @return \Pggns\MidocoApi\Bank\StructType\BaseMidocoBankStatementEntry
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
}
