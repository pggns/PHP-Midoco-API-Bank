<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountsFromAccountAssignResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountsFromAccountAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for GetAccountsFromAccountAssignResponse
     * @uses GetAccountsFromAccountAssignResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Bank\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GetAccountsFromAccountAssignResponse
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
