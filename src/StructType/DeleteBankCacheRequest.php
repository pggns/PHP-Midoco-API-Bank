<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBankCacheRequest StructType
 * @subpackage Structs
 */
class DeleteBankCacheRequest extends AbstractStructBase
{
    /**
     * The MidocoBankCache
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoBankCache
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[]
     */
    protected array $MidocoBankCache = [];
    /**
     * Constructor method for DeleteBankCacheRequest
     * @uses DeleteBankCacheRequest::setMidocoBankCache()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[] $midocoBankCache
     */
    public function __construct(array $midocoBankCache = [])
    {
        $this
            ->setMidocoBankCache($midocoBankCache);
    }
    /**
     * Get MidocoBankCache value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache[]
     */
    public function getMidocoBankCache(): array
    {
        return $this->MidocoBankCache;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankCache method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankCache method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankCacheForArrayConstraintsFromSetMidocoBankCache(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBankCacheRequestMidocoBankCacheItem) {
            // validation for constraint: itemType
            if (!$deleteBankCacheRequestMidocoBankCacheItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankCache) {
                $invalidValues[] = is_object($deleteBankCacheRequestMidocoBankCacheItem) ? get_class($deleteBankCacheRequestMidocoBankCacheItem) : sprintf('%s(%s)', gettype($deleteBankCacheRequestMidocoBankCacheItem), var_export($deleteBankCacheRequestMidocoBankCacheItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCacheRequest
     */
    public function setMidocoBankCache(array $midocoBankCache = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankCacheArrayErrorMessage = self::validateMidocoBankCacheForArrayConstraintsFromSetMidocoBankCache($midocoBankCache))) {
            throw new InvalidArgumentException($midocoBankCacheArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankCache = $midocoBankCache;
        
        return $this;
    }
    /**
     * Add item to MidocoBankCache value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache $item
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteBankCacheRequest
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
