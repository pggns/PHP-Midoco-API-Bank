<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingBatchResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingBatchResponse extends AbstractStructBase
{
    /**
     * The MidocoManualBookingBatch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoManualBookingBatch
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch[]
     */
    protected ?array $MidocoManualBookingBatch = null;
    /**
     * Constructor method for GetBookingBatchResponse
     * @uses GetBookingBatchResponse::setMidocoManualBookingBatch()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch[] $midocoManualBookingBatch
     */
    public function __construct(?array $midocoManualBookingBatch = null)
    {
        $this
            ->setMidocoManualBookingBatch($midocoManualBookingBatch);
    }
    /**
     * Get MidocoManualBookingBatch value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch[]
     */
    public function getMidocoManualBookingBatch(): ?array
    {
        return $this->MidocoManualBookingBatch;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoManualBookingBatch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoManualBookingBatch method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoManualBookingBatchForArrayConstraintFromSetMidocoManualBookingBatch(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingBatchResponseMidocoManualBookingBatchItem) {
            // validation for constraint: itemType
            if (!$getBookingBatchResponseMidocoManualBookingBatchItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch) {
                $invalidValues[] = is_object($getBookingBatchResponseMidocoManualBookingBatchItem) ? get_class($getBookingBatchResponseMidocoManualBookingBatchItem) : sprintf('%s(%s)', gettype($getBookingBatchResponseMidocoManualBookingBatchItem), var_export($getBookingBatchResponseMidocoManualBookingBatchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoManualBookingBatch property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoManualBookingBatch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch[] $midocoManualBookingBatch
     * @return \Pggns\MidocoApi\Bank\StructType\GetBookingBatchResponse
     */
    public function setMidocoManualBookingBatch(?array $midocoManualBookingBatch = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoManualBookingBatchArrayErrorMessage = self::validateMidocoManualBookingBatchForArrayConstraintFromSetMidocoManualBookingBatch($midocoManualBookingBatch))) {
            throw new InvalidArgumentException($midocoManualBookingBatchArrayErrorMessage, __LINE__);
        }
        $this->MidocoManualBookingBatch = $midocoManualBookingBatch;
        
        return $this;
    }
    /**
     * Add item to MidocoManualBookingBatch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBookingBatchResponse
     */
    public function addToMidocoManualBookingBatch(\Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch) {
            throw new InvalidArgumentException(sprintf('The MidocoManualBookingBatch property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBookingBatch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoManualBookingBatch[] = $item;
        
        return $this;
    }
}
