<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCashBookItemTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCashBookItemTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for SaveCashBookItemTypeRequest
     * @uses SaveCashBookItemTypeRequest::setMidocoCashBookItemType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType $midocoCashBookItemType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType $midocoCashBookItemType = null)
    {
        $this
            ->setMidocoCashBookItemType($midocoCashBookItemType);
    }
    /**
     * Get MidocoCashBookItemType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType|null
     */
    public function getMidocoCashBookItemType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType
    {
        return $this->MidocoCashBookItemType;
    }
    /**
     * Set MidocoCashBookItemType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType $midocoCashBookItemType
     * @return \Pggns\MidocoApi\Bank\StructType\SaveCashBookItemTypeRequest
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Bank\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
