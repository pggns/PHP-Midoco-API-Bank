<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetectBankStatementFormatResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DetectBankStatementFormatResponse extends AbstractStructBase
{
    /**
     * The fileFormat
     * @var string|null
     */
    protected ?string $fileFormat = null;
    /**
     * Constructor method for DetectBankStatementFormatResponse
     * @uses DetectBankStatementFormatResponse::setFileFormat()
     * @param string $fileFormat
     */
    public function __construct(?string $fileFormat = null)
    {
        $this
            ->setFileFormat($fileFormat);
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
     * @uses \Pggns\MidocoApi\Bank\EnumType\FileFormat::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\FileFormat::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fileFormat
     * @return \Pggns\MidocoApi\Bank\StructType\DetectBankStatementFormatResponse
     */
    public function setFileFormat(?string $fileFormat = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\FileFormat::valueIsValid($fileFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\FileFormat', is_array($fileFormat) ? implode(', ', $fileFormat) : var_export($fileFormat, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\FileFormat::getValidValues())), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
}
