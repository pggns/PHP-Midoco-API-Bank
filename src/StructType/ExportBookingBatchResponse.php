<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBookingBatchResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBookingBatchResponse extends AbstractStructBase
{
    /**
     * The stream
     * @var string|null
     */
    protected ?string $stream = null;
    /**
     * Constructor method for ExportBookingBatchResponse
     * @uses ExportBookingBatchResponse::setStream()
     * @param string $stream
     */
    public function __construct(?string $stream = null)
    {
        $this
            ->setStream($stream);
    }
    /**
     * Get stream value
     * @return string|null
     */
    public function getStream(): ?string
    {
        return $this->stream;
    }
    /**
     * Set stream value
     * @param string $stream
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBookingBatchResponse
     */
    public function setStream(?string $stream = null): self
    {
        // validation for constraint: string
        if (!is_null($stream) && !is_string($stream)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stream, true), gettype($stream)), __LINE__);
        }
        $this->stream = $stream;
        
        return $this;
    }
}
