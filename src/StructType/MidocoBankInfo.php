<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankInfo extends BankNumberDTO
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The bankCountry
     * @var string|null
     */
    protected ?string $bankCountry = null;
    /**
     * Constructor method for MidocoBankInfo
     * @uses MidocoBankInfo::setAccountNo()
     * @uses MidocoBankInfo::setAccountOwner()
     * @uses MidocoBankInfo::setBankCountry()
     * @param string $accountNo
     * @param string $accountOwner
     * @param string $bankCountry
     */
    public function __construct(?string $accountNo = null, ?string $accountOwner = null, ?string $bankCountry = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountOwner($accountOwner)
            ->setBankCountry($bankCountry);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get bankCountry value
     * @return string|null
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }
    /**
     * Set bankCountry value
     * @param string $bankCountry
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo
     */
    public function setBankCountry(?string $bankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCountry) && !is_string($bankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountry, true), gettype($bankCountry)), __LINE__);
        }
        $this->bankCountry = $bankCountry;
        
        return $this;
    }
}
