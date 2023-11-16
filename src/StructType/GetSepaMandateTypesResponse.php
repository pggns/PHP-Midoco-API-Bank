<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSepaMandateTypesResponse StructType
 * @subpackage Structs
 */
class GetSepaMandateTypesResponse extends AbstractStructBase
{
    /**
     * The mandateType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $mandateType = [];
    /**
     * The defaultMandateType
     * @var string|null
     */
    protected ?string $defaultMandateType = null;
    /**
     * Constructor method for GetSepaMandateTypesResponse
     * @uses GetSepaMandateTypesResponse::setMandateType()
     * @uses GetSepaMandateTypesResponse::setDefaultMandateType()
     * @param string[] $mandateType
     * @param string $defaultMandateType
     */
    public function __construct(array $mandateType = [], ?string $defaultMandateType = null)
    {
        $this
            ->setMandateType($mandateType)
            ->setDefaultMandateType($defaultMandateType);
    }
    /**
     * Get mandateType value
     * @return string[]
     */
    public function getMandateType(): array
    {
        return $this->mandateType;
    }
    /**
     * This method is responsible for validating the values passed to the setMandateType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMandateType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMandateTypeForArrayConstraintsFromSetMandateType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSepaMandateTypesResponseMandateTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getSepaMandateTypesResponseMandateTypeItem)) {
                $invalidValues[] = is_object($getSepaMandateTypesResponseMandateTypeItem) ? get_class($getSepaMandateTypesResponseMandateTypeItem) : sprintf('%s(%s)', gettype($getSepaMandateTypesResponseMandateTypeItem), var_export($getSepaMandateTypesResponseMandateTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mandateType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mandateType value
     * @throws InvalidArgumentException
     * @param string[] $mandateType
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesResponse
     */
    public function setMandateType(array $mandateType = []): self
    {
        // validation for constraint: array
        if ('' !== ($mandateTypeArrayErrorMessage = self::validateMandateTypeForArrayConstraintsFromSetMandateType($mandateType))) {
            throw new InvalidArgumentException($mandateTypeArrayErrorMessage, __LINE__);
        }
        $this->mandateType = $mandateType;
        
        return $this;
    }
    /**
     * Add item to mandateType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesResponse
     */
    public function addToMandateType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mandateType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mandateType[] = $item;
        
        return $this;
    }
    /**
     * Get defaultMandateType value
     * @return string|null
     */
    public function getDefaultMandateType(): ?string
    {
        return $this->defaultMandateType;
    }
    /**
     * Set defaultMandateType value
     * @param string $defaultMandateType
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesResponse
     */
    public function setDefaultMandateType(?string $defaultMandateType = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultMandateType) && !is_string($defaultMandateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultMandateType, true), gettype($defaultMandateType)), __LINE__);
        }
        $this->defaultMandateType = $defaultMandateType;
        
        return $this;
    }
}
