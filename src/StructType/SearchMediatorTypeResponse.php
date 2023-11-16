<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorTypeResponse StructType
 * @subpackage Structs
 */
class SearchMediatorTypeResponse extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO[]
     */
    protected array $MediatorTypeInfo = [];
    /**
     * Constructor method for SearchMediatorTypeResponse
     * @uses SearchMediatorTypeResponse::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO[] $mediatorTypeInfo
     */
    public function __construct(array $mediatorTypeInfo = [])
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO[]
     */
    public function getMediatorTypeInfo(): array
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMediatorTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorTypeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorTypeInfoForArrayConstraintsFromSetMediatorTypeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorTypeResponseMediatorTypeInfoItem) {
            // validation for constraint: itemType
            if (!$searchMediatorTypeResponseMediatorTypeInfoItem instanceof \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO) {
                $invalidValues[] = is_object($searchMediatorTypeResponseMediatorTypeInfoItem) ? get_class($searchMediatorTypeResponseMediatorTypeInfoItem) : sprintf('%s(%s)', gettype($searchMediatorTypeResponseMediatorTypeInfoItem), var_export($searchMediatorTypeResponseMediatorTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorTypeInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO[] $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchMediatorTypeResponse
     */
    public function setMediatorTypeInfo(array $mediatorTypeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorTypeInfoArrayErrorMessage = self::validateMediatorTypeInfoForArrayConstraintsFromSetMediatorTypeInfo($mediatorTypeInfo))) {
            throw new InvalidArgumentException($mediatorTypeInfoArrayErrorMessage, __LINE__);
        }
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
    /**
     * Add item to MediatorTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchMediatorTypeResponse
     */
    public function addToMediatorTypeInfo(\Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MediatorTypeInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorTypeInfo[] = $item;
        
        return $this;
    }
}
