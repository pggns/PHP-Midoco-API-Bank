<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGenericCSVImportMetaDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGenericCSVImportMetaDataRequest extends AbstractStructBase
{
    /**
     * The MidocoGenericCsvImportMetadata
     * Meta information extracted from the WSDL
     * - ref: MidocoGenericCsvImportMetadata
     * @var \Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO $MidocoGenericCsvImportMetadata = null;
    /**
     * Constructor method for SaveGenericCSVImportMetaDataRequest
     * @uses SaveGenericCSVImportMetaDataRequest::setMidocoGenericCsvImportMetadata()
     * @param \Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null)
    {
        $this
            ->setMidocoGenericCsvImportMetadata($midocoGenericCsvImportMetadata);
    }
    /**
     * Get MidocoGenericCsvImportMetadata value
     * @return \Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO|null
     */
    public function getMidocoGenericCsvImportMetadata(): ?\Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO
    {
        return $this->MidocoGenericCsvImportMetadata;
    }
    /**
     * Set MidocoGenericCsvImportMetadata value
     * @param \Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata
     * @return \Pggns\MidocoApi\Bank\StructType\SaveGenericCSVImportMetaDataRequest
     */
    public function setMidocoGenericCsvImportMetadata(?\Pggns\MidocoApi\Bank\StructType\GenericCsvImportMetadataDTO $midocoGenericCsvImportMetadata = null): self
    {
        $this->MidocoGenericCsvImportMetadata = $midocoGenericCsvImportMetadata;
        
        return $this;
    }
}
