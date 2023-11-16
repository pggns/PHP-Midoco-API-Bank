<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankStatementsResponse StructType
 * @subpackage Structs
 */
class SearchBankStatementsResponse extends AbstractStructBase
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
     * The noOfElements
     * @var int|null
     */
    protected ?int $noOfElements = null;
    /**
     * Constructor method for SearchBankStatementsResponse
     * @uses SearchBankStatementsResponse::setMidocoBankStatementEntry()
     * @uses SearchBankStatementsResponse::setNoOfElements()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     * @param int $noOfElements
     */
    public function __construct(array $midocoBankStatementEntry = [], ?int $noOfElements = null)
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry)
            ->setNoOfElements($noOfElements);
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
        foreach ($values as $searchBankStatementsResponseMidocoBankStatementEntryItem) {
            // validation for constraint: itemType
            if (!$searchBankStatementsResponseMidocoBankStatementEntryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
                $invalidValues[] = is_object($searchBankStatementsResponseMidocoBankStatementEntryItem) ? get_class($searchBankStatementsResponseMidocoBankStatementEntryItem) : sprintf('%s(%s)', gettype($searchBankStatementsResponseMidocoBankStatementEntryItem), var_export($searchBankStatementsResponseMidocoBankStatementEntryItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsResponse
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsResponse
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
    /**
     * Get noOfElements value
     * @return int|null
     */
    public function getNoOfElements(): ?int
    {
        return $this->noOfElements;
    }
    /**
     * Set noOfElements value
     * @param int $noOfElements
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsResponse
     */
    public function setNoOfElements(?int $noOfElements = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfElements) && !(is_int($noOfElements) || ctype_digit($noOfElements))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfElements, true), gettype($noOfElements)), __LINE__);
        }
        $this->noOfElements = $noOfElements;
        
        return $this;
    }
}
