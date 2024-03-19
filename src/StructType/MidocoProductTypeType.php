<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProductTypeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoProductTypeType extends ProductTypeDTO
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO[]
     */
    protected ?array $MidocoProductTypeMediatorCondition = null;
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO[]
     */
    protected ?array $MidocoProductTypeSupplier = null;
    /**
     * The VatDivisionIn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $VatDivisionIn = null;
    /**
     * The VatDivisionOut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $VatDivisionOut = null;
    /**
     * Constructor method for MidocoProductTypeType
     * @uses MidocoProductTypeType::setMidocoProductTypeMediatorCondition()
     * @uses MidocoProductTypeType::setMidocoProductTypeSupplier()
     * @uses MidocoProductTypeType::setVatDivisionIn()
     * @uses MidocoProductTypeType::setVatDivisionOut()
     * @param \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     * @param \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionIn
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionOut
     */
    public function __construct(?array $midocoProductTypeMediatorCondition = null, ?array $midocoProductTypeSupplier = null, ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionIn = null, ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionOut = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition)
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier)
            ->setVatDivisionIn($vatDivisionIn)
            ->setVatDivisionOut($vatDivisionOut);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO[]
     */
    public function getMidocoProductTypeMediatorCondition(): ?array
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoProductTypeMediatorCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeMediatorCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeMediatorConditionForArrayConstraintFromSetMidocoProductTypeMediatorCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) {
            // validation for constraint: itemType
            if (!$midocoProductTypeTypeMidocoProductTypeMediatorConditionItem instanceof \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO) {
                $invalidValues[] = is_object($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) ? get_class($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) : sprintf('%s(%s)', gettype($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem), var_export($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function setMidocoProductTypeMediatorCondition(?array $midocoProductTypeMediatorCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeMediatorConditionArrayErrorMessage = self::validateMidocoProductTypeMediatorConditionForArrayConstraintFromSetMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition))) {
            throw new InvalidArgumentException($midocoProductTypeMediatorConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function addToMidocoProductTypeMediatorCondition(\Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO[]
     */
    public function getMidocoProductTypeSupplier(): ?array
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoProductTypeSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeSupplierForArrayConstraintFromSetMidocoProductTypeSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoProductTypeTypeMidocoProductTypeSupplierItem) {
            // validation for constraint: itemType
            if (!$midocoProductTypeTypeMidocoProductTypeSupplierItem instanceof \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO) {
                $invalidValues[] = is_object($midocoProductTypeTypeMidocoProductTypeSupplierItem) ? get_class($midocoProductTypeTypeMidocoProductTypeSupplierItem) : sprintf('%s(%s)', gettype($midocoProductTypeTypeMidocoProductTypeSupplierItem), var_export($midocoProductTypeTypeMidocoProductTypeSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function setMidocoProductTypeSupplier(?array $midocoProductTypeSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeSupplierArrayErrorMessage = self::validateMidocoProductTypeSupplierForArrayConstraintFromSetMidocoProductTypeSupplier($midocoProductTypeSupplier))) {
            throw new InvalidArgumentException($midocoProductTypeSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function addToMidocoProductTypeSupplier(\Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ProductTypeSupplierDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeSupplier[] = $item;
        
        return $this;
    }
    /**
     * Get VatDivisionIn value
     * @return \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    public function getVatDivisionIn(): ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType
    {
        return $this->VatDivisionIn;
    }
    /**
     * Set VatDivisionIn value
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionIn
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function setVatDivisionIn(?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionIn = null): self
    {
        $this->VatDivisionIn = $vatDivisionIn;
        
        return $this;
    }
    /**
     * Get VatDivisionOut value
     * @return \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    public function getVatDivisionOut(): ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType
    {
        return $this->VatDivisionOut;
    }
    /**
     * Set VatDivisionOut value
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionOut
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
     */
    public function setVatDivisionOut(?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $vatDivisionOut = null): self
    {
        $this->VatDivisionOut = $vatDivisionOut;
        
        return $this;
    }
}
