<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementDiffRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierSettlementDiffRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementDiff
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SaveSupplierSettlementDiffRequest
     * @uses SaveSupplierSettlementDiffRequest::setMidocoSupplierSettlementDiff()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null)
    {
        $this
            ->setMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff);
    }
    /**
     * Get MidocoSupplierSettlementDiff value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff|null
     */
    public function getMidocoSupplierSettlementDiff(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff
    {
        return $this->MidocoSupplierSettlementDiff;
    }
    /**
     * Set MidocoSupplierSettlementDiff value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierSettlementDiffRequest
     */
    public function setMidocoSupplierSettlementDiff(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementDiff $midocoSupplierSettlementDiff = null): self
    {
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
}
