<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleSetsRequest StructType
 * @subpackage Structs
 */
class GetRuleSetsRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSetSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSetSearchCriteria
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria $MidocoRuleSetSearchCriteria = null;
    /**
     * Constructor method for GetRuleSetsRequest
     * @uses GetRuleSetsRequest::setMidocoRuleSetSearchCriteria()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null)
    {
        $this
            ->setMidocoRuleSetSearchCriteria($midocoRuleSetSearchCriteria);
    }
    /**
     * Get MidocoRuleSetSearchCriteria value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria|null
     */
    public function getMidocoRuleSetSearchCriteria(): ?\Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria
    {
        return $this->MidocoRuleSetSearchCriteria;
    }
    /**
     * Set MidocoRuleSetSearchCriteria value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     * @return \Pggns\MidocoApi\Bank\StructType\GetRuleSetsRequest
     */
    public function setMidocoRuleSetSearchCriteria(?\Pggns\MidocoApi\Bank\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null): self
    {
        $this->MidocoRuleSetSearchCriteria = $midocoRuleSetSearchCriteria;
        
        return $this;
    }
}
