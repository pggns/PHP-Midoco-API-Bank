<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankStatementAccountWithDiff StructType
 * @subpackage Structs
 */
class MidocoBankStatementAccountWithDiff extends MidocoBankStatementAccountType
{
    /**
     * The diffAmount
     * @var float|null
     */
    protected ?float $diffAmount = null;
    /**
     * Constructor method for MidocoBankStatementAccountWithDiff
     * @uses MidocoBankStatementAccountWithDiff::setDiffAmount()
     * @param float $diffAmount
     */
    public function __construct(?float $diffAmount = null)
    {
        $this
            ->setDiffAmount($diffAmount);
    }
    /**
     * Get diffAmount value
     * @return float|null
     */
    public function getDiffAmount(): ?float
    {
        return $this->diffAmount;
    }
    /**
     * Set diffAmount value
     * @param float $diffAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff
     */
    public function setDiffAmount(?float $diffAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($diffAmount) && !(is_float($diffAmount) || is_numeric($diffAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($diffAmount, true), gettype($diffAmount)), __LINE__);
        }
        $this->diffAmount = $diffAmount;
        
        return $this;
    }
}
