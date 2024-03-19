<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMorePromotionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Supply the promotion properties. To update a promotion, include the promotionId, otherwise a new promotion will be created.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMilesAndMorePromotionRequest extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - ref: MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * Constructor method for SaveMilesAndMorePromotionRequest
     * @uses SaveMilesAndMorePromotionRequest::setMidocoMilesAndMorePromotion()
     * @param \Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null)
    {
        $this
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion);
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO|null
     */
    public function getMidocoMilesAndMorePromotion(): ?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @param \Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMilesAndMorePromotionRequest
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
}
