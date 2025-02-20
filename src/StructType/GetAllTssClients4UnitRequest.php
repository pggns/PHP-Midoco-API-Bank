<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllTssClients4UnitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllTssClients4UnitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The tssSystem
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * Constructor method for GetAllTssClients4UnitRequest
     * @uses GetAllTssClients4UnitRequest::setUnitName()
     * @uses GetAllTssClients4UnitRequest::setTssSystem()
     * @param string $unitName
     * @param string $tssSystem
     */
    public function __construct(?string $unitName = null, ?string $tssSystem = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTssSystem($tssSystem);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllTssClients4UnitRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get tssSystem value
     * @return string|null
     */
    public function getTssSystem(): ?string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllTssClients4UnitRequest
     */
    public function setTssSystem(?string $tssSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
        return $this;
    }
}
