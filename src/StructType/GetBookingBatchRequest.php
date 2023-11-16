<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingBatchRequest StructType
 * @subpackage Structs
 */
class GetBookingBatchRequest extends AbstractStructBase
{
    /**
     * The batchId
     * @var int|null
     */
    protected ?int $batchId = null;
    /**
     * Constructor method for GetBookingBatchRequest
     * @uses GetBookingBatchRequest::setBatchId()
     * @param int $batchId
     */
    public function __construct(?int $batchId = null)
    {
        $this
            ->setBatchId($batchId);
    }
    /**
     * Get batchId value
     * @return int|null
     */
    public function getBatchId(): ?int
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \Pggns\MidocoApi\Bank\StructType\GetBookingBatchRequest
     */
    public function setBatchId(?int $batchId = null): self
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        
        return $this;
    }
}
