<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccount4StatementEntryRequest StructType
 * @subpackage Structs
 */
class GetBankAccount4StatementEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $MidocoBankStatementEntry = null;
    /**
     * Constructor method for GetBankAccount4StatementEntryRequest
     * @uses GetBankAccount4StatementEntryRequest::setMidocoBankStatementEntry()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null)
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry);
    }
    /**
     * Get MidocoBankStatementEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry|null
     */
    public function getMidocoBankStatementEntry(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
    {
        return $this->MidocoBankStatementEntry;
    }
    /**
     * Set MidocoBankStatementEntry value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryRequest
     */
    public function setMidocoBankStatementEntry(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null): self
    {
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
}
