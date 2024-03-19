<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookBookingJournalsDataResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: BookBookingJournalsDataResponse --- checks the booking journals for validation and saves/imports all and the failure-list will be empty, if every line is valid. Otherwise, if one of them fails, the whole process wont't be imported,
 * but a whole list of failed lines will be returned.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookBookingJournalsDataResponse extends AbstractStructBase
{
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[]
     */
    protected ?array $MidocoFault = null;
    /**
     * Constructor method for BookBookingJournalsDataResponse
     * @uses BookBookingJournalsDataResponse::setMidocoFault()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[] $midocoFault
     */
    public function __construct(?array $midocoFault = null)
    {
        $this
            ->setMidocoFault($midocoFault);
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): ?array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintFromSetMidocoFault(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookBookingJournalsDataResponseMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$bookBookingJournalsDataResponseMidocoFaultItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($bookBookingJournalsDataResponseMidocoFaultItem) ? get_class($bookBookingJournalsDataResponseMidocoFaultItem) : sprintf('%s(%s)', gettype($bookBookingJournalsDataResponseMidocoFaultItem), var_export($bookBookingJournalsDataResponseMidocoFaultItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\BookBookingJournalsDataResponse
     */
    public function setMidocoFault(?array $midocoFault = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Bank\StructType\BookBookingJournalsDataResponse
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
}
