<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBankFileRequest StructType
 * @subpackage Structs
 */
class ImportBankFileRequest extends AbstractStructBase
{
    /**
     * The stream
     * @var string|null
     */
    protected ?string $stream = null;
    /**
     * The fileFormat
     * @var string|null
     */
    protected ?string $fileFormat = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * Constructor method for ImportBankFileRequest
     * @uses ImportBankFileRequest::setStream()
     * @uses ImportBankFileRequest::setFileFormat()
     * @uses ImportBankFileRequest::setFileName()
     * @param string $stream
     * @param string $fileFormat
     * @param string $fileName
     */
    public function __construct(?string $stream = null, ?string $fileFormat = null, ?string $fileName = null)
    {
        $this
            ->setStream($stream)
            ->setFileFormat($fileFormat)
            ->setFileName($fileName);
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileRequest
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
    /**
     * Get fileFormat value
     * @return string|null
     */
    public function getFileFormat(): ?string
    {
        return $this->fileFormat;
    }
    /**
     * Set fileFormat value
     * @param string $fileFormat
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileRequest
     */
    public function setFileFormat(?string $fileFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($fileFormat) && !is_string($fileFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBankFileRequest
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
}
