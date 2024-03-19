<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueInfoForOrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRevenueInfoForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoRevenueInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo[]
     */
    protected ?array $MidocoRevenueInfo = null;
    /**
     * Constructor method for GetRevenueInfoForOrderResponse
     * @uses GetRevenueInfoForOrderResponse::setMidocoRevenueInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo[] $midocoRevenueInfo
     */
    public function __construct(?array $midocoRevenueInfo = null)
    {
        $this
            ->setMidocoRevenueInfo($midocoRevenueInfo);
    }
    /**
     * Get MidocoRevenueInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo[]
     */
    public function getMidocoRevenueInfo(): ?array
    {
        return $this->MidocoRevenueInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRevenueInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueInfoForArrayConstraintFromSetMidocoRevenueInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRevenueInfoForOrderResponseMidocoRevenueInfoItem) {
            // validation for constraint: itemType
            if (!$getRevenueInfoForOrderResponseMidocoRevenueInfoItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo) {
                $invalidValues[] = is_object($getRevenueInfoForOrderResponseMidocoRevenueInfoItem) ? get_class($getRevenueInfoForOrderResponseMidocoRevenueInfoItem) : sprintf('%s(%s)', gettype($getRevenueInfoForOrderResponseMidocoRevenueInfoItem), var_export($getRevenueInfoForOrderResponseMidocoRevenueInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo[] $midocoRevenueInfo
     * @return \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderResponse
     */
    public function setMidocoRevenueInfo(?array $midocoRevenueInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueInfoArrayErrorMessage = self::validateMidocoRevenueInfoForArrayConstraintFromSetMidocoRevenueInfo($midocoRevenueInfo))) {
            throw new InvalidArgumentException($midocoRevenueInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueInfo = $midocoRevenueInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderResponse
     */
    public function addToMidocoRevenueInfo(\Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoRevenueInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueInfo[] = $item;
        
        return $this;
    }
}
