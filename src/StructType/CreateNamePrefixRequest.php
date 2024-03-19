<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateNamePrefixRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateNamePrefixRequest extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Bank\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for CreateNamePrefixRequest
     * @uses CreateNamePrefixRequest::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Bank\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Bank\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Bank\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Bank\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Bank\StructType\CreateNamePrefixRequest
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Bank\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
