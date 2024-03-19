<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankStatementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankStatementsRequest extends AbstractStructBase
{
    /**
     * The MidocoSearchBankStatementEntriesCriteriaType
     * Meta information extracted from the WSDL
     * - ref: MidocoSearchBankStatementEntriesCriteriaType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType $MidocoSearchBankStatementEntriesCriteriaType = null;
    /**
     * Constructor method for SearchBankStatementsRequest
     * @uses SearchBankStatementsRequest::setMidocoSearchBankStatementEntriesCriteriaType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType $midocoSearchBankStatementEntriesCriteriaType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType $midocoSearchBankStatementEntriesCriteriaType = null)
    {
        $this
            ->setMidocoSearchBankStatementEntriesCriteriaType($midocoSearchBankStatementEntriesCriteriaType);
    }
    /**
     * Get MidocoSearchBankStatementEntriesCriteriaType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType|null
     */
    public function getMidocoSearchBankStatementEntriesCriteriaType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType
    {
        return $this->MidocoSearchBankStatementEntriesCriteriaType;
    }
    /**
     * Set MidocoSearchBankStatementEntriesCriteriaType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType $midocoSearchBankStatementEntriesCriteriaType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsRequest
     */
    public function setMidocoSearchBankStatementEntriesCriteriaType(?\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementEntriesCriteriaType $midocoSearchBankStatementEntriesCriteriaType = null): self
    {
        $this->MidocoSearchBankStatementEntriesCriteriaType = $midocoSearchBankStatementEntriesCriteriaType;
        
        return $this;
    }
}
