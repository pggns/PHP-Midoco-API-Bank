<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoVatDivisionTemplatesForSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoVatDivisionTemplatesForSupplierRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for GetMidocoVatDivisionTemplatesForSupplierRequest
     * @uses GetMidocoVatDivisionTemplatesForSupplierRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoVatDivisionTemplatesForSupplierRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
