<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierDocumentShippingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierDocumentShippingRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocumentShipping
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping $MidocoSupplierDocumentShipping = null;
    /**
     * Constructor method for DeleteSupplierDocumentShippingRequest
     * @uses DeleteSupplierDocumentShippingRequest::setMidocoSupplierDocumentShipping()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null)
    {
        $this
            ->setMidocoSupplierDocumentShipping($midocoSupplierDocumentShipping);
    }
    /**
     * Get MidocoSupplierDocumentShipping value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping|null
     */
    public function getMidocoSupplierDocumentShipping(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping
    {
        return $this->MidocoSupplierDocumentShipping;
    }
    /**
     * Set MidocoSupplierDocumentShipping value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteSupplierDocumentShippingRequest
     */
    public function setMidocoSupplierDocumentShipping(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocumentShipping $midocoSupplierDocumentShipping = null): self
    {
        $this->MidocoSupplierDocumentShipping = $midocoSupplierDocumentShipping;
        
        return $this;
    }
}
