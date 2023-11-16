<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWSGroupsResponse StructType
 * @subpackage Structs
 */
class GetWSGroupsResponse extends AbstractStructBase
{
    /**
     * The MidocoWsGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoWsGroup
     * @var \Pggns\MidocoApi\Bank\StructType\WsgroupDTO[]
     */
    protected array $MidocoWsGroup = [];
    /**
     * Constructor method for GetWSGroupsResponse
     * @uses GetWSGroupsResponse::setMidocoWsGroup()
     * @param \Pggns\MidocoApi\Bank\StructType\WsgroupDTO[] $midocoWsGroup
     */
    public function __construct(array $midocoWsGroup = [])
    {
        $this
            ->setMidocoWsGroup($midocoWsGroup);
    }
    /**
     * Get MidocoWsGroup value
     * @return \Pggns\MidocoApi\Bank\StructType\WsgroupDTO[]
     */
    public function getMidocoWsGroup(): array
    {
        return $this->MidocoWsGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoWsGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoWsGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoWsGroupForArrayConstraintsFromSetMidocoWsGroup(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWSGroupsResponseMidocoWsGroupItem) {
            // validation for constraint: itemType
            if (!$getWSGroupsResponseMidocoWsGroupItem instanceof \Pggns\MidocoApi\Bank\StructType\WsgroupDTO) {
                $invalidValues[] = is_object($getWSGroupsResponseMidocoWsGroupItem) ? get_class($getWSGroupsResponseMidocoWsGroupItem) : sprintf('%s(%s)', gettype($getWSGroupsResponseMidocoWsGroupItem), var_export($getWSGroupsResponseMidocoWsGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoWsGroup property can only contain items of type \Pggns\MidocoApi\Bank\StructType\WsgroupDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoWsGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\WsgroupDTO[] $midocoWsGroup
     * @return \Pggns\MidocoApi\Bank\StructType\GetWSGroupsResponse
     */
    public function setMidocoWsGroup(array $midocoWsGroup = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoWsGroupArrayErrorMessage = self::validateMidocoWsGroupForArrayConstraintsFromSetMidocoWsGroup($midocoWsGroup))) {
            throw new InvalidArgumentException($midocoWsGroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoWsGroup = $midocoWsGroup;
        
        return $this;
    }
    /**
     * Add item to MidocoWsGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\WsgroupDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetWSGroupsResponse
     */
    public function addToMidocoWsGroup(\Pggns\MidocoApi\Bank\StructType\WsgroupDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\WsgroupDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoWsGroup property can only contain items of type \Pggns\MidocoApi\Bank\StructType\WsgroupDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoWsGroup[] = $item;
        
        return $this;
    }
}
