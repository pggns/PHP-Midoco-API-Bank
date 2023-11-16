<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedMidocoRuleSetForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetAssignedMidocoRuleSetForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Bank\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for GetAssignedMidocoRuleSetForOrgunitResponse
     * @uses GetAssignedMidocoRuleSetForOrgunitResponse::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Bank\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Bank\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Bank\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Bank\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Bank\StructType\GetAssignedMidocoRuleSetForOrgunitResponse
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Bank\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
