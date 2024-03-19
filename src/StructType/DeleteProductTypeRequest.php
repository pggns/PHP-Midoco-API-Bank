<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteProductTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoProductType
     * Meta information extracted from the WSDL
     * - ref: MidocoProductType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType $MidocoProductType = null;
    /**
     * Constructor method for DeleteProductTypeRequest
     * @uses DeleteProductTypeRequest::setMidocoProductType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType $midocoProductType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType $midocoProductType = null)
    {
        $this
            ->setMidocoProductType($midocoProductType);
    }
    /**
     * Get MidocoProductType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType|null
     */
    public function getMidocoProductType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType
    {
        return $this->MidocoProductType;
    }
    /**
     * Set MidocoProductType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType $midocoProductType
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteProductTypeRequest
     */
    public function setMidocoProductType(?\Pggns\MidocoApi\Bank\StructType\MidocoProductTypeType $midocoProductType = null): self
    {
        $this->MidocoProductType = $midocoProductType;
        
        return $this;
    }
}
