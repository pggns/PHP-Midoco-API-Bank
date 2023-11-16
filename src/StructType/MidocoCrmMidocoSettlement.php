<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmMidocoSettlement StructType
 * @subpackage Structs
 */
class MidocoCrmMidocoSettlement extends CrmMidocoSettlementDTO
{
    /**
     * The MidocoCrmMidocoSettlLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlLevel
     * @var \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO[]
     */
    protected array $MidocoCrmMidocoSettlLevel = [];
    /**
     * The MidocoCrmMidocoSettlFee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmMidocoSettlFee
     * @var \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO[]
     */
    protected array $MidocoCrmMidocoSettlFee = [];
    /**
     * The MidocoAssignedMidocoSettlOUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoSettlOUnit
     * @var \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO[]
     */
    protected array $MidocoAssignedMidocoSettlOUnit = [];
    /**
     * Constructor method for MidocoCrmMidocoSettlement
     * @uses MidocoCrmMidocoSettlement::setMidocoCrmMidocoSettlLevel()
     * @uses MidocoCrmMidocoSettlement::setMidocoCrmMidocoSettlFee()
     * @uses MidocoCrmMidocoSettlement::setMidocoAssignedMidocoSettlOUnit()
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO[] $midocoCrmMidocoSettlLevel
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO[] $midocoCrmMidocoSettlFee
     * @param \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO[] $midocoAssignedMidocoSettlOUnit
     */
    public function __construct(array $midocoCrmMidocoSettlLevel = [], array $midocoCrmMidocoSettlFee = [], array $midocoAssignedMidocoSettlOUnit = [])
    {
        $this
            ->setMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel)
            ->setMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee)
            ->setMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit);
    }
    /**
     * Get MidocoCrmMidocoSettlLevel value
     * @return \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO[]
     */
    public function getMidocoCrmMidocoSettlLevel(): array
    {
        return $this->MidocoCrmMidocoSettlLevel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoSettlLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlLevel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem instanceof \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem) ? get_class($midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem), var_export($midocoCrmMidocoSettlementMidocoCrmMidocoSettlLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlLevel property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO[] $midocoCrmMidocoSettlLevel
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function setMidocoCrmMidocoSettlLevel(array $midocoCrmMidocoSettlLevel = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlLevelArrayErrorMessage = self::validateMidocoCrmMidocoSettlLevelForArrayConstraintsFromSetMidocoCrmMidocoSettlLevel($midocoCrmMidocoSettlLevel))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlLevelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlLevel = $midocoCrmMidocoSettlLevel;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlLevel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function addToMidocoCrmMidocoSettlLevel(\Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlLevel property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlLevelDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlLevel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmMidocoSettlFee value
     * @return \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO[]
     */
    public function getMidocoCrmMidocoSettlFee(): array
    {
        return $this->MidocoCrmMidocoSettlFee;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmMidocoSettlFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmMidocoSettlFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmMidocoSettlFeeForArrayConstraintsFromSetMidocoCrmMidocoSettlFee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem instanceof \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem) ? get_class($midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem), var_export($midocoCrmMidocoSettlementMidocoCrmMidocoSettlFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmMidocoSettlFee property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmMidocoSettlFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO[] $midocoCrmMidocoSettlFee
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function setMidocoCrmMidocoSettlFee(array $midocoCrmMidocoSettlFee = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmMidocoSettlFeeArrayErrorMessage = self::validateMidocoCrmMidocoSettlFeeForArrayConstraintsFromSetMidocoCrmMidocoSettlFee($midocoCrmMidocoSettlFee))) {
            throw new InvalidArgumentException($midocoCrmMidocoSettlFeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmMidocoSettlFee = $midocoCrmMidocoSettlFee;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmMidocoSettlFee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function addToMidocoCrmMidocoSettlFee(\Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmMidocoSettlFee property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CrmMidocoSettlFeeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmMidocoSettlFee[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAssignedMidocoSettlOUnit value
     * @return \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO[]
     */
    public function getMidocoAssignedMidocoSettlOUnit(): array
    {
        return $this->MidocoAssignedMidocoSettlOUnit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoSettlOUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoSettlOUnit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoSettlOUnitForArrayConstraintsFromSetMidocoAssignedMidocoSettlOUnit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem) {
            // validation for constraint: itemType
            if (!$midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem instanceof \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO) {
                $invalidValues[] = is_object($midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem) ? get_class($midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem) : sprintf('%s(%s)', gettype($midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem), var_export($midocoCrmMidocoSettlementMidocoAssignedMidocoSettlOUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoSettlOUnit property can only contain items of type \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoSettlOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO[] $midocoAssignedMidocoSettlOUnit
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function setMidocoAssignedMidocoSettlOUnit(array $midocoAssignedMidocoSettlOUnit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoSettlOUnitArrayErrorMessage = self::validateMidocoAssignedMidocoSettlOUnitForArrayConstraintsFromSetMidocoAssignedMidocoSettlOUnit($midocoAssignedMidocoSettlOUnit))) {
            throw new InvalidArgumentException($midocoAssignedMidocoSettlOUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoSettlOUnit = $midocoAssignedMidocoSettlOUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoSettlOUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmMidocoSettlement
     */
    public function addToMidocoAssignedMidocoSettlOUnit(\Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoSettlOUnit property can only contain items of type \Pggns\MidocoApi\Bank\StructType\AssignedMidocoSettlOUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoSettlOUnit[] = $item;
        
        return $this;
    }
}
