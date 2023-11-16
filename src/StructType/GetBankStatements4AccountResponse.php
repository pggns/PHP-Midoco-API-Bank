<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatements4AccountResponse StructType
 * @subpackage Structs
 */
class GetBankStatements4AccountResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    protected array $MidocoBankStatementEntry = [];
    /**
     * Constructor method for GetBankStatements4AccountResponse
     * @uses GetBankStatements4AccountResponse::setMidocoBankStatementEntry()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     */
    public function __construct(array $midocoBankStatementEntry = [])
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry);
    }
    /**
     * Get MidocoBankStatementEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    public function getMidocoBankStatementEntry(): array
    {
        return $this->MidocoBankStatementEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankStatementEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryForArrayConstraintsFromSetMidocoBankStatementEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankStatements4AccountResponseMidocoBankStatementEntryItem) {
            // validation for constraint: itemType
            if (!$getBankStatements4AccountResponseMidocoBankStatementEntryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
                $invalidValues[] = is_object($getBankStatements4AccountResponseMidocoBankStatementEntryItem) ? get_class($getBankStatements4AccountResponseMidocoBankStatementEntryItem) : sprintf('%s(%s)', gettype($getBankStatements4AccountResponseMidocoBankStatementEntryItem), var_export($getBankStatements4AccountResponseMidocoBankStatementEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountResponse
     */
    public function setMidocoBankStatementEntry(array $midocoBankStatementEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryArrayErrorMessage = self::validateMidocoBankStatementEntryForArrayConstraintsFromSetMidocoBankStatementEntry($midocoBankStatementEntry))) {
            throw new InvalidArgumentException($midocoBankStatementEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountResponse
     */
    public function addToMidocoBankStatementEntry(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntry[] = $item;
        
        return $this;
    }
}
