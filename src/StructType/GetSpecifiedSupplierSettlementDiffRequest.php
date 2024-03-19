<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSpecifiedSupplierSettlementDiffRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSpecifiedSupplierSettlementDiffRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelInfo
     * @var \Pggns\MidocoApi\Bank\StructType\TravelInfoDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\TravelInfoDTO $MidocoTravelInfo = null;
    /**
     * Constructor method for GetSpecifiedSupplierSettlementDiffRequest
     * @uses GetSpecifiedSupplierSettlementDiffRequest::setMidocoTravelInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\TravelInfoDTO $midocoTravelInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\TravelInfoDTO $midocoTravelInfo = null)
    {
        $this
            ->setMidocoTravelInfo($midocoTravelInfo);
    }
    /**
     * Get MidocoTravelInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\TravelInfoDTO|null
     */
    public function getMidocoTravelInfo(): ?\Pggns\MidocoApi\Bank\StructType\TravelInfoDTO
    {
        return $this->MidocoTravelInfo;
    }
    /**
     * Set MidocoTravelInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\TravelInfoDTO $midocoTravelInfo
     * @return \Pggns\MidocoApi\Bank\StructType\GetSpecifiedSupplierSettlementDiffRequest
     */
    public function setMidocoTravelInfo(?\Pggns\MidocoApi\Bank\StructType\TravelInfoDTO $midocoTravelInfo = null): self
    {
        $this->MidocoTravelInfo = $midocoTravelInfo;
        
        return $this;
    }
}
