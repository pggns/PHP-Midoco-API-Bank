<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSearchBankStatementEntriesCriteriaType StructType
 * @subpackage Structs
 */
class MidocoSearchBankStatementEntriesCriteriaType extends AbstractStructBase
{
    /**
     * The isExported
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The infoName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoName = null;
    /**
     * The infoName1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoName1 = null;
    /**
     * The infoBankNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoBankNo = null;
    /**
     * The infoAccountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoAccountNo = null;
    /**
     * The isDebit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isDebit = null;
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
     * The statementNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $statementNo = null;
    /**
     * The pageNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pageNo = null;
    /**
     * The bookingDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDateFrom = null;
    /**
     * The bookingDateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDateTo = null;
    /**
     * The valutaDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $valutaDateFrom = null;
    /**
     * The valutaDateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $valutaDateTo = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The user
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $user = null;
    /**
     * The isBooked
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isBooked = null;
    /**
     * Constructor method for MidocoSearchBankStatementEntriesCriteriaType
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setIsExported()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setInfoName()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setInfoName1()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setInfoBankNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setInfoAccountNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setIsDebit()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setBankNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setAccountNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setStatementNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setPageNo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setBookingDateFrom()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setBookingDateTo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setValutaDateFrom()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setValutaDateTo()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setAmount()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setUser()
     * @uses MidocoSearchBankStatementEntriesCriteriaType::setIsBooked()
     * @param bool $isExported
     * @param string $infoName
     * @param string $infoName1
     * @param string $infoBankNo
     * @param string $infoAccountNo
     * @param bool $isDebit
     * @param string $bankNo
     * @param string $accountNo
     * @param string $statementNo
     * @param string $pageNo
     * @param string $bookingDateFrom
     * @param string $bookingDateTo
     * @param string $valutaDateFrom
     * @param string $valutaDateTo
     * @param float $amount
     * @param string $user
     * @param bool $isBooked
     */
    public function __construct(?bool $isExported = null, ?string $infoName = null, ?string $infoName1 = null, ?string $infoBankNo = null, ?string $infoAccountNo = null, ?bool $isDebit = null, ?string $bankNo = null, ?string $accountNo = null, ?string $statementNo = null, ?string $pageNo = null, ?string $bookingDateFrom = null, ?string $bookingDateTo = null, ?string $valutaDateFrom = null, ?string $valutaDateTo = null, ?float $amount = null, ?string $user = null, ?bool $isBooked = null)
    {
        $this
            ->setIsExported($isExported)
            ->setInfoName($infoName)
            ->setInfoName1($infoName1)
            ->setInfoBankNo($infoBankNo)
            ->setInfoAccountNo($infoAccountNo)
            ->setIsDebit($isDebit)
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setStatementNo($statementNo)
            ->setPageNo($pageNo)
            ->setBookingDateFrom($bookingDateFrom)
            ->setBookingDateTo($bookingDateTo)
            ->setValutaDateFrom($valutaDateFrom)
            ->setValutaDateTo($valutaDateTo)
            ->setAmount($amount)
            ->setUser($user)
            ->setIsBooked($isBooked);
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get infoName value
     * @return string|null
     */
    public function getInfoName(): ?string
    {
        return $this->infoName;
    }
    /**
     * Set infoName value
     * @param string $infoName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setInfoName(?string $infoName = null): self
    {
        // validation for constraint: string
        if (!is_null($infoName) && !is_string($infoName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoName, true), gettype($infoName)), __LINE__);
        }
        $this->infoName = $infoName;
        
        return $this;
    }
    /**
     * Get infoName1 value
     * @return string|null
     */
    public function getInfoName1(): ?string
    {
        return $this->infoName1;
    }
    /**
     * Set infoName1 value
     * @param string $infoName1
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setInfoName1(?string $infoName1 = null): self
    {
        // validation for constraint: string
        if (!is_null($infoName1) && !is_string($infoName1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoName1, true), gettype($infoName1)), __LINE__);
        }
        $this->infoName1 = $infoName1;
        
        return $this;
    }
    /**
     * Get infoBankNo value
     * @return string|null
     */
    public function getInfoBankNo(): ?string
    {
        return $this->infoBankNo;
    }
    /**
     * Set infoBankNo value
     * @param string $infoBankNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setInfoBankNo(?string $infoBankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoBankNo) && !is_string($infoBankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoBankNo, true), gettype($infoBankNo)), __LINE__);
        }
        $this->infoBankNo = $infoBankNo;
        
        return $this;
    }
    /**
     * Get infoAccountNo value
     * @return string|null
     */
    public function getInfoAccountNo(): ?string
    {
        return $this->infoAccountNo;
    }
    /**
     * Set infoAccountNo value
     * @param string $infoAccountNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setInfoAccountNo(?string $infoAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoAccountNo) && !is_string($infoAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoAccountNo, true), gettype($infoAccountNo)), __LINE__);
        }
        $this->infoAccountNo = $infoAccountNo;
        
        return $this;
    }
    /**
     * Get isDebit value
     * @return bool|null
     */
    public function getIsDebit(): ?bool
    {
        return $this->isDebit;
    }
    /**
     * Set isDebit value
     * @param bool $isDebit
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setIsDebit(?bool $isDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDebit) && !is_bool($isDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDebit, true), gettype($isDebit)), __LINE__);
        }
        $this->isDebit = $isDebit;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
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
     * Get statementNo value
     * @return string|null
     */
    public function getStatementNo(): ?string
    {
        return $this->statementNo;
    }
    /**
     * Set statementNo value
     * @param string $statementNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setStatementNo(?string $statementNo = null): self
    {
        // validation for constraint: string
        if (!is_null($statementNo) && !is_string($statementNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementNo, true), gettype($statementNo)), __LINE__);
        }
        $this->statementNo = $statementNo;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return string|null
     */
    public function getPageNo(): ?string
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param string $pageNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setPageNo(?string $pageNo = null): self
    {
        // validation for constraint: string
        if (!is_null($pageNo) && !is_string($pageNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
    /**
     * Get bookingDateFrom value
     * @return string|null
     */
    public function getBookingDateFrom(): ?string
    {
        return $this->bookingDateFrom;
    }
    /**
     * Set bookingDateFrom value
     * @param string $bookingDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setBookingDateFrom(?string $bookingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateFrom) && !is_string($bookingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateFrom, true), gettype($bookingDateFrom)), __LINE__);
        }
        $this->bookingDateFrom = $bookingDateFrom;
        
        return $this;
    }
    /**
     * Get bookingDateTo value
     * @return string|null
     */
    public function getBookingDateTo(): ?string
    {
        return $this->bookingDateTo;
    }
    /**
     * Set bookingDateTo value
     * @param string $bookingDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setBookingDateTo(?string $bookingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateTo) && !is_string($bookingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateTo, true), gettype($bookingDateTo)), __LINE__);
        }
        $this->bookingDateTo = $bookingDateTo;
        
        return $this;
    }
    /**
     * Get valutaDateFrom value
     * @return string|null
     */
    public function getValutaDateFrom(): ?string
    {
        return $this->valutaDateFrom;
    }
    /**
     * Set valutaDateFrom value
     * @param string $valutaDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setValutaDateFrom(?string $valutaDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($valutaDateFrom) && !is_string($valutaDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valutaDateFrom, true), gettype($valutaDateFrom)), __LINE__);
        }
        $this->valutaDateFrom = $valutaDateFrom;
        
        return $this;
    }
    /**
     * Get valutaDateTo value
     * @return string|null
     */
    public function getValutaDateTo(): ?string
    {
        return $this->valutaDateTo;
    }
    /**
     * Set valutaDateTo value
     * @param string $valutaDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setValutaDateTo(?string $valutaDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($valutaDateTo) && !is_string($valutaDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valutaDateTo, true), gettype($valutaDateTo)), __LINE__);
        }
        $this->valutaDateTo = $valutaDateTo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
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
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get isBooked value
     * @return bool|null
     */
    public function getIsBooked(): ?bool
    {
        return $this->isBooked;
    }
    /**
     * Set isBooked value
     * @param bool $isBooked
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
     */
    public function setIsBooked(?bool $isBooked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBooked) && !is_bool($isBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBooked, true), gettype($isBooked)), __LINE__);
        }
        $this->isBooked = $isBooked;
        
        return $this;
    }
}
