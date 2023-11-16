<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckMidocoBankBookingJournalType StructType
 * @subpackage Structs
 */
class CheckMidocoBankBookingJournalType extends AbstractStructBase
{
    /**
     * The MidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - ref: MidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $MidocoBankBookingJournal = null;
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
     * Constructor method for CheckMidocoBankBookingJournalType
     * @uses CheckMidocoBankBookingJournalType::setMidocoBankBookingJournal()
     * @uses CheckMidocoBankBookingJournalType::setErrorCode()
     * @uses CheckMidocoBankBookingJournalType::setErrorBundle()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $midocoBankBookingJournal
     * @param string $errorCode
     * @param string $errorBundle
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $midocoBankBookingJournal = null, ?string $errorCode = null, ?string $errorBundle = null)
    {
        $this
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle);
    }
    /**
     * Get MidocoBankBookingJournal value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal|null
     */
    public function getMidocoBankBookingJournal(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal
    {
        return $this->MidocoBankBookingJournal;
    }
    /**
     * Set MidocoBankBookingJournal value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $midocoBankBookingJournal
     * @return \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType
     */
    public function setMidocoBankBookingJournal(?\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $midocoBankBookingJournal = null): self
    {
        $this->MidocoBankBookingJournal = $midocoBankBookingJournal;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType
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
     * @return \Pggns\MidocoApi\Bank\StructType\CheckMidocoBankBookingJournalType
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
