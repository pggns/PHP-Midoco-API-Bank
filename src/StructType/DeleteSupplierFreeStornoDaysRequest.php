<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierFreeStornoDaysRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierFreeStornoDaysRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierFreeStornoDays
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierFreeStornoDays
     * @var \Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO $MidocoSupplierFreeStornoDays = null;
    /**
     * Constructor method for DeleteSupplierFreeStornoDaysRequest
     * @uses DeleteSupplierFreeStornoDaysRequest::setMidocoSupplierFreeStornoDays()
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null)
    {
        $this
            ->setMidocoSupplierFreeStornoDays($midocoSupplierFreeStornoDays);
    }
    /**
     * Get MidocoSupplierFreeStornoDays value
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO|null
     */
    public function getMidocoSupplierFreeStornoDays(): ?\Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO
    {
        return $this->MidocoSupplierFreeStornoDays;
    }
    /**
     * Set MidocoSupplierFreeStornoDays value
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteSupplierFreeStornoDaysRequest
     */
    public function setMidocoSupplierFreeStornoDays(?\Pggns\MidocoApi\Bank\StructType\SupplierFreeStornoDayDTO $midocoSupplierFreeStornoDays = null): self
    {
        $this->MidocoSupplierFreeStornoDays = $midocoSupplierFreeStornoDays;
        
        return $this;
    }
}
