<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatAccountSchemaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVatAccountSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountSchema
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema $MidocoVatAccountSchema = null;
    /**
     * Constructor method for SaveVatAccountSchemaRequest
     * @uses SaveVatAccountSchemaRequest::setMidocoVatAccountSchema()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null)
    {
        $this
            ->setMidocoVatAccountSchema($midocoVatAccountSchema);
    }
    /**
     * Get MidocoVatAccountSchema value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema|null
     */
    public function getMidocoVatAccountSchema(): ?\Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema
    {
        return $this->MidocoVatAccountSchema;
    }
    /**
     * Set MidocoVatAccountSchema value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     * @return \Pggns\MidocoApi\Bank\StructType\SaveVatAccountSchemaRequest
     */
    public function setMidocoVatAccountSchema(?\Pggns\MidocoApi\Bank\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null): self
    {
        $this->MidocoVatAccountSchema = $midocoVatAccountSchema;
        
        return $this;
    }
}
