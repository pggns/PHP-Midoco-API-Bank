<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSepaTelecashTransactionsRequest StructType
 * @subpackage Structs
 */
class ExportSepaTelecashTransactionsRequest extends AbstractStructBase
{
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * The exportAs
     * Meta information extracted from the WSDL
     * - default: CSV
     * @var string|null
     */
    protected ?string $exportAs = null;
    /**
     * Constructor method for ExportSepaTelecashTransactionsRequest
     * @uses ExportSepaTelecashTransactionsRequest::setFileId()
     * @uses ExportSepaTelecashTransactionsRequest::setExportAs()
     * @param int $fileId
     * @param string $exportAs
     */
    public function __construct(?int $fileId = null, ?string $exportAs = 'CSV')
    {
        $this
            ->setFileId($fileId)
            ->setExportAs($exportAs);
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
     * @return \Pggns\MidocoApi\Bank\StructType\ExportSepaTelecashTransactionsRequest
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
     * Get exportAs value
     * @return string|null
     */
    public function getExportAs(): ?string
    {
        return $this->exportAs;
    }
    /**
     * Set exportAs value
     * @param string $exportAs
     * @return \Pggns\MidocoApi\Bank\StructType\ExportSepaTelecashTransactionsRequest
     */
    public function setExportAs(?string $exportAs = 'CSV'): self
    {
        // validation for constraint: string
        if (!is_null($exportAs) && !is_string($exportAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportAs, true), gettype($exportAs)), __LINE__);
        }
        $this->exportAs = $exportAs;
        
        return $this;
    }
}
