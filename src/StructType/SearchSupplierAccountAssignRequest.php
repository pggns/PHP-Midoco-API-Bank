<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAccountAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierAccountAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $MidocoSupplierAccountAssign = null;
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * Constructor method for SearchSupplierAccountAssignRequest
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplierAccountAssign()
     * @uses SearchSupplierAccountAssignRequest::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign|null
     */
    public function getMidocoSupplierAccountAssign(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Bank\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplierAccountAssign(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierAccountAssign $midocoSupplierAccountAssign = null): self
    {
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\SearchSupplierAccountAssignRequest
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Bank\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
}
