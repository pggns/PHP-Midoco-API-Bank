<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportedBookings StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportedBookings extends AbstractStructBase
{
    /**
     * The MidocoManualBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoManualBooking
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking[]
     */
    protected ?array $MidocoManualBooking = null;
    /**
     * Constructor method for MidocoImportedBookings
     * @uses MidocoImportedBookings::setMidocoManualBooking()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking[] $midocoManualBooking
     */
    public function __construct(?array $midocoManualBooking = null)
    {
        $this
            ->setMidocoManualBooking($midocoManualBooking);
    }
    /**
     * Get MidocoManualBooking value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking[]
     */
    public function getMidocoManualBooking(): ?array
    {
        return $this->MidocoManualBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoManualBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoManualBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoManualBookingForArrayConstraintFromSetMidocoManualBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoImportedBookingsMidocoManualBookingItem) {
            // validation for constraint: itemType
            if (!$midocoImportedBookingsMidocoManualBookingItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking) {
                $invalidValues[] = is_object($midocoImportedBookingsMidocoManualBookingItem) ? get_class($midocoImportedBookingsMidocoManualBookingItem) : sprintf('%s(%s)', gettype($midocoImportedBookingsMidocoManualBookingItem), var_export($midocoImportedBookingsMidocoManualBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoManualBooking property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoManualBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking[] $midocoManualBooking
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoImportedBookings
     */
    public function setMidocoManualBooking(?array $midocoManualBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoManualBookingArrayErrorMessage = self::validateMidocoManualBookingForArrayConstraintFromSetMidocoManualBooking($midocoManualBooking))) {
            throw new InvalidArgumentException($midocoManualBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoManualBooking = $midocoManualBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoManualBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoImportedBookings
     */
    public function addToMidocoManualBooking(\Pggns\MidocoApi\Bank\StructType\MidocoManualBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking) {
            throw new InvalidArgumentException(sprintf('The MidocoManualBooking property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoManualBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoManualBooking[] = $item;
        
        return $this;
    }
}
