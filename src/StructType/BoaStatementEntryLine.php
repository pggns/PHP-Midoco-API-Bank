<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoaStatementEntryLine StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BoaStatementEntryLine extends AbstractStructBase
{
    /**
     * The AsOf
     * @var string|null
     */
    protected ?string $AsOf = null;
    /**
     * The Currency
     * @var string|null
     */
    protected ?string $Currency = null;
    /**
     * The BankIDType
     * @var string|null
     */
    protected ?string $BankIDType = null;
    /**
     * The BankID
     * @var string|null
     */
    protected ?string $BankID = null;
    /**
     * The Account
     * @var string|null
     */
    protected ?string $Account = null;
    /**
     * The DataType
     * @var string|null
     */
    protected ?string $DataType = null;
    /**
     * The BAICode
     * @var string|null
     */
    protected ?string $BAICode = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Amount
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The BalanceValueDate
     * @var string|null
     */
    protected ?string $BalanceValueDate = null;
    /**
     * The CustomerReference
     * @var string|null
     */
    protected ?string $CustomerReference = null;
    /**
     * The ImmediateAvailability
     * @var string|null
     */
    protected ?string $ImmediateAvailability = null;
    /**
     * The FirstDayFloat
     * @var string|null
     */
    protected ?string $FirstDayFloat = null;
    /**
     * The SecondDayFloat
     * @var string|null
     */
    protected ?string $SecondDayFloat = null;
    /**
     * The BankReference
     * @var string|null
     */
    protected ?string $BankReference = null;
    /**
     * The NoOfItems
     * @var string|null
     */
    protected ?string $NoOfItems = null;
    /**
     * The Text
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * Constructor method for BoaStatementEntryLine
     * @uses BoaStatementEntryLine::setAsOf()
     * @uses BoaStatementEntryLine::setCurrency()
     * @uses BoaStatementEntryLine::setBankIDType()
     * @uses BoaStatementEntryLine::setBankID()
     * @uses BoaStatementEntryLine::setAccount()
     * @uses BoaStatementEntryLine::setDataType()
     * @uses BoaStatementEntryLine::setBAICode()
     * @uses BoaStatementEntryLine::setDescription()
     * @uses BoaStatementEntryLine::setAmount()
     * @uses BoaStatementEntryLine::setBalanceValueDate()
     * @uses BoaStatementEntryLine::setCustomerReference()
     * @uses BoaStatementEntryLine::setImmediateAvailability()
     * @uses BoaStatementEntryLine::setFirstDayFloat()
     * @uses BoaStatementEntryLine::setSecondDayFloat()
     * @uses BoaStatementEntryLine::setBankReference()
     * @uses BoaStatementEntryLine::setNoOfItems()
     * @uses BoaStatementEntryLine::setText()
     * @param string $asOf
     * @param string $currency
     * @param string $bankIDType
     * @param string $bankID
     * @param string $account
     * @param string $dataType
     * @param string $bAICode
     * @param string $description
     * @param string $amount
     * @param string $balanceValueDate
     * @param string $customerReference
     * @param string $immediateAvailability
     * @param string $firstDayFloat
     * @param string $secondDayFloat
     * @param string $bankReference
     * @param string $noOfItems
     * @param string $text
     */
    public function __construct(?string $asOf = null, ?string $currency = null, ?string $bankIDType = null, ?string $bankID = null, ?string $account = null, ?string $dataType = null, ?string $bAICode = null, ?string $description = null, ?string $amount = null, ?string $balanceValueDate = null, ?string $customerReference = null, ?string $immediateAvailability = null, ?string $firstDayFloat = null, ?string $secondDayFloat = null, ?string $bankReference = null, ?string $noOfItems = null, ?string $text = null)
    {
        $this
            ->setAsOf($asOf)
            ->setCurrency($currency)
            ->setBankIDType($bankIDType)
            ->setBankID($bankID)
            ->setAccount($account)
            ->setDataType($dataType)
            ->setBAICode($bAICode)
            ->setDescription($description)
            ->setAmount($amount)
            ->setBalanceValueDate($balanceValueDate)
            ->setCustomerReference($customerReference)
            ->setImmediateAvailability($immediateAvailability)
            ->setFirstDayFloat($firstDayFloat)
            ->setSecondDayFloat($secondDayFloat)
            ->setBankReference($bankReference)
            ->setNoOfItems($noOfItems)
            ->setText($text);
    }
    /**
     * Get AsOf value
     * @return string|null
     */
    public function getAsOf(): ?string
    {
        return $this->AsOf;
    }
    /**
     * Set AsOf value
     * @param string $asOf
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setAsOf(?string $asOf = null): self
    {
        // validation for constraint: string
        if (!is_null($asOf) && !is_string($asOf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asOf, true), gettype($asOf)), __LINE__);
        }
        $this->AsOf = $asOf;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        
        return $this;
    }
    /**
     * Get BankIDType value
     * @return string|null
     */
    public function getBankIDType(): ?string
    {
        return $this->BankIDType;
    }
    /**
     * Set BankIDType value
     * @param string $bankIDType
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setBankIDType(?string $bankIDType = null): self
    {
        // validation for constraint: string
        if (!is_null($bankIDType) && !is_string($bankIDType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankIDType, true), gettype($bankIDType)), __LINE__);
        }
        $this->BankIDType = $bankIDType;
        
        return $this;
    }
    /**
     * Get BankID value
     * @return string|null
     */
    public function getBankID(): ?string
    {
        return $this->BankID;
    }
    /**
     * Set BankID value
     * @param string $bankID
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setBankID(?string $bankID = null): self
    {
        // validation for constraint: string
        if (!is_null($bankID) && !is_string($bankID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankID, true), gettype($bankID)), __LINE__);
        }
        $this->BankID = $bankID;
        
        return $this;
    }
    /**
     * Get Account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->Account;
    }
    /**
     * Set Account value
     * @param string $account
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->Account = $account;
        
        return $this;
    }
    /**
     * Get DataType value
     * @return string|null
     */
    public function getDataType(): ?string
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @param string $dataType
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: string
        if (!is_null($dataType) && !is_string($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->DataType = $dataType;
        
        return $this;
    }
    /**
     * Get BAICode value
     * @return string|null
     */
    public function getBAICode(): ?string
    {
        return $this->BAICode;
    }
    /**
     * Set BAICode value
     * @param string $bAICode
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setBAICode(?string $bAICode = null): self
    {
        // validation for constraint: string
        if (!is_null($bAICode) && !is_string($bAICode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bAICode, true), gettype($bAICode)), __LINE__);
        }
        $this->BAICode = $bAICode;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get BalanceValueDate value
     * @return string|null
     */
    public function getBalanceValueDate(): ?string
    {
        return $this->BalanceValueDate;
    }
    /**
     * Set BalanceValueDate value
     * @param string $balanceValueDate
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setBalanceValueDate(?string $balanceValueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($balanceValueDate) && !is_string($balanceValueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceValueDate, true), gettype($balanceValueDate)), __LINE__);
        }
        $this->BalanceValueDate = $balanceValueDate;
        
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setCustomerReference(?string $customerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        
        return $this;
    }
    /**
     * Get ImmediateAvailability value
     * @return string|null
     */
    public function getImmediateAvailability(): ?string
    {
        return $this->ImmediateAvailability;
    }
    /**
     * Set ImmediateAvailability value
     * @param string $immediateAvailability
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setImmediateAvailability(?string $immediateAvailability = null): self
    {
        // validation for constraint: string
        if (!is_null($immediateAvailability) && !is_string($immediateAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($immediateAvailability, true), gettype($immediateAvailability)), __LINE__);
        }
        $this->ImmediateAvailability = $immediateAvailability;
        
        return $this;
    }
    /**
     * Get FirstDayFloat value
     * @return string|null
     */
    public function getFirstDayFloat(): ?string
    {
        return $this->FirstDayFloat;
    }
    /**
     * Set FirstDayFloat value
     * @param string $firstDayFloat
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setFirstDayFloat(?string $firstDayFloat = null): self
    {
        // validation for constraint: string
        if (!is_null($firstDayFloat) && !is_string($firstDayFloat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstDayFloat, true), gettype($firstDayFloat)), __LINE__);
        }
        $this->FirstDayFloat = $firstDayFloat;
        
        return $this;
    }
    /**
     * Get SecondDayFloat value
     * @return string|null
     */
    public function getSecondDayFloat(): ?string
    {
        return $this->SecondDayFloat;
    }
    /**
     * Set SecondDayFloat value
     * @param string $secondDayFloat
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setSecondDayFloat(?string $secondDayFloat = null): self
    {
        // validation for constraint: string
        if (!is_null($secondDayFloat) && !is_string($secondDayFloat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondDayFloat, true), gettype($secondDayFloat)), __LINE__);
        }
        $this->SecondDayFloat = $secondDayFloat;
        
        return $this;
    }
    /**
     * Get BankReference value
     * @return string|null
     */
    public function getBankReference(): ?string
    {
        return $this->BankReference;
    }
    /**
     * Set BankReference value
     * @param string $bankReference
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setBankReference(?string $bankReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bankReference) && !is_string($bankReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankReference, true), gettype($bankReference)), __LINE__);
        }
        $this->BankReference = $bankReference;
        
        return $this;
    }
    /**
     * Get NoOfItems value
     * @return string|null
     */
    public function getNoOfItems(): ?string
    {
        return $this->NoOfItems;
    }
    /**
     * Set NoOfItems value
     * @param string $noOfItems
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setNoOfItems(?string $noOfItems = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfItems) && !is_string($noOfItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->NoOfItems = $noOfItems;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Pggns\MidocoApi\Bank\StructType\BoaStatementEntryLine
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
}
