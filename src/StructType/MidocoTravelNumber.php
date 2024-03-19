<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelNumber StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravelNumber extends TravelNumberDTO
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for MidocoTravelNumber
     * @uses MidocoTravelNumber::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelNumber
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\Bank\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
}
