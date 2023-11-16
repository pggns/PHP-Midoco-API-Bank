<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankCache StructType
 * @subpackage Structs
 */
class MidocoBankCache extends BankCacheDTO
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
     * The isCharge
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCharge = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoBankCache
     * @uses MidocoBankCache::setMidocoBankCachePosition()
     * @uses MidocoBankCache::setIsCharge()
     * @uses MidocoBankCache::setAmount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition[] $midocoBankCachePosition
     * @param bool $isCharge
     * @param float $amount
     */
    public function __construct(array $midocoBankCachePosition = [], ?bool $isCharge = false, ?float $amount = null)
    {
        $this
            ->setMidocoBankCachePosition($midocoBankCachePosition)
            ->setIsCharge($isCharge)
            ->setAmount($amount);
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
        foreach ($values as $midocoBankCacheMidocoBankCachePositionItem) {
            // validation for constraint: itemType
            if (!$midocoBankCacheMidocoBankCachePositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCachePosition) {
                $invalidValues[] = is_object($midocoBankCacheMidocoBankCachePositionItem) ? get_class($midocoBankCacheMidocoBankCachePositionItem) : sprintf('%s(%s)', gettype($midocoBankCacheMidocoBankCachePositionItem), var_export($midocoBankCacheMidocoBankCachePositionItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache
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
    /**
     * Get isCharge value
     * @return bool|null
     */
    public function getIsCharge(): ?bool
    {
        return $this->isCharge;
    }
    /**
     * Set isCharge value
     * @param bool $isCharge
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache
     */
    public function setIsCharge(?bool $isCharge = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCharge) && !is_bool($isCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCharge, true), gettype($isCharge)), __LINE__);
        }
        $this->isCharge = $isCharge;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
