<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankStatementFileRequest StructType
 * @subpackage Structs
 */
class SaveBankStatementFileRequest extends AbstractStructBase
{
    /**
     * The MidocoBankStatementFile
     * Meta information extracted from the WSDL
     * - ref: MidocoBankStatementFile
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile $MidocoBankStatementFile = null;
    /**
     * Constructor method for SaveBankStatementFileRequest
     * @uses SaveBankStatementFileRequest::setMidocoBankStatementFile()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile $midocoBankStatementFile
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile $midocoBankStatementFile = null)
    {
        $this
            ->setMidocoBankStatementFile($midocoBankStatementFile);
    }
    /**
     * Get MidocoBankStatementFile value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile|null
     */
    public function getMidocoBankStatementFile(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile
    {
        return $this->MidocoBankStatementFile;
    }
    /**
     * Set MidocoBankStatementFile value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile $midocoBankStatementFile
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileRequest
     */
    public function setMidocoBankStatementFile(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementFile $midocoBankStatementFile = null): self
    {
        $this->MidocoBankStatementFile = $midocoBankStatementFile;
        
        return $this;
    }
}
