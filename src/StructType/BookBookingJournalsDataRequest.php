<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookBookingJournalsDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookBookingJournalsDataRequest extends AbstractStructBase
{
    /**
     * The ImportBookingJournalsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ImportBookingJournalsData
     * @var \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[]
     */
    protected ?array $ImportBookingJournalsData = null;
    /**
     * Constructor method for BookBookingJournalsDataRequest
     * @uses BookBookingJournalsDataRequest::setImportBookingJournalsData()
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[] $importBookingJournalsData
     */
    public function __construct(?array $importBookingJournalsData = null)
    {
        $this
            ->setImportBookingJournalsData($importBookingJournalsData);
    }
    /**
     * Get ImportBookingJournalsData value
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[]
     */
    public function getImportBookingJournalsData(): ?array
    {
        return $this->ImportBookingJournalsData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setImportBookingJournalsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportBookingJournalsData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportBookingJournalsDataForArrayConstraintFromSetImportBookingJournalsData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookBookingJournalsDataRequestImportBookingJournalsDataItem) {
            // validation for constraint: itemType
            if (!$bookBookingJournalsDataRequestImportBookingJournalsDataItem instanceof \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData) {
                $invalidValues[] = is_object($bookBookingJournalsDataRequestImportBookingJournalsDataItem) ? get_class($bookBookingJournalsDataRequestImportBookingJournalsDataItem) : sprintf('%s(%s)', gettype($bookBookingJournalsDataRequestImportBookingJournalsDataItem), var_export($bookBookingJournalsDataRequestImportBookingJournalsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImportBookingJournalsData property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImportBookingJournalsData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[] $importBookingJournalsData
     * @return \Pggns\MidocoApi\Bank\StructType\BookBookingJournalsDataRequest
     */
    public function setImportBookingJournalsData(?array $importBookingJournalsData = null): self
    {
        // validation for constraint: array
        if ('' !== ($importBookingJournalsDataArrayErrorMessage = self::validateImportBookingJournalsDataForArrayConstraintFromSetImportBookingJournalsData($importBookingJournalsData))) {
            throw new InvalidArgumentException($importBookingJournalsDataArrayErrorMessage, __LINE__);
        }
        $this->ImportBookingJournalsData = $importBookingJournalsData;
        
        return $this;
    }
    /**
     * Add item to ImportBookingJournalsData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData $item
     * @return \Pggns\MidocoApi\Bank\StructType\BookBookingJournalsDataRequest
     */
    public function addToImportBookingJournalsData(\Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData) {
            throw new InvalidArgumentException(sprintf('The ImportBookingJournalsData property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ImportBookingJournalsData[] = $item;
        
        return $this;
    }
}
