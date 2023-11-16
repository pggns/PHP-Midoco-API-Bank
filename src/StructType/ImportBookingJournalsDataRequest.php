<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBookingJournalsDataRequest StructType
 * @subpackage Structs
 */
class ImportBookingJournalsDataRequest extends AbstractStructBase
{
    /**
     * The Data
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The delimiter
     * @var string|null
     */
    protected ?string $delimiter = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The decimalDelimiter
     * @var string|null
     */
    protected ?string $decimalDelimiter = null;
    /**
     * The genericDataFormat
     * @var string|null
     */
    protected ?string $genericDataFormat = null;
    /**
     * The textInQuotes
     * @var bool|null
     */
    protected ?bool $textInQuotes = null;
    /**
     * Constructor method for ImportBookingJournalsDataRequest
     * @uses ImportBookingJournalsDataRequest::setData()
     * @uses ImportBookingJournalsDataRequest::setFormat()
     * @uses ImportBookingJournalsDataRequest::setFileName()
     * @uses ImportBookingJournalsDataRequest::setDelimiter()
     * @uses ImportBookingJournalsDataRequest::setDateFormat()
     * @uses ImportBookingJournalsDataRequest::setDecimalDelimiter()
     * @uses ImportBookingJournalsDataRequest::setGenericDataFormat()
     * @uses ImportBookingJournalsDataRequest::setTextInQuotes()
     * @param string $data
     * @param string $format
     * @param string $fileName
     * @param string $delimiter
     * @param string $dateFormat
     * @param string $decimalDelimiter
     * @param string $genericDataFormat
     * @param bool $textInQuotes
     */
    public function __construct(?string $data = null, ?string $format = null, ?string $fileName = null, ?string $delimiter = null, ?string $dateFormat = null, ?string $decimalDelimiter = null, ?string $genericDataFormat = null, ?bool $textInQuotes = null)
    {
        $this
            ->setData($data)
            ->setFormat($format)
            ->setFileName($fileName)
            ->setDelimiter($delimiter)
            ->setDateFormat($dateFormat)
            ->setDecimalDelimiter($decimalDelimiter)
            ->setGenericDataFormat($genericDataFormat)
            ->setTextInQuotes($textInQuotes);
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
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
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter(): ?string
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setDelimiter(?string $delimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delimiter, true), gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        
        return $this;
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get decimalDelimiter value
     * @return string|null
     */
    public function getDecimalDelimiter(): ?string
    {
        return $this->decimalDelimiter;
    }
    /**
     * Set decimalDelimiter value
     * @param string $decimalDelimiter
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setDecimalDelimiter(?string $decimalDelimiter = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalDelimiter) && !is_string($decimalDelimiter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalDelimiter, true), gettype($decimalDelimiter)), __LINE__);
        }
        $this->decimalDelimiter = $decimalDelimiter;
        
        return $this;
    }
    /**
     * Get genericDataFormat value
     * @return string|null
     */
    public function getGenericDataFormat(): ?string
    {
        return $this->genericDataFormat;
    }
    /**
     * Set genericDataFormat value
     * @param string $genericDataFormat
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setGenericDataFormat(?string $genericDataFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($genericDataFormat) && !is_string($genericDataFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($genericDataFormat, true), gettype($genericDataFormat)), __LINE__);
        }
        $this->genericDataFormat = $genericDataFormat;
        
        return $this;
    }
    /**
     * Get textInQuotes value
     * @return bool|null
     */
    public function getTextInQuotes(): ?bool
    {
        return $this->textInQuotes;
    }
    /**
     * Set textInQuotes value
     * @param bool $textInQuotes
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataRequest
     */
    public function setTextInQuotes(?bool $textInQuotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($textInQuotes) && !is_bool($textInQuotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($textInQuotes, true), gettype($textInQuotes)), __LINE__);
        }
        $this->textInQuotes = $textInQuotes;
        
        return $this;
    }
}
