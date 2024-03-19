<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSearchBankCacheCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSearchBankCacheCriteriaType extends AbstractStructBase
{
    /**
     * The bankNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The contraAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contraAccount = null;
    /**
     * The creditDebit
     * @var string|null
     */
    protected ?string $creditDebit = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The matchText
     * @var string|null
     */
    protected ?string $matchText = null;
    /**
     * The automaticBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $automaticBooking = null;
    /**
     * The costUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The vatCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The matchAccountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $matchAccountNo = null;
    /**
     * Constructor method for MidocoSearchBankCacheCriteriaType
     * @uses MidocoSearchBankCacheCriteriaType::setBankNo()
     * @uses MidocoSearchBankCacheCriteriaType::setAccountNo()
     * @uses MidocoSearchBankCacheCriteriaType::setContraAccount()
     * @uses MidocoSearchBankCacheCriteriaType::setCreditDebit()
     * @uses MidocoSearchBankCacheCriteriaType::setType()
     * @uses MidocoSearchBankCacheCriteriaType::setMatchText()
     * @uses MidocoSearchBankCacheCriteriaType::setAutomaticBooking()
     * @uses MidocoSearchBankCacheCriteriaType::setCostUnit()
     * @uses MidocoSearchBankCacheCriteriaType::setCostCentre()
     * @uses MidocoSearchBankCacheCriteriaType::setVatCode()
     * @uses MidocoSearchBankCacheCriteriaType::setMatchAccountNo()
     * @param string $bankNo
     * @param string $accountNo
     * @param string $contraAccount
     * @param string $creditDebit
     * @param string $type
     * @param string $matchText
     * @param bool $automaticBooking
     * @param string $costUnit
     * @param string $costCentre
     * @param string $vatCode
     * @param string $matchAccountNo
     */
    public function __construct(?string $bankNo = null, ?string $accountNo = null, ?string $contraAccount = null, ?string $creditDebit = null, ?string $type = null, ?string $matchText = null, ?bool $automaticBooking = null, ?string $costUnit = null, ?string $costCentre = null, ?string $vatCode = null, ?string $matchAccountNo = null)
    {
        $this
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setContraAccount($contraAccount)
            ->setCreditDebit($creditDebit)
            ->setType($type)
            ->setMatchText($matchText)
            ->setAutomaticBooking($automaticBooking)
            ->setCostUnit($costUnit)
            ->setCostCentre($costCentre)
            ->setVatCode($vatCode)
            ->setMatchAccountNo($matchAccountNo);
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
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
     * Get contraAccount value
     * @return string|null
     */
    public function getContraAccount(): ?string
    {
        return $this->contraAccount;
    }
    /**
     * Set contraAccount value
     * @param string $contraAccount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setContraAccount(?string $contraAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccount) && !is_string($contraAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccount, true), gettype($contraAccount)), __LINE__);
        }
        $this->contraAccount = $contraAccount;
        
        return $this;
    }
    /**
     * Get creditDebit value
     * @return string|null
     */
    public function getCreditDebit(): ?string
    {
        return $this->creditDebit;
    }
    /**
     * Set creditDebit value
     * @param string $creditDebit
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setCreditDebit(?string $creditDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($creditDebit) && !is_string($creditDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditDebit, true), gettype($creditDebit)), __LINE__);
        }
        $this->creditDebit = $creditDebit;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get matchText value
     * @return string|null
     */
    public function getMatchText(): ?string
    {
        return $this->matchText;
    }
    /**
     * Set matchText value
     * @param string $matchText
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setMatchText(?string $matchText = null): self
    {
        // validation for constraint: string
        if (!is_null($matchText) && !is_string($matchText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchText, true), gettype($matchText)), __LINE__);
        }
        $this->matchText = $matchText;
        
        return $this;
    }
    /**
     * Get automaticBooking value
     * @return bool|null
     */
    public function getAutomaticBooking(): ?bool
    {
        return $this->automaticBooking;
    }
    /**
     * Set automaticBooking value
     * @param bool $automaticBooking
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setAutomaticBooking(?bool $automaticBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticBooking) && !is_bool($automaticBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticBooking, true), gettype($automaticBooking)), __LINE__);
        }
        $this->automaticBooking = $automaticBooking;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
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
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get matchAccountNo value
     * @return string|null
     */
    public function getMatchAccountNo(): ?string
    {
        return $this->matchAccountNo;
    }
    /**
     * Set matchAccountNo value
     * @param string $matchAccountNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
     */
    public function setMatchAccountNo(?string $matchAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($matchAccountNo) && !is_string($matchAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchAccountNo, true), gettype($matchAccountNo)), __LINE__);
        }
        $this->matchAccountNo = $matchAccountNo;
        
        return $this;
    }
}
