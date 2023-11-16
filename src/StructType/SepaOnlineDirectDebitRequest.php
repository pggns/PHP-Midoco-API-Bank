<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaOnlineDirectDebitRequest StructType
 * @subpackage Structs
 */
class SepaOnlineDirectDebitRequest extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: order:MidocoDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[]
     */
    protected array $MidocoDirectDebitPosition = [];
    /**
     * The paymentType
     * @var int|null
     */
    protected ?int $paymentType = null;
    /**
     * The preventBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $preventBooking = null;
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for SepaOnlineDirectDebitRequest
     * @uses SepaOnlineDirectDebitRequest::setMidocoDirectDebitPosition()
     * @uses SepaOnlineDirectDebitRequest::setPaymentType()
     * @uses SepaOnlineDirectDebitRequest::setPreventBooking()
     * @uses SepaOnlineDirectDebitRequest::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[] $midocoDirectDebitPosition
     * @param int $paymentType
     * @param bool $preventBooking
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(array $midocoDirectDebitPosition, ?int $paymentType = null, ?bool $preventBooking = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoDirectDebitPosition($midocoDirectDebitPosition)
            ->setPaymentType($paymentType)
            ->setPreventBooking($preventBooking)
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[]
     */
    public function getMidocoDirectDebitPosition(): array
    {
        return $this->MidocoDirectDebitPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDirectDebitPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitPositionForArrayConstraintsFromSetMidocoDirectDebitPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem) {
            // validation for constraint: itemType
            if (!$sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition) {
                $invalidValues[] = is_object($sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem) ? get_class($sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem) : sprintf('%s(%s)', gettype($sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem), var_export($sepaOnlineDirectDebitRequestMidocoDirectDebitPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[] $midocoDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest
     */
    public function setMidocoDirectDebitPosition(array $midocoDirectDebitPosition): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitPositionArrayErrorMessage = self::validateMidocoDirectDebitPositionForArrayConstraintsFromSetMidocoDirectDebitPosition($midocoDirectDebitPosition))) {
            throw new InvalidArgumentException($midocoDirectDebitPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitPosition = $midocoDirectDebitPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest
     */
    public function addToMidocoDirectDebitPosition(\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDirectDebitPosition[] = $item;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return int|null
     */
    public function getPaymentType(): ?int
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param int $paymentType
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest
     */
    public function setPaymentType(?int $paymentType = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentType) && !(is_int($paymentType) || ctype_digit($paymentType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get preventBooking value
     * @return bool|null
     */
    public function getPreventBooking(): ?bool
    {
        return $this->preventBooking;
    }
    /**
     * Set preventBooking value
     * @param bool $preventBooking
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest
     */
    public function setPreventBooking(?bool $preventBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBooking) && !is_bool($preventBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBooking, true), gettype($preventBooking)), __LINE__);
        }
        $this->preventBooking = $preventBooking;
        
        return $this;
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
