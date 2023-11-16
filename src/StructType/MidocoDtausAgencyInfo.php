<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDtausAgencyInfo StructType
 * @subpackage Structs
 */
class MidocoDtausAgencyInfo extends MidocoAgencyInfo
{
    /**
     * The MidocoDtausBankInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDtausBankInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankInfo $MidocoDtausBankInfo = null;
    /**
     * Constructor method for MidocoDtausAgencyInfo
     * @uses MidocoDtausAgencyInfo::setMidocoDtausBankInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo $midocoDtausBankInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankInfo $midocoDtausBankInfo = null)
    {
        $this
            ->setMidocoDtausBankInfo($midocoDtausBankInfo);
    }
    /**
     * Get MidocoDtausBankInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo|null
     */
    public function getMidocoDtausBankInfo(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankInfo
    {
        return $this->MidocoDtausBankInfo;
    }
    /**
     * Set MidocoDtausBankInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankInfo $midocoDtausBankInfo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDtausAgencyInfo
     */
    public function setMidocoDtausBankInfo(?\Pggns\MidocoApi\Bank\StructType\MidocoBankInfo $midocoDtausBankInfo = null): self
    {
        $this->MidocoDtausBankInfo = $midocoDtausBankInfo;
        
        return $this;
    }
}
