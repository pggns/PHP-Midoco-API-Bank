<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnlineDirectDebitRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: reference data for unister payment
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OnlineDirectDebitRequest extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: order:MidocoDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[]
     */
    protected array $MidocoDirectDebitPosition;
    /**
     * The paymentType
     * @var int|null
     */
    protected ?int $paymentType = null;
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * The CcOnlinePaymentReferenceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: order:CcOnlinePaymentReferenceData
     * @var \Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData $CcOnlinePaymentReferenceData = null;
    /**
     * Constructor method for OnlineDirectDebitRequest
     * @uses OnlineDirectDebitRequest::setMidocoDirectDebitPosition()
     * @uses OnlineDirectDebitRequest::setPaymentType()
     * @uses OnlineDirectDebitRequest::setMidocoBankAccount()
     * @uses OnlineDirectDebitRequest::setCcOnlinePaymentReferenceData()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition[] $midocoDirectDebitPosition
     * @param int $paymentType
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param \Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData
     */
    public function __construct(array $midocoDirectDebitPosition, ?int $paymentType = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null, ?\Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData = null)
    {
        $this
            ->setMidocoDirectDebitPosition($midocoDirectDebitPosition)
            ->setPaymentType($paymentType)
            ->setMidocoBankAccount($midocoBankAccount)
            ->setCcOnlinePaymentReferenceData($ccOnlinePaymentReferenceData);
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
     * This method is responsible for validating the value(s) passed to the setMidocoDirectDebitPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitPositionForArrayConstraintFromSetMidocoDirectDebitPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $onlineDirectDebitRequestMidocoDirectDebitPositionItem) {
            // validation for constraint: itemType
            if (!$onlineDirectDebitRequestMidocoDirectDebitPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition) {
                $invalidValues[] = is_object($onlineDirectDebitRequestMidocoDirectDebitPositionItem) ? get_class($onlineDirectDebitRequestMidocoDirectDebitPositionItem) : sprintf('%s(%s)', gettype($onlineDirectDebitRequestMidocoDirectDebitPositionItem), var_export($onlineDirectDebitRequestMidocoDirectDebitPositionItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\OnlineDirectDebitRequest
     */
    public function setMidocoDirectDebitPosition(array $midocoDirectDebitPosition): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitPositionArrayErrorMessage = self::validateMidocoDirectDebitPositionForArrayConstraintFromSetMidocoDirectDebitPosition($midocoDirectDebitPosition))) {
            throw new InvalidArgumentException($midocoDirectDebitPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitPosition = $midocoDirectDebitPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\OnlineDirectDebitRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\OnlineDirectDebitRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\OnlineDirectDebitRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Get CcOnlinePaymentReferenceData value
     * @return \Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData|null
     */
    public function getCcOnlinePaymentReferenceData(): ?\Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData
    {
        return $this->CcOnlinePaymentReferenceData;
    }
    /**
     * Set CcOnlinePaymentReferenceData value
     * @param \Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData
     * @return \Pggns\MidocoApi\Bank\StructType\OnlineDirectDebitRequest
     */
    public function setCcOnlinePaymentReferenceData(?\Pggns\MidocoApi\Bank\StructType\CcOnlinePaymentReferenceData $ccOnlinePaymentReferenceData = null): self
    {
        $this->CcOnlinePaymentReferenceData = $ccOnlinePaymentReferenceData;
        
        return $this;
    }
}
