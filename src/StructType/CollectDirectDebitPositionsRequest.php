<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectDirectDebitPositionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CollectDirectDebitPositionsRequest extends AbstractStructBase
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountBlz
     * @var string|null
     */
    protected ?string $accountBlz = null;
    /**
     * The accountCountry
     * @var string|null
     */
    protected ?string $accountCountry = null;
    /**
     * The perDate
     * @var string|null
     */
    protected ?string $perDate = null;
    /**
     * The paymentType
     * @var int|null
     */
    protected ?int $paymentType = null;
    /**
     * The debitType
     * @var int|null
     */
    protected ?int $debitType = null;
    /**
     * The DtausTransactionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: DtausTransactionType
     * @var string[]
     */
    protected ?array $DtausTransactionType = null;
    /**
     * The creditorFrom
     * @var string|null
     */
    protected ?string $creditorFrom = null;
    /**
     * The creditorTo
     * @var string|null
     */
    protected ?string $creditorTo = null;
    /**
     * Constructor method for CollectDirectDebitPositionsRequest
     * @uses CollectDirectDebitPositionsRequest::setAccountNo()
     * @uses CollectDirectDebitPositionsRequest::setAccountBlz()
     * @uses CollectDirectDebitPositionsRequest::setAccountCountry()
     * @uses CollectDirectDebitPositionsRequest::setPerDate()
     * @uses CollectDirectDebitPositionsRequest::setPaymentType()
     * @uses CollectDirectDebitPositionsRequest::setDebitType()
     * @uses CollectDirectDebitPositionsRequest::setDtausTransactionType()
     * @uses CollectDirectDebitPositionsRequest::setCreditorFrom()
     * @uses CollectDirectDebitPositionsRequest::setCreditorTo()
     * @param string $accountNo
     * @param string $accountBlz
     * @param string $accountCountry
     * @param string $perDate
     * @param int $paymentType
     * @param int $debitType
     * @param string[] $dtausTransactionType
     * @param string $creditorFrom
     * @param string $creditorTo
     */
    public function __construct(?string $accountNo = null, ?string $accountBlz = null, ?string $accountCountry = null, ?string $perDate = null, ?int $paymentType = null, ?int $debitType = null, ?array $dtausTransactionType = null, ?string $creditorFrom = null, ?string $creditorTo = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountBlz($accountBlz)
            ->setAccountCountry($accountCountry)
            ->setPerDate($perDate)
            ->setPaymentType($paymentType)
            ->setDebitType($debitType)
            ->setDtausTransactionType($dtausTransactionType)
            ->setCreditorFrom($creditorFrom)
            ->setCreditorTo($creditorTo);
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
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
     * Get accountBlz value
     * @return string|null
     */
    public function getAccountBlz(): ?string
    {
        return $this->accountBlz;
    }
    /**
     * Set accountBlz value
     * @param string $accountBlz
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setAccountBlz(?string $accountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBlz) && !is_string($accountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBlz, true), gettype($accountBlz)), __LINE__);
        }
        $this->accountBlz = $accountBlz;
        
        return $this;
    }
    /**
     * Get accountCountry value
     * @return string|null
     */
    public function getAccountCountry(): ?string
    {
        return $this->accountCountry;
    }
    /**
     * Set accountCountry value
     * @param string $accountCountry
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setAccountCountry(?string $accountCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCountry) && !is_string($accountCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCountry, true), gettype($accountCountry)), __LINE__);
        }
        $this->accountCountry = $accountCountry;
        
        return $this;
    }
    /**
     * Get perDate value
     * @return string|null
     */
    public function getPerDate(): ?string
    {
        return $this->perDate;
    }
    /**
     * Set perDate value
     * @param string $perDate
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setPerDate(?string $perDate = null): self
    {
        // validation for constraint: string
        if (!is_null($perDate) && !is_string($perDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perDate, true), gettype($perDate)), __LINE__);
        }
        $this->perDate = $perDate;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return int|null
     */
    public function getPaymentType(): ?int
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param int $paymentType
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setPaymentType(?int $paymentType = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentType) && !(is_int($paymentType) || ctype_digit($paymentType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get debitType value
     * @return int|null
     */
    public function getDebitType(): ?int
    {
        return $this->debitType;
    }
    /**
     * Set debitType value
     * @param int $debitType
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setDebitType(?int $debitType = null): self
    {
        // validation for constraint: int
        if (!is_null($debitType) && !(is_int($debitType) || ctype_digit($debitType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($debitType, true), gettype($debitType)), __LINE__);
        }
        $this->debitType = $debitType;
        
        return $this;
    }
    /**
     * Get DtausTransactionType value
     * @return string[]
     */
    public function getDtausTransactionType(): ?array
    {
        return $this->DtausTransactionType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDtausTransactionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDtausTransactionType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDtausTransactionTypeForArrayConstraintFromSetDtausTransactionType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $collectDirectDebitPositionsRequestDtausTransactionTypeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::valueIsValid($collectDirectDebitPositionsRequestDtausTransactionTypeItem)) {
                $invalidValues[] = is_object($collectDirectDebitPositionsRequestDtausTransactionTypeItem) ? get_class($collectDirectDebitPositionsRequestDtausTransactionTypeItem) : sprintf('%s(%s)', gettype($collectDirectDebitPositionsRequestDtausTransactionTypeItem), var_export($collectDirectDebitPositionsRequestDtausTransactionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DtausTransactionType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $dtausTransactionType
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setDtausTransactionType(?array $dtausTransactionType = null): self
    {
        // validation for constraint: array
        if ('' !== ($dtausTransactionTypeArrayErrorMessage = self::validateDtausTransactionTypeForArrayConstraintFromSetDtausTransactionType($dtausTransactionType))) {
            throw new InvalidArgumentException($dtausTransactionTypeArrayErrorMessage, __LINE__);
        }
        $this->DtausTransactionType = $dtausTransactionType;
        
        return $this;
    }
    /**
     * Add item to DtausTransactionType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function addToDtausTransactionType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\DtausTransactionTypeType::getValidValues())), __LINE__);
        }
        $this->DtausTransactionType[] = $item;
        
        return $this;
    }
    /**
     * Get creditorFrom value
     * @return string|null
     */
    public function getCreditorFrom(): ?string
    {
        return $this->creditorFrom;
    }
    /**
     * Set creditorFrom value
     * @param string $creditorFrom
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setCreditorFrom(?string $creditorFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorFrom) && !is_string($creditorFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorFrom, true), gettype($creditorFrom)), __LINE__);
        }
        $this->creditorFrom = $creditorFrom;
        
        return $this;
    }
    /**
     * Get creditorTo value
     * @return string|null
     */
    public function getCreditorTo(): ?string
    {
        return $this->creditorTo;
    }
    /**
     * Set creditorTo value
     * @param string $creditorTo
     * @return \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest
     */
    public function setCreditorTo(?string $creditorTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorTo) && !is_string($creditorTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorTo, true), gettype($creditorTo)), __LINE__);
        }
        $this->creditorTo = $creditorTo;
        
        return $this;
    }
}
