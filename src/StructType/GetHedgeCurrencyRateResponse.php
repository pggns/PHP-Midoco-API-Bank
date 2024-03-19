<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetHedgeCurrencyRateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetHedgeCurrencyRateResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRateHedge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCurrencyRateHedge
     * @var \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO[]
     */
    protected ?array $MidocoCurrencyRateHedge = null;
    /**
     * Constructor method for GetHedgeCurrencyRateResponse
     * @uses GetHedgeCurrencyRateResponse::setMidocoCurrencyRateHedge()
     * @param \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     */
    public function __construct(?array $midocoCurrencyRateHedge = null)
    {
        $this
            ->setMidocoCurrencyRateHedge($midocoCurrencyRateHedge);
    }
    /**
     * Get MidocoCurrencyRateHedge value
     * @return \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO[]
     */
    public function getMidocoCurrencyRateHedge(): ?array
    {
        return $this->MidocoCurrencyRateHedge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCurrencyRateHedge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrencyRateHedge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyRateHedgeForArrayConstraintFromSetMidocoCurrencyRateHedge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) {
            // validation for constraint: itemType
            if (!$getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem instanceof \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO) {
                $invalidValues[] = is_object($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) ? get_class($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem) : sprintf('%s(%s)', gettype($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem), var_export($getHedgeCurrencyRateResponseMidocoCurrencyRateHedgeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     * @return \Pggns\MidocoApi\Bank\StructType\GetHedgeCurrencyRateResponse
     */
    public function setMidocoCurrencyRateHedge(?array $midocoCurrencyRateHedge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyRateHedgeArrayErrorMessage = self::validateMidocoCurrencyRateHedgeForArrayConstraintFromSetMidocoCurrencyRateHedge($midocoCurrencyRateHedge))) {
            throw new InvalidArgumentException($midocoCurrencyRateHedgeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrencyRateHedge = $midocoCurrencyRateHedge;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetHedgeCurrencyRateResponse
     */
    public function addToMidocoCurrencyRateHedge(\Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Bank\StructType\CurrencyRateHedgeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrencyRateHedge[] = $item;
        
        return $this;
    }
}
