<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdCriteriaTypeCategoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrdCriteriaTypeCategoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrdCriteriaTypeCategory
     * @var \Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO $MidocoOrdCriteriaTypeCategory = null;
    /**
     * Constructor method for SaveOrdCriteriaTypeCategoryResponse
     * @uses SaveOrdCriteriaTypeCategoryResponse::setMidocoOrdCriteriaTypeCategory()
     * @param \Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null)
    {
        $this
            ->setMidocoOrdCriteriaTypeCategory($midocoOrdCriteriaTypeCategory);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategory value
     * @return \Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO|null
     */
    public function getMidocoOrdCriteriaTypeCategory(): ?\Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO
    {
        return $this->MidocoOrdCriteriaTypeCategory;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategory value
     * @param \Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory
     * @return \Pggns\MidocoApi\Bank\StructType\SaveOrdCriteriaTypeCategoryResponse
     */
    public function setMidocoOrdCriteriaTypeCategory(?\Pggns\MidocoApi\Bank\StructType\OrdCritTypeCatDTO $midocoOrdCriteriaTypeCategory = null): self
    {
        $this->MidocoOrdCriteriaTypeCategory = $midocoOrdCriteriaTypeCategory;
        
        return $this;
    }
}
