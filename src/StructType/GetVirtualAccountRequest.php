<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO $MidocoVirtualAccount = null;
    /**
     * Constructor method for GetVirtualAccountRequest
     * @uses GetVirtualAccountRequest::setMidocoVirtualAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO $midocoVirtualAccount
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO $midocoVirtualAccount = null)
    {
        $this
            ->setMidocoVirtualAccount($midocoVirtualAccount);
    }
    /**
     * Get MidocoVirtualAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO|null
     */
    public function getMidocoVirtualAccount(): ?\Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO
    {
        return $this->MidocoVirtualAccount;
    }
    /**
     * Set MidocoVirtualAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO $midocoVirtualAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GetVirtualAccountRequest
     */
    public function setMidocoVirtualAccount(?\Pggns\MidocoApi\Bank\StructType\VirtualAccountDTO $midocoVirtualAccount = null): self
    {
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
}
