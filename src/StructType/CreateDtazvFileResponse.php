<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDtazvFileResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDtazvFileResponse extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoDirectDebitProtocol
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol[]
     */
    protected ?array $MidocoDirectDebitProtocol = null;
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * The errorCount
     * @var int|null
     */
    protected ?int $errorCount = null;
    /**
     * The createdTransactionCount
     * @var int|null
     */
    protected ?int $createdTransactionCount = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * Constructor method for CreateDtazvFileResponse
     * @uses CreateDtazvFileResponse::setMidocoDirectDebitProtocol()
     * @uses CreateDtazvFileResponse::setFileId()
     * @uses CreateDtazvFileResponse::setErrorCount()
     * @uses CreateDtazvFileResponse::setCreatedTransactionCount()
     * @uses CreateDtazvFileResponse::setErrorCode()
     * @uses CreateDtazvFileResponse::setErrorBundle()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol[] $midocoDirectDebitProtocol
     * @param int $fileId
     * @param int $errorCount
     * @param int $createdTransactionCount
     * @param string $errorCode
     * @param string $errorBundle
     */
    public function __construct(?array $midocoDirectDebitProtocol = null, ?int $fileId = null, ?int $errorCount = null, ?int $createdTransactionCount = null, ?string $errorCode = null, ?string $errorBundle = null)
    {
        $this
            ->setMidocoDirectDebitProtocol($midocoDirectDebitProtocol)
            ->setFileId($fileId)
            ->setErrorCount($errorCount)
            ->setCreatedTransactionCount($createdTransactionCount)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle);
    }
    /**
     * Get MidocoDirectDebitProtocol value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol[]
     */
    public function getMidocoDirectDebitProtocol(): ?array
    {
        return $this->MidocoDirectDebitProtocol;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDirectDebitProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitProtocol method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitProtocolForArrayConstraintFromSetMidocoDirectDebitProtocol(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createDtazvFileResponseMidocoDirectDebitProtocolItem) {
            // validation for constraint: itemType
            if (!$createDtazvFileResponseMidocoDirectDebitProtocolItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol) {
                $invalidValues[] = is_object($createDtazvFileResponseMidocoDirectDebitProtocolItem) ? get_class($createDtazvFileResponseMidocoDirectDebitProtocolItem) : sprintf('%s(%s)', gettype($createDtazvFileResponseMidocoDirectDebitProtocolItem), var_export($createDtazvFileResponseMidocoDirectDebitProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDirectDebitProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDirectDebitProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol[] $midocoDirectDebitProtocol
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
     */
    public function setMidocoDirectDebitProtocol(?array $midocoDirectDebitProtocol = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitProtocolArrayErrorMessage = self::validateMidocoDirectDebitProtocolForArrayConstraintFromSetMidocoDirectDebitProtocol($midocoDirectDebitProtocol))) {
            throw new InvalidArgumentException($midocoDirectDebitProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitProtocol = $midocoDirectDebitProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol $item
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
     */
    public function addToMidocoDirectDebitProtocol(\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol) {
            throw new InvalidArgumentException(sprintf('The MidocoDirectDebitProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitProtocol, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDirectDebitProtocol[] = $item;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
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
     * Get errorCount value
     * @return int|null
     */
    public function getErrorCount(): ?int
    {
        return $this->errorCount;
    }
    /**
     * Set errorCount value
     * @param int $errorCount
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
     */
    public function setErrorCount(?int $errorCount = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCount) && !(is_int($errorCount) || ctype_digit($errorCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCount, true), gettype($errorCount)), __LINE__);
        }
        $this->errorCount = $errorCount;
        
        return $this;
    }
    /**
     * Get createdTransactionCount value
     * @return int|null
     */
    public function getCreatedTransactionCount(): ?int
    {
        return $this->createdTransactionCount;
    }
    /**
     * Set createdTransactionCount value
     * @param int $createdTransactionCount
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
     */
    public function setCreatedTransactionCount(?int $createdTransactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($createdTransactionCount) && !(is_int($createdTransactionCount) || ctype_digit($createdTransactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdTransactionCount, true), gettype($createdTransactionCount)), __LINE__);
        }
        $this->createdTransactionCount = $createdTransactionCount;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileResponse
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
}
