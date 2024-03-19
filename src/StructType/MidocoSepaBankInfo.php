<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSepaBankInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSepaBankInfo extends MidocoBankInfo
{
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The mandateType
     * @var string|null
     */
    protected ?string $mandateType = null;
    /**
     * The usedCount
     * @var int|null
     */
    protected ?int $usedCount = null;
    /**
     * Constructor method for MidocoSepaBankInfo
     * @uses MidocoSepaBankInfo::setIban()
     * @uses MidocoSepaBankInfo::setSwiftBicCode()
     * @uses MidocoSepaBankInfo::setMandateReference()
     * @uses MidocoSepaBankInfo::setMandateType()
     * @uses MidocoSepaBankInfo::setUsedCount()
     * @param string $iban
     * @param string $swiftBicCode
     * @param string $mandateReference
     * @param string $mandateType
     * @param int $usedCount
     */
    public function __construct(?string $iban = null, ?string $swiftBicCode = null, ?string $mandateReference = null, ?string $mandateType = null, ?int $usedCount = null)
    {
        $this
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setMandateReference($mandateReference)
            ->setMandateType($mandateType)
            ->setUsedCount($usedCount);
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get swiftBicCode value
     * @return string|null
     */
    public function getSwiftBicCode(): ?string
    {
        return $this->swiftBicCode;
    }
    /**
     * Set swiftBicCode value
     * @param string $swiftBicCode
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
     */
    public function setSwiftBicCode(?string $swiftBicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftBicCode) && !is_string($swiftBicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftBicCode, true), gettype($swiftBicCode)), __LINE__);
        }
        $this->swiftBicCode = $swiftBicCode;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get mandateType value
     * @return string|null
     */
    public function getMandateType(): ?string
    {
        return $this->mandateType;
    }
    /**
     * Set mandateType value
     * @param string $mandateType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
     */
    public function setMandateType(?string $mandateType = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateType) && !is_string($mandateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateType, true), gettype($mandateType)), __LINE__);
        }
        $this->mandateType = $mandateType;
        
        return $this;
    }
    /**
     * Get usedCount value
     * @return int|null
     */
    public function getUsedCount(): ?int
    {
        return $this->usedCount;
    }
    /**
     * Set usedCount value
     * @param int $usedCount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
     */
    public function setUsedCount(?int $usedCount = null): self
    {
        // validation for constraint: int
        if (!is_null($usedCount) && !(is_int($usedCount) || ctype_digit($usedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usedCount, true), gettype($usedCount)), __LINE__);
        }
        $this->usedCount = $usedCount;
        
        return $this;
    }
}
