<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencySettlementOrderInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencySettlementOrderInfo extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * Constructor method for MidocoAgencySettlementOrderInfo
     * @uses MidocoAgencySettlementOrderInfo::setOrderId()
     * @uses MidocoAgencySettlementOrderInfo::setOrderNo()
     * @uses MidocoAgencySettlementOrderInfo::setAmount()
     * @uses MidocoAgencySettlementOrderInfo::setDebitorNo()
     * @uses MidocoAgencySettlementOrderInfo::setDepartureDate()
     * @uses MidocoAgencySettlementOrderInfo::setIsDeposit()
     * @uses MidocoAgencySettlementOrderInfo::setCustomerId()
     * @uses MidocoAgencySettlementOrderInfo::setInvoiceDate()
     * @uses MidocoAgencySettlementOrderInfo::setInvoiceNo()
     * @uses MidocoAgencySettlementOrderInfo::setEntryId()
     * @param int $orderId
     * @param int $orderNo
     * @param float $amount
     * @param string $debitorNo
     * @param string $departureDate
     * @param bool $isDeposit
     * @param int $customerId
     * @param string $invoiceDate
     * @param int $invoiceNo
     * @param string $entryId
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?float $amount = null, ?string $debitorNo = null, ?string $departureDate = null, ?bool $isDeposit = null, ?int $customerId = null, ?string $invoiceDate = null, ?int $invoiceNo = null, ?string $entryId = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setAmount($amount)
            ->setDebitorNo($debitorNo)
            ->setDepartureDate($departureDate)
            ->setIsDeposit($isDeposit)
            ->setCustomerId($customerId)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceNo($invoiceNo)
            ->setEntryId($entryId);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
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
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencySettlementOrderInfo
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
}
