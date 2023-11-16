<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankCacheRequest StructType
 * @subpackage Structs
 */
class SearchBankCacheRequest extends AbstractStructBase
{
    /**
     * The MidocoSearchBankCacheCriteriaType
     * Meta information extracted from the WSDL
     * - ref: MidocoSearchBankCacheCriteriaType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType $MidocoSearchBankCacheCriteriaType = null;
    /**
     * Constructor method for SearchBankCacheRequest
     * @uses SearchBankCacheRequest::setMidocoSearchBankCacheCriteriaType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType $midocoSearchBankCacheCriteriaType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType $midocoSearchBankCacheCriteriaType = null)
    {
        $this
            ->setMidocoSearchBankCacheCriteriaType($midocoSearchBankCacheCriteriaType);
    }
    /**
     * Get MidocoSearchBankCacheCriteriaType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType|null
     */
    public function getMidocoSearchBankCacheCriteriaType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType
    {
        return $this->MidocoSearchBankCacheCriteriaType;
    }
    /**
     * Set MidocoSearchBankCacheCriteriaType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType $midocoSearchBankCacheCriteriaType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCacheRequest
     */
    public function setMidocoSearchBankCacheCriteriaType(?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankCacheCriteriaType $midocoSearchBankCacheCriteriaType = null): self
    {
        $this->MidocoSearchBankCacheCriteriaType = $midocoSearchBankCacheCriteriaType;
        
        return $this;
    }
}
