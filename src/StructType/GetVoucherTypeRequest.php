<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVoucherTypeRequest StructType
 * @subpackage Structs
 */
class GetVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoVoucherType
     * @var \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $MidocoVoucherType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The validNow
     * @var bool|null
     */
    protected ?bool $validNow = null;
    /**
     * Constructor method for GetVoucherTypeRequest
     * @uses GetVoucherTypeRequest::setMidocoVoucherType()
     * @uses GetVoucherTypeRequest::setSupplierId()
     * @uses GetVoucherTypeRequest::setValidNow()
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType
     * @param string $supplierId
     * @param bool $validNow
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType = null, ?string $supplierId = null, ?bool $validNow = null)
    {
        $this
            ->setMidocoVoucherType($midocoVoucherType)
            ->setSupplierId($supplierId)
            ->setValidNow($validNow);
    }
    /**
     * Get MidocoVoucherType value
     * @return \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO|null
     */
    public function getMidocoVoucherType(): ?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO
    {
        return $this->MidocoVoucherType;
    }
    /**
     * Set MidocoVoucherType value
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType
     * @return \Pggns\MidocoApi\Bank\StructType\GetVoucherTypeRequest
     */
    public function setMidocoVoucherType(?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType = null): self
    {
        $this->MidocoVoucherType = $midocoVoucherType;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetVoucherTypeRequest
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
     * Get validNow value
     * @return bool|null
     */
    public function getValidNow(): ?bool
    {
        return $this->validNow;
    }
    /**
     * Set validNow value
     * @param bool $validNow
     * @return \Pggns\MidocoApi\Bank\StructType\GetVoucherTypeRequest
     */
    public function setValidNow(?bool $validNow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validNow) && !is_bool($validNow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validNow, true), gettype($validNow)), __LINE__);
        }
        $this->validNow = $validNow;
        
        return $this;
    }
}
