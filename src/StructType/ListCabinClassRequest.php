<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCabinClassRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListCabinClassRequest extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for ListCabinClassRequest
     * @uses ListCabinClassRequest::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Bank\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Bank\StructType\ListCabinClassRequest
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Bank\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
