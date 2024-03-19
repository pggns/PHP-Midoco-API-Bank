<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShortRemarkIdentifiersRequest extends AbstractStructBase
{
    /**
     * The RemarkIdentifiersSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: RemarkIdentifiersSearchCriteria
     * @var \Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria $RemarkIdentifiersSearchCriteria = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersRequest
     * @uses GetShortRemarkIdentifiersRequest::setRemarkIdentifiersSearchCriteria()
     * @param \Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null)
    {
        $this
            ->setRemarkIdentifiersSearchCriteria($remarkIdentifiersSearchCriteria);
    }
    /**
     * Get RemarkIdentifiersSearchCriteria value
     * @return \Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria|null
     */
    public function getRemarkIdentifiersSearchCriteria(): ?\Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria
    {
        return $this->RemarkIdentifiersSearchCriteria;
    }
    /**
     * Set RemarkIdentifiersSearchCriteria value
     * @param \Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria
     * @return \Pggns\MidocoApi\Bank\StructType\GetShortRemarkIdentifiersRequest
     */
    public function setRemarkIdentifiersSearchCriteria(?\Pggns\MidocoApi\Bank\StructType\RemarkIdentifiersSearchCriteria $remarkIdentifiersSearchCriteria = null): self
    {
        $this->RemarkIdentifiersSearchCriteria = $remarkIdentifiersSearchCriteria;
        
        return $this;
    }
}
