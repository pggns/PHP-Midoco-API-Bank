<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierResponse StructType
 * @subpackage Structs
 */
class GetSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign[]
     */
    protected array $MidocoSupplierAccountAssign = [];
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition[]
     */
    protected array $MidocoSupplierPaymentCondition = [];
    /**
     * Constructor method for GetSupplierResponse
     * @uses GetSupplierResponse::setMidocoSupplier()
     * @uses GetSupplierResponse::setMidocoSupplierAddress()
     * @uses GetSupplierResponse::setMidocoSupplierAccountAssign()
     * @uses GetSupplierResponse::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress $midocoSupplierAddress = null, array $midocoSupplierAccountAssign = [], array $midocoSupplierPaymentCondition = [])
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setMidocoSupplierAddress($midocoSupplierAddress)
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign[]
     */
    public function getMidocoSupplierAccountAssign(): array
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAccountAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAccountAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierResponseMidocoSupplierAccountAssignItem) {
            // validation for constraint: itemType
            if (!$getSupplierResponseMidocoSupplierAccountAssignItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign) {
                $invalidValues[] = is_object($getSupplierResponseMidocoSupplierAccountAssignItem) ? get_class($getSupplierResponseMidocoSupplierAccountAssignItem) : sprintf('%s(%s)', gettype($getSupplierResponseMidocoSupplierAccountAssignItem), var_export($getSupplierResponseMidocoSupplierAccountAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierAccountAssign(array $midocoSupplierAccountAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAccountAssignArrayErrorMessage = self::validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign($midocoSupplierAccountAssign))) {
            throw new InvalidArgumentException($midocoSupplierAccountAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function addToMidocoSupplierAccountAssign(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAccountAssign[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition[]
     */
    public function getMidocoSupplierPaymentCondition(): array
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierPaymentCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierPaymentConditionForArrayConstraintsFromSetMidocoSupplierPaymentCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierResponseMidocoSupplierPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$getSupplierResponseMidocoSupplierPaymentConditionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition) {
                $invalidValues[] = is_object($getSupplierResponseMidocoSupplierPaymentConditionItem) ? get_class($getSupplierResponseMidocoSupplierPaymentConditionItem) : sprintf('%s(%s)', gettype($getSupplierResponseMidocoSupplierPaymentConditionItem), var_export($getSupplierResponseMidocoSupplierPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierPaymentCondition(array $midocoSupplierPaymentCondition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierPaymentConditionArrayErrorMessage = self::validateMidocoSupplierPaymentConditionForArrayConstraintsFromSetMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierResponse
     */
    public function addToMidocoSupplierPaymentCondition(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierPaymentCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierPaymentCondition[] = $item;
        
        return $this;
    }
}
