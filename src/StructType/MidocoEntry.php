<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoEntry extends EntryDTO
{
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The dueAmount
     * @var float|null
     */
    protected ?float $dueAmount = null;
    /**
     * The originalDueAmount
     * @var float|null
     */
    protected ?float $originalDueAmount = null;
    /**
     * Constructor method for MidocoEntry
     * @uses MidocoEntry::setCustomerName()
     * @uses MidocoEntry::setDueAmount()
     * @uses MidocoEntry::setOriginalDueAmount()
     * @param string $customerName
     * @param float $dueAmount
     * @param float $originalDueAmount
     */
    public function __construct(?string $customerName = null, ?float $dueAmount = null, ?float $originalDueAmount = null)
    {
        $this
            ->setCustomerName($customerName)
            ->setDueAmount($dueAmount)
            ->setOriginalDueAmount($originalDueAmount);
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoEntry
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get dueAmount value
     * @return float|null
     */
    public function getDueAmount(): ?float
    {
        return $this->dueAmount;
    }
    /**
     * Set dueAmount value
     * @param float $dueAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoEntry
     */
    public function setDueAmount(?float $dueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dueAmount) && !(is_float($dueAmount) || is_numeric($dueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dueAmount, true), gettype($dueAmount)), __LINE__);
        }
        $this->dueAmount = $dueAmount;
        
        return $this;
    }
    /**
     * Get originalDueAmount value
     * @return float|null
     */
    public function getOriginalDueAmount(): ?float
    {
        return $this->originalDueAmount;
    }
    /**
     * Set originalDueAmount value
     * @param float $originalDueAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoEntry
     */
    public function setOriginalDueAmount(?float $originalDueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalDueAmount) && !(is_float($originalDueAmount) || is_numeric($originalDueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalDueAmount, true), gettype($originalDueAmount)), __LINE__);
        }
        $this->originalDueAmount = $originalDueAmount;
        
        return $this;
    }
}
