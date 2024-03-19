<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: add/update a fee type
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoFeeTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * Constructor method for SaveMidocoFeeTypeRequest
     * @uses SaveMidocoFeeTypeRequest::setMidocoFeeType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMidocoFeeTypeRequest
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
}
