<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBankStatementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllBankStatementsRequest extends AbstractStructBase
{
    /**
     * The bookingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $bookingDate = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * Constructor method for GetAllBankStatementsRequest
     * @uses GetAllBankStatementsRequest::setBookingDate()
     * @uses GetAllBankStatementsRequest::setAccountNo()
     * @param string[] $bookingDate
     * @param string $accountNo
     */
    public function __construct(?array $bookingDate = null, ?string $accountNo = null)
    {
        $this
            ->setBookingDate($bookingDate)
            ->setAccountNo($accountNo);
    }
    /**
     * Get bookingDate value
     * @return string[]
     */
    public function getBookingDate(): ?array
    {
        return $this->bookingDate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingDate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingDateForArrayConstraintFromSetBookingDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllBankStatementsRequestBookingDateItem) {
            // validation for constraint: itemType
            if (!is_string($getAllBankStatementsRequestBookingDateItem)) {
                $invalidValues[] = is_object($getAllBankStatementsRequestBookingDateItem) ? get_class($getAllBankStatementsRequestBookingDateItem) : sprintf('%s(%s)', gettype($getAllBankStatementsRequestBookingDateItem), var_export($getAllBankStatementsRequestBookingDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bookingDate property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bookingDate value
     * @throws InvalidArgumentException
     * @param string[] $bookingDate
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest
     */
    public function setBookingDate(?array $bookingDate = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingDateArrayErrorMessage = self::validateBookingDateForArrayConstraintFromSetBookingDate($bookingDate))) {
            throw new InvalidArgumentException($bookingDateArrayErrorMessage, __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Add item to bookingDate value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest
     */
    public function addToBookingDate(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The bookingDate property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bookingDate[] = $item;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
}
