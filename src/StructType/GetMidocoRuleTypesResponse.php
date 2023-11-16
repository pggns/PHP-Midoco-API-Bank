<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoRuleTypesResponse StructType
 * @subpackage Structs
 */
class GetMidocoRuleTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleType
     * @var \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO[]
     */
    protected array $MidocoRuleType = [];
    /**
     * Constructor method for GetMidocoRuleTypesResponse
     * @uses GetMidocoRuleTypesResponse::setMidocoRuleType()
     * @param \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO[] $midocoRuleType
     */
    public function __construct(array $midocoRuleType = [])
    {
        $this
            ->setMidocoRuleType($midocoRuleType);
    }
    /**
     * Get MidocoRuleType value
     * @return \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO[]
     */
    public function getMidocoRuleType(): array
    {
        return $this->MidocoRuleType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRuleType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleTypeForArrayConstraintsFromSetMidocoRuleType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoRuleTypesResponseMidocoRuleTypeItem) {
            // validation for constraint: itemType
            if (!$getMidocoRuleTypesResponseMidocoRuleTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO) {
                $invalidValues[] = is_object($getMidocoRuleTypesResponseMidocoRuleTypeItem) ? get_class($getMidocoRuleTypesResponseMidocoRuleTypeItem) : sprintf('%s(%s)', gettype($getMidocoRuleTypesResponseMidocoRuleTypeItem), var_export($getMidocoRuleTypesResponseMidocoRuleTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO[] $midocoRuleType
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoRuleTypesResponse
     */
    public function setMidocoRuleType(array $midocoRuleType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleTypeArrayErrorMessage = self::validateMidocoRuleTypeForArrayConstraintsFromSetMidocoRuleType($midocoRuleType))) {
            throw new InvalidArgumentException($midocoRuleTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleType = $midocoRuleType;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoRuleTypesResponse
     */
    public function addToMidocoRuleType(\Pggns\MidocoApi\Bank\StructType\RuleTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\RuleTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleType[] = $item;
        
        return $this;
    }
}
