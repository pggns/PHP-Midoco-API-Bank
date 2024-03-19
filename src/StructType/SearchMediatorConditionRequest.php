<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SearchMediatorConditionRequest
     * @uses SearchMediatorConditionRequest::setMediatorConditionInfo()
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
     * @return \Pggns\MidocoApi\Bank\StructType\SearchMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\Bank\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
