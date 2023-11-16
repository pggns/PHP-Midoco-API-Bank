<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: list the fee types after a criteria
 * @subpackage Structs
 */
class ListMidocoFeeTypesRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFeeType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFeeType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $MidocoFeeType = null;
    /**
     * The referenceDate
     * @var string|null
     */
    protected ?string $referenceDate = null;
    /**
     * Constructor method for ListMidocoFeeTypesRequest
     * @uses ListMidocoFeeTypesRequest::setMidocoFeeType()
     * @uses ListMidocoFeeTypesRequest::setReferenceDate()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType
     * @param string $referenceDate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType = null, ?string $referenceDate = null)
    {
        $this
            ->setMidocoFeeType($midocoFeeType)
            ->setReferenceDate($referenceDate);
    }
    /**
     * Get MidocoFeeType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFeeType|null
     */
    public function getMidocoFeeType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType
    {
        return $this->MidocoFeeType;
    }
    /**
     * Set MidocoFeeType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType
     * @return \Pggns\MidocoApi\Bank\StructType\ListMidocoFeeTypesRequest
     */
    public function setMidocoFeeType(?\Pggns\MidocoApi\Bank\StructType\MidocoFeeType $midocoFeeType = null): self
    {
        $this->MidocoFeeType = $midocoFeeType;
        
        return $this;
    }
    /**
     * Get referenceDate value
     * @return string|null
     */
    public function getReferenceDate(): ?string
    {
        return $this->referenceDate;
    }
    /**
     * Set referenceDate value
     * @param string $referenceDate
     * @return \Pggns\MidocoApi\Bank\StructType\ListMidocoFeeTypesRequest
     */
    public function setReferenceDate(?string $referenceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceDate) && !is_string($referenceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceDate, true), gettype($referenceDate)), __LINE__);
        }
        $this->referenceDate = $referenceDate;
        
        return $this;
    }
}
