<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDebitor4EntryRequest StructType
 * @subpackage Structs
 */
class SearchDebitor4EntryRequest extends AbstractStructBase
{
    /**
     * The entry
     * @var string|null
     */
    protected ?string $entry = null;
    /**
     * Constructor method for SearchDebitor4EntryRequest
     * @uses SearchDebitor4EntryRequest::setEntry()
     * @param string $entry
     */
    public function __construct(?string $entry = null)
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return string|null
     */
    public function getEntry(): ?string
    {
        return $this->entry;
    }
    /**
     * Set entry value
     * @param string $entry
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitor4EntryRequest
     */
    public function setEntry(?string $entry = null): self
    {
        // validation for constraint: string
        if (!is_null($entry) && !is_string($entry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entry, true), gettype($entry)), __LINE__);
        }
        $this->entry = $entry;
        
        return $this;
    }
}
