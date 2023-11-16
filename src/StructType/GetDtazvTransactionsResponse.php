<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDtazvTransactionsResponse StructType
 * @subpackage Structs
 */
class GetDtazvTransactionsResponse extends AbstractStructBase
{
    /**
     * The MidocoDtazvDirectDebitPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoDtazvDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[]
     */
    protected array $MidocoDtazvDirectDebitPosition = [];
    /**
     * Constructor method for getDtazvTransactionsResponse
     * @uses GetDtazvTransactionsResponse::setMidocoDtazvDirectDebitPosition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[] $midocoDtazvDirectDebitPosition
     */
    public function __construct(array $midocoDtazvDirectDebitPosition = [])
    {
        $this
            ->setMidocoDtazvDirectDebitPosition($midocoDtazvDirectDebitPosition);
    }
    /**
     * Get MidocoDtazvDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[]
     */
    public function getMidocoDtazvDirectDebitPosition(): array
    {
        return $this->MidocoDtazvDirectDebitPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDtazvDirectDebitPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDtazvDirectDebitPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDtazvDirectDebitPositionForArrayConstraintsFromSetMidocoDtazvDirectDebitPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem) {
            // validation for constraint: itemType
            if (!$getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition) {
                $invalidValues[] = is_object($getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem) ? get_class($getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem) : sprintf('%s(%s)', gettype($getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem), var_export($getDtazvTransactionsResponseMidocoDtazvDirectDebitPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDtazvDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDtazvDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[] $midocoDtazvDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsResponse
     */
    public function setMidocoDtazvDirectDebitPosition(array $midocoDtazvDirectDebitPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDtazvDirectDebitPositionArrayErrorMessage = self::validateMidocoDtazvDirectDebitPositionForArrayConstraintsFromSetMidocoDtazvDirectDebitPosition($midocoDtazvDirectDebitPosition))) {
            throw new InvalidArgumentException($midocoDtazvDirectDebitPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDtazvDirectDebitPosition = $midocoDtazvDirectDebitPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoDtazvDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsResponse
     */
    public function addToMidocoDtazvDirectDebitPosition(\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoDtazvDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDtazvDirectDebitPosition[] = $item;
        
        return $this;
    }
}
