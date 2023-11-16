<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateSupplierInfoRequest StructType
 * @subpackage Structs
 */
class DuplicateSupplierInfoRequest extends AbstractStructBase
{
    /**
     * The MidocoDuplicateSupplierInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDuplicateSupplierInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo $MidocoDuplicateSupplierInfo = null;
    /**
     * Constructor method for DuplicateSupplierInfoRequest
     * @uses DuplicateSupplierInfoRequest::setMidocoDuplicateSupplierInfo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null)
    {
        $this
            ->setMidocoDuplicateSupplierInfo($midocoDuplicateSupplierInfo);
    }
    /**
     * Get MidocoDuplicateSupplierInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo|null
     */
    public function getMidocoDuplicateSupplierInfo(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo
    {
        return $this->MidocoDuplicateSupplierInfo;
    }
    /**
     * Set MidocoDuplicateSupplierInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo
     * @return \Pggns\MidocoApi\Bank\StructType\DuplicateSupplierInfoRequest
     */
    public function setMidocoDuplicateSupplierInfo(?\Pggns\MidocoApi\Bank\StructType\MidocoDuplicateSupplierInfo $midocoDuplicateSupplierInfo = null): self
    {
        $this->MidocoDuplicateSupplierInfo = $midocoDuplicateSupplierInfo;
        
        return $this;
    }
}
