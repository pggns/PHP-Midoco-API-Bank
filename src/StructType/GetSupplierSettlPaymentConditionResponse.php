<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierSettlPaymentConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierSettlPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition $MidocoSupplierSettlPaymentCondition = null;
    /**
     * Constructor method for GetSupplierSettlPaymentConditionResponse
     * @uses GetSupplierSettlPaymentConditionResponse::setMidocoSupplierSettlPaymentCondition()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition|null
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierSettlPaymentConditionResponse
     */
    public function setMidocoSupplierSettlPaymentCondition(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlPaymentCondition $midocoSupplierSettlPaymentCondition = null): self
    {
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
}
