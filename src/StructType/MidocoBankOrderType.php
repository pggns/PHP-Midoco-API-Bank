<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankOrderType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankOrderType extends MidocoBookingInfoType
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The totalPayment
     * @var float|null
     */
    protected ?float $totalPayment = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The packageService
     * @var bool|null
     */
    protected ?bool $packageService = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The entry
     * @var string|null
     */
    protected ?string $entry = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The entryRest
     * @var float|null
     */
    protected ?float $entryRest = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * Constructor method for MidocoBankOrderType
     * @uses MidocoBankOrderType::setDebitorNo()
     * @uses MidocoBankOrderType::setTotalPayment()
     * @uses MidocoBankOrderType::setInvoicedAmount()
     * @uses MidocoBankOrderType::setPackageService()
     * @uses MidocoBankOrderType::setDestinationKey()
     * @uses MidocoBankOrderType::setEntry()
     * @uses MidocoBankOrderType::setCreditAccount()
     * @uses MidocoBankOrderType::setEntryRest()
     * @uses MidocoBankOrderType::setDueDate()
     * @param string $debitorNo
     * @param float $totalPayment
     * @param float $invoicedAmount
     * @param bool $packageService
     * @param string $destinationKey
     * @param string $entry
     * @param string $creditAccount
     * @param float $entryRest
     * @param string $dueDate
     */
    public function __construct(?string $debitorNo = null, ?float $totalPayment = null, ?float $invoicedAmount = null, ?bool $packageService = null, ?string $destinationKey = null, ?string $entry = null, ?string $creditAccount = null, ?float $entryRest = null, ?string $dueDate = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setTotalPayment($totalPayment)
            ->setInvoicedAmount($invoicedAmount)
            ->setPackageService($packageService)
            ->setDestinationKey($destinationKey)
            ->setEntry($entry)
            ->setCreditAccount($creditAccount)
            ->setEntryRest($entryRest)
            ->setDueDate($dueDate);
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
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
     * Get totalPayment value
     * @return float|null
     */
    public function getTotalPayment(): ?float
    {
        return $this->totalPayment;
    }
    /**
     * Set totalPayment value
     * @param float $totalPayment
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
     */
    public function setTotalPayment(?float $totalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPayment) && !(is_float($totalPayment) || is_numeric($totalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPayment, true), gettype($totalPayment)), __LINE__);
        }
        $this->totalPayment = $totalPayment;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
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
     * Get entry value
     * @return string|null
     */
    public function getEntry(): ?string
    {
        return $this->entry;
    }
    /**
     * Set entry value
     * @param string $entry
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
     */
    public function setEntry(?string $entry = null): self
    {
        // validation for constraint: string
        if (!is_null($entry) && !is_string($entry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entry, true), gettype($entry)), __LINE__);
        }
        $this->entry = $entry;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
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
     * Get entryRest value
     * @return float|null
     */
    public function getEntryRest(): ?float
    {
        return $this->entryRest;
    }
    /**
     * Set entryRest value
     * @param float $entryRest
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
     */
    public function setEntryRest(?float $entryRest = null): self
    {
        // validation for constraint: float
        if (!is_null($entryRest) && !(is_float($entryRest) || is_numeric($entryRest))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($entryRest, true), gettype($entryRest)), __LINE__);
        }
        $this->entryRest = $entryRest;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOrderType
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
}
