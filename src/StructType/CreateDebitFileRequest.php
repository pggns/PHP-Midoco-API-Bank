<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDebitFileRequest StructType
 * @subpackage Structs
 */
class CreateDebitFileRequest extends AbstractStructBase
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
     * The paymentType
     * @var int|null
     */
    protected ?int $paymentType = null;
    /**
     * The fileFormat
     * Meta information extracted from the WSDL
     * - default: 1
     * @var int|null
     */
    protected ?int $fileFormat = null;
    /**
     * Constructor method for CreateDebitFileRequest
     * @uses CreateDebitFileRequest::setMidocoBankAccount()
     * @uses CreateDebitFileRequest::setPaymentType()
     * @uses CreateDebitFileRequest::setFileFormat()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param int $paymentType
     * @param int $fileFormat
     */
    public function __construct(\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount, ?int $paymentType = null, ?int $fileFormat = 1)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount)
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitFileRequest
     */
    public function setMidocoBankAccount(\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitFileRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDebitFileRequest
     */
    public function setFileFormat(?int $fileFormat = 1): self
    {
        // validation for constraint: int
        if (!is_null($fileFormat) && !(is_int($fileFormat) || ctype_digit($fileFormat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
}
