<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFeeTypeForOrgunitRequest StructType
 * @subpackage Structs
 */
class SaveFeeTypeForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $MidocoFeeTypeOrgUnit = null;
    /**
     * The lastOrgUnit
     * @var string|null
     */
    protected ?string $lastOrgUnit = null;
    /**
     * Constructor method for SaveFeeTypeForOrgunitRequest
     * @uses SaveFeeTypeForOrgunitRequest::setMidocoFeeTypeOrgUnit()
     * @uses SaveFeeTypeForOrgunitRequest::setLastOrgUnit()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @param string $lastOrgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null, ?string $lastOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit)
            ->setLastOrgUnit($lastOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit|null
     */
    public function getMidocoFeeTypeOrgUnit(): ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Bank\StructType\SaveFeeTypeForOrgunitRequest
     */
    public function setMidocoFeeTypeOrgUnit(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null): self
    {
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
    /**
     * Get lastOrgUnit value
     * @return string|null
     */
    public function getLastOrgUnit(): ?string
    {
        return $this->lastOrgUnit;
    }
    /**
     * Set lastOrgUnit value
     * @param string $lastOrgUnit
     * @return \Pggns\MidocoApi\Bank\StructType\SaveFeeTypeForOrgunitRequest
     */
    public function setLastOrgUnit(?string $lastOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($lastOrgUnit) && !is_string($lastOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOrgUnit, true), gettype($lastOrgUnit)), __LINE__);
        }
        $this->lastOrgUnit = $lastOrgUnit;
        
        return $this;
    }
}
