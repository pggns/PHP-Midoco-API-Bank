<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountPlan4OrgUnitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountPlan4OrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAccountInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccountInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo[]
     */
    protected ?array $MidocoAccountInfo = null;
    /**
     * Constructor method for GetAccountPlan4OrgUnitResponse
     * @uses GetAccountPlan4OrgUnitResponse::setMidocoAccountInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo[] $midocoAccountInfo
     */
    public function __construct(?array $midocoAccountInfo = null)
    {
        $this
            ->setMidocoAccountInfo($midocoAccountInfo);
    }
    /**
     * Get MidocoAccountInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo[]
     */
    public function getMidocoAccountInfo(): ?array
    {
        return $this->MidocoAccountInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAccountInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccountInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccountInfoForArrayConstraintFromSetMidocoAccountInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountPlan4OrgUnitResponseMidocoAccountInfoItem) {
            // validation for constraint: itemType
            if (!$getAccountPlan4OrgUnitResponseMidocoAccountInfoItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo) {
                $invalidValues[] = is_object($getAccountPlan4OrgUnitResponseMidocoAccountInfoItem) ? get_class($getAccountPlan4OrgUnitResponseMidocoAccountInfoItem) : sprintf('%s(%s)', gettype($getAccountPlan4OrgUnitResponseMidocoAccountInfoItem), var_export($getAccountPlan4OrgUnitResponseMidocoAccountInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccountInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccountInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo[] $midocoAccountInfo
     * @return \Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitResponse
     */
    public function setMidocoAccountInfo(?array $midocoAccountInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccountInfoArrayErrorMessage = self::validateMidocoAccountInfoForArrayConstraintFromSetMidocoAccountInfo($midocoAccountInfo))) {
            throw new InvalidArgumentException($midocoAccountInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccountInfo = $midocoAccountInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoAccountInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitResponse
     */
    public function addToMidocoAccountInfo(\Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoAccountInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccountInfo[] = $item;
        
        return $this;
    }
}
