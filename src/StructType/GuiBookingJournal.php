<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuiBookingJournal StructType
 * @subpackage Structs
 */
class GuiBookingJournal extends BookingJournalDTO
{
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * The entryAmount
     * @var float|null
     */
    protected ?float $entryAmount = null;
    /**
     * The provWithVatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $provWithVatAmount = null;
    /**
     * The provWithoutVatAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $provWithoutVatAmount = null;
    /**
     * The provInsuranceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $provInsuranceAmount = null;
    /**
     * The provItemId
     * @var int|null
     */
    protected ?int $provItemId = null;
    /**
     * The provSupplierId
     * @var string|null
     */
    protected ?string $provSupplierId = null;
    /**
     * The provDestination
     * @var string|null
     */
    protected ?string $provDestination = null;
    /**
     * The provReceiptDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provReceiptDate = null;
    /**
     * The provReceiptNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provReceiptNo = null;
    /**
     * The provCostCentre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provCostCentre = null;
    /**
     * The provWVatAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provWVatAccount = null;
    /**
     * The provWOVatAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provWOVatAccount = null;
    /**
     * The provInsuranceAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $provInsuranceAccount = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * Constructor method for GuiBookingJournal
     * @uses GuiBookingJournal::setBookingType()
     * @uses GuiBookingJournal::setEntryAmount()
     * @uses GuiBookingJournal::setProvWithVatAmount()
     * @uses GuiBookingJournal::setProvWithoutVatAmount()
     * @uses GuiBookingJournal::setProvInsuranceAmount()
     * @uses GuiBookingJournal::setProvItemId()
     * @uses GuiBookingJournal::setProvSupplierId()
     * @uses GuiBookingJournal::setProvDestination()
     * @uses GuiBookingJournal::setProvReceiptDate()
     * @uses GuiBookingJournal::setProvReceiptNo()
     * @uses GuiBookingJournal::setProvCostCentre()
     * @uses GuiBookingJournal::setProvWVatAccount()
     * @uses GuiBookingJournal::setProvWOVatAccount()
     * @uses GuiBookingJournal::setProvInsuranceAccount()
     * @uses GuiBookingJournal::setErrorCode()
     * @uses GuiBookingJournal::setErrorBundle()
     * @param string $bookingType
     * @param float $entryAmount
     * @param float $provWithVatAmount
     * @param float $provWithoutVatAmount
     * @param float $provInsuranceAmount
     * @param int $provItemId
     * @param string $provSupplierId
     * @param string $provDestination
     * @param string $provReceiptDate
     * @param string $provReceiptNo
     * @param string $provCostCentre
     * @param string $provWVatAccount
     * @param string $provWOVatAccount
     * @param string $provInsuranceAccount
     * @param string $errorCode
     * @param string $errorBundle
     */
    public function __construct(?string $bookingType = null, ?float $entryAmount = null, ?float $provWithVatAmount = null, ?float $provWithoutVatAmount = null, ?float $provInsuranceAmount = null, ?int $provItemId = null, ?string $provSupplierId = null, ?string $provDestination = null, ?string $provReceiptDate = null, ?string $provReceiptNo = null, ?string $provCostCentre = null, ?string $provWVatAccount = null, ?string $provWOVatAccount = null, ?string $provInsuranceAccount = null, ?string $errorCode = null, ?string $errorBundle = null)
    {
        $this
            ->setBookingType($bookingType)
            ->setEntryAmount($entryAmount)
            ->setProvWithVatAmount($provWithVatAmount)
            ->setProvWithoutVatAmount($provWithoutVatAmount)
            ->setProvInsuranceAmount($provInsuranceAmount)
            ->setProvItemId($provItemId)
            ->setProvSupplierId($provSupplierId)
            ->setProvDestination($provDestination)
            ->setProvReceiptDate($provReceiptDate)
            ->setProvReceiptNo($provReceiptNo)
            ->setProvCostCentre($provCostCentre)
            ->setProvWVatAccount($provWVatAccount)
            ->setProvWOVatAccount($provWOVatAccount)
            ->setProvInsuranceAccount($provInsuranceAccount)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle);
    }
    /**
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
        return $this;
    }
    /**
     * Get entryAmount value
     * @return float|null
     */
    public function getEntryAmount(): ?float
    {
        return $this->entryAmount;
    }
    /**
     * Set entryAmount value
     * @param float $entryAmount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setEntryAmount(?float $entryAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($entryAmount) && !(is_float($entryAmount) || is_numeric($entryAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($entryAmount, true), gettype($entryAmount)), __LINE__);
        }
        $this->entryAmount = $entryAmount;
        
        return $this;
    }
    /**
     * Get provWithVatAmount value
     * @return float|null
     */
    public function getProvWithVatAmount(): ?float
    {
        return $this->provWithVatAmount;
    }
    /**
     * Set provWithVatAmount value
     * @param float $provWithVatAmount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvWithVatAmount(?float $provWithVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provWithVatAmount) && !(is_float($provWithVatAmount) || is_numeric($provWithVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provWithVatAmount, true), gettype($provWithVatAmount)), __LINE__);
        }
        $this->provWithVatAmount = $provWithVatAmount;
        
        return $this;
    }
    /**
     * Get provWithoutVatAmount value
     * @return float|null
     */
    public function getProvWithoutVatAmount(): ?float
    {
        return $this->provWithoutVatAmount;
    }
    /**
     * Set provWithoutVatAmount value
     * @param float $provWithoutVatAmount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvWithoutVatAmount(?float $provWithoutVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provWithoutVatAmount) && !(is_float($provWithoutVatAmount) || is_numeric($provWithoutVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provWithoutVatAmount, true), gettype($provWithoutVatAmount)), __LINE__);
        }
        $this->provWithoutVatAmount = $provWithoutVatAmount;
        
        return $this;
    }
    /**
     * Get provInsuranceAmount value
     * @return float|null
     */
    public function getProvInsuranceAmount(): ?float
    {
        return $this->provInsuranceAmount;
    }
    /**
     * Set provInsuranceAmount value
     * @param float $provInsuranceAmount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvInsuranceAmount(?float $provInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provInsuranceAmount) && !(is_float($provInsuranceAmount) || is_numeric($provInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provInsuranceAmount, true), gettype($provInsuranceAmount)), __LINE__);
        }
        $this->provInsuranceAmount = $provInsuranceAmount;
        
        return $this;
    }
    /**
     * Get provItemId value
     * @return int|null
     */
    public function getProvItemId(): ?int
    {
        return $this->provItemId;
    }
    /**
     * Set provItemId value
     * @param int $provItemId
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvItemId(?int $provItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($provItemId) && !(is_int($provItemId) || ctype_digit($provItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($provItemId, true), gettype($provItemId)), __LINE__);
        }
        $this->provItemId = $provItemId;
        
        return $this;
    }
    /**
     * Get provSupplierId value
     * @return string|null
     */
    public function getProvSupplierId(): ?string
    {
        return $this->provSupplierId;
    }
    /**
     * Set provSupplierId value
     * @param string $provSupplierId
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvSupplierId(?string $provSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($provSupplierId) && !is_string($provSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provSupplierId, true), gettype($provSupplierId)), __LINE__);
        }
        $this->provSupplierId = $provSupplierId;
        
        return $this;
    }
    /**
     * Get provDestination value
     * @return string|null
     */
    public function getProvDestination(): ?string
    {
        return $this->provDestination;
    }
    /**
     * Set provDestination value
     * @param string $provDestination
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvDestination(?string $provDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($provDestination) && !is_string($provDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provDestination, true), gettype($provDestination)), __LINE__);
        }
        $this->provDestination = $provDestination;
        
        return $this;
    }
    /**
     * Get provReceiptDate value
     * @return string|null
     */
    public function getProvReceiptDate(): ?string
    {
        return $this->provReceiptDate;
    }
    /**
     * Set provReceiptDate value
     * @param string $provReceiptDate
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvReceiptDate(?string $provReceiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($provReceiptDate) && !is_string($provReceiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provReceiptDate, true), gettype($provReceiptDate)), __LINE__);
        }
        $this->provReceiptDate = $provReceiptDate;
        
        return $this;
    }
    /**
     * Get provReceiptNo value
     * @return string|null
     */
    public function getProvReceiptNo(): ?string
    {
        return $this->provReceiptNo;
    }
    /**
     * Set provReceiptNo value
     * @param string $provReceiptNo
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvReceiptNo(?string $provReceiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($provReceiptNo) && !is_string($provReceiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provReceiptNo, true), gettype($provReceiptNo)), __LINE__);
        }
        $this->provReceiptNo = $provReceiptNo;
        
        return $this;
    }
    /**
     * Get provCostCentre value
     * @return string|null
     */
    public function getProvCostCentre(): ?string
    {
        return $this->provCostCentre;
    }
    /**
     * Set provCostCentre value
     * @param string $provCostCentre
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvCostCentre(?string $provCostCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($provCostCentre) && !is_string($provCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provCostCentre, true), gettype($provCostCentre)), __LINE__);
        }
        $this->provCostCentre = $provCostCentre;
        
        return $this;
    }
    /**
     * Get provWVatAccount value
     * @return string|null
     */
    public function getProvWVatAccount(): ?string
    {
        return $this->provWVatAccount;
    }
    /**
     * Set provWVatAccount value
     * @param string $provWVatAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvWVatAccount(?string $provWVatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWVatAccount) && !is_string($provWVatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWVatAccount, true), gettype($provWVatAccount)), __LINE__);
        }
        $this->provWVatAccount = $provWVatAccount;
        
        return $this;
    }
    /**
     * Get provWOVatAccount value
     * @return string|null
     */
    public function getProvWOVatAccount(): ?string
    {
        return $this->provWOVatAccount;
    }
    /**
     * Set provWOVatAccount value
     * @param string $provWOVatAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvWOVatAccount(?string $provWOVatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWOVatAccount) && !is_string($provWOVatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWOVatAccount, true), gettype($provWOVatAccount)), __LINE__);
        }
        $this->provWOVatAccount = $provWOVatAccount;
        
        return $this;
    }
    /**
     * Get provInsuranceAccount value
     * @return string|null
     */
    public function getProvInsuranceAccount(): ?string
    {
        return $this->provInsuranceAccount;
    }
    /**
     * Set provInsuranceAccount value
     * @param string $provInsuranceAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setProvInsuranceAccount(?string $provInsuranceAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provInsuranceAccount) && !is_string($provInsuranceAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provInsuranceAccount, true), gettype($provInsuranceAccount)), __LINE__);
        }
        $this->provInsuranceAccount = $provInsuranceAccount;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Bank\StructType\GuiBookingJournal
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
}
