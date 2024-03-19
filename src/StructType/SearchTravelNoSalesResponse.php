<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelNoSalesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTravelNoSalesResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType[]
     */
    protected ?array $MidocoBookingInfo = null;
    /**
     * Constructor method for SearchTravelNoSalesResponse
     * @uses SearchTravelNoSalesResponse::setMidocoBookingInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     */
    public function __construct(?array $midocoBookingInfo = null)
    {
        $this
            ->setMidocoBookingInfo($midocoBookingInfo);
    }
    /**
     * Get MidocoBookingInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType[]
     */
    public function getMidocoBookingInfo(): ?array
    {
        return $this->MidocoBookingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingInfoForArrayConstraintFromSetMidocoBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTravelNoSalesResponseMidocoBookingInfoItem) {
            // validation for constraint: itemType
            if (!$searchTravelNoSalesResponseMidocoBookingInfoItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType) {
                $invalidValues[] = is_object($searchTravelNoSalesResponseMidocoBookingInfoItem) ? get_class($searchTravelNoSalesResponseMidocoBookingInfoItem) : sprintf('%s(%s)', gettype($searchTravelNoSalesResponseMidocoBookingInfoItem), var_export($searchTravelNoSalesResponseMidocoBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchTravelNoSalesResponse
     */
    public function setMidocoBookingInfo(?array $midocoBookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingInfoArrayErrorMessage = self::validateMidocoBookingInfoForArrayConstraintFromSetMidocoBookingInfo($midocoBookingInfo))) {
            throw new InvalidArgumentException($midocoBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingInfo = $midocoBookingInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchTravelNoSalesResponse
     */
    public function addToMidocoBookingInfo(\Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingInfo[] = $item;
        
        return $this;
    }
}
