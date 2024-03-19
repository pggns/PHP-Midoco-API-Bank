<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderAttributeValues StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for OrderAttributes and SellItemAttributes that need to be saved.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderAttributeValues extends AbstractStructBase
{
    /**
     * The orderAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\OrderAttr[]
     */
    protected ?array $orderAttr = null;
    /**
     * The itemAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\ItemAttr[]
     */
    protected ?array $itemAttr = null;
    /**
     * Constructor method for MidocoOrderAttributeValues
     * @uses MidocoOrderAttributeValues::setOrderAttr()
     * @uses MidocoOrderAttributeValues::setItemAttr()
     * @param \Pggns\MidocoApi\Bank\StructType\OrderAttr[] $orderAttr
     * @param \Pggns\MidocoApi\Bank\StructType\ItemAttr[] $itemAttr
     */
    public function __construct(?array $orderAttr = null, ?array $itemAttr = null)
    {
        $this
            ->setOrderAttr($orderAttr)
            ->setItemAttr($itemAttr);
    }
    /**
     * Get orderAttr value
     * @return \Pggns\MidocoApi\Bank\StructType\OrderAttr[]
     */
    public function getOrderAttr(): ?array
    {
        return $this->orderAttr;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderAttr method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderAttrForArrayConstraintFromSetOrderAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderAttributeValuesOrderAttrItem) {
            // validation for constraint: itemType
            if (!$midocoOrderAttributeValuesOrderAttrItem instanceof \Pggns\MidocoApi\Bank\StructType\OrderAttr) {
                $invalidValues[] = is_object($midocoOrderAttributeValuesOrderAttrItem) ? get_class($midocoOrderAttributeValuesOrderAttrItem) : sprintf('%s(%s)', gettype($midocoOrderAttributeValuesOrderAttrItem), var_export($midocoOrderAttributeValuesOrderAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderAttr property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderAttr[] $orderAttr
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderAttributeValues
     */
    public function setOrderAttr(?array $orderAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderAttrArrayErrorMessage = self::validateOrderAttrForArrayConstraintFromSetOrderAttr($orderAttr))) {
            throw new InvalidArgumentException($orderAttrArrayErrorMessage, __LINE__);
        }
        $this->orderAttr = $orderAttr;
        
        return $this;
    }
    /**
     * Add item to orderAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderAttr $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderAttributeValues
     */
    public function addToOrderAttr(\Pggns\MidocoApi\Bank\StructType\OrderAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\OrderAttr) {
            throw new InvalidArgumentException(sprintf('The orderAttr property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderAttr[] = $item;
        
        return $this;
    }
    /**
     * Get itemAttr value
     * @return \Pggns\MidocoApi\Bank\StructType\ItemAttr[]
     */
    public function getItemAttr(): ?array
    {
        return $this->itemAttr;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setItemAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemAttr method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemAttrForArrayConstraintFromSetItemAttr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderAttributeValuesItemAttrItem) {
            // validation for constraint: itemType
            if (!$midocoOrderAttributeValuesItemAttrItem instanceof \Pggns\MidocoApi\Bank\StructType\ItemAttr) {
                $invalidValues[] = is_object($midocoOrderAttributeValuesItemAttrItem) ? get_class($midocoOrderAttributeValuesItemAttrItem) : sprintf('%s(%s)', gettype($midocoOrderAttributeValuesItemAttrItem), var_export($midocoOrderAttributeValuesItemAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemAttr property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ItemAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ItemAttr[] $itemAttr
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderAttributeValues
     */
    public function setItemAttr(?array $itemAttr = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemAttrArrayErrorMessage = self::validateItemAttrForArrayConstraintFromSetItemAttr($itemAttr))) {
            throw new InvalidArgumentException($itemAttrArrayErrorMessage, __LINE__);
        }
        $this->itemAttr = $itemAttr;
        
        return $this;
    }
    /**
     * Add item to itemAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ItemAttr $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderAttributeValues
     */
    public function addToItemAttr(\Pggns\MidocoApi\Bank\StructType\ItemAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\ItemAttr) {
            throw new InvalidArgumentException(sprintf('The itemAttr property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ItemAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemAttr[] = $item;
        
        return $this;
    }
}
