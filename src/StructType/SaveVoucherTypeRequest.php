<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVoucherTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVoucherTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoVoucherType
     * Meta information extracted from the WSDL
     * - ref: MidocoVoucherType
     * @var \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $MidocoVoucherType = null;
    /**
     * Constructor method for SaveVoucherTypeRequest
     * @uses SaveVoucherTypeRequest::setMidocoVoucherType()
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType = null)
    {
        $this
            ->setMidocoVoucherType($midocoVoucherType);
    }
    /**
     * Get MidocoVoucherType value
     * @return \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO|null
     */
    public function getMidocoVoucherType(): ?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO
    {
        return $this->MidocoVoucherType;
    }
    /**
     * Set MidocoVoucherType value
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType
     * @return \Pggns\MidocoApi\Bank\StructType\SaveVoucherTypeRequest
     */
    public function setMidocoVoucherType(?\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $midocoVoucherType = null): self
    {
        $this->MidocoVoucherType = $midocoVoucherType;
        
        return $this;
    }
}
