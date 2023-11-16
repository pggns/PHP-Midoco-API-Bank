<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyInfo StructType
 * @subpackage Structs
 */
class MidocoAgencyInfo extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The agencyName
     * @var string|null
     */
    protected ?string $agencyName = null;
    /**
     * The collectiveInvoicePrint
     * @var bool|null
     */
    protected ?bool $collectiveInvoicePrint = null;
    /**
     * The directDebitPayment
     * @var bool|null
     */
    protected ?bool $directDebitPayment = null;
    /**
     * The paymentDelay
     * @var int|null
     */
    protected ?int $paymentDelay = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The bankTransferCollective
     * @var int|null
     */
    protected ?int $bankTransferCollective = null;
    /**
     * Constructor method for MidocoAgencyInfo
     * @uses MidocoAgencyInfo::setAgencyId()
     * @uses MidocoAgencyInfo::setAgencyName()
     * @uses MidocoAgencyInfo::setCollectiveInvoicePrint()
     * @uses MidocoAgencyInfo::setDirectDebitPayment()
     * @uses MidocoAgencyInfo::setPaymentDelay()
     * @uses MidocoAgencyInfo::setCustomerId()
     * @uses MidocoAgencyInfo::setBankTransferCollective()
     * @param string $agencyId
     * @param string $agencyName
     * @param bool $collectiveInvoicePrint
     * @param bool $directDebitPayment
     * @param int $paymentDelay
     * @param int $customerId
     * @param int $bankTransferCollective
     */
    public function __construct(?string $agencyId = null, ?string $agencyName = null, ?bool $collectiveInvoicePrint = null, ?bool $directDebitPayment = null, ?int $paymentDelay = null, ?int $customerId = null, ?int $bankTransferCollective = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setAgencyName($agencyName)
            ->setCollectiveInvoicePrint($collectiveInvoicePrint)
            ->setDirectDebitPayment($directDebitPayment)
            ->setPaymentDelay($paymentDelay)
            ->setCustomerId($customerId)
            ->setBankTransferCollective($bankTransferCollective);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get agencyName value
     * @return string|null
     */
    public function getAgencyName(): ?string
    {
        return $this->agencyName;
    }
    /**
     * Set agencyName value
     * @param string $agencyName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setAgencyName(?string $agencyName = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyName) && !is_string($agencyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyName, true), gettype($agencyName)), __LINE__);
        }
        $this->agencyName = $agencyName;
        
        return $this;
    }
    /**
     * Get collectiveInvoicePrint value
     * @return bool|null
     */
    public function getCollectiveInvoicePrint(): ?bool
    {
        return $this->collectiveInvoicePrint;
    }
    /**
     * Set collectiveInvoicePrint value
     * @param bool $collectiveInvoicePrint
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setCollectiveInvoicePrint(?bool $collectiveInvoicePrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoicePrint) && !is_bool($collectiveInvoicePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoicePrint, true), gettype($collectiveInvoicePrint)), __LINE__);
        }
        $this->collectiveInvoicePrint = $collectiveInvoicePrint;
        
        return $this;
    }
    /**
     * Get directDebitPayment value
     * @return bool|null
     */
    public function getDirectDebitPayment(): ?bool
    {
        return $this->directDebitPayment;
    }
    /**
     * Set directDebitPayment value
     * @param bool $directDebitPayment
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setDirectDebitPayment(?bool $directDebitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($directDebitPayment) && !is_bool($directDebitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($directDebitPayment, true), gettype($directDebitPayment)), __LINE__);
        }
        $this->directDebitPayment = $directDebitPayment;
        
        return $this;
    }
    /**
     * Get paymentDelay value
     * @return int|null
     */
    public function getPaymentDelay(): ?int
    {
        return $this->paymentDelay;
    }
    /**
     * Set paymentDelay value
     * @param int $paymentDelay
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setPaymentDelay(?int $paymentDelay = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentDelay) && !(is_int($paymentDelay) || ctype_digit($paymentDelay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentDelay, true), gettype($paymentDelay)), __LINE__);
        }
        $this->paymentDelay = $paymentDelay;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
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
     * Get bankTransferCollective value
     * @return int|null
     */
    public function getBankTransferCollective(): ?int
    {
        return $this->bankTransferCollective;
    }
    /**
     * Set bankTransferCollective value
     * @param int $bankTransferCollective
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAgencyInfo
     */
    public function setBankTransferCollective(?int $bankTransferCollective = null): self
    {
        // validation for constraint: int
        if (!is_null($bankTransferCollective) && !(is_int($bankTransferCollective) || ctype_digit($bankTransferCollective))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankTransferCollective, true), gettype($bankTransferCollective)), __LINE__);
        }
        $this->bankTransferCollective = $bankTransferCollective;
        
        return $this;
    }
}
