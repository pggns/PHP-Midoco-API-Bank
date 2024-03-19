<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderLockReasonDescriptionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderLockReasonDescriptions --- returns a list of order lock reason descriptions for the given lock reason
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderLockReasonDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReasonDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLockReasonDescription
     * @var \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO[]
     */
    protected ?array $MidocoOrderLockReasonDescription = null;
    /**
     * Constructor method for GetOrderLockReasonDescriptionsResponse
     * @uses GetOrderLockReasonDescriptionsResponse::setMidocoOrderLockReasonDescription()
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO[] $midocoOrderLockReasonDescription
     */
    public function __construct(?array $midocoOrderLockReasonDescription = null)
    {
        $this
            ->setMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription);
    }
    /**
     * Get MidocoOrderLockReasonDescription value
     * @return \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO[]
     */
    public function getMidocoOrderLockReasonDescription(): ?array
    {
        return $this->MidocoOrderLockReasonDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderLockReasonDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLockReasonDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLockReasonDescriptionForArrayConstraintFromSetMidocoOrderLockReasonDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) {
            // validation for constraint: itemType
            if (!$getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem instanceof \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO) {
                $invalidValues[] = is_object($getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) ? get_class($getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem) : sprintf('%s(%s)', gettype($getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem), var_export($getOrderLockReasonDescriptionsResponseMidocoOrderLockReasonDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLockReasonDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLockReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO[] $midocoOrderLockReasonDescription
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrderLockReasonDescriptionsResponse
     */
    public function setMidocoOrderLockReasonDescription(?array $midocoOrderLockReasonDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLockReasonDescriptionArrayErrorMessage = self::validateMidocoOrderLockReasonDescriptionForArrayConstraintFromSetMidocoOrderLockReasonDescription($midocoOrderLockReasonDescription))) {
            throw new InvalidArgumentException($midocoOrderLockReasonDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLockReasonDescription = $midocoOrderLockReasonDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLockReasonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrderLockReasonDescriptionsResponse
     */
    public function addToMidocoOrderLockReasonDescription(\Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLockReasonDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLockReasonDescription[] = $item;
        
        return $this;
    }
}
