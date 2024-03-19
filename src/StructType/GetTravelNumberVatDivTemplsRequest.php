<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberVatDivTemplsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNumberVatDivTemplsRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatDivTempl
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumberVatDivTempl
     * @var \Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO $MidocoTravelNumberVatDivTempl = null;
    /**
     * Constructor method for GetTravelNumberVatDivTemplsRequest
     * @uses GetTravelNumberVatDivTemplsRequest::setMidocoTravelNumberVatDivTempl()
     * @param \Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null)
    {
        $this
            ->setMidocoTravelNumberVatDivTempl($midocoTravelNumberVatDivTempl);
    }
    /**
     * Get MidocoTravelNumberVatDivTempl value
     * @return \Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO|null
     */
    public function getMidocoTravelNumberVatDivTempl(): ?\Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO
    {
        return $this->MidocoTravelNumberVatDivTempl;
    }
    /**
     * Set MidocoTravelNumberVatDivTempl value
     * @param \Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl
     * @return \Pggns\MidocoApi\Bank\StructType\GetTravelNumberVatDivTemplsRequest
     */
    public function setMidocoTravelNumberVatDivTempl(?\Pggns\MidocoApi\Bank\StructType\TravelNumberVatDivTemplDTO $midocoTravelNumberVatDivTempl = null): self
    {
        $this->MidocoTravelNumberVatDivTempl = $midocoTravelNumberVatDivTempl;
        
        return $this;
    }
}
