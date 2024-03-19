<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelNumberRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTravelNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for SaveTravelNumberRequest
     * @uses SaveTravelNumberRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Bank\StructType\SaveTravelNumberRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
