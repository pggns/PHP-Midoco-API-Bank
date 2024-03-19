<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCreditor4SupplierSettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCreditor4SupplierSettlementRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The packageService
     * @var bool|null
     */
    protected ?bool $packageService = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for SearchCreditor4SupplierSettlementRequest
     * @uses SearchCreditor4SupplierSettlementRequest::setUnitName()
     * @uses SearchCreditor4SupplierSettlementRequest::setSupplierId()
     * @uses SearchCreditor4SupplierSettlementRequest::setTravelType()
     * @uses SearchCreditor4SupplierSettlementRequest::setDestinationKey()
     * @uses SearchCreditor4SupplierSettlementRequest::setPackageService()
     * @uses SearchCreditor4SupplierSettlementRequest::setSettlementType()
     * @uses SearchCreditor4SupplierSettlementRequest::setIsStorno()
     * @uses SearchCreditor4SupplierSettlementRequest::setCreationDate()
     * @uses SearchCreditor4SupplierSettlementRequest::setTravelDate()
     * @param string $unitName
     * @param string $supplierId
     * @param string $travelType
     * @param string $destinationKey
     * @param bool $packageService
     * @param string $settlementType
     * @param bool $isStorno
     * @param string $creationDate
     * @param string $travelDate
     */
    public function __construct(?string $unitName = null, ?string $supplierId = null, ?string $travelType = null, ?string $destinationKey = null, ?bool $packageService = null, ?string $settlementType = null, ?bool $isStorno = null, ?string $creationDate = null, ?string $travelDate = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSupplierId($supplierId)
            ->setTravelType($travelType)
            ->setDestinationKey($destinationKey)
            ->setPackageService($packageService)
            ->setSettlementType($settlementType)
            ->setIsStorno($isStorno)
            ->setCreationDate($creationDate)
            ->setTravelDate($travelDate);
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get packageService value
     * @return bool|null
     */
    public function getPackageService(): ?bool
    {
        return $this->packageService;
    }
    /**
     * Set packageService value
     * @param bool $packageService
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setPackageService(?bool $packageService = null): self
    {
        // validation for constraint: boolean
        if (!is_null($packageService) && !is_bool($packageService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($packageService, true), gettype($packageService)), __LINE__);
        }
        $this->packageService = $packageService;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
}
