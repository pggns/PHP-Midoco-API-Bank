<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDtazvFileRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDtazvFileRequest extends AbstractStructBase
{
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * The MidocoDtazvDirectDebitPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoDtazvDirectDebitPosition
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[]
     */
    protected ?array $MidocoDtazvDirectDebitPosition = null;
    /**
     * Constructor method for CreateDtazvFileRequest
     * @uses CreateDtazvFileRequest::setExchangeRate()
     * @uses CreateDtazvFileRequest::setCurrency()
     * @uses CreateDtazvFileRequest::setMidocoBankAccount()
     * @uses CreateDtazvFileRequest::setMidocoDtazvDirectDebitPosition()
     * @param float $exchangeRate
     * @param string $currency
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[] $midocoDtazvDirectDebitPosition
     */
    public function __construct(?float $exchangeRate = null, ?string $currency = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null, ?array $midocoDtazvDirectDebitPosition = null)
    {
        $this
            ->setExchangeRate($exchangeRate)
            ->setCurrency($currency)
            ->setMidocoBankAccount($midocoBankAccount)
            ->setMidocoDtazvDirectDebitPosition($midocoDtazvDirectDebitPosition);
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Get MidocoDtazvDirectDebitPosition value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[]
     */
    public function getMidocoDtazvDirectDebitPosition(): ?array
    {
        return $this->MidocoDtazvDirectDebitPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDtazvDirectDebitPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDtazvDirectDebitPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDtazvDirectDebitPositionForArrayConstraintFromSetMidocoDtazvDirectDebitPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createDtazvFileRequestMidocoDtazvDirectDebitPositionItem) {
            // validation for constraint: itemType
            if (!$createDtazvFileRequestMidocoDtazvDirectDebitPositionItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition) {
                $invalidValues[] = is_object($createDtazvFileRequestMidocoDtazvDirectDebitPositionItem) ? get_class($createDtazvFileRequestMidocoDtazvDirectDebitPositionItem) : sprintf('%s(%s)', gettype($createDtazvFileRequestMidocoDtazvDirectDebitPositionItem), var_export($createDtazvFileRequestMidocoDtazvDirectDebitPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDtazvDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDtazvDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition[] $midocoDtazvDirectDebitPosition
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest
     */
    public function setMidocoDtazvDirectDebitPosition(?array $midocoDtazvDirectDebitPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDtazvDirectDebitPositionArrayErrorMessage = self::validateMidocoDtazvDirectDebitPositionForArrayConstraintFromSetMidocoDtazvDirectDebitPosition($midocoDtazvDirectDebitPosition))) {
            throw new InvalidArgumentException($midocoDtazvDirectDebitPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDtazvDirectDebitPosition = $midocoDtazvDirectDebitPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoDtazvDirectDebitPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $item
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest
     */
    public function addToMidocoDtazvDirectDebitPosition(\Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoDtazvDirectDebitPosition property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDtazvDirectDebitPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDtazvDirectDebitPosition[] = $item;
        
        return $this;
    }
}
