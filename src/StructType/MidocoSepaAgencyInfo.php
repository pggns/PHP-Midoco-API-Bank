<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSepaAgencyInfo StructType
 * @subpackage Structs
 */
class MidocoSepaAgencyInfo extends MidocoAgencyInfo
{
    /**
     * The MidocoSepaBankInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoSepaBankInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo $MidocoSepaBankInfo = null;
    /**
     * Constructor method for MidocoSepaAgencyInfo
     * @uses MidocoSepaAgencyInfo::setMidocoSepaBankInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo $midocoSepaBankInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo $midocoSepaBankInfo = null)
    {
        $this
            ->setMidocoSepaBankInfo($midocoSepaBankInfo);
    }
    /**
     * Get MidocoSepaBankInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo|null
     */
    public function getMidocoSepaBankInfo(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo
    {
        return $this->MidocoSepaBankInfo;
    }
    /**
     * Set MidocoSepaBankInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo $midocoSepaBankInfo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaAgencyInfo
     */
    public function setMidocoSepaBankInfo(?\Pggns\MidocoApi\Bank\StructType\MidocoSepaBankInfo $midocoSepaBankInfo = null): self
    {
        $this->MidocoSepaBankInfo = $midocoSepaBankInfo;
        
        return $this;
    }
}
