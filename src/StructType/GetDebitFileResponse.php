<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitFileResponse StructType
 * @subpackage Structs
 */
class GetDebitFileResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitFile
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitFile
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $MidocoDebitFile = null;
    /**
     * Constructor method for GetDebitFileResponse
     * @uses GetDebitFileResponse::setMidocoDebitFile()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $midocoDebitFile
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $midocoDebitFile = null)
    {
        $this
            ->setMidocoDebitFile($midocoDebitFile);
    }
    /**
     * Get MidocoDebitFile value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile|null
     */
    public function getMidocoDebitFile(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDebitFile
    {
        return $this->MidocoDebitFile;
    }
    /**
     * Set MidocoDebitFile value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $midocoDebitFile
     * @return \Pggns\MidocoApi\Bank\StructType\GetDebitFileResponse
     */
    public function setMidocoDebitFile(?\Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $midocoDebitFile = null): self
    {
        $this->MidocoDebitFile = $midocoDebitFile;
        
        return $this;
    }
}
