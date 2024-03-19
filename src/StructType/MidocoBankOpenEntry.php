<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankOpenEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankOpenEntry extends DebitorAccountEntryType
{
    /**
     * The assignedAmount
     * @var float|null
     */
    protected ?float $assignedAmount = null;
    /**
     * Constructor method for MidocoBankOpenEntry
     * @uses MidocoBankOpenEntry::setAssignedAmount()
     * @param float $assignedAmount
     */
    public function __construct(?float $assignedAmount = null)
    {
        $this
            ->setAssignedAmount($assignedAmount);
    }
    /**
     * Get assignedAmount value
     * @return float|null
     */
    public function getAssignedAmount(): ?float
    {
        return $this->assignedAmount;
    }
    /**
     * Set assignedAmount value
     * @param float $assignedAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOpenEntry
     */
    public function setAssignedAmount(?float $assignedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($assignedAmount) && !(is_float($assignedAmount) || is_numeric($assignedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assignedAmount, true), gettype($assignedAmount)), __LINE__);
        }
        $this->assignedAmount = $assignedAmount;
        
        return $this;
    }
}
