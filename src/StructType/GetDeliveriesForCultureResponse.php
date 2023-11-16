<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveriesForCultureResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDeliveriesForCulture --- returns the delievery types descriptions translated for the given culture
 * @subpackage Structs
 */
class GetDeliveriesForCultureResponse extends AbstractStructBase
{
    /**
     * The MidocoDeliveryTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDeliveryTypeDescription
     * @var \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO[]
     */
    protected array $MidocoDeliveryTypeDescription = [];
    /**
     * Constructor method for GetDeliveriesForCultureResponse
     * @uses GetDeliveriesForCultureResponse::setMidocoDeliveryTypeDescription()
     * @param \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO[] $midocoDeliveryTypeDescription
     */
    public function __construct(array $midocoDeliveryTypeDescription = [])
    {
        $this
            ->setMidocoDeliveryTypeDescription($midocoDeliveryTypeDescription);
    }
    /**
     * Get MidocoDeliveryTypeDescription value
     * @return \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO[]
     */
    public function getMidocoDeliveryTypeDescription(): array
    {
        return $this->MidocoDeliveryTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDeliveryTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeliveryTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeliveryTypeDescriptionForArrayConstraintsFromSetMidocoDeliveryTypeDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem instanceof \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO) {
                $invalidValues[] = is_object($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) ? get_class($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) : sprintf('%s(%s)', gettype($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem), var_export($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDeliveryTypeDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDeliveryTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO[] $midocoDeliveryTypeDescription
     * @return \Pggns\MidocoApi\Bank\StructType\GetDeliveriesForCultureResponse
     */
    public function setMidocoDeliveryTypeDescription(array $midocoDeliveryTypeDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeliveryTypeDescriptionArrayErrorMessage = self::validateMidocoDeliveryTypeDescriptionForArrayConstraintsFromSetMidocoDeliveryTypeDescription($midocoDeliveryTypeDescription))) {
            throw new InvalidArgumentException($midocoDeliveryTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDeliveryTypeDescription = $midocoDeliveryTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoDeliveryTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetDeliveriesForCultureResponse
     */
    public function addToMidocoDeliveryTypeDescription(\Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDeliveryTypeDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\DeliveryTypeDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDeliveryTypeDescription[] = $item;
        
        return $this;
    }
}
