<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfGroupRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMfGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoMfGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoMfGroup
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoMfGroup|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoMfGroup $MidocoMfGroup = null;
    /**
     * Constructor method for DeleteMfGroupRequest
     * @uses DeleteMfGroupRequest::setMidocoMfGroup()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMfGroup $midocoMfGroup
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoMfGroup $midocoMfGroup = null)
    {
        $this
            ->setMidocoMfGroup($midocoMfGroup);
    }
    /**
     * Get MidocoMfGroup value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMfGroup|null
     */
    public function getMidocoMfGroup(): ?\Pggns\MidocoApi\Bank\StructType\MidocoMfGroup
    {
        return $this->MidocoMfGroup;
    }
    /**
     * Set MidocoMfGroup value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMfGroup $midocoMfGroup
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteMfGroupRequest
     */
    public function setMidocoMfGroup(?\Pggns\MidocoApi\Bank\StructType\MidocoMfGroup $midocoMfGroup = null): self
    {
        $this->MidocoMfGroup = $midocoMfGroup;
        
        return $this;
    }
}
