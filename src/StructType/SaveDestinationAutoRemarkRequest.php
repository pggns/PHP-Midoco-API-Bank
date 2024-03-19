<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDestinationAutoRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDestinationAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for SaveDestinationAutoRemarkRequest
     * @uses SaveDestinationAutoRemarkRequest::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Bank\StructType\SaveDestinationAutoRemarkRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\Bank\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
}
