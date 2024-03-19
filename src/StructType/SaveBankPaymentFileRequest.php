<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankPaymentFileRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankPaymentFileRequest extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
     */
    protected \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount;
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
     * Constructor method for SaveBankPaymentFileRequest
     * @uses SaveBankPaymentFileRequest::setMidocoBankAccount()
     * @uses SaveBankPaymentFileRequest::setFileId()
     * @uses SaveBankPaymentFileRequest::setPaymentType()
     * @uses SaveBankPaymentFileRequest::setFileFormat()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param int $fileId
     * @param int $paymentType
     * @param int $fileFormat
     */
    public function __construct(\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount, ?int $fileId = null, ?int $paymentType = null, ?int $fileFormat = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount)
            ->setFileId($fileId)
            ->setPaymentType($paymentType)
            ->setFileFormat($fileFormat);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
     */
    public function getMidocoBankAccount(): \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileRequest
     */
    public function setMidocoBankAccount(\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileRequest
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
}
