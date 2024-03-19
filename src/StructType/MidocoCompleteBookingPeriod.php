<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCompleteBookingPeriod StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCompleteBookingPeriod extends BookingPeriodDTO
{
    /**
     * The MidocoBookingPeriodAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingPeriodAccount
     * @var \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO[]
     */
    protected ?array $MidocoBookingPeriodAccount = null;
    /**
     * Constructor method for MidocoCompleteBookingPeriod
     * @uses MidocoCompleteBookingPeriod::setMidocoBookingPeriodAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO[] $midocoBookingPeriodAccount
     */
    public function __construct(?array $midocoBookingPeriodAccount = null)
    {
        $this
            ->setMidocoBookingPeriodAccount($midocoBookingPeriodAccount);
    }
    /**
     * Get MidocoBookingPeriodAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO[]
     */
    public function getMidocoBookingPeriodAccount(): ?array
    {
        return $this->MidocoBookingPeriodAccount;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingPeriodAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingPeriodAccount method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingPeriodAccountForArrayConstraintFromSetMidocoBookingPeriodAccount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) {
            // validation for constraint: itemType
            if (!$midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem instanceof \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO) {
                $invalidValues[] = is_object($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) ? get_class($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem) : sprintf('%s(%s)', gettype($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem), var_export($midocoCompleteBookingPeriodMidocoBookingPeriodAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingPeriodAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingPeriodAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO[] $midocoBookingPeriodAccount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCompleteBookingPeriod
     */
    public function setMidocoBookingPeriodAccount(?array $midocoBookingPeriodAccount = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingPeriodAccountArrayErrorMessage = self::validateMidocoBookingPeriodAccountForArrayConstraintFromSetMidocoBookingPeriodAccount($midocoBookingPeriodAccount))) {
            throw new InvalidArgumentException($midocoBookingPeriodAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingPeriodAccount = $midocoBookingPeriodAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingPeriodAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCompleteBookingPeriod
     */
    public function addToMidocoBookingPeriodAccount(\Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingPeriodAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\BookingPeriodAccountDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingPeriodAccount[] = $item;
        
        return $this;
    }
}
