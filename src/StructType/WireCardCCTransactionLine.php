<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WireCardCCTransactionLine StructType
 * @subpackage Structs
 */
class WireCardCCTransactionLine extends AbstractStructBase
{
    /**
     * The CardID
     * @var string|null
     */
    protected ?string $CardID = null;
    /**
     * The TransactionDate
     * @var string|null
     */
    protected ?string $TransactionDate = null;
    /**
     * The TransactionTime
     * @var string|null
     */
    protected ?string $TransactionTime = null;
    /**
     * The TransactionType
     * @var string|null
     */
    protected ?string $TransactionType = null;
    /**
     * The MerchantName
     * @var string|null
     */
    protected ?string $MerchantName = null;
    /**
     * The MerchantCountry
     * @var string|null
     */
    protected ?string $MerchantCountry = null;
    /**
     * The MerchantCity
     * @var string|null
     */
    protected ?string $MerchantCity = null;
    /**
     * The TransactionAmount
     * @var string|null
     */
    protected ?string $TransactionAmount = null;
    /**
     * The TransactionCurrency
     * @var string|null
     */
    protected ?string $TransactionCurrency = null;
    /**
     * The CreditCardBalance
     * @var string|null
     */
    protected ?string $CreditCardBalance = null;
    /**
     * The CardCurrency
     * @var string|null
     */
    protected ?string $CardCurrency = null;
    /**
     * The Authorizationcode
     * @var string|null
     */
    protected ?string $Authorizationcode = null;
    /**
     * The ExportTimeStamp
     * @var string|null
     */
    protected ?string $ExportTimeStamp = null;
    /**
     * The CardCurrencyAmount
     * @var string|null
     */
    protected ?string $CardCurrencyAmount = null;
    /**
     * The LastBalanceTimeStamp
     * @var string|null
     */
    protected ?string $LastBalanceTimeStamp = null;
    /**
     * The CorporateAccountCurrencyAmount
     * @var string|null
     */
    protected ?string $CorporateAccountCurrencyAmount = null;
    /**
     * The CorporateAccountCurrency
     * @var string|null
     */
    protected ?string $CorporateAccountCurrency = null;
    /**
     * The User
     * @var string|null
     */
    protected ?string $User = null;
    /**
     * Constructor method for WireCardCCTransactionLine
     * @uses WireCardCCTransactionLine::setCardID()
     * @uses WireCardCCTransactionLine::setTransactionDate()
     * @uses WireCardCCTransactionLine::setTransactionTime()
     * @uses WireCardCCTransactionLine::setTransactionType()
     * @uses WireCardCCTransactionLine::setMerchantName()
     * @uses WireCardCCTransactionLine::setMerchantCountry()
     * @uses WireCardCCTransactionLine::setMerchantCity()
     * @uses WireCardCCTransactionLine::setTransactionAmount()
     * @uses WireCardCCTransactionLine::setTransactionCurrency()
     * @uses WireCardCCTransactionLine::setCreditCardBalance()
     * @uses WireCardCCTransactionLine::setCardCurrency()
     * @uses WireCardCCTransactionLine::setAuthorizationcode()
     * @uses WireCardCCTransactionLine::setExportTimeStamp()
     * @uses WireCardCCTransactionLine::setCardCurrencyAmount()
     * @uses WireCardCCTransactionLine::setLastBalanceTimeStamp()
     * @uses WireCardCCTransactionLine::setCorporateAccountCurrencyAmount()
     * @uses WireCardCCTransactionLine::setCorporateAccountCurrency()
     * @uses WireCardCCTransactionLine::setUser()
     * @param string $cardID
     * @param string $transactionDate
     * @param string $transactionTime
     * @param string $transactionType
     * @param string $merchantName
     * @param string $merchantCountry
     * @param string $merchantCity
     * @param string $transactionAmount
     * @param string $transactionCurrency
     * @param string $creditCardBalance
     * @param string $cardCurrency
     * @param string $authorizationcode
     * @param string $exportTimeStamp
     * @param string $cardCurrencyAmount
     * @param string $lastBalanceTimeStamp
     * @param string $corporateAccountCurrencyAmount
     * @param string $corporateAccountCurrency
     * @param string $user
     */
    public function __construct(?string $cardID = null, ?string $transactionDate = null, ?string $transactionTime = null, ?string $transactionType = null, ?string $merchantName = null, ?string $merchantCountry = null, ?string $merchantCity = null, ?string $transactionAmount = null, ?string $transactionCurrency = null, ?string $creditCardBalance = null, ?string $cardCurrency = null, ?string $authorizationcode = null, ?string $exportTimeStamp = null, ?string $cardCurrencyAmount = null, ?string $lastBalanceTimeStamp = null, ?string $corporateAccountCurrencyAmount = null, ?string $corporateAccountCurrency = null, ?string $user = null)
    {
        $this
            ->setCardID($cardID)
            ->setTransactionDate($transactionDate)
            ->setTransactionTime($transactionTime)
            ->setTransactionType($transactionType)
            ->setMerchantName($merchantName)
            ->setMerchantCountry($merchantCountry)
            ->setMerchantCity($merchantCity)
            ->setTransactionAmount($transactionAmount)
            ->setTransactionCurrency($transactionCurrency)
            ->setCreditCardBalance($creditCardBalance)
            ->setCardCurrency($cardCurrency)
            ->setAuthorizationcode($authorizationcode)
            ->setExportTimeStamp($exportTimeStamp)
            ->setCardCurrencyAmount($cardCurrencyAmount)
            ->setLastBalanceTimeStamp($lastBalanceTimeStamp)
            ->setCorporateAccountCurrencyAmount($corporateAccountCurrencyAmount)
            ->setCorporateAccountCurrency($corporateAccountCurrency)
            ->setUser($user);
    }
    /**
     * Get CardID value
     * @return string|null
     */
    public function getCardID(): ?string
    {
        return $this->CardID;
    }
    /**
     * Set CardID value
     * @param string $cardID
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCardID(?string $cardID = null): self
    {
        // validation for constraint: string
        if (!is_null($cardID) && !is_string($cardID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardID, true), gettype($cardID)), __LINE__);
        }
        $this->CardID = $cardID;
        
        return $this;
    }
    /**
     * Get TransactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;
        
        return $this;
    }
    /**
     * Get TransactionTime value
     * @return string|null
     */
    public function getTransactionTime(): ?string
    {
        return $this->TransactionTime;
    }
    /**
     * Set TransactionTime value
     * @param string $transactionTime
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setTransactionTime(?string $transactionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionTime) && !is_string($transactionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionTime, true), gettype($transactionTime)), __LINE__);
        }
        $this->TransactionTime = $transactionTime;
        
        return $this;
    }
    /**
     * Get TransactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->TransactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get MerchantName value
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->MerchantName;
    }
    /**
     * Set MerchantName value
     * @param string $merchantName
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setMerchantName(?string $merchantName = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantName) && !is_string($merchantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantName, true), gettype($merchantName)), __LINE__);
        }
        $this->MerchantName = $merchantName;
        
        return $this;
    }
    /**
     * Get MerchantCountry value
     * @return string|null
     */
    public function getMerchantCountry(): ?string
    {
        return $this->MerchantCountry;
    }
    /**
     * Set MerchantCountry value
     * @param string $merchantCountry
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setMerchantCountry(?string $merchantCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantCountry) && !is_string($merchantCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantCountry, true), gettype($merchantCountry)), __LINE__);
        }
        $this->MerchantCountry = $merchantCountry;
        
        return $this;
    }
    /**
     * Get MerchantCity value
     * @return string|null
     */
    public function getMerchantCity(): ?string
    {
        return $this->MerchantCity;
    }
    /**
     * Set MerchantCity value
     * @param string $merchantCity
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setMerchantCity(?string $merchantCity = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantCity) && !is_string($merchantCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantCity, true), gettype($merchantCity)), __LINE__);
        }
        $this->MerchantCity = $merchantCity;
        
        return $this;
    }
    /**
     * Get TransactionAmount value
     * @return string|null
     */
    public function getTransactionAmount(): ?string
    {
        return $this->TransactionAmount;
    }
    /**
     * Set TransactionAmount value
     * @param string $transactionAmount
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setTransactionAmount(?string $transactionAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionAmount) && !is_string($transactionAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionAmount, true), gettype($transactionAmount)), __LINE__);
        }
        $this->TransactionAmount = $transactionAmount;
        
        return $this;
    }
    /**
     * Get TransactionCurrency value
     * @return string|null
     */
    public function getTransactionCurrency(): ?string
    {
        return $this->TransactionCurrency;
    }
    /**
     * Set TransactionCurrency value
     * @param string $transactionCurrency
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setTransactionCurrency(?string $transactionCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionCurrency) && !is_string($transactionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCurrency, true), gettype($transactionCurrency)), __LINE__);
        }
        $this->TransactionCurrency = $transactionCurrency;
        
        return $this;
    }
    /**
     * Get CreditCardBalance value
     * @return string|null
     */
    public function getCreditCardBalance(): ?string
    {
        return $this->CreditCardBalance;
    }
    /**
     * Set CreditCardBalance value
     * @param string $creditCardBalance
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCreditCardBalance(?string $creditCardBalance = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardBalance) && !is_string($creditCardBalance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardBalance, true), gettype($creditCardBalance)), __LINE__);
        }
        $this->CreditCardBalance = $creditCardBalance;
        
        return $this;
    }
    /**
     * Get CardCurrency value
     * @return string|null
     */
    public function getCardCurrency(): ?string
    {
        return $this->CardCurrency;
    }
    /**
     * Set CardCurrency value
     * @param string $cardCurrency
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCardCurrency(?string $cardCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCurrency) && !is_string($cardCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCurrency, true), gettype($cardCurrency)), __LINE__);
        }
        $this->CardCurrency = $cardCurrency;
        
        return $this;
    }
    /**
     * Get Authorizationcode value
     * @return string|null
     */
    public function getAuthorizationcode(): ?string
    {
        return $this->Authorizationcode;
    }
    /**
     * Set Authorizationcode value
     * @param string $authorizationcode
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setAuthorizationcode(?string $authorizationcode = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizationcode) && !is_string($authorizationcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationcode, true), gettype($authorizationcode)), __LINE__);
        }
        $this->Authorizationcode = $authorizationcode;
        
        return $this;
    }
    /**
     * Get ExportTimeStamp value
     * @return string|null
     */
    public function getExportTimeStamp(): ?string
    {
        return $this->ExportTimeStamp;
    }
    /**
     * Set ExportTimeStamp value
     * @param string $exportTimeStamp
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setExportTimeStamp(?string $exportTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimeStamp) && !is_string($exportTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimeStamp, true), gettype($exportTimeStamp)), __LINE__);
        }
        $this->ExportTimeStamp = $exportTimeStamp;
        
        return $this;
    }
    /**
     * Get CardCurrencyAmount value
     * @return string|null
     */
    public function getCardCurrencyAmount(): ?string
    {
        return $this->CardCurrencyAmount;
    }
    /**
     * Set CardCurrencyAmount value
     * @param string $cardCurrencyAmount
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCardCurrencyAmount(?string $cardCurrencyAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCurrencyAmount) && !is_string($cardCurrencyAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCurrencyAmount, true), gettype($cardCurrencyAmount)), __LINE__);
        }
        $this->CardCurrencyAmount = $cardCurrencyAmount;
        
        return $this;
    }
    /**
     * Get LastBalanceTimeStamp value
     * @return string|null
     */
    public function getLastBalanceTimeStamp(): ?string
    {
        return $this->LastBalanceTimeStamp;
    }
    /**
     * Set LastBalanceTimeStamp value
     * @param string $lastBalanceTimeStamp
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setLastBalanceTimeStamp(?string $lastBalanceTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($lastBalanceTimeStamp) && !is_string($lastBalanceTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastBalanceTimeStamp, true), gettype($lastBalanceTimeStamp)), __LINE__);
        }
        $this->LastBalanceTimeStamp = $lastBalanceTimeStamp;
        
        return $this;
    }
    /**
     * Get CorporateAccountCurrencyAmount value
     * @return string|null
     */
    public function getCorporateAccountCurrencyAmount(): ?string
    {
        return $this->CorporateAccountCurrencyAmount;
    }
    /**
     * Set CorporateAccountCurrencyAmount value
     * @param string $corporateAccountCurrencyAmount
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCorporateAccountCurrencyAmount(?string $corporateAccountCurrencyAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateAccountCurrencyAmount) && !is_string($corporateAccountCurrencyAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateAccountCurrencyAmount, true), gettype($corporateAccountCurrencyAmount)), __LINE__);
        }
        $this->CorporateAccountCurrencyAmount = $corporateAccountCurrencyAmount;
        
        return $this;
    }
    /**
     * Get CorporateAccountCurrency value
     * @return string|null
     */
    public function getCorporateAccountCurrency(): ?string
    {
        return $this->CorporateAccountCurrency;
    }
    /**
     * Set CorporateAccountCurrency value
     * @param string $corporateAccountCurrency
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setCorporateAccountCurrency(?string $corporateAccountCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateAccountCurrency) && !is_string($corporateAccountCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateAccountCurrency, true), gettype($corporateAccountCurrency)), __LINE__);
        }
        $this->CorporateAccountCurrency = $corporateAccountCurrency;
        
        return $this;
    }
    /**
     * Get User value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param string $user
     * @return \Pggns\MidocoApi\Bank\StructType\WireCardCCTransactionLine
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->User = $user;
        
        return $this;
    }
}
