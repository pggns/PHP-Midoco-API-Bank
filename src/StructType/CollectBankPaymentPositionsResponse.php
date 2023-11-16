<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectBankPaymentPositionsResponse StructType
 * @subpackage Structs
 */
class CollectBankPaymentPositionsResponse extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[]
     */
    protected array $MidocoDirectDebitPosition = [];
    /**
     * Constructor method for CollectBankPaymentPositionsResponse
     * @uses CollectBankPaymentPositionsResponse::setMidocoDirectDebitPosition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[] $midocoDirectDebitPosition
     */
    public function __construct(array $midocoDirectDebitPosition = [])
    {
        $this
            ->setMidocoDirectDebitPosition($midocoDirectDebitPosition);
    }
    /**
     * Get MidocoDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[]
     */
    public function getMidocoDirectDebitPosition(): array
    {
        return $this->MidocoDirectDebitPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDirectDebitPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitPositionForArrayConstraintsFromSetMidocoDirectDebitPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem) {
            // validation for constraint: itemType
            if (!$collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition) {
                $invalidValues[] = is_object($collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem) ? get_class($collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem) : sprintf('%s(%s)', gettype($collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem), var_export($collectBankPaymentPositionsResponseMidocoDirectDebitPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[] $midocoDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsResponse
     */
    public function setMidocoDirectDebitPosition(array $midocoDirectDebitPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitPositionArrayErrorMessage = self::validateMidocoDirectDebitPositionForArrayConstraintsFromSetMidocoDirectDebitPosition($midocoDirectDebitPosition))) {
            throw new InvalidArgumentException($midocoDirectDebitPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitPosition = $midocoDirectDebitPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsResponse
     */
    public function addToMidocoDirectDebitPosition(\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDirectDebitPosition[] = $item;
        
        return $this;
    }
}
