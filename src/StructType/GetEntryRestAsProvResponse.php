<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryRestAsProvResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEntryRestAsProvResponse extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The entryRest
     * @var float|null
     */
    protected ?float $entryRest = null;
    /**
     * The originalEntryRest
     * @var float|null
     */
    protected ?float $originalEntryRest = null;
    /**
     * The provWithVat
     * @var float|null
     */
    protected ?float $provWithVat = null;
    /**
     * The provWithoutVat
     * @var float|null
     */
    protected ?float $provWithoutVat = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costUnit
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The provWithVatAccount
     * @var string|null
     */
    protected ?string $provWithVatAccount = null;
    /**
     * The provWithoutVatAccount
     * @var string|null
     */
    protected ?string $provWithoutVatAccount = null;
    /**
     * The provInsuranceAccount
     * @var string|null
     */
    protected ?string $provInsuranceAccount = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: order:RevenueBookingInfo
     * @var \Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * Constructor method for GetEntryRestAsProvResponse
     * @uses GetEntryRestAsProvResponse::setItemId()
     * @uses GetEntryRestAsProvResponse::setEntryRest()
     * @uses GetEntryRestAsProvResponse::setOriginalEntryRest()
     * @uses GetEntryRestAsProvResponse::setProvWithVat()
     * @uses GetEntryRestAsProvResponse::setProvWithoutVat()
     * @uses GetEntryRestAsProvResponse::setCostCentre()
     * @uses GetEntryRestAsProvResponse::setCostUnit()
     * @uses GetEntryRestAsProvResponse::setCustomerName()
     * @uses GetEntryRestAsProvResponse::setProvWithVatAccount()
     * @uses GetEntryRestAsProvResponse::setProvWithoutVatAccount()
     * @uses GetEntryRestAsProvResponse::setProvInsuranceAccount()
     * @uses GetEntryRestAsProvResponse::setTravelDate()
     * @uses GetEntryRestAsProvResponse::setRevenueBookingInfo()
     * @uses GetEntryRestAsProvResponse::setBookingText()
     * @param int $itemId
     * @param float $entryRest
     * @param float $originalEntryRest
     * @param float $provWithVat
     * @param float $provWithoutVat
     * @param string $costCentre
     * @param string $costUnit
     * @param string $customerName
     * @param string $provWithVatAccount
     * @param string $provWithoutVatAccount
     * @param string $provInsuranceAccount
     * @param string $travelDate
     * @param \Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @param string $bookingText
     */
    public function __construct(?int $itemId = null, ?float $entryRest = null, ?float $originalEntryRest = null, ?float $provWithVat = null, ?float $provWithoutVat = null, ?string $costCentre = null, ?string $costUnit = null, ?string $customerName = null, ?string $provWithVatAccount = null, ?string $provWithoutVatAccount = null, ?string $provInsuranceAccount = null, ?string $travelDate = null, ?\Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType $revenueBookingInfo = null, ?string $bookingText = null)
    {
        $this
            ->setItemId($itemId)
            ->setEntryRest($entryRest)
            ->setOriginalEntryRest($originalEntryRest)
            ->setProvWithVat($provWithVat)
            ->setProvWithoutVat($provWithoutVat)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCustomerName($customerName)
            ->setProvWithVatAccount($provWithVatAccount)
            ->setProvWithoutVatAccount($provWithoutVatAccount)
            ->setProvInsuranceAccount($provInsuranceAccount)
            ->setTravelDate($travelDate)
            ->setRevenueBookingInfo($revenueBookingInfo)
            ->setBookingText($bookingText);
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
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
     * Get originalEntryRest value
     * @return float|null
     */
    public function getOriginalEntryRest(): ?float
    {
        return $this->originalEntryRest;
    }
    /**
     * Set originalEntryRest value
     * @param float $originalEntryRest
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setOriginalEntryRest(?float $originalEntryRest = null): self
    {
        // validation for constraint: float
        if (!is_null($originalEntryRest) && !(is_float($originalEntryRest) || is_numeric($originalEntryRest))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalEntryRest, true), gettype($originalEntryRest)), __LINE__);
        }
        $this->originalEntryRest = $originalEntryRest;
        
        return $this;
    }
    /**
     * Get provWithVat value
     * @return float|null
     */
    public function getProvWithVat(): ?float
    {
        return $this->provWithVat;
    }
    /**
     * Set provWithVat value
     * @param float $provWithVat
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setProvWithVat(?float $provWithVat = null): self
    {
        // validation for constraint: float
        if (!is_null($provWithVat) && !(is_float($provWithVat) || is_numeric($provWithVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provWithVat, true), gettype($provWithVat)), __LINE__);
        }
        $this->provWithVat = $provWithVat;
        
        return $this;
    }
    /**
     * Get provWithoutVat value
     * @return float|null
     */
    public function getProvWithoutVat(): ?float
    {
        return $this->provWithoutVat;
    }
    /**
     * Set provWithoutVat value
     * @param float $provWithoutVat
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setProvWithoutVat(?float $provWithoutVat = null): self
    {
        // validation for constraint: float
        if (!is_null($provWithoutVat) && !(is_float($provWithoutVat) || is_numeric($provWithoutVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provWithoutVat, true), gettype($provWithoutVat)), __LINE__);
        }
        $this->provWithoutVat = $provWithoutVat;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get costUnit value
     * @return string|null
     */
    public function getCostUnit(): ?string
    {
        return $this->costUnit;
    }
    /**
     * Set costUnit value
     * @param string $costUnit
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setCostUnit(?string $costUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($costUnit) && !is_string($costUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costUnit, true), gettype($costUnit)), __LINE__);
        }
        $this->costUnit = $costUnit;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get provWithVatAccount value
     * @return string|null
     */
    public function getProvWithVatAccount(): ?string
    {
        return $this->provWithVatAccount;
    }
    /**
     * Set provWithVatAccount value
     * @param string $provWithVatAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setProvWithVatAccount(?string $provWithVatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWithVatAccount) && !is_string($provWithVatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWithVatAccount, true), gettype($provWithVatAccount)), __LINE__);
        }
        $this->provWithVatAccount = $provWithVatAccount;
        
        return $this;
    }
    /**
     * Get provWithoutVatAccount value
     * @return string|null
     */
    public function getProvWithoutVatAccount(): ?string
    {
        return $this->provWithoutVatAccount;
    }
    /**
     * Set provWithoutVatAccount value
     * @param string $provWithoutVatAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setProvWithoutVatAccount(?string $provWithoutVatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWithoutVatAccount) && !is_string($provWithoutVatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWithoutVatAccount, true), gettype($provWithoutVatAccount)), __LINE__);
        }
        $this->provWithoutVatAccount = $provWithoutVatAccount;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
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
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType|null
     */
    public function getRevenueBookingInfo(): ?\Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * Set RevenueBookingInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Bank\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvResponse
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
}
