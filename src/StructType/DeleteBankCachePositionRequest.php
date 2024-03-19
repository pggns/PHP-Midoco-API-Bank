<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBankCachePositionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBankCachePositionRequest extends AbstractStructBase
{
    /**
     * The MidocoBankCachePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankCachePosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[]
     */
    protected ?array $MidocoBankCachePosition = null;
    /**
     * Constructor method for DeleteBankCachePositionRequest
     * @uses DeleteBankCachePositionRequest::setMidocoBankCachePosition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[] $midocoBankCachePosition
     */
    public function __construct(?array $midocoBankCachePosition = null)
    {
        $this
            ->setMidocoBankCachePosition($midocoBankCachePosition);
    }
    /**
     * Get MidocoBankCachePosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[]
     */
    public function getMidocoBankCachePosition(): ?array
    {
        return $this->MidocoBankCachePosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankCachePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankCachePosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankCachePositionForArrayConstraintFromSetMidocoBankCachePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBankCachePositionRequestMidocoBankCachePositionItem) {
            // validation for constraint: itemType
            if (!$deleteBankCachePositionRequestMidocoBankCachePositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition) {
                $invalidValues[] = is_object($deleteBankCachePositionRequestMidocoBankCachePositionItem) ? get_class($deleteBankCachePositionRequestMidocoBankCachePositionItem) : sprintf('%s(%s)', gettype($deleteBankCachePositionRequestMidocoBankCachePositionItem), var_export($deleteBankCachePositionRequestMidocoBankCachePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankCachePosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankCachePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[] $midocoBankCachePosition
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionRequest
     */
    public function setMidocoBankCachePosition(?array $midocoBankCachePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankCachePositionArrayErrorMessage = self::validateMidocoBankCachePositionForArrayConstraintFromSetMidocoBankCachePosition($midocoBankCachePosition))) {
            throw new InvalidArgumentException($midocoBankCachePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankCachePosition = $midocoBankCachePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBankCachePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionRequest
     */
    public function addToMidocoBankCachePosition(\Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoBankCachePosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankCachePosition[] = $item;
        
        return $this;
    }
}
