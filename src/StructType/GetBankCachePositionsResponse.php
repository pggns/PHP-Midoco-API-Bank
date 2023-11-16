<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankCachePositionsResponse StructType
 * @subpackage Structs
 */
class GetBankCachePositionsResponse extends AbstractStructBase
{
    /**
     * The MidocoBankCachePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankCachePosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[]
     */
    protected array $MidocoBankCachePosition = [];
    /**
     * Constructor method for GetBankCachePositionsResponse
     * @uses GetBankCachePositionsResponse::setMidocoBankCachePosition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[] $midocoBankCachePosition
     */
    public function __construct(array $midocoBankCachePosition = [])
    {
        $this
            ->setMidocoBankCachePosition($midocoBankCachePosition);
    }
    /**
     * Get MidocoBankCachePosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[]
     */
    public function getMidocoBankCachePosition(): array
    {
        return $this->MidocoBankCachePosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankCachePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankCachePosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankCachePositionForArrayConstraintsFromSetMidocoBankCachePosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankCachePositionsResponseMidocoBankCachePositionItem) {
            // validation for constraint: itemType
            if (!$getBankCachePositionsResponseMidocoBankCachePositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition) {
                $invalidValues[] = is_object($getBankCachePositionsResponseMidocoBankCachePositionItem) ? get_class($getBankCachePositionsResponseMidocoBankCachePositionItem) : sprintf('%s(%s)', gettype($getBankCachePositionsResponseMidocoBankCachePositionItem), var_export($getBankCachePositionsResponseMidocoBankCachePositionItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsResponse
     */
    public function setMidocoBankCachePosition(array $midocoBankCachePosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankCachePositionArrayErrorMessage = self::validateMidocoBankCachePositionForArrayConstraintsFromSetMidocoBankCachePosition($midocoBankCachePosition))) {
            throw new InvalidArgumentException($midocoBankCachePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankCachePosition = $midocoBankCachePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBankCachePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsResponse
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
