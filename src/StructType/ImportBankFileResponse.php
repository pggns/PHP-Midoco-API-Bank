<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBankFileResponse StructType
 * @subpackage Structs
 */
class ImportBankFileResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[]
     */
    protected array $MidocoBankStatementAccount = [];
    /**
     * The MidocoBankProcessProtocolType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankProcessProtocolType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[]
     */
    protected array $MidocoBankProcessProtocolType = [];
    /**
     * The errorCount
     * @var int|null
     */
    protected ?int $errorCount = null;
    /**
     * Constructor method for ImportBankFileResponse
     * @uses ImportBankFileResponse::setMidocoBankStatementAccount()
     * @uses ImportBankFileResponse::setMidocoBankProcessProtocolType()
     * @uses ImportBankFileResponse::setErrorCount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[] $midocoBankStatementAccount
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[] $midocoBankProcessProtocolType
     * @param int $errorCount
     */
    public function __construct(array $midocoBankStatementAccount = [], array $midocoBankProcessProtocolType = [], ?int $errorCount = null)
    {
        $this
            ->setMidocoBankStatementAccount($midocoBankStatementAccount)
            ->setMidocoBankProcessProtocolType($midocoBankProcessProtocolType)
            ->setErrorCount($errorCount);
    }
    /**
     * Get MidocoBankStatementAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[]
     */
    public function getMidocoBankStatementAccount(): array
    {
        return $this->MidocoBankStatementAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankStatementAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementAccountForArrayConstraintsFromSetMidocoBankStatementAccount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importBankFileResponseMidocoBankStatementAccountItem) {
            // validation for constraint: itemType
            if (!$importBankFileResponseMidocoBankStatementAccountItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType) {
                $invalidValues[] = is_object($importBankFileResponseMidocoBankStatementAccountItem) ? get_class($importBankFileResponseMidocoBankStatementAccountItem) : sprintf('%s(%s)', gettype($importBankFileResponseMidocoBankStatementAccountItem), var_export($importBankFileResponseMidocoBankStatementAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[] $midocoBankStatementAccount
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileResponse
     */
    public function setMidocoBankStatementAccount(array $midocoBankStatementAccount = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementAccountArrayErrorMessage = self::validateMidocoBankStatementAccountForArrayConstraintsFromSetMidocoBankStatementAccount($midocoBankStatementAccount))) {
            throw new InvalidArgumentException($midocoBankStatementAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementAccount = $midocoBankStatementAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileResponse
     */
    public function addToMidocoBankStatementAccount(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementAccount[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBankProcessProtocolType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[]
     */
    public function getMidocoBankProcessProtocolType(): array
    {
        return $this->MidocoBankProcessProtocolType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankProcessProtocolType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankProcessProtocolType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankProcessProtocolTypeForArrayConstraintsFromSetMidocoBankProcessProtocolType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importBankFileResponseMidocoBankProcessProtocolTypeItem) {
            // validation for constraint: itemType
            if (!$importBankFileResponseMidocoBankProcessProtocolTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType) {
                $invalidValues[] = is_object($importBankFileResponseMidocoBankProcessProtocolTypeItem) ? get_class($importBankFileResponseMidocoBankProcessProtocolTypeItem) : sprintf('%s(%s)', gettype($importBankFileResponseMidocoBankProcessProtocolTypeItem), var_export($importBankFileResponseMidocoBankProcessProtocolTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankProcessProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankProcessProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType[] $midocoBankProcessProtocolType
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileResponse
     */
    public function setMidocoBankProcessProtocolType(array $midocoBankProcessProtocolType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankProcessProtocolTypeArrayErrorMessage = self::validateMidocoBankProcessProtocolTypeForArrayConstraintsFromSetMidocoBankProcessProtocolType($midocoBankProcessProtocolType))) {
            throw new InvalidArgumentException($midocoBankProcessProtocolTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankProcessProtocolType = $midocoBankProcessProtocolType;
        
        return $this;
    }
    /**
     * Add item to MidocoBankProcessProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileResponse
     */
    public function addToMidocoBankProcessProtocolType(\Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType) {
            throw new InvalidArgumentException(sprintf('The MidocoBankProcessProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankProcessProtocolType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankProcessProtocolType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileResponse
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
}
