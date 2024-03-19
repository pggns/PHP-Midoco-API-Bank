<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for GetMfRequest
     * @uses GetMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Bank\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Bank\StructType\GetMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Bank\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
