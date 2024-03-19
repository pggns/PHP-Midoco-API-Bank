<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierCancelConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierCancelConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCancelCondition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition $MidocoSupplierCancelCondition = null;
    /**
     * Constructor method for SaveSupplierCancelConditionRequest
     * @uses SaveSupplierCancelConditionRequest::setMidocoSupplierCancelCondition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null)
    {
        $this
            ->setMidocoSupplierCancelCondition($midocoSupplierCancelCondition);
    }
    /**
     * Get MidocoSupplierCancelCondition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition|null
     */
    public function getMidocoSupplierCancelCondition(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition
    {
        return $this->MidocoSupplierCancelCondition;
    }
    /**
     * Set MidocoSupplierCancelCondition value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierCancelConditionRequest
     */
    public function setMidocoSupplierCancelCondition(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierCancelCondition $midocoSupplierCancelCondition = null): self
    {
        $this->MidocoSupplierCancelCondition = $midocoSupplierCancelCondition;
        
        return $this;
    }
}
