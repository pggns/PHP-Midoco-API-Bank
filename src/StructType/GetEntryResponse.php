<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryResponse StructType
 * @subpackage Structs
 */
class GetEntryResponse extends AbstractStructBase
{
    /**
     * The MidocoEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoEntry[]
     */
    protected array $MidocoEntry = [];
    /**
     * Constructor method for GetEntryResponse
     * @uses GetEntryResponse::setMidocoEntry()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntry[] $midocoEntry
     */
    public function __construct(array $midocoEntry = [])
    {
        $this
            ->setMidocoEntry($midocoEntry);
    }
    /**
     * Get MidocoEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoEntry[]
     */
    public function getMidocoEntry(): array
    {
        return $this->MidocoEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEntryForArrayConstraintsFromSetMidocoEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEntryResponseMidocoEntryItem) {
            // validation for constraint: itemType
            if (!$getEntryResponseMidocoEntryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoEntry) {
                $invalidValues[] = is_object($getEntryResponseMidocoEntryItem) ? get_class($getEntryResponseMidocoEntryItem) : sprintf('%s(%s)', gettype($getEntryResponseMidocoEntryItem), var_export($getEntryResponseMidocoEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntry[] $midocoEntry
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryResponse
     */
    public function setMidocoEntry(array $midocoEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEntryArrayErrorMessage = self::validateMidocoEntryForArrayConstraintsFromSetMidocoEntry($midocoEntry))) {
            throw new InvalidArgumentException($midocoEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoEntry = $midocoEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntry $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryResponse
     */
    public function addToMidocoEntry(\Pggns\MidocoApi\Bank\StructType\MidocoEntry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoEntry) {
            throw new InvalidArgumentException(sprintf('The MidocoEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEntry[] = $item;
        
        return $this;
    }
}
