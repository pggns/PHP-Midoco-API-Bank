<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBankCacheRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllBankCacheRequest extends AbstractStructBase
{
    /**
     * The MidocoBankCache
     * Meta information extracted from the WSDL
     * - ref: MidocoBankCache
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankCache|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankCache $MidocoBankCache = null;
    /**
     * Constructor method for GetAllBankCacheRequest
     * @uses GetAllBankCacheRequest::setMidocoBankCache()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache $midocoBankCache
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankCache $midocoBankCache = null)
    {
        $this
            ->setMidocoBankCache($midocoBankCache);
    }
    /**
     * Get MidocoBankCache value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankCache|null
     */
    public function getMidocoBankCache(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankCache
    {
        return $this->MidocoBankCache;
    }
    /**
     * Set MidocoBankCache value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankCache $midocoBankCache
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheRequest
     */
    public function setMidocoBankCache(?\Pggns\MidocoApi\Bank\StructType\MidocoBankCache $midocoBankCache = null): self
    {
        $this->MidocoBankCache = $midocoBankCache;
        
        return $this;
    }
}
