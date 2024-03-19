<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignMidocoRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignMidocoRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssign
     * @var \Pggns\MidocoApi\Bank\StructType\RuleAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\RuleAssignDTO $MidocoRuleAssign = null;
    /**
     * Constructor method for AssignMidocoRuleRequest
     * @uses AssignMidocoRuleRequest::setMidocoRuleAssign()
     * @param \Pggns\MidocoApi\Bank\StructType\RuleAssignDTO $midocoRuleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\RuleAssignDTO $midocoRuleAssign = null)
    {
        $this
            ->setMidocoRuleAssign($midocoRuleAssign);
    }
    /**
     * Get MidocoRuleAssign value
     * @return \Pggns\MidocoApi\Bank\StructType\RuleAssignDTO|null
     */
    public function getMidocoRuleAssign(): ?\Pggns\MidocoApi\Bank\StructType\RuleAssignDTO
    {
        return $this->MidocoRuleAssign;
    }
    /**
     * Set MidocoRuleAssign value
     * @param \Pggns\MidocoApi\Bank\StructType\RuleAssignDTO $midocoRuleAssign
     * @return \Pggns\MidocoApi\Bank\StructType\AssignMidocoRuleRequest
     */
    public function setMidocoRuleAssign(?\Pggns\MidocoApi\Bank\StructType\RuleAssignDTO $midocoRuleAssign = null): self
    {
        $this->MidocoRuleAssign = $midocoRuleAssign;
        
        return $this;
    }
}
