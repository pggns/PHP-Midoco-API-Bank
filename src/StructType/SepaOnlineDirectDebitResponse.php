<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaOnlineDirectDebitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SepaOnlineDirectDebitResponse extends AbstractStructBase
{
    /**
     * The MidocoSepaOnlineFilesData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSepaOnlineFilesData
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData[]
     */
    protected ?array $MidocoSepaOnlineFilesData = null;
    /**
     * Constructor method for SepaOnlineDirectDebitResponse
     * @uses SepaOnlineDirectDebitResponse::setMidocoSepaOnlineFilesData()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData[] $midocoSepaOnlineFilesData
     */
    public function __construct(?array $midocoSepaOnlineFilesData = null)
    {
        $this
            ->setMidocoSepaOnlineFilesData($midocoSepaOnlineFilesData);
    }
    /**
     * Get MidocoSepaOnlineFilesData value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData[]
     */
    public function getMidocoSepaOnlineFilesData(): ?array
    {
        return $this->MidocoSepaOnlineFilesData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSepaOnlineFilesData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSepaOnlineFilesData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSepaOnlineFilesDataForArrayConstraintFromSetMidocoSepaOnlineFilesData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem) {
            // validation for constraint: itemType
            if (!$sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData) {
                $invalidValues[] = is_object($sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem) ? get_class($sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem) : sprintf('%s(%s)', gettype($sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem), var_export($sepaOnlineDirectDebitResponseMidocoSepaOnlineFilesDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSepaOnlineFilesData property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSepaOnlineFilesData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData[] $midocoSepaOnlineFilesData
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitResponse
     */
    public function setMidocoSepaOnlineFilesData(?array $midocoSepaOnlineFilesData = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSepaOnlineFilesDataArrayErrorMessage = self::validateMidocoSepaOnlineFilesDataForArrayConstraintFromSetMidocoSepaOnlineFilesData($midocoSepaOnlineFilesData))) {
            throw new InvalidArgumentException($midocoSepaOnlineFilesDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoSepaOnlineFilesData = $midocoSepaOnlineFilesData;
        
        return $this;
    }
    /**
     * Add item to MidocoSepaOnlineFilesData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData $item
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitResponse
     */
    public function addToMidocoSepaOnlineFilesData(\Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData) {
            throw new InvalidArgumentException(sprintf('The MidocoSepaOnlineFilesData property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSepaOnlineFilesData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSepaOnlineFilesData[] = $item;
        
        return $this;
    }
}
