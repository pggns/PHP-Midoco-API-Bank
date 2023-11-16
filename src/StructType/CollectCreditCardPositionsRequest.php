<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectCreditCardPositionsRequest StructType
 * @subpackage Structs
 */
class CollectCreditCardPositionsRequest extends AbstractStructBase
{
    /**
     * The perDate
     * @var string|null
     */
    protected ?string $perDate = null;
    /**
     * The CreditCardType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: CreditCardType
     * @var string[]
     */
    protected array $CreditCardType = [];
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for CollectCreditCardPositionsRequest
     * @uses CollectCreditCardPositionsRequest::setPerDate()
     * @uses CollectCreditCardPositionsRequest::setCreditCardType()
     * @uses CollectCreditCardPositionsRequest::setOrderId()
     * @param string $perDate
     * @param string[] $creditCardType
     * @param int $orderId
     */
    public function __construct(?string $perDate = null, array $creditCardType = [], ?int $orderId = null)
    {
        $this
            ->setPerDate($perDate)
            ->setCreditCardType($creditCardType)
            ->setOrderId($orderId);
    }
    /**
     * Get perDate value
     * @return string|null
     */
    public function getPerDate(): ?string
    {
        return $this->perDate;
    }
    /**
     * Set perDate value
     * @param string $perDate
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest
     */
    public function setPerDate(?string $perDate = null): self
    {
        // validation for constraint: string
        if (!is_null($perDate) && !is_string($perDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perDate, true), gettype($perDate)), __LINE__);
        }
        $this->perDate = $perDate;
        
        return $this;
    }
    /**
     * Get CreditCardType value
     * @return string[]
     */
    public function getCreditCardType(): array
    {
        return $this->CreditCardType;
    }
    /**
     * This method is responsible for validating the values passed to the setCreditCardType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardTypeForArrayConstraintsFromSetCreditCardType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collectCreditCardPositionsRequestCreditCardTypeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::valueIsValid($collectCreditCardPositionsRequestCreditCardTypeItem)) {
                $invalidValues[] = is_object($collectCreditCardPositionsRequestCreditCardTypeItem) ? get_class($collectCreditCardPositionsRequestCreditCardTypeItem) : sprintf('%s(%s)', gettype($collectCreditCardPositionsRequestCreditCardTypeItem), var_export($collectCreditCardPositionsRequestCreditCardTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $creditCardType
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest
     */
    public function setCreditCardType(array $creditCardType = []): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardTypeArrayErrorMessage = self::validateCreditCardTypeForArrayConstraintsFromSetCreditCardType($creditCardType))) {
            throw new InvalidArgumentException($creditCardTypeArrayErrorMessage, __LINE__);
        }
        $this->CreditCardType = $creditCardType;
        
        return $this;
    }
    /**
     * Add item to CreditCardType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest
     */
    public function addToCreditCardType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\CreditCardTypeType::getValidValues())), __LINE__);
        }
        $this->CreditCardType[] = $item;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
