<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SaveMediatorConditionRequest
     * @uses SaveMediatorConditionRequest::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $mediatorConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo|null
     */
    public function getMediatorConditionInfo(): ?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * Set MediatorConditionInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $mediatorConditionInfo
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
