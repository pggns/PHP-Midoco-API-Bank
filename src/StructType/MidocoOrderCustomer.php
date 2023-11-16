<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderCustomer StructType
 * @subpackage Structs
 */
class MidocoOrderCustomer extends OrderCustomerDTO
{
    /**
     * The MidocoCommunication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCommunication
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCommunication[]
     */
    protected array $MidocoCommunication = [];
    /**
     * The MidocoConsentCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoConsentCustomer
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType $MidocoConsentCustomer = null;
    /**
     * The overrideExistingOrderCustomer
     * @var bool|null
     */
    protected ?bool $overrideExistingOrderCustomer = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * Constructor method for MidocoOrderCustomer
     * @uses MidocoOrderCustomer::setMidocoCommunication()
     * @uses MidocoOrderCustomer::setMidocoConsentCustomer()
     * @uses MidocoOrderCustomer::setOverrideExistingOrderCustomer()
     * @uses MidocoOrderCustomer::setLanguage()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCommunication[] $midocoCommunication
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType $midocoConsentCustomer
     * @param bool $overrideExistingOrderCustomer
     * @param string $language
     */
    public function __construct(array $midocoCommunication = [], ?\Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType $midocoConsentCustomer = null, ?bool $overrideExistingOrderCustomer = null, ?string $language = null)
    {
        $this
            ->setMidocoCommunication($midocoCommunication)
            ->setMidocoConsentCustomer($midocoConsentCustomer)
            ->setOverrideExistingOrderCustomer($overrideExistingOrderCustomer)
            ->setLanguage($language);
    }
    /**
     * Get MidocoCommunication value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCommunication[]
     */
    public function getMidocoCommunication(): array
    {
        return $this->MidocoCommunication;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCommunication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCommunication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCommunicationForArrayConstraintsFromSetMidocoCommunication(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderCustomerMidocoCommunicationItem) {
            // validation for constraint: itemType
            if (!$midocoOrderCustomerMidocoCommunicationItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCommunication) {
                $invalidValues[] = is_object($midocoOrderCustomerMidocoCommunicationItem) ? get_class($midocoOrderCustomerMidocoCommunicationItem) : sprintf('%s(%s)', gettype($midocoOrderCustomerMidocoCommunicationItem), var_export($midocoOrderCustomerMidocoCommunicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCommunication property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCommunication, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCommunication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCommunication[] $midocoCommunication
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderCustomer
     */
    public function setMidocoCommunication(array $midocoCommunication = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCommunicationArrayErrorMessage = self::validateMidocoCommunicationForArrayConstraintsFromSetMidocoCommunication($midocoCommunication))) {
            throw new InvalidArgumentException($midocoCommunicationArrayErrorMessage, __LINE__);
        }
        $this->MidocoCommunication = $midocoCommunication;
        
        return $this;
    }
    /**
     * Add item to MidocoCommunication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCommunication $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderCustomer
     */
    public function addToMidocoCommunication(\Pggns\MidocoApi\Bank\StructType\MidocoCommunication $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCommunication) {
            throw new InvalidArgumentException(sprintf('The MidocoCommunication property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCommunication, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCommunication[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoConsentCustomer value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType|null
     */
    public function getMidocoConsentCustomer(): ?\Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType
    {
        return $this->MidocoConsentCustomer;
    }
    /**
     * Set MidocoConsentCustomer value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType $midocoConsentCustomer
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderCustomer
     */
    public function setMidocoConsentCustomer(?\Pggns\MidocoApi\Bank\StructType\MidocoConsentCommunicationType $midocoConsentCustomer = null): self
    {
        $this->MidocoConsentCustomer = $midocoConsentCustomer;
        
        return $this;
    }
    /**
     * Get overrideExistingOrderCustomer value
     * @return bool|null
     */
    public function getOverrideExistingOrderCustomer(): ?bool
    {
        return $this->overrideExistingOrderCustomer;
    }
    /**
     * Set overrideExistingOrderCustomer value
     * @param bool $overrideExistingOrderCustomer
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderCustomer
     */
    public function setOverrideExistingOrderCustomer(?bool $overrideExistingOrderCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideExistingOrderCustomer) && !is_bool($overrideExistingOrderCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideExistingOrderCustomer, true), gettype($overrideExistingOrderCustomer)), __LINE__);
        }
        $this->overrideExistingOrderCustomer = $overrideExistingOrderCustomer;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOrderCustomer
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
}
