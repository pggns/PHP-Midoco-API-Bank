<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument $MidocoSupplierDocument = null;
    /**
     * Constructor method for SaveSupplierDocumentRequest
     * @uses SaveSupplierDocumentRequest::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument $midocoSupplierDocument
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument $midocoSupplierDocument = null)
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument|null
     */
    public function getMidocoSupplierDocument(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * Set MidocoSupplierDocument value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument $midocoSupplierDocument
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierDocumentRequest
     */
    public function setMidocoSupplierDocument(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierDocument $midocoSupplierDocument = null): self
    {
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
}
