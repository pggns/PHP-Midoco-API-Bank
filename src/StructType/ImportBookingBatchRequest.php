<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBookingBatchRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportBookingBatchRequest extends AbstractStructBase
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
     * The MidocoManualBatchProtocolType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoManualBatchProtocolType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType[]
     */
    protected ?array $MidocoManualBatchProtocolType = null;
    /**
     * Constructor method for ImportBookingBatchRequest
     * @uses ImportBookingBatchRequest::setStream()
     * @uses ImportBookingBatchRequest::setFileFormat()
     * @uses ImportBookingBatchRequest::setFileName()
     * @uses ImportBookingBatchRequest::setMidocoManualBatchProtocolType()
     * @param string $stream
     * @param string $fileFormat
     * @param string $fileName
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType[] $midocoManualBatchProtocolType
     */
    public function __construct(?string $stream = null, ?string $fileFormat = null, ?string $fileName = null, ?array $midocoManualBatchProtocolType = null)
    {
        $this
            ->setStream($stream)
            ->setFileFormat($fileFormat)
            ->setFileName($fileName)
            ->setMidocoManualBatchProtocolType($midocoManualBatchProtocolType);
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingBatchRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingBatchRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingBatchRequest
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
     * Get MidocoManualBatchProtocolType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType[]
     */
    public function getMidocoManualBatchProtocolType(): ?array
    {
        return $this->MidocoManualBatchProtocolType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoManualBatchProtocolType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoManualBatchProtocolType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoManualBatchProtocolTypeForArrayConstraintFromSetMidocoManualBatchProtocolType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importBookingBatchRequestMidocoManualBatchProtocolTypeItem) {
            // validation for constraint: itemType
            if (!$importBookingBatchRequestMidocoManualBatchProtocolTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType) {
                $invalidValues[] = is_object($importBookingBatchRequestMidocoManualBatchProtocolTypeItem) ? get_class($importBookingBatchRequestMidocoManualBatchProtocolTypeItem) : sprintf('%s(%s)', gettype($importBookingBatchRequestMidocoManualBatchProtocolTypeItem), var_export($importBookingBatchRequestMidocoManualBatchProtocolTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoManualBatchProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoManualBatchProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType[] $midocoManualBatchProtocolType
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingBatchRequest
     */
    public function setMidocoManualBatchProtocolType(?array $midocoManualBatchProtocolType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoManualBatchProtocolTypeArrayErrorMessage = self::validateMidocoManualBatchProtocolTypeForArrayConstraintFromSetMidocoManualBatchProtocolType($midocoManualBatchProtocolType))) {
            throw new InvalidArgumentException($midocoManualBatchProtocolTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoManualBatchProtocolType = $midocoManualBatchProtocolType;
        
        return $this;
    }
    /**
     * Add item to MidocoManualBatchProtocolType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingBatchRequest
     */
    public function addToMidocoManualBatchProtocolType(\Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType) {
            throw new InvalidArgumentException(sprintf('The MidocoManualBatchProtocolType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBatchProtocolType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoManualBatchProtocolType[] = $item;
        
        return $this;
    }
}
