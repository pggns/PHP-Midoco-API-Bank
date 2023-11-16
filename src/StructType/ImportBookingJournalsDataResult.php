<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBookingJournalsDataResult StructType
 * @subpackage Structs
 */
class ImportBookingJournalsDataResult extends AbstractStructBase
{
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[]
     */
    protected array $MidocoFault = [];
    /**
     * The ImportBookingJournalsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ImportBookingJournalsData
     * @var \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[]
     */
    protected array $ImportBookingJournalsData = [];
    /**
     * Constructor method for ImportBookingJournalsDataResult
     * @uses ImportBookingJournalsDataResult::setMidocoFault()
     * @uses ImportBookingJournalsDataResult::setImportBookingJournalsData()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[] $midocoFault
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[] $importBookingJournalsData
     */
    public function __construct(array $midocoFault = [], array $importBookingJournalsData = [])
    {
        $this
            ->setMidocoFault($midocoFault)
            ->setImportBookingJournalsData($importBookingJournalsData);
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintsFromSetMidocoFault(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importBookingJournalsDataResultMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$importBookingJournalsDataResultMidocoFaultItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($importBookingJournalsDataResultMidocoFaultItem) ? get_class($importBookingJournalsDataResultMidocoFaultItem) : sprintf('%s(%s)', gettype($importBookingJournalsDataResultMidocoFaultItem), var_export($importBookingJournalsDataResultMidocoFaultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoFaultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[] $midocoFault
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult
     */
    public function setMidocoFault(array $midocoFault = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintsFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult
     */
    public function addToMidocoFault(\Pggns\MidocoApi\Bank\StructType\MidocoFaultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoFaultType) {
            throw new InvalidArgumentException(sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoFaultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFault[] = $item;
        
        return $this;
    }
    /**
     * Get ImportBookingJournalsData value
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData[]
     */
    public function getImportBookingJournalsData(): array
    {
        return $this->ImportBookingJournalsData;
    }
    /**
     * This method is responsible for validating the values passed to the setImportBookingJournalsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportBookingJournalsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportBookingJournalsDataForArrayConstraintsFromSetImportBookingJournalsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importBookingJournalsDataResultImportBookingJournalsDataItem) {
            // validation for constraint: itemType
            if (!$importBookingJournalsDataResultImportBookingJournalsDataItem instanceof \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData) {
                $invalidValues[] = is_object($importBookingJournalsDataResultImportBookingJournalsDataItem) ? get_class($importBookingJournalsDataResultImportBookingJournalsDataItem) : sprintf('%s(%s)', gettype($importBookingJournalsDataResultImportBookingJournalsDataItem), var_export($importBookingJournalsDataResultImportBookingJournalsDataItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult
     */
    public function setImportBookingJournalsData(array $importBookingJournalsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($importBookingJournalsDataArrayErrorMessage = self::validateImportBookingJournalsDataForArrayConstraintsFromSetImportBookingJournalsData($importBookingJournalsData))) {
            throw new InvalidArgumentException($importBookingJournalsDataArrayErrorMessage, __LINE__);
        }
        $this->ImportBookingJournalsData = $importBookingJournalsData;
        
        return $this;
    }
    /**
     * Add item to ImportBookingJournalsData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsData $item
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult
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
