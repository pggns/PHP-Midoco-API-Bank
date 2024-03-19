<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDtazvTransactionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDtazvTransactionRequest extends AbstractStructBase
{
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * The paymentType
     * @var int|null
     */
    protected ?int $paymentType = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * The MidocoDtazvDirectDebitPosition
     * Meta information extracted from the WSDL
     * - ref: order:MidocoDtazvDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $MidocoDtazvDirectDebitPosition = null;
    /**
     * The bankTransferCollective
     * @var bool|null
     */
    protected ?bool $bankTransferCollective = null;
    /**
     * Constructor method for CreateDtazvTransactionRequest
     * @uses CreateDtazvTransactionRequest::setFileId()
     * @uses CreateDtazvTransactionRequest::setPaymentType()
     * @uses CreateDtazvTransactionRequest::setCurrency()
     * @uses CreateDtazvTransactionRequest::setExchangeRate()
     * @uses CreateDtazvTransactionRequest::setMidocoBankAccount()
     * @uses CreateDtazvTransactionRequest::setMidocoDtazvDirectDebitPosition()
     * @uses CreateDtazvTransactionRequest::setBankTransferCollective()
     * @param int $fileId
     * @param int $paymentType
     * @param string $currency
     * @param float $exchangeRate
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $midocoDtazvDirectDebitPosition
     * @param bool $bankTransferCollective
     */
    public function __construct(?int $fileId = null, ?int $paymentType = null, ?string $currency = null, ?float $exchangeRate = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $midocoDtazvDirectDebitPosition = null, ?bool $bankTransferCollective = null)
    {
        $this
            ->setFileId($fileId)
            ->setPaymentType($paymentType)
            ->setCurrency($currency)
            ->setExchangeRate($exchangeRate)
            ->setMidocoBankAccount($midocoBankAccount)
            ->setMidocoDtazvDirectDebitPosition($midocoDtazvDirectDebitPosition)
            ->setBankTransferCollective($bankTransferCollective);
    }
    /**
     * Get fileId value
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }
    /**
     * Set fileId value
     * @param int $fileId
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setFileId(?int $fileId = null): self
    {
        // validation for constraint: int
        if (!is_null($fileId) && !(is_int($fileId) || ctype_digit($fileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileId, true), gettype($fileId)), __LINE__);
        }
        $this->fileId = $fileId;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Get MidocoDtazvDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition|null
     */
    public function getMidocoDtazvDirectDebitPosition(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition
    {
        return $this->MidocoDtazvDirectDebitPosition;
    }
    /**
     * Set MidocoDtazvDirectDebitPosition value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $midocoDtazvDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setMidocoDtazvDirectDebitPosition(?\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $midocoDtazvDirectDebitPosition = null): self
    {
        $this->MidocoDtazvDirectDebitPosition = $midocoDtazvDirectDebitPosition;
        
        return $this;
    }
    /**
     * Get bankTransferCollective value
     * @return bool|null
     */
    public function getBankTransferCollective(): ?bool
    {
        return $this->bankTransferCollective;
    }
    /**
     * Set bankTransferCollective value
     * @param bool $bankTransferCollective
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest
     */
    public function setBankTransferCollective(?bool $bankTransferCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bankTransferCollective) && !is_bool($bankTransferCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bankTransferCollective, true), gettype($bankTransferCollective)), __LINE__);
        }
        $this->bankTransferCollective = $bankTransferCollective;
        
        return $this;
    }
}
