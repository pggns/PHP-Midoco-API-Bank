<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankBookingJournal StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankBookingJournal extends BankBookingJournalDTO
{
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
     * The errorParameters
     * @var string|null
     */
    protected ?string $errorParameters = null;
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * Constructor method for MidocoBankBookingJournal
     * @uses MidocoBankBookingJournal::setErrorCode()
     * @uses MidocoBankBookingJournal::setErrorBundle()
     * @uses MidocoBankBookingJournal::setErrorParameters()
     * @uses MidocoBankBookingJournal::setBookingPeriod()
     * @uses MidocoBankBookingJournal::setBookingYear()
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorParameters
     * @param int $bookingPeriod
     * @param int $bookingYear
     */
    public function __construct(?string $errorCode = null, ?string $errorBundle = null, ?string $errorParameters = null, ?int $bookingPeriod = null, ?int $bookingYear = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorParameters($errorParameters)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear);
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
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
    /**
     * Get errorParameters value
     * @return string|null
     */
    public function getErrorParameters(): ?string
    {
        return $this->errorParameters;
    }
    /**
     * Set errorParameters value
     * @param string $errorParameters
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
     */
    public function setErrorParameters(?string $errorParameters = null): self
    {
        // validation for constraint: string
        if (!is_null($errorParameters) && !is_string($errorParameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorParameters, true), gettype($errorParameters)), __LINE__);
        }
        $this->errorParameters = $errorParameters;
        
        return $this;
    }
    /**
     * Get bookingPeriod value
     * @return int|null
     */
    public function getBookingPeriod(): ?int
    {
        return $this->bookingPeriod;
    }
    /**
     * Set bookingPeriod value
     * @param int $bookingPeriod
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
     */
    public function setBookingPeriod(?int $bookingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriod) && !(is_int($bookingPeriod) || ctype_digit($bookingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriod, true), gettype($bookingPeriod)), __LINE__);
        }
        $this->bookingPeriod = $bookingPeriod;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
}
