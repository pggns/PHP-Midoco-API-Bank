<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessCreditCardPositionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessCreditCardPositionsRequest extends AbstractStructBase
{
    /**
     * The MidocoCreditCardPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoCreditCardPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition[]
     */
    protected ?array $MidocoCreditCardPosition = null;
    /**
     * Constructor method for ProcessCreditCardPositionsRequest
     * @uses ProcessCreditCardPositionsRequest::setMidocoCreditCardPosition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition[] $midocoCreditCardPosition
     */
    public function __construct(?array $midocoCreditCardPosition = null)
    {
        $this
            ->setMidocoCreditCardPosition($midocoCreditCardPosition);
    }
    /**
     * Get MidocoCreditCardPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition[]
     */
    public function getMidocoCreditCardPosition(): ?array
    {
        return $this->MidocoCreditCardPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCreditCardPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCreditCardPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCreditCardPositionForArrayConstraintFromSetMidocoCreditCardPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $processCreditCardPositionsRequestMidocoCreditCardPositionItem) {
            // validation for constraint: itemType
            if (!$processCreditCardPositionsRequestMidocoCreditCardPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition) {
                $invalidValues[] = is_object($processCreditCardPositionsRequestMidocoCreditCardPositionItem) ? get_class($processCreditCardPositionsRequestMidocoCreditCardPositionItem) : sprintf('%s(%s)', gettype($processCreditCardPositionsRequestMidocoCreditCardPositionItem), var_export($processCreditCardPositionsRequestMidocoCreditCardPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCreditCardPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCreditCardPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition[] $midocoCreditCardPosition
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsRequest
     */
    public function setMidocoCreditCardPosition(?array $midocoCreditCardPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCreditCardPositionArrayErrorMessage = self::validateMidocoCreditCardPositionForArrayConstraintFromSetMidocoCreditCardPosition($midocoCreditCardPosition))) {
            throw new InvalidArgumentException($midocoCreditCardPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCreditCardPosition = $midocoCreditCardPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoCreditCardPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsRequest
     */
    public function addToMidocoCreditCardPosition(\Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoCreditCardPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCreditCardPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCreditCardPosition[] = $item;
        
        return $this;
    }
}
