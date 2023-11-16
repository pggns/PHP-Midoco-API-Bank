<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatDivisionRequest StructType
 * @subpackage Structs
 */
class DeleteVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Bank\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for DeleteVatDivisionRequest
     * @uses DeleteVatDivisionRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Bank\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Bank\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteVatDivisionRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Bank\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
