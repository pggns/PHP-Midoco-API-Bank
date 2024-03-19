<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellPassenger StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSellPassenger extends SellPassengerDTO
{
    /**
     * The MidocoPassengerInfosFlight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPassengerInfosFlight
     * @var \Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO $MidocoPassengerInfosFlight = null;
    /**
     * The MidocoPassengerInfosRail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPassengerInfosRail
     * @var \Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO $MidocoPassengerInfosRail = null;
    /**
     * Constructor method for MidocoSellPassenger
     * @uses MidocoSellPassenger::setMidocoPassengerInfosFlight()
     * @uses MidocoSellPassenger::setMidocoPassengerInfosRail()
     * @param \Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @param \Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null, ?\Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null)
    {
        $this
            ->setMidocoPassengerInfosFlight($midocoPassengerInfosFlight)
            ->setMidocoPassengerInfosRail($midocoPassengerInfosRail);
    }
    /**
     * Get MidocoPassengerInfosFlight value
     * @return \Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO|null
     */
    public function getMidocoPassengerInfosFlight(): ?\Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO
    {
        return $this->MidocoPassengerInfosFlight;
    }
    /**
     * Set MidocoPassengerInfosFlight value
     * @param \Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosFlight(?\Pggns\MidocoApi\Bank\StructType\PassengerInfosFlightDTO $midocoPassengerInfosFlight = null): self
    {
        $this->MidocoPassengerInfosFlight = $midocoPassengerInfosFlight;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfosRail value
     * @return \Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO|null
     */
    public function getMidocoPassengerInfosRail(): ?\Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO
    {
        return $this->MidocoPassengerInfosRail;
    }
    /**
     * Set MidocoPassengerInfosRail value
     * @param \Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSellPassenger
     */
    public function setMidocoPassengerInfosRail(?\Pggns\MidocoApi\Bank\StructType\PassengerInfosRailDTO $midocoPassengerInfosRail = null): self
    {
        $this->MidocoPassengerInfosRail = $midocoPassengerInfosRail;
        
        return $this;
    }
}
