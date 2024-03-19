<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IBANImportExport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IBANImportExport extends AbstractStructBase
{
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The ident
     * @var string|null
     */
    protected ?string $ident = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The countryNew
     * @var string|null
     */
    protected ?string $countryNew = null;
    /**
     * The bicNew
     * @var string|null
     */
    protected ?string $bicNew = null;
    /**
     * The ibanNew
     * @var string|null
     */
    protected ?string $ibanNew = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * Constructor method for IBANImportExport
     * @uses IBANImportExport::setCountry()
     * @uses IBANImportExport::setIdent()
     * @uses IBANImportExport::setBankNo()
     * @uses IBANImportExport::setAccountNo()
     * @uses IBANImportExport::setCountryNew()
     * @uses IBANImportExport::setBicNew()
     * @uses IBANImportExport::setIbanNew()
     * @uses IBANImportExport::setErrorCode()
     * @uses IBANImportExport::setErrorText()
     * @param string $country
     * @param string $ident
     * @param string $bankNo
     * @param string $accountNo
     * @param string $countryNew
     * @param string $bicNew
     * @param string $ibanNew
     * @param string $errorCode
     * @param string $errorText
     */
    public function __construct(?string $country = null, ?string $ident = null, ?string $bankNo = null, ?string $accountNo = null, ?string $countryNew = null, ?string $bicNew = null, ?string $ibanNew = null, ?string $errorCode = null, ?string $errorText = null)
    {
        $this
            ->setCountry($country)
            ->setIdent($ident)
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setCountryNew($countryNew)
            ->setBicNew($bicNew)
            ->setIbanNew($ibanNew)
            ->setErrorCode($errorCode)
            ->setErrorText($errorText);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get ident value
     * @return string|null
     */
    public function getIdent(): ?string
    {
        return $this->ident;
    }
    /**
     * Set ident value
     * @param string $ident
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setIdent(?string $ident = null): self
    {
        // validation for constraint: string
        if (!is_null($ident) && !is_string($ident)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ident, true), gettype($ident)), __LINE__);
        }
        $this->ident = $ident;
        
        return $this;
    }
    /**
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
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
     * Get countryNew value
     * @return string|null
     */
    public function getCountryNew(): ?string
    {
        return $this->countryNew;
    }
    /**
     * Set countryNew value
     * @param string $countryNew
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setCountryNew(?string $countryNew = null): self
    {
        // validation for constraint: string
        if (!is_null($countryNew) && !is_string($countryNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryNew, true), gettype($countryNew)), __LINE__);
        }
        $this->countryNew = $countryNew;
        
        return $this;
    }
    /**
     * Get bicNew value
     * @return string|null
     */
    public function getBicNew(): ?string
    {
        return $this->bicNew;
    }
    /**
     * Set bicNew value
     * @param string $bicNew
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setBicNew(?string $bicNew = null): self
    {
        // validation for constraint: string
        if (!is_null($bicNew) && !is_string($bicNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bicNew, true), gettype($bicNew)), __LINE__);
        }
        $this->bicNew = $bicNew;
        
        return $this;
    }
    /**
     * Get ibanNew value
     * @return string|null
     */
    public function getIbanNew(): ?string
    {
        return $this->ibanNew;
    }
    /**
     * Set ibanNew value
     * @param string $ibanNew
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setIbanNew(?string $ibanNew = null): self
    {
        // validation for constraint: string
        if (!is_null($ibanNew) && !is_string($ibanNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ibanNew, true), gettype($ibanNew)), __LINE__);
        }
        $this->ibanNew = $ibanNew;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
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
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
}
