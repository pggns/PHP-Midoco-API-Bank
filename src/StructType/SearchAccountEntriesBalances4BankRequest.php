<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountEntriesBalances4BankRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAccountEntriesBalances4BankRequest extends AbstractStructBase
{
    /**
     * The companyId
     * @var int|null
     */
    protected ?int $companyId = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The balancedMode
     * @var int|null
     */
    protected ?int $balancedMode = null;
    /**
     * The dueDateFrom
     * @var string|null
     */
    protected ?string $dueDateFrom = null;
    /**
     * The dueDateTo
     * @var string|null
     */
    protected ?string $dueDateTo = null;
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
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * Constructor method for SearchAccountEntriesBalances4BankRequest
     * @uses SearchAccountEntriesBalances4BankRequest::setCompanyId()
     * @uses SearchAccountEntriesBalances4BankRequest::setCreditAccount()
     * @uses SearchAccountEntriesBalances4BankRequest::setCompanyName()
     * @uses SearchAccountEntriesBalances4BankRequest::setSupplierName()
     * @uses SearchAccountEntriesBalances4BankRequest::setOrderNo()
     * @uses SearchAccountEntriesBalances4BankRequest::setStartTravel()
     * @uses SearchAccountEntriesBalances4BankRequest::setEndTravel()
     * @uses SearchAccountEntriesBalances4BankRequest::setBalancedMode()
     * @uses SearchAccountEntriesBalances4BankRequest::setDueDateFrom()
     * @uses SearchAccountEntriesBalances4BankRequest::setDueDateTo()
     * @uses SearchAccountEntriesBalances4BankRequest::setSupplierId()
     * @uses SearchAccountEntriesBalances4BankRequest::setBookingId()
     * @uses SearchAccountEntriesBalances4BankRequest::setReceiptNo()
     * @param int $companyId
     * @param string $creditAccount
     * @param string $companyName
     * @param string $supplierName
     * @param int $orderNo
     * @param string $startTravel
     * @param string $endTravel
     * @param int $balancedMode
     * @param string $dueDateFrom
     * @param string $dueDateTo
     * @param string $supplierId
     * @param string $bookingId
     * @param string $receiptNo
     */
    public function __construct(?int $companyId = null, ?string $creditAccount = null, ?string $companyName = null, ?string $supplierName = null, ?int $orderNo = null, ?string $startTravel = null, ?string $endTravel = null, ?int $balancedMode = null, ?string $dueDateFrom = null, ?string $dueDateTo = null, ?string $supplierId = null, ?string $bookingId = null, ?string $receiptNo = null)
    {
        $this
            ->setCompanyId($companyId)
            ->setCreditAccount($creditAccount)
            ->setCompanyName($companyName)
            ->setSupplierName($supplierName)
            ->setOrderNo($orderNo)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setBalancedMode($balancedMode)
            ->setDueDateFrom($dueDateFrom)
            ->setDueDateTo($dueDateTo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setReceiptNo($receiptNo);
    }
    /**
     * Get companyId value
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Set companyId value
     * @param int $companyId
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setCompanyId(?int $companyId = null): self
    {
        // validation for constraint: int
        if (!is_null($companyId) && !(is_int($companyId) || ctype_digit($companyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($companyId, true), gettype($companyId)), __LINE__);
        }
        $this->companyId = $companyId;
        
        return $this;
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
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
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get balancedMode value
     * @return int|null
     */
    public function getBalancedMode(): ?int
    {
        return $this->balancedMode;
    }
    /**
     * Set balancedMode value
     * @param int $balancedMode
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setBalancedMode(?int $balancedMode = null): self
    {
        // validation for constraint: int
        if (!is_null($balancedMode) && !(is_int($balancedMode) || ctype_digit($balancedMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($balancedMode, true), gettype($balancedMode)), __LINE__);
        }
        $this->balancedMode = $balancedMode;
        
        return $this;
    }
    /**
     * Get dueDateFrom value
     * @return string|null
     */
    public function getDueDateFrom(): ?string
    {
        return $this->dueDateFrom;
    }
    /**
     * Set dueDateFrom value
     * @param string $dueDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setDueDateFrom(?string $dueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateFrom) && !is_string($dueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateFrom, true), gettype($dueDateFrom)), __LINE__);
        }
        $this->dueDateFrom = $dueDateFrom;
        
        return $this;
    }
    /**
     * Get dueDateTo value
     * @return string|null
     */
    public function getDueDateTo(): ?string
    {
        return $this->dueDateTo;
    }
    /**
     * Set dueDateTo value
     * @param string $dueDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setDueDateTo(?string $dueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateTo) && !is_string($dueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateTo, true), gettype($dueDateTo)), __LINE__);
        }
        $this->dueDateTo = $dueDateTo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
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
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
}
