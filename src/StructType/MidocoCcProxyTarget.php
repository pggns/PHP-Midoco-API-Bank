<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcProxyTarget StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCcProxyTarget extends CcproxyTargetDTO
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler = null;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO|null
     */
    public function getMidocoCcProxyHandler(): ?\Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(?\Pggns\MidocoApi\Bank\StructType\CcproxyHandlerDTO $midocoCcProxyHandler = null): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
