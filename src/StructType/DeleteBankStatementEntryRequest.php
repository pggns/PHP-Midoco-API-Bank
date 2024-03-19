<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBankStatementEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBankStatementEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    protected ?array $MidocoBankStatementEntry = null;
    /**
     * Constructor method for DeleteBankStatementEntryRequest
     * @uses DeleteBankStatementEntryRequest::setMidocoBankStatementEntry()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     */
    public function __construct(?array $midocoBankStatementEntry = null)
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry);
    }
    /**
     * Get MidocoBankStatementEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    public function getMidocoBankStatementEntry(): ?array
    {
        return $this->MidocoBankStatementEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryForArrayConstraintFromSetMidocoBankStatementEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBankStatementEntryRequestMidocoBankStatementEntryItem) {
            // validation for constraint: itemType
            if (!$deleteBankStatementEntryRequestMidocoBankStatementEntryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
                $invalidValues[] = is_object($deleteBankStatementEntryRequestMidocoBankStatementEntryItem) ? get_class($deleteBankStatementEntryRequestMidocoBankStatementEntryItem) : sprintf('%s(%s)', gettype($deleteBankStatementEntryRequestMidocoBankStatementEntryItem), var_export($deleteBankStatementEntryRequestMidocoBankStatementEntryItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryRequest
     */
    public function setMidocoBankStatementEntry(?array $midocoBankStatementEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryArrayErrorMessage = self::validateMidocoBankStatementEntryForArrayConstraintFromSetMidocoBankStatementEntry($midocoBankStatementEntry))) {
            throw new InvalidArgumentException($midocoBankStatementEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $item
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryRequest
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
