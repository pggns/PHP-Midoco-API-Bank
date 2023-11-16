<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaTypeDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetOrdCriteriaTypeDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeDescription
     * @var \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO[]
     */
    protected array $MidocoOrdCriteriaTypeDescription = [];
    /**
     * Constructor method for GetOrdCriteriaTypeDescriptionsResponse
     * @uses GetOrdCriteriaTypeDescriptionsResponse::setMidocoOrdCriteriaTypeDescription()
     * @param \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaTypeDescription
     */
    public function __construct(array $midocoOrdCriteriaTypeDescription = [])
    {
        $this
            ->setMidocoOrdCriteriaTypeDescription($midocoOrdCriteriaTypeDescription);
    }
    /**
     * Get MidocoOrdCriteriaTypeDescription value
     * @return \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO[]
     */
    public function getMidocoOrdCriteriaTypeDescription(): array
    {
        return $this->MidocoOrdCriteriaTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaTypeDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem instanceof \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO) {
                $invalidValues[] = is_object($getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem) ? get_class($getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem) : sprintf('%s(%s)', gettype($getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem), var_export($getOrdCriteriaTypeDescriptionsResponseMidocoOrdCriteriaTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaTypeDescription
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrdCriteriaTypeDescriptionsResponse
     */
    public function setMidocoOrdCriteriaTypeDescription(array $midocoOrdCriteriaTypeDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeDescriptionArrayErrorMessage = self::validateMidocoOrdCriteriaTypeDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaTypeDescription($midocoOrdCriteriaTypeDescription))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeDescription = $midocoOrdCriteriaTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrdCriteriaTypeDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaTypeDescription(\Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeDescription property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeDescription[] = $item;
        
        return $this;
    }
}
