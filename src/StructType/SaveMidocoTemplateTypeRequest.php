<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoTemplateTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplateType
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplateType
     * @var \Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO $MidocoTemplateType = null;
    /**
     * Constructor method for SaveMidocoTemplateTypeRequest
     * @uses SaveMidocoTemplateTypeRequest::setMidocoTemplateType()
     * @param \Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO $midocoTemplateType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO $midocoTemplateType = null)
    {
        $this
            ->setMidocoTemplateType($midocoTemplateType);
    }
    /**
     * Get MidocoTemplateType value
     * @return \Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO|null
     */
    public function getMidocoTemplateType(): ?\Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO
    {
        return $this->MidocoTemplateType;
    }
    /**
     * Set MidocoTemplateType value
     * @param \Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO $midocoTemplateType
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMidocoTemplateTypeRequest
     */
    public function setMidocoTemplateType(?\Pggns\MidocoApi\Bank\StructType\TemplateTypeDTO $midocoTemplateType = null): self
    {
        $this->MidocoTemplateType = $midocoTemplateType;
        
        return $this;
    }
}
