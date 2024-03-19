<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTempPrintjobInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateTempPrintjobInfoRequest extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjobInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTempPrintjobInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo $MidocoTempPrintjobInfo = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for UpdateTempPrintjobInfoRequest
     * @uses UpdateTempPrintjobInfoRequest::setMidocoTempPrintjobInfo()
     * @uses UpdateTempPrintjobInfoRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoTempPrintjobInfo($midocoTempPrintjobInfo)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoTempPrintjobInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo|null
     */
    public function getMidocoTempPrintjobInfo(): ?\Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo
    {
        return $this->MidocoTempPrintjobInfo;
    }
    /**
     * Set MidocoTempPrintjobInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo
     * @return \Pggns\MidocoApi\Bank\StructType\UpdateTempPrintjobInfoRequest
     */
    public function setMidocoTempPrintjobInfo(?\Pggns\MidocoApi\Bank\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo = null): self
    {
        $this->MidocoTempPrintjobInfo = $midocoTempPrintjobInfo;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Bank\StructType\UpdateTempPrintjobInfoRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
