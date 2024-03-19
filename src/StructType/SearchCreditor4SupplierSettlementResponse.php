<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCreditor4SupplierSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCreditor4SupplierSettlementResponse extends AbstractStructBase
{
    /**
     * The creditor
     * @var string|null
     */
    protected ?string $creditor = null;
    /**
     * Constructor method for SearchCreditor4SupplierSettlementResponse
     * @uses SearchCreditor4SupplierSettlementResponse::setCreditor()
     * @param string $creditor
     */
    public function __construct(?string $creditor = null)
    {
        $this
            ->setCreditor($creditor);
    }
    /**
     * Get creditor value
     * @return string|null
     */
    public function getCreditor(): ?string
    {
        return $this->creditor;
    }
    /**
     * Set creditor value
     * @param string $creditor
     * @return \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementResponse
     */
    public function setCreditor(?string $creditor = null): self
    {
        // validation for constraint: string
        if (!is_null($creditor) && !is_string($creditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditor, true), gettype($creditor)), __LINE__);
        }
        $this->creditor = $creditor;
        
        return $this;
    }
}
