<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveProductTypeMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for SaveProductTypeMediatorConditionRequest
     * @uses SaveProductTypeMediatorConditionRequest::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Bank\StructType\SaveProductTypeMediatorConditionRequest
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\Bank\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}
