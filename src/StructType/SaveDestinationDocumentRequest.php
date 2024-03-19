<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDestinationDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDestinationDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationDocument
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument $MidocoDestinationDocument = null;
    /**
     * Constructor method for SaveDestinationDocumentRequest
     * @uses SaveDestinationDocumentRequest::setMidocoDestinationDocument()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument $midocoDestinationDocument
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument $midocoDestinationDocument = null)
    {
        $this
            ->setMidocoDestinationDocument($midocoDestinationDocument);
    }
    /**
     * Get MidocoDestinationDocument value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument|null
     */
    public function getMidocoDestinationDocument(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument
    {
        return $this->MidocoDestinationDocument;
    }
    /**
     * Set MidocoDestinationDocument value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument $midocoDestinationDocument
     * @return \Pggns\MidocoApi\Bank\StructType\SaveDestinationDocumentRequest
     */
    public function setMidocoDestinationDocument(?\Pggns\MidocoApi\Bank\StructType\MidocoDestinationDocument $midocoDestinationDocument = null): self
    {
        $this->MidocoDestinationDocument = $midocoDestinationDocument;
        
        return $this;
    }
}
