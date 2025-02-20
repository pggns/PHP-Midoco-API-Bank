<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssClient4UnitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTssClient4UnitRequest extends AbstractStructBase
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
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for GetTssClient4UnitRequest
     * @uses GetTssClient4UnitRequest::setUnitName()
     * @uses GetTssClient4UnitRequest::setTssSystem()
     * @uses GetTssClient4UnitRequest::setTssId()
     * @param string $unitName
     * @param string $tssSystem
     * @param string $tssId
     */
    public function __construct(?string $unitName = null, ?string $tssSystem = null, ?string $tssId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setTssSystem($tssSystem)
            ->setTssId($tssId);
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetTssClient4UnitRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetTssClient4UnitRequest
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
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Bank\StructType\GetTssClient4UnitRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
}
