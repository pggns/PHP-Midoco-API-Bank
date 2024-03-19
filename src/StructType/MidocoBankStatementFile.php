<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankStatementFile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankStatementFile extends BankStatementDTO
{
    /**
     * The MidocoBankStatementAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[]
     */
    protected ?array $MidocoBankStatementAccount = null;
    /**
     * Constructor method for MidocoBankStatementFile
     * @uses MidocoBankStatementFile::setMidocoBankStatementAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[] $midocoBankStatementAccount
     */
    public function __construct(?array $midocoBankStatementAccount = null)
    {
        $this
            ->setMidocoBankStatementAccount($midocoBankStatementAccount);
    }
    /**
     * Get MidocoBankStatementAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType[]
     */
    public function getMidocoBankStatementAccount(): ?array
    {
        return $this->MidocoBankStatementAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementAccountForArrayConstraintFromSetMidocoBankStatementAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBankStatementFileMidocoBankStatementAccountItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementFileMidocoBankStatementAccountItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType) {
                $invalidValues[] = is_object($midocoBankStatementFileMidocoBankStatementAccountItem) ? get_class($midocoBankStatementFileMidocoBankStatementAccountItem) : sprintf('%s(%s)', gettype($midocoBankStatementFileMidocoBankStatementAccountItem), var_export($midocoBankStatementFileMidocoBankStatementAccountItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile
     */
    public function setMidocoBankStatementAccount(?array $midocoBankStatementAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementAccountArrayErrorMessage = self::validateMidocoBankStatementAccountForArrayConstraintFromSetMidocoBankStatementAccount($midocoBankStatementAccount))) {
            throw new InvalidArgumentException($midocoBankStatementAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementAccount = $midocoBankStatementAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile
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
}
