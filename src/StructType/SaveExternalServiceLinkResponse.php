<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalServiceLinkResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Return the saved ExternalServiceLink.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveExternalServiceLinkResponse extends AbstractStructBase
{
    /**
     * The MidocoExternalServiceLink
     * Meta information extracted from the WSDL
     * - ref: MidocoExternalServiceLink
     * @var \Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO $MidocoExternalServiceLink = null;
    /**
     * Constructor method for SaveExternalServiceLinkResponse
     * @uses SaveExternalServiceLinkResponse::setMidocoExternalServiceLink()
     * @param \Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null)
    {
        $this
            ->setMidocoExternalServiceLink($midocoExternalServiceLink);
    }
    /**
     * Get MidocoExternalServiceLink value
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO|null
     */
    public function getMidocoExternalServiceLink(): ?\Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO
    {
        return $this->MidocoExternalServiceLink;
    }
    /**
     * Set MidocoExternalServiceLink value
     * @param \Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink
     * @return \Pggns\MidocoApi\Bank\StructType\SaveExternalServiceLinkResponse
     */
    public function setMidocoExternalServiceLink(?\Pggns\MidocoApi\Bank\StructType\ExternalServiceLinkDTO $midocoExternalServiceLink = null): self
    {
        $this->MidocoExternalServiceLink = $midocoExternalServiceLink;
        
        return $this;
    }
}
