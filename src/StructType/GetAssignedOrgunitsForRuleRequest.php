<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedOrgunitsForRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedOrgunitsForRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssignSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssignSearchCriteria
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria $MidocoRuleAssignSearchCriteria = null;
    /**
     * Constructor method for GetAssignedOrgunitsForRuleRequest
     * @uses GetAssignedOrgunitsForRuleRequest::setMidocoRuleAssignSearchCriteria()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null)
    {
        $this
            ->setMidocoRuleAssignSearchCriteria($midocoRuleAssignSearchCriteria);
    }
    /**
     * Get MidocoRuleAssignSearchCriteria value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria|null
     */
    public function getMidocoRuleAssignSearchCriteria(): ?\Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria
    {
        return $this->MidocoRuleAssignSearchCriteria;
    }
    /**
     * Set MidocoRuleAssignSearchCriteria value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     * @return \Pggns\MidocoApi\Bank\StructType\GetAssignedOrgunitsForRuleRequest
     */
    public function setMidocoRuleAssignSearchCriteria(?\Pggns\MidocoApi\Bank\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null): self
    {
        $this->MidocoRuleAssignSearchCriteria = $midocoRuleAssignSearchCriteria;
        
        return $this;
    }
}
