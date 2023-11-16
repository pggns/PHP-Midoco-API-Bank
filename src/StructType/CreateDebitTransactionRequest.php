<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDebitTransactionRequest StructType
 * @subpackage Structs
 */
class CreateDebitTransactionRequest extends AbstractStructBase
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
     * The fileFormat
     * @var int|null
     */
    protected ?int $fileFormat = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The isOnlyProtocol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isOnlyProtocol = null;
    /**
     * The preventBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $preventBooking = null;
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * The MidocoDirectDebitPosition
     * Meta information extracted from the WSDL
     * - ref: order:MidocoDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $MidocoDirectDebitPosition = null;
    /**
     * The bankTransferCollective
     * @var bool|null
     */
    protected ?bool $bankTransferCollective = null;
    /**
     * Constructor method for CreateDebitTransactionRequest
     * @uses CreateDebitTransactionRequest::setFileId()
     * @uses CreateDebitTransactionRequest::setPaymentType()
     * @uses CreateDebitTransactionRequest::setFileFormat()
     * @uses CreateDebitTransactionRequest::setCurrency()
     * @uses CreateDebitTransactionRequest::setIsOnlyProtocol()
     * @uses CreateDebitTransactionRequest::setPreventBooking()
     * @uses CreateDebitTransactionRequest::setMidocoBankAccount()
     * @uses CreateDebitTransactionRequest::setMidocoDirectDebitPosition()
     * @uses CreateDebitTransactionRequest::setBankTransferCollective()
     * @param int $fileId
     * @param int $paymentType
     * @param int $fileFormat
     * @param string $currency
     * @param bool $isOnlyProtocol
     * @param bool $preventBooking
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $midocoDirectDebitPosition
     * @param bool $bankTransferCollective
     */
    public function __construct(?int $fileId = null, ?int $paymentType = null, ?int $fileFormat = null, ?string $currency = null, ?bool $isOnlyProtocol = null, ?bool $preventBooking = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $midocoDirectDebitPosition = null, ?bool $bankTransferCollective = null)
    {
        $this
            ->setFileId($fileId)
            ->setPaymentType($paymentType)
            ->setFileFormat($fileFormat)
            ->setCurrency($currency)
            ->setIsOnlyProtocol($isOnlyProtocol)
            ->setPreventBooking($preventBooking)
            ->setMidocoBankAccount($midocoBankAccount)
            ->setMidocoDirectDebitPosition($midocoDirectDebitPosition)
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
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
     * Get fileFormat value
     * @return int|null
     */
    public function getFileFormat(): ?int
    {
        return $this->fileFormat;
    }
    /**
     * Set fileFormat value
     * @param int $fileFormat
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
     */
    public function setFileFormat(?int $fileFormat = null): self
    {
        // validation for constraint: int
        if (!is_null($fileFormat) && !(is_int($fileFormat) || ctype_digit($fileFormat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
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
     * Get isOnlyProtocol value
     * @return bool|null
     */
    public function getIsOnlyProtocol(): ?bool
    {
        return $this->isOnlyProtocol;
    }
    /**
     * Set isOnlyProtocol value
     * @param bool $isOnlyProtocol
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
     */
    public function setIsOnlyProtocol(?bool $isOnlyProtocol = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOnlyProtocol) && !is_bool($isOnlyProtocol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOnlyProtocol, true), gettype($isOnlyProtocol)), __LINE__);
        }
        $this->isOnlyProtocol = $isOnlyProtocol;
        
        return $this;
    }
    /**
     * Get preventBooking value
     * @return bool|null
     */
    public function getPreventBooking(): ?bool
    {
        return $this->preventBooking;
    }
    /**
     * Set preventBooking value
     * @param bool $preventBooking
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
     */
    public function setPreventBooking(?bool $preventBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBooking) && !is_bool($preventBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBooking, true), gettype($preventBooking)), __LINE__);
        }
        $this->preventBooking = $preventBooking;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Get MidocoDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition|null
     */
    public function getMidocoDirectDebitPosition(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition
    {
        return $this->MidocoDirectDebitPosition;
    }
    /**
     * Set MidocoDirectDebitPosition value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $midocoDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
     */
    public function setMidocoDirectDebitPosition(?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $midocoDirectDebitPosition = null): self
    {
        $this->MidocoDirectDebitPosition = $midocoDirectDebitPosition;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitTransactionRequest
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
