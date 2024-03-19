<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankPaymentFileResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankPaymentFileResponse extends AbstractStructBase
{
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * The stream
     * @var string|null
     */
    protected ?string $stream = null;
    /**
     * Constructor method for SaveBankPaymentFileResponse
     * @uses SaveBankPaymentFileResponse::setFileId()
     * @uses SaveBankPaymentFileResponse::setStream()
     * @param int $fileId
     * @param string $stream
     */
    public function __construct(?int $fileId = null, ?string $stream = null)
    {
        $this
            ->setFileId($fileId)
            ->setStream($stream);
    }
    /**
     * Get fileId value
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }
    /**
     * Set fileId value
     * @param int $fileId
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileResponse
     */
    public function setFileId(?int $fileId = null): self
    {
        // validation for constraint: int
        if (!is_null($fileId) && !(is_int($fileId) || ctype_digit($fileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileId, true), gettype($fileId)), __LINE__);
        }
        $this->fileId = $fileId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankPaymentFileResponse
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
