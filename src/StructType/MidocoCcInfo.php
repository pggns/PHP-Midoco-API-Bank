<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcInfo extends AbstractStructBase
{
    /**
     * The ccToken
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ccToken;
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardValidMonth
     * @var int|null
     */
    protected ?int $cardValidMonth = null;
    /**
     * The cardValidYear
     * @var int|null
     */
    protected ?int $cardValidYear = null;
    /**
     * The cardHolder
     * @var string|null
     */
    protected ?string $cardHolder = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The cardCvc
     * @var string|null
     */
    protected ?string $cardCvc = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccCvc
     * @var string|null
     */
    protected ?string $ccCvc = null;
    /**
     * The ccValidYear
     * @var string|null
     */
    protected ?string $ccValidYear = null;
    /**
     * The ccValidMonth
     * @var string|null
     */
    protected ?string $ccValidMonth = null;
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccTokenType
     * @var string|null
     */
    protected ?string $ccTokenType = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The ccTokenReference
     * @var int|null
     */
    protected ?int $ccTokenReference = null;
    /**
     * Constructor method for MidocoCcInfo
     * @uses MidocoCcInfo::setCcToken()
     * @uses MidocoCcInfo::setCardNo()
     * @uses MidocoCcInfo::setCardValidMonth()
     * @uses MidocoCcInfo::setCardValidYear()
     * @uses MidocoCcInfo::setCardHolder()
     * @uses MidocoCcInfo::setCardType()
     * @uses MidocoCcInfo::setCardCvc()
     * @uses MidocoCcInfo::setCcType()
     * @uses MidocoCcInfo::setCcNo()
     * @uses MidocoCcInfo::setCcCvc()
     * @uses MidocoCcInfo::setCcValidYear()
     * @uses MidocoCcInfo::setCcValidMonth()
     * @uses MidocoCcInfo::setCcOwner()
     * @uses MidocoCcInfo::setCcTokenType()
     * @uses MidocoCcInfo::setIsRecurring()
     * @uses MidocoCcInfo::setCcTokenReference()
     * @param string $ccToken
     * @param string $cardNo
     * @param int $cardValidMonth
     * @param int $cardValidYear
     * @param string $cardHolder
     * @param string $cardType
     * @param string $cardCvc
     * @param string $ccType
     * @param string $ccNo
     * @param string $ccCvc
     * @param string $ccValidYear
     * @param string $ccValidMonth
     * @param string $ccOwner
     * @param string $ccTokenType
     * @param bool $isRecurring
     * @param int $ccTokenReference
     */
    public function __construct(string $ccToken, ?string $cardNo = null, ?int $cardValidMonth = null, ?int $cardValidYear = null, ?string $cardHolder = null, ?string $cardType = null, ?string $cardCvc = null, ?string $ccType = null, ?string $ccNo = null, ?string $ccCvc = null, ?string $ccValidYear = null, ?string $ccValidMonth = null, ?string $ccOwner = null, ?string $ccTokenType = null, ?bool $isRecurring = null, ?int $ccTokenReference = null)
    {
        $this
            ->setCcToken($ccToken)
            ->setCardNo($cardNo)
            ->setCardValidMonth($cardValidMonth)
            ->setCardValidYear($cardValidYear)
            ->setCardHolder($cardHolder)
            ->setCardType($cardType)
            ->setCardCvc($cardCvc)
            ->setCcType($ccType)
            ->setCcNo($ccNo)
            ->setCcCvc($ccCvc)
            ->setCcValidYear($ccValidYear)
            ->setCcValidMonth($ccValidMonth)
            ->setCcOwner($ccOwner)
            ->setCcTokenType($ccTokenType)
            ->setIsRecurring($isRecurring)
            ->setCcTokenReference($ccTokenReference);
    }
    /**
     * Get ccToken value
     * @return string
     */
    public function getCcToken(): string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcToken(string $ccToken): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get cardValidMonth value
     * @return int|null
     */
    public function getCardValidMonth(): ?int
    {
        return $this->cardValidMonth;
    }
    /**
     * Set cardValidMonth value
     * @param int $cardValidMonth
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardValidMonth(?int $cardValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($cardValidMonth) && !(is_int($cardValidMonth) || ctype_digit($cardValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardValidMonth, true), gettype($cardValidMonth)), __LINE__);
        }
        $this->cardValidMonth = $cardValidMonth;
        
        return $this;
    }
    /**
     * Get cardValidYear value
     * @return int|null
     */
    public function getCardValidYear(): ?int
    {
        return $this->cardValidYear;
    }
    /**
     * Set cardValidYear value
     * @param int $cardValidYear
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardValidYear(?int $cardValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($cardValidYear) && !(is_int($cardValidYear) || ctype_digit($cardValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cardValidYear, true), gettype($cardValidYear)), __LINE__);
        }
        $this->cardValidYear = $cardValidYear;
        
        return $this;
    }
    /**
     * Get cardHolder value
     * @return string|null
     */
    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }
    /**
     * Set cardHolder value
     * @param string $cardHolder
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardHolder(?string $cardHolder = null): self
    {
        // validation for constraint: string
        if (!is_null($cardHolder) && !is_string($cardHolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolder, true), gettype($cardHolder)), __LINE__);
        }
        $this->cardHolder = $cardHolder;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get cardCvc value
     * @return string|null
     */
    public function getCardCvc(): ?string
    {
        return $this->cardCvc;
    }
    /**
     * Set cardCvc value
     * @param string $cardCvc
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCardCvc(?string $cardCvc = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCvc) && !is_string($cardCvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCvc, true), gettype($cardCvc)), __LINE__);
        }
        $this->cardCvc = $cardCvc;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccCvc value
     * @return string|null
     */
    public function getCcCvc(): ?string
    {
        return $this->ccCvc;
    }
    /**
     * Set ccCvc value
     * @param string $ccCvc
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcCvc(?string $ccCvc = null): self
    {
        // validation for constraint: string
        if (!is_null($ccCvc) && !is_string($ccCvc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccCvc, true), gettype($ccCvc)), __LINE__);
        }
        $this->ccCvc = $ccCvc;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return string|null
     */
    public function getCcValidYear(): ?string
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param string $ccValidYear
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcValidYear(?string $ccValidYear = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidYear) && !is_string($ccValidYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return string|null
     */
    public function getCcValidMonth(): ?string
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param string $ccValidMonth
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcValidMonth(?string $ccValidMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValidMonth) && !is_string($ccValidMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccOwner value
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Set ccOwner value
     * @param string $ccOwner
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcOwner(?string $ccOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($ccOwner) && !is_string($ccOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccOwner, true), gettype($ccOwner)), __LINE__);
        }
        $this->ccOwner = $ccOwner;
        
        return $this;
    }
    /**
     * Get ccTokenType value
     * @return string|null
     */
    public function getCcTokenType(): ?string
    {
        return $this->ccTokenType;
    }
    /**
     * Set ccTokenType value
     * @param string $ccTokenType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcTokenType(?string $ccTokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTokenType) && !is_string($ccTokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTokenType, true), gettype($ccTokenType)), __LINE__);
        }
        $this->ccTokenType = $ccTokenType;
        
        return $this;
    }
    /**
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get ccTokenReference value
     * @return int|null
     */
    public function getCcTokenReference(): ?int
    {
        return $this->ccTokenReference;
    }
    /**
     * Set ccTokenReference value
     * @param int $ccTokenReference
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcInfo
     */
    public function setCcTokenReference(?int $ccTokenReference = null): self
    {
        // validation for constraint: int
        if (!is_null($ccTokenReference) && !(is_int($ccTokenReference) || ctype_digit($ccTokenReference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccTokenReference, true), gettype($ccTokenReference)), __LINE__);
        }
        $this->ccTokenReference = $ccTokenReference;
        
        return $this;
    }
}
