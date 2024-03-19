<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryHistoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEntryHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoEntryHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEntryHistory
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType[]
     */
    protected ?array $MidocoEntryHistory = null;
    /**
     * Constructor method for GetEntryHistoryResponse
     * @uses GetEntryHistoryResponse::setMidocoEntryHistory()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType[] $midocoEntryHistory
     */
    public function __construct(?array $midocoEntryHistory = null)
    {
        $this
            ->setMidocoEntryHistory($midocoEntryHistory);
    }
    /**
     * Get MidocoEntryHistory value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType[]
     */
    public function getMidocoEntryHistory(): ?array
    {
        return $this->MidocoEntryHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoEntryHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEntryHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEntryHistoryForArrayConstraintFromSetMidocoEntryHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEntryHistoryResponseMidocoEntryHistoryItem) {
            // validation for constraint: itemType
            if (!$getEntryHistoryResponseMidocoEntryHistoryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType) {
                $invalidValues[] = is_object($getEntryHistoryResponseMidocoEntryHistoryItem) ? get_class($getEntryHistoryResponseMidocoEntryHistoryItem) : sprintf('%s(%s)', gettype($getEntryHistoryResponseMidocoEntryHistoryItem), var_export($getEntryHistoryResponseMidocoEntryHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType[] $midocoEntryHistory
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryResponse
     */
    public function setMidocoEntryHistory(?array $midocoEntryHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEntryHistoryArrayErrorMessage = self::validateMidocoEntryHistoryForArrayConstraintFromSetMidocoEntryHistory($midocoEntryHistory))) {
            throw new InvalidArgumentException($midocoEntryHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoEntryHistory = $midocoEntryHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryResponse
     */
    public function addToMidocoEntryHistory(\Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType) {
            throw new InvalidArgumentException(sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoEntryHistoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEntryHistory[] = $item;
        
        return $this;
    }
}
