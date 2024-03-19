<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarks4OrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRemarks4OrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for GetRemarks4OrgunitRequest
     * @uses GetRemarks4OrgunitRequest::setMidocoRemarkOrgunit()
     * @uses GetRemarks4OrgunitRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit)
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Bank\StructType\GetRemarks4OrgunitRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Bank\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Bank\StructType\GetRemarks4OrgunitRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
