<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoSupplierTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoSupplierTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTemplate
     * @var \Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO $MidocoSupplierTemplate = null;
    /**
     * Constructor method for DeleteMidocoSupplierTemplateRequest
     * @uses DeleteMidocoSupplierTemplateRequest::setMidocoSupplierTemplate()
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null)
    {
        $this
            ->setMidocoSupplierTemplate($midocoSupplierTemplate);
    }
    /**
     * Get MidocoSupplierTemplate value
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO|null
     */
    public function getMidocoSupplierTemplate(): ?\Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO
    {
        return $this->MidocoSupplierTemplate;
    }
    /**
     * Set MidocoSupplierTemplate value
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteMidocoSupplierTemplateRequest
     */
    public function setMidocoSupplierTemplate(?\Pggns\MidocoApi\Bank\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null): self
    {
        $this->MidocoSupplierTemplate = $midocoSupplierTemplate;
        
        return $this;
    }
}
