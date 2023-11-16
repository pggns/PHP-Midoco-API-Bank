<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginDetails StructType
 * @subpackage Structs
 */
class MidocoMarginDetails extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMargin
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoMargin|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoMargin $MidocoMargin = null;
    /**
     * The MidocoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarginBuyItem
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem[]
     */
    protected array $MidocoMarginBuyItem = [];
    /**
     * The MidocoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarginSaleItem
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem[]
     */
    protected array $MidocoMarginSaleItem = [];
    /**
     * The calculatedMarginBrutto
     * @var float|null
     */
    protected ?float $calculatedMarginBrutto = null;
    /**
     * The bookedMarginBrutto
     * @var float|null
     */
    protected ?float $bookedMarginBrutto = null;
    /**
     * Constructor method for MidocoMarginDetails
     * @uses MidocoMarginDetails::setMidocoMargin()
     * @uses MidocoMarginDetails::setMidocoMarginBuyItem()
     * @uses MidocoMarginDetails::setMidocoMarginSaleItem()
     * @uses MidocoMarginDetails::setCalculatedMarginBrutto()
     * @uses MidocoMarginDetails::setBookedMarginBrutto()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMargin $midocoMargin
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @param float $calculatedMarginBrutto
     * @param float $bookedMarginBrutto
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoMargin $midocoMargin = null, array $midocoMarginBuyItem = [], array $midocoMarginSaleItem = [], ?float $calculatedMarginBrutto = null, ?float $bookedMarginBrutto = null)
    {
        $this
            ->setMidocoMargin($midocoMargin)
            ->setMidocoMarginBuyItem($midocoMarginBuyItem)
            ->setMidocoMarginSaleItem($midocoMarginSaleItem)
            ->setCalculatedMarginBrutto($calculatedMarginBrutto)
            ->setBookedMarginBrutto($bookedMarginBrutto);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMargin|null
     */
    public function getMidocoMargin(): ?\Pggns\MidocoApi\Bank\StructType\MidocoMargin
    {
        return $this->MidocoMargin;
    }
    /**
     * Set MidocoMargin value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMargin $midocoMargin
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function setMidocoMargin(?\Pggns\MidocoApi\Bank\StructType\MidocoMargin $midocoMargin = null): self
    {
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
    /**
     * Get MidocoMarginBuyItem value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem[]
     */
    public function getMidocoMarginBuyItem(): array
    {
        return $this->MidocoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginBuyItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginBuyItemForArrayConstraintsFromSetMidocoMarginBuyItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginDetailsMidocoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$midocoMarginDetailsMidocoMarginBuyItemItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem) {
                $invalidValues[] = is_object($midocoMarginDetailsMidocoMarginBuyItemItem) ? get_class($midocoMarginDetailsMidocoMarginBuyItemItem) : sprintf('%s(%s)', gettype($midocoMarginDetailsMidocoMarginBuyItemItem), var_export($midocoMarginDetailsMidocoMarginBuyItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function setMidocoMarginBuyItem(array $midocoMarginBuyItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginBuyItemArrayErrorMessage = self::validateMidocoMarginBuyItemForArrayConstraintsFromSetMidocoMarginBuyItem($midocoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginBuyItem = $midocoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function addToMidocoMarginBuyItem(\Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoMarginBuyItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginBuyItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMarginSaleItem value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem[]
     */
    public function getMidocoMarginSaleItem(): array
    {
        return $this->MidocoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginSaleItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginSaleItemForArrayConstraintsFromSetMidocoMarginSaleItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginDetailsMidocoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$midocoMarginDetailsMidocoMarginSaleItemItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem) {
                $invalidValues[] = is_object($midocoMarginDetailsMidocoMarginSaleItemItem) ? get_class($midocoMarginDetailsMidocoMarginSaleItemItem) : sprintf('%s(%s)', gettype($midocoMarginDetailsMidocoMarginSaleItemItem), var_export($midocoMarginDetailsMidocoMarginSaleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function setMidocoMarginSaleItem(array $midocoMarginSaleItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginSaleItemArrayErrorMessage = self::validateMidocoMarginSaleItemForArrayConstraintsFromSetMidocoMarginSaleItem($midocoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginSaleItem = $midocoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function addToMidocoMarginSaleItem(\Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoMarginSaleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginSaleItem[] = $item;
        
        return $this;
    }
    /**
     * Get calculatedMarginBrutto value
     * @return float|null
     */
    public function getCalculatedMarginBrutto(): ?float
    {
        return $this->calculatedMarginBrutto;
    }
    /**
     * Set calculatedMarginBrutto value
     * @param float $calculatedMarginBrutto
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function setCalculatedMarginBrutto(?float $calculatedMarginBrutto = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginBrutto) && !(is_float($calculatedMarginBrutto) || is_numeric($calculatedMarginBrutto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginBrutto, true), gettype($calculatedMarginBrutto)), __LINE__);
        }
        $this->calculatedMarginBrutto = $calculatedMarginBrutto;
        
        return $this;
    }
    /**
     * Get bookedMarginBrutto value
     * @return float|null
     */
    public function getBookedMarginBrutto(): ?float
    {
        return $this->bookedMarginBrutto;
    }
    /**
     * Set bookedMarginBrutto value
     * @param float $bookedMarginBrutto
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMarginDetails
     */
    public function setBookedMarginBrutto(?float $bookedMarginBrutto = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMarginBrutto) && !(is_float($bookedMarginBrutto) || is_numeric($bookedMarginBrutto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMarginBrutto, true), gettype($bookedMarginBrutto)), __LINE__);
        }
        $this->bookedMarginBrutto = $bookedMarginBrutto;
        
        return $this;
    }
}
