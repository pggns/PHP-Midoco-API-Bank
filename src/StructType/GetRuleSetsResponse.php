<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleSetsResponse StructType
 * @subpackage Structs
 */
class GetRuleSetsResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Bank\StructType\RulesetDTO[]
     */
    protected array $MidocoRuleSet = [];
    /**
     * Constructor method for GetRuleSetsResponse
     * @uses GetRuleSetsResponse::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Bank\StructType\RulesetDTO[] $midocoRuleSet
     */
    public function __construct(array $midocoRuleSet = [])
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Bank\StructType\RulesetDTO[]
     */
    public function getMidocoRuleSet(): array
    {
        return $this->MidocoRuleSet;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRuleSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRuleSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRuleSetForArrayConstraintsFromSetMidocoRuleSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRuleSetsResponseMidocoRuleSetItem) {
            // validation for constraint: itemType
            if (!$getRuleSetsResponseMidocoRuleSetItem instanceof \Pggns\MidocoApi\Bank\StructType\RulesetDTO) {
                $invalidValues[] = is_object($getRuleSetsResponseMidocoRuleSetItem) ? get_class($getRuleSetsResponseMidocoRuleSetItem) : sprintf('%s(%s)', gettype($getRuleSetsResponseMidocoRuleSetItem), var_export($getRuleSetsResponseMidocoRuleSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRuleSet property can only contain items of type \Pggns\MidocoApi\Bank\StructType\RulesetDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRuleSet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\RulesetDTO[] $midocoRuleSet
     * @return \Pggns\MidocoApi\Bank\StructType\GetRuleSetsResponse
     */
    public function setMidocoRuleSet(array $midocoRuleSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRuleSetArrayErrorMessage = self::validateMidocoRuleSetForArrayConstraintsFromSetMidocoRuleSet($midocoRuleSet))) {
            throw new InvalidArgumentException($midocoRuleSetArrayErrorMessage, __LINE__);
        }
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
    /**
     * Add item to MidocoRuleSet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\RulesetDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetRuleSetsResponse
     */
    public function addToMidocoRuleSet(\Pggns\MidocoApi\Bank\StructType\RulesetDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\RulesetDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRuleSet property can only contain items of type \Pggns\MidocoApi\Bank\StructType\RulesetDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRuleSet[] = $item;
        
        return $this;
    }
}
