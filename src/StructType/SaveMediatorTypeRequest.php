<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorTypeRequest extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $MediatorTypeInfo = null;
    /**
     * Constructor method for SaveMediatorTypeRequest
     * @uses SaveMediatorTypeRequest::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $mediatorTypeInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO|null
     */
    public function getMediatorTypeInfo(): ?\Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * Set MediatorTypeInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMediatorTypeRequest
     */
    public function setMediatorTypeInfo(?\Pggns\MidocoApi\Bank\StructType\MediatorTypeDTO $mediatorTypeInfo = null): self
    {
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
}
