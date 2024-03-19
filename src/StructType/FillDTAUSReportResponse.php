<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillDTAUSReportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FillDTAUSReportResponse extends AbstractStructBase
{
    /**
     * The File
     * @var string|null
     */
    protected ?string $File = null;
    /**
     * Constructor method for FillDTAUSReportResponse
     * @uses FillDTAUSReportResponse::setFile()
     * @param string $file
     */
    public function __construct(?string $file = null)
    {
        $this
            ->setFile($file);
    }
    /**
     * Get File value
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->File;
    }
    /**
     * Set File value
     * @param string $file
     * @return \Pggns\MidocoApi\Bank\StructType\FillDTAUSReportResponse
     */
    public function setFile(?string $file = null): self
    {
        // validation for constraint: string
        if (!is_null($file) && !is_string($file)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($file, true), gettype($file)), __LINE__);
        }
        $this->File = $file;
        
        return $this;
    }
}
