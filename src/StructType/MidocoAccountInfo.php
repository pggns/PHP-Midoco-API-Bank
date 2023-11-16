<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAccountInfo StructType
 * @subpackage Structs
 */
class MidocoAccountInfo extends AccountDTO
{
    /**
     * The entryRestAsProv
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * Constructor method for MidocoAccountInfo
     * @uses MidocoAccountInfo::setEntryRestAsProv()
     * @param bool $entryRestAsProv
     */
    public function __construct(?bool $entryRestAsProv = null)
    {
        $this
            ->setEntryRestAsProv($entryRestAsProv);
    }
    /**
     * Get entryRestAsProv value
     * @return bool|null
     */
    public function getEntryRestAsProv(): ?bool
    {
        return $this->entryRestAsProv;
    }
    /**
     * Set entryRestAsProv value
     * @param bool $entryRestAsProv
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccountInfo
     */
    public function setEntryRestAsProv(?bool $entryRestAsProv = null): self
    {
        // validation for constraint: boolean
        if (!is_null($entryRestAsProv) && !is_bool($entryRestAsProv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entryRestAsProv, true), gettype($entryRestAsProv)), __LINE__);
        }
        $this->entryRestAsProv = $entryRestAsProv;
        
        return $this;
    }
}
