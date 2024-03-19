<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankProcessProtocolType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankProcessProtocolType extends AbstractStructBase
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
     * The bookingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The debitCreditIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitCreditIndicator = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bookingText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorArgs = null;
    /**
     * Constructor method for MidocoBankProcessProtocolType
     * @uses MidocoBankProcessProtocolType::setBankNo()
     * @uses MidocoBankProcessProtocolType::setAccountNo()
     * @uses MidocoBankProcessProtocolType::setBookingDate()
     * @uses MidocoBankProcessProtocolType::setDebitCreditIndicator()
     * @uses MidocoBankProcessProtocolType::setAmount()
     * @uses MidocoBankProcessProtocolType::setBookingText()
     * @uses MidocoBankProcessProtocolType::setErrorCode()
     * @uses MidocoBankProcessProtocolType::setErrorBundle()
     * @uses MidocoBankProcessProtocolType::setErrorArgs()
     * @param string $bankNo
     * @param string $accountNo
     * @param string $bookingDate
     * @param string $debitCreditIndicator
     * @param float $amount
     * @param string $bookingText
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorArgs
     */
    public function __construct(?string $bankNo = null, ?string $accountNo = null, ?string $bookingDate = null, ?string $debitCreditIndicator = null, ?float $amount = null, ?string $bookingText = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $errorArgs = null)
    {
        $this
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setBookingDate($bookingDate)
            ->setDebitCreditIndicator($debitCreditIndicator)
            ->setAmount($amount)
            ->setBookingText($bookingText)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs);
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
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
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get debitCreditIndicator value
     * @return string|null
     */
    public function getDebitCreditIndicator(): ?string
    {
        return $this->debitCreditIndicator;
    }
    /**
     * Set debitCreditIndicator value
     * @param string $debitCreditIndicator
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
     */
    public function setDebitCreditIndicator(?string $debitCreditIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCreditIndicator) && !is_string($debitCreditIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCreditIndicator, true), gettype($debitCreditIndicator)), __LINE__);
        }
        $this->debitCreditIndicator = $debitCreditIndicator;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
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
     * Get errorArgs value
     * @return string|null
     */
    public function getErrorArgs(): ?string
    {
        return $this->errorArgs;
    }
    /**
     * Set errorArgs value
     * @param string $errorArgs
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType
     */
    public function setErrorArgs(?string $errorArgs = null): self
    {
        // validation for constraint: string
        if (!is_null($errorArgs) && !is_string($errorArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorArgs, true), gettype($errorArgs)), __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
}
