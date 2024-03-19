<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAreaCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAreaCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * Constructor method for SaveAreaCodeRequest
     * @uses SaveAreaCodeRequest::setMidocoAreaCode()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAreaCode $midocoAreaCode
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoAreaCode $midocoAreaCode = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Bank\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Bank\StructType\SaveAreaCodeRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Bank\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
}
