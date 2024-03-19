<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRevenueInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoRevenueInfo extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The calculatedRevenueAmount
     * @var float|null
     */
    protected ?float $calculatedRevenueAmount = null;
    /**
     * Constructor method for MidocoRevenueInfo
     * @uses MidocoRevenueInfo::setItemId()
     * @uses MidocoRevenueInfo::setOrderNo()
     * @uses MidocoRevenueInfo::setSupplierId()
     * @uses MidocoRevenueInfo::setBookingId()
     * @uses MidocoRevenueInfo::setCalculatedRevenueAmount()
     * @param int $itemId
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param float $calculatedRevenueAmount
     */
    public function __construct(?int $itemId = null, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?float $calculatedRevenueAmount = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setCalculatedRevenueAmount($calculatedRevenueAmount);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get calculatedRevenueAmount value
     * @return float|null
     */
    public function getCalculatedRevenueAmount(): ?float
    {
        return $this->calculatedRevenueAmount;
    }
    /**
     * Set calculatedRevenueAmount value
     * @param float $calculatedRevenueAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo
     */
    public function setCalculatedRevenueAmount(?float $calculatedRevenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenueAmount) && !(is_float($calculatedRevenueAmount) || is_numeric($calculatedRevenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenueAmount, true), gettype($calculatedRevenueAmount)), __LINE__);
        }
        $this->calculatedRevenueAmount = $calculatedRevenueAmount;
        
        return $this;
    }
}
