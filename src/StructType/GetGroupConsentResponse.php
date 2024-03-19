<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGroupConsentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGroupConsentResponse extends AbstractStructBase
{
    /**
     * The MidocoGroupConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoGroupConsent
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent $MidocoGroupConsent = null;
    /**
     * Constructor method for GetGroupConsentResponse
     * @uses GetGroupConsentResponse::setMidocoGroupConsent()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent $midocoGroupConsent
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent $midocoGroupConsent = null)
    {
        $this
            ->setMidocoGroupConsent($midocoGroupConsent);
    }
    /**
     * Get MidocoGroupConsent value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent|null
     */
    public function getMidocoGroupConsent(): ?\Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent
    {
        return $this->MidocoGroupConsent;
    }
    /**
     * Set MidocoGroupConsent value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent $midocoGroupConsent
     * @return \Pggns\MidocoApi\Bank\StructType\GetGroupConsentResponse
     */
    public function setMidocoGroupConsent(?\Pggns\MidocoApi\Bank\StructType\MidocoGroupConsent $midocoGroupConsent = null): self
    {
        $this->MidocoGroupConsent = $midocoGroupConsent;
        
        return $this;
    }
}
