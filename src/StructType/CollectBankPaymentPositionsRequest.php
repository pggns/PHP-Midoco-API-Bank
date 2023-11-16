<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectBankPaymentPositionsRequest StructType
 * @subpackage Structs
 */
class CollectBankPaymentPositionsRequest extends AbstractStructBase
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
     * The SepaTransactionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: SepaTransactionType
     * @var string[]
     */
    protected array $SepaTransactionType = [];
    /**
     * The creditorSelected
     * @var bool|null
     */
    protected ?bool $creditorSelected = null;
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
     * The debitorSelected
     * @var bool|null
     */
    protected ?bool $debitorSelected = null;
    /**
     * The debitorFrom
     * @var string|null
     */
    protected ?string $debitorFrom = null;
    /**
     * The debitorTo
     * @var string|null
     */
    protected ?string $debitorTo = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * Constructor method for CollectBankPaymentPositionsRequest
     * @uses CollectBankPaymentPositionsRequest::setAccountNo()
     * @uses CollectBankPaymentPositionsRequest::setAccountBlz()
     * @uses CollectBankPaymentPositionsRequest::setAccountCountry()
     * @uses CollectBankPaymentPositionsRequest::setIban()
     * @uses CollectBankPaymentPositionsRequest::setSwiftBicCode()
     * @uses CollectBankPaymentPositionsRequest::setPerDate()
     * @uses CollectBankPaymentPositionsRequest::setPaymentType()
     * @uses CollectBankPaymentPositionsRequest::setDebitType()
     * @uses CollectBankPaymentPositionsRequest::setSepaTransactionType()
     * @uses CollectBankPaymentPositionsRequest::setCreditorSelected()
     * @uses CollectBankPaymentPositionsRequest::setCreditorFrom()
     * @uses CollectBankPaymentPositionsRequest::setCreditorTo()
     * @uses CollectBankPaymentPositionsRequest::setDebitorSelected()
     * @uses CollectBankPaymentPositionsRequest::setDebitorFrom()
     * @uses CollectBankPaymentPositionsRequest::setDebitorTo()
     * @uses CollectBankPaymentPositionsRequest::setMediatorId()
     * @param string $accountNo
     * @param string $accountBlz
     * @param string $accountCountry
     * @param string $iban
     * @param string $swiftBicCode
     * @param string $perDate
     * @param int $paymentType
     * @param int $debitType
     * @param string[] $sepaTransactionType
     * @param bool $creditorSelected
     * @param string $creditorFrom
     * @param string $creditorTo
     * @param bool $debitorSelected
     * @param string $debitorFrom
     * @param string $debitorTo
     * @param string $mediatorId
     */
    public function __construct(?string $accountNo = null, ?string $accountBlz = null, ?string $accountCountry = null, ?string $iban = null, ?string $swiftBicCode = null, ?string $perDate = null, ?int $paymentType = null, ?int $debitType = null, array $sepaTransactionType = [], ?bool $creditorSelected = null, ?string $creditorFrom = null, ?string $creditorTo = null, ?bool $debitorSelected = null, ?string $debitorFrom = null, ?string $debitorTo = null, ?string $mediatorId = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountBlz($accountBlz)
            ->setAccountCountry($accountCountry)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setPerDate($perDate)
            ->setPaymentType($paymentType)
            ->setDebitType($debitType)
            ->setSepaTransactionType($sepaTransactionType)
            ->setCreditorSelected($creditorSelected)
            ->setCreditorFrom($creditorFrom)
            ->setCreditorTo($creditorTo)
            ->setDebitorSelected($debitorSelected)
            ->setDebitorFrom($debitorFrom)
            ->setDebitorTo($debitorTo)
            ->setMediatorId($mediatorId);
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * Get SepaTransactionType value
     * @return string[]
     */
    public function getSepaTransactionType(): array
    {
        return $this->SepaTransactionType;
    }
    /**
     * This method is responsible for validating the values passed to the setSepaTransactionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSepaTransactionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSepaTransactionTypeForArrayConstraintsFromSetSepaTransactionType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collectBankPaymentPositionsRequestSepaTransactionTypeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::valueIsValid($collectBankPaymentPositionsRequestSepaTransactionTypeItem)) {
                $invalidValues[] = is_object($collectBankPaymentPositionsRequestSepaTransactionTypeItem) ? get_class($collectBankPaymentPositionsRequestSepaTransactionTypeItem) : sprintf('%s(%s)', gettype($collectBankPaymentPositionsRequestSepaTransactionTypeItem), var_export($collectBankPaymentPositionsRequestSepaTransactionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SepaTransactionType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $sepaTransactionType
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setSepaTransactionType(array $sepaTransactionType = []): self
    {
        // validation for constraint: array
        if ('' !== ($sepaTransactionTypeArrayErrorMessage = self::validateSepaTransactionTypeForArrayConstraintsFromSetSepaTransactionType($sepaTransactionType))) {
            throw new InvalidArgumentException($sepaTransactionTypeArrayErrorMessage, __LINE__);
        }
        $this->SepaTransactionType = $sepaTransactionType;
        
        return $this;
    }
    /**
     * Add item to SepaTransactionType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function addToSepaTransactionType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\SepaTransactionTypeType::getValidValues())), __LINE__);
        }
        $this->SepaTransactionType[] = $item;
        
        return $this;
    }
    /**
     * Get creditorSelected value
     * @return bool|null
     */
    public function getCreditorSelected(): ?bool
    {
        return $this->creditorSelected;
    }
    /**
     * Set creditorSelected value
     * @param bool $creditorSelected
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setCreditorSelected(?bool $creditorSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($creditorSelected) && !is_bool($creditorSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($creditorSelected, true), gettype($creditorSelected)), __LINE__);
        }
        $this->creditorSelected = $creditorSelected;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
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
    /**
     * Get debitorSelected value
     * @return bool|null
     */
    public function getDebitorSelected(): ?bool
    {
        return $this->debitorSelected;
    }
    /**
     * Set debitorSelected value
     * @param bool $debitorSelected
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setDebitorSelected(?bool $debitorSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($debitorSelected) && !is_bool($debitorSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($debitorSelected, true), gettype($debitorSelected)), __LINE__);
        }
        $this->debitorSelected = $debitorSelected;
        
        return $this;
    }
    /**
     * Get debitorFrom value
     * @return string|null
     */
    public function getDebitorFrom(): ?string
    {
        return $this->debitorFrom;
    }
    /**
     * Set debitorFrom value
     * @param string $debitorFrom
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setDebitorFrom(?string $debitorFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorFrom) && !is_string($debitorFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorFrom, true), gettype($debitorFrom)), __LINE__);
        }
        $this->debitorFrom = $debitorFrom;
        
        return $this;
    }
    /**
     * Get debitorTo value
     * @return string|null
     */
    public function getDebitorTo(): ?string
    {
        return $this->debitorTo;
    }
    /**
     * Set debitorTo value
     * @param string $debitorTo
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setDebitorTo(?string $debitorTo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorTo) && !is_string($debitorTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorTo, true), gettype($debitorTo)), __LINE__);
        }
        $this->debitorTo = $debitorTo;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
}
