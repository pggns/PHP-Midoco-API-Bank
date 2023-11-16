<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMilesAndMoreEarnTransaction StructType
 * @subpackage Structs
 */
class MidocoMilesAndMoreEarnTransaction extends MilesAndMoreEarnTransactionDTO
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * Constructor method for MidocoMilesAndMoreEarnTransaction
     * @uses MidocoMilesAndMoreEarnTransaction::setMidocoMilesAndMorePromotion()
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMilesAndMoreEarnTransaction
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\Bank\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
}
