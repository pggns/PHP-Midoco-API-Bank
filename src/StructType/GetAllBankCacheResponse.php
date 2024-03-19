<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBankCacheResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllBankCacheResponse extends AbstractStructBase
{
    /**
     * The MidocoBankCache
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankCache
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[]
     */
    protected ?array $MidocoBankCache = null;
    /**
     * Constructor method for GetAllBankCacheResponse
     * @uses GetAllBankCacheResponse::setMidocoBankCache()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[] $midocoBankCache
     */
    public function __construct(?array $midocoBankCache = null)
    {
        $this
            ->setMidocoBankCache($midocoBankCache);
    }
    /**
     * Get MidocoBankCache value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[]
     */
    public function getMidocoBankCache(): ?array
    {
        return $this->MidocoBankCache;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankCache method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankCache method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankCacheForArrayConstraintFromSetMidocoBankCache(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllBankCacheResponseMidocoBankCacheItem) {
            // validation for constraint: itemType
            if (!$getAllBankCacheResponseMidocoBankCacheItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCache) {
                $invalidValues[] = is_object($getAllBankCacheResponseMidocoBankCacheItem) ? get_class($getAllBankCacheResponseMidocoBankCacheItem) : sprintf('%s(%s)', gettype($getAllBankCacheResponseMidocoBankCacheItem), var_export($getAllBankCacheResponseMidocoBankCacheItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankCache property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankCache, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankCache value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[] $midocoBankCache
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheResponse
     */
    public function setMidocoBankCache(?array $midocoBankCache = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankCacheArrayErrorMessage = self::validateMidocoBankCacheForArrayConstraintFromSetMidocoBankCache($midocoBankCache))) {
            throw new InvalidArgumentException($midocoBankCacheArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankCache = $midocoBankCache;
        
        return $this;
    }
    /**
     * Add item to MidocoBankCache value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheResponse
     */
    public function addToMidocoBankCache(\Pggns\MidocoApi\Bank\StructType\MidocoBankCache $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCache) {
            throw new InvalidArgumentException(sprintf('The MidocoBankCache property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankCache, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankCache[] = $item;
        
        return $this;
    }
}
