<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customer StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer information, describing the person or company who is to be registered as paying or getting the paperwork for the booked travel (2 entries possible)
 * @subpackage Structs
 */
class Customer extends AbstractStructBase
{
    /**
     * The midoco_customer_id
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing customer record in the midoco CRM, the id should be set here to enable automatic assignment.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $midoco_customer_id = null;
    /**
     * The midoco_debitor
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing debitor record in the midoco CRM, the debitor can be set here to identify the customer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $midoco_debitor = null;
    /**
     * The force_debitor_infos
     * Meta information extracted from the WSDL
     * - documentation: use customer information (address...) from direct midoco debitor record in the midoco CRM
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $force_debitor_infos = null;
    /**
     * The use_mail_address_from_message
     * Meta information extracted from the WSDL
     * - documentation: use mail address information from message instead of direct midoco debitor mail address
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $use_mail_address_from_message = null;
    /**
     * The reference_customer_id
     * Meta information extracted from the WSDL
     * - documentation: This field should contain an external customer id (from an external customer database).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_customer_id = null;
    /**
     * The reference_system
     * Meta information extracted from the WSDL
     * - documentation: In this field the external system for the external customer id is named by an known ID)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_system = null;
    /**
     * The reference_url
     * Meta information extracted from the WSDL
     * - documentation: This field can contain an URL descriptor to be executed in order to show the external customer in the external system
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_url = null;
    /**
     * The private_data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Private_data|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\Private_data $private_data = null;
    /**
     * The company_data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Company_data|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\Company_data $company_data = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The street_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $street_no = null;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - documentation: State name in case of countries which are divided in states
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country of the customer
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The postal_code
     * Meta information extracted from the WSDL
     * - documentation: Postal code of the street address
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $postal_code = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - documentation: City name
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The endorsement
     * Meta information extracted from the WSDL
     * - documentation: Any additional data (like part of the city, special House name etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The communication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Communication[]
     */
    protected array $communication = [];
    /**
     * The customer_has_business_contract
     * Meta information extracted from the WSDL
     * - documentation: customer has business contract
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $customer_has_business_contract = null;
    /**
     * The Consent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Consent
     * @var \Pggns\MidocoApi\Bank\StructType\ConsentType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ConsentType $Consent = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - default: INVOICE
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The override_existing_order_customer
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $override_existing_order_customer = null;
    /**
     * Constructor method for customer
     * @uses Customer::setMidoco_customer_id()
     * @uses Customer::setMidoco_debitor()
     * @uses Customer::setForce_debitor_infos()
     * @uses Customer::setUse_mail_address_from_message()
     * @uses Customer::setReference_customer_id()
     * @uses Customer::setReference_system()
     * @uses Customer::setReference_url()
     * @uses Customer::setPrivate_data()
     * @uses Customer::setCompany_data()
     * @uses Customer::setLanguage()
     * @uses Customer::setStreet()
     * @uses Customer::setStreet_no()
     * @uses Customer::setState()
     * @uses Customer::setCountry()
     * @uses Customer::setPostal_code()
     * @uses Customer::setCity()
     * @uses Customer::setEndorsement()
     * @uses Customer::setCommunication()
     * @uses Customer::setCustomer_has_business_contract()
     * @uses Customer::setConsent()
     * @uses Customer::setType()
     * @uses Customer::setOverride_existing_order_customer()
     * @param int $midoco_customer_id
     * @param string $midoco_debitor
     * @param bool $force_debitor_infos
     * @param bool $use_mail_address_from_message
     * @param string $reference_customer_id
     * @param string $reference_system
     * @param string $reference_url
     * @param \Pggns\MidocoApi\Bank\StructType\Private_data $private_data
     * @param \Pggns\MidocoApi\Bank\StructType\Company_data $company_data
     * @param string $language
     * @param string $street
     * @param string $street_no
     * @param string $state
     * @param string $country
     * @param string $postal_code
     * @param string $city
     * @param string $endorsement
     * @param \Pggns\MidocoApi\Bank\StructType\Communication[] $communication
     * @param bool $customer_has_business_contract
     * @param \Pggns\MidocoApi\Bank\StructType\ConsentType $consent
     * @param string $type
     * @param bool $override_existing_order_customer
     */
    public function __construct(?int $midoco_customer_id = null, ?string $midoco_debitor = null, ?bool $force_debitor_infos = false, ?bool $use_mail_address_from_message = true, ?string $reference_customer_id = null, ?string $reference_system = null, ?string $reference_url = null, ?\Pggns\MidocoApi\Bank\StructType\Private_data $private_data = null, ?\Pggns\MidocoApi\Bank\StructType\Company_data $company_data = null, ?string $language = null, ?string $street = null, ?string $street_no = null, ?string $state = null, ?string $country = null, ?string $postal_code = null, ?string $city = null, ?string $endorsement = null, array $communication = [], ?bool $customer_has_business_contract = null, ?\Pggns\MidocoApi\Bank\StructType\ConsentType $consent = null, ?string $type = 'INVOICE', ?bool $override_existing_order_customer = false)
    {
        $this
            ->setMidoco_customer_id($midoco_customer_id)
            ->setMidoco_debitor($midoco_debitor)
            ->setForce_debitor_infos($force_debitor_infos)
            ->setUse_mail_address_from_message($use_mail_address_from_message)
            ->setReference_customer_id($reference_customer_id)
            ->setReference_system($reference_system)
            ->setReference_url($reference_url)
            ->setPrivate_data($private_data)
            ->setCompany_data($company_data)
            ->setLanguage($language)
            ->setStreet($street)
            ->setStreet_no($street_no)
            ->setState($state)
            ->setCountry($country)
            ->setPostal_code($postal_code)
            ->setCity($city)
            ->setEndorsement($endorsement)
            ->setCommunication($communication)
            ->setCustomer_has_business_contract($customer_has_business_contract)
            ->setConsent($consent)
            ->setType($type)
            ->setOverride_existing_order_customer($override_existing_order_customer);
    }
    /**
     * Get midoco_customer_id value
     * @return int|null
     */
    public function getMidoco_customer_id(): ?int
    {
        return $this->{'midoco-customer-id'};
    }
    /**
     * Set midoco_customer_id value
     * @param int $midoco_customer_id
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setMidoco_customer_id(?int $midoco_customer_id = null): self
    {
        // validation for constraint: int
        if (!is_null($midoco_customer_id) && !(is_int($midoco_customer_id) || ctype_digit($midoco_customer_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midoco_customer_id, true), gettype($midoco_customer_id)), __LINE__);
        }
        $this->midoco_customer_id = $this->{'midoco-customer-id'} = $midoco_customer_id;
        
        return $this;
    }
    /**
     * Get midoco_debitor value
     * @return string|null
     */
    public function getMidoco_debitor(): ?string
    {
        return $this->{'midoco-debitor'};
    }
    /**
     * Set midoco_debitor value
     * @param string $midoco_debitor
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setMidoco_debitor(?string $midoco_debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($midoco_debitor) && !is_string($midoco_debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midoco_debitor, true), gettype($midoco_debitor)), __LINE__);
        }
        $this->midoco_debitor = $this->{'midoco-debitor'} = $midoco_debitor;
        
        return $this;
    }
    /**
     * Get force_debitor_infos value
     * @return bool|null
     */
    public function getForce_debitor_infos(): ?bool
    {
        return $this->{'force-debitor-infos'};
    }
    /**
     * Set force_debitor_infos value
     * @param bool $force_debitor_infos
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setForce_debitor_infos(?bool $force_debitor_infos = false): self
    {
        // validation for constraint: boolean
        if (!is_null($force_debitor_infos) && !is_bool($force_debitor_infos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($force_debitor_infos, true), gettype($force_debitor_infos)), __LINE__);
        }
        $this->force_debitor_infos = $this->{'force-debitor-infos'} = $force_debitor_infos;
        
        return $this;
    }
    /**
     * Get use_mail_address_from_message value
     * @return bool|null
     */
    public function getUse_mail_address_from_message(): ?bool
    {
        return $this->{'use-mail-address-from-message'};
    }
    /**
     * Set use_mail_address_from_message value
     * @param bool $use_mail_address_from_message
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setUse_mail_address_from_message(?bool $use_mail_address_from_message = true): self
    {
        // validation for constraint: boolean
        if (!is_null($use_mail_address_from_message) && !is_bool($use_mail_address_from_message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_mail_address_from_message, true), gettype($use_mail_address_from_message)), __LINE__);
        }
        $this->use_mail_address_from_message = $this->{'use-mail-address-from-message'} = $use_mail_address_from_message;
        
        return $this;
    }
    /**
     * Get reference_customer_id value
     * @return string|null
     */
    public function getReference_customer_id(): ?string
    {
        return $this->{'reference-customer-id'};
    }
    /**
     * Set reference_customer_id value
     * @param string $reference_customer_id
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setReference_customer_id(?string $reference_customer_id = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_customer_id) && !is_string($reference_customer_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_customer_id, true), gettype($reference_customer_id)), __LINE__);
        }
        $this->reference_customer_id = $this->{'reference-customer-id'} = $reference_customer_id;
        
        return $this;
    }
    /**
     * Get reference_system value
     * @return string|null
     */
    public function getReference_system(): ?string
    {
        return $this->{'reference-system'};
    }
    /**
     * Set reference_system value
     * @param string $reference_system
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setReference_system(?string $reference_system = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_system) && !is_string($reference_system)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_system, true), gettype($reference_system)), __LINE__);
        }
        $this->reference_system = $this->{'reference-system'} = $reference_system;
        
        return $this;
    }
    /**
     * Get reference_url value
     * @return string|null
     */
    public function getReference_url(): ?string
    {
        return $this->{'reference-url'};
    }
    /**
     * Set reference_url value
     * @param string $reference_url
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setReference_url(?string $reference_url = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_url) && !is_string($reference_url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_url, true), gettype($reference_url)), __LINE__);
        }
        $this->reference_url = $this->{'reference-url'} = $reference_url;
        
        return $this;
    }
    /**
     * Get private_data value
     * @return \Pggns\MidocoApi\Bank\StructType\Private_data|null
     */
    public function getPrivate_data(): ?\Pggns\MidocoApi\Bank\StructType\Private_data
    {
        return $this->{'private-data'};
    }
    /**
     * Set private_data value
     * @param \Pggns\MidocoApi\Bank\StructType\Private_data $private_data
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setPrivate_data(?\Pggns\MidocoApi\Bank\StructType\Private_data $private_data = null): self
    {
        $this->private_data = $this->{'private-data'} = $private_data;
        
        return $this;
    }
    /**
     * Get company_data value
     * @return \Pggns\MidocoApi\Bank\StructType\Company_data|null
     */
    public function getCompany_data(): ?\Pggns\MidocoApi\Bank\StructType\Company_data
    {
        return $this->{'company-data'};
    }
    /**
     * Set company_data value
     * @param \Pggns\MidocoApi\Bank\StructType\Company_data $company_data
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setCompany_data(?\Pggns\MidocoApi\Bank\StructType\Company_data $company_data = null): self
    {
        $this->company_data = $this->{'company-data'} = $company_data;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
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
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get street_no value
     * @return string|null
     */
    public function getStreet_no(): ?string
    {
        return $this->{'street-no'};
    }
    /**
     * Set street_no value
     * @param string $street_no
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setStreet_no(?string $street_no = null): self
    {
        // validation for constraint: string
        if (!is_null($street_no) && !is_string($street_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street_no, true), gettype($street_no)), __LINE__);
        }
        $this->street_no = $this->{'street-no'} = $street_no;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get postal_code value
     * @return string|null
     */
    public function getPostal_code(): ?string
    {
        return $this->{'postal-code'};
    }
    /**
     * Set postal_code value
     * @param string $postal_code
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setPostal_code(?string $postal_code = null): self
    {
        // validation for constraint: string
        if (!is_null($postal_code) && !is_string($postal_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postal_code, true), gettype($postal_code)), __LINE__);
        }
        $this->postal_code = $this->{'postal-code'} = $postal_code;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get communication value
     * @return \Pggns\MidocoApi\Bank\StructType\Communication[]
     */
    public function getCommunication(): array
    {
        return $this->communication;
    }
    /**
     * This method is responsible for validating the values passed to the setCommunication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommunication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommunicationForArrayConstraintsFromSetCommunication(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCommunicationItem) {
            // validation for constraint: itemType
            if (!$customerCommunicationItem instanceof \Pggns\MidocoApi\Bank\StructType\Communication) {
                $invalidValues[] = is_object($customerCommunicationItem) ? get_class($customerCommunicationItem) : sprintf('%s(%s)', gettype($customerCommunicationItem), var_export($customerCommunicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The communication property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Communication, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Communication[] $communication
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setCommunication(array $communication = []): self
    {
        // validation for constraint: array
        if ('' !== ($communicationArrayErrorMessage = self::validateCommunicationForArrayConstraintsFromSetCommunication($communication))) {
            throw new InvalidArgumentException($communicationArrayErrorMessage, __LINE__);
        }
        $this->communication = $communication;
        
        return $this;
    }
    /**
     * Add item to communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Communication $item
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function addToCommunication(\Pggns\MidocoApi\Bank\StructType\Communication $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Communication) {
            throw new InvalidArgumentException(sprintf('The communication property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Communication, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->communication[] = $item;
        
        return $this;
    }
    /**
     * Get customer_has_business_contract value
     * @return bool|null
     */
    public function getCustomer_has_business_contract(): ?bool
    {
        return $this->{'customer-has-business-contract'};
    }
    /**
     * Set customer_has_business_contract value
     * @param bool $customer_has_business_contract
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setCustomer_has_business_contract(?bool $customer_has_business_contract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customer_has_business_contract) && !is_bool($customer_has_business_contract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customer_has_business_contract, true), gettype($customer_has_business_contract)), __LINE__);
        }
        $this->customer_has_business_contract = $this->{'customer-has-business-contract'} = $customer_has_business_contract;
        
        return $this;
    }
    /**
     * Get Consent value
     * @return \Pggns\MidocoApi\Bank\StructType\ConsentType|null
     */
    public function getConsent(): ?\Pggns\MidocoApi\Bank\StructType\ConsentType
    {
        return $this->Consent;
    }
    /**
     * Set Consent value
     * @param \Pggns\MidocoApi\Bank\StructType\ConsentType $consent
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setConsent(?\Pggns\MidocoApi\Bank\StructType\ConsentType $consent = null): self
    {
        $this->Consent = $consent;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setType(?string $type = 'INVOICE'): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get override_existing_order_customer value
     * @return bool|null
     */
    public function getOverride_existing_order_customer(): ?bool
    {
        return $this->{'override-existing-order-customer'};
    }
    /**
     * Set override_existing_order_customer value
     * @param bool $override_existing_order_customer
     * @return \Pggns\MidocoApi\Bank\StructType\Customer
     */
    public function setOverride_existing_order_customer(?bool $override_existing_order_customer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($override_existing_order_customer) && !is_bool($override_existing_order_customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($override_existing_order_customer, true), gettype($override_existing_order_customer)), __LINE__);
        }
        $this->override_existing_order_customer = $this->{'override-existing-order-customer'} = $override_existing_order_customer;
        
        return $this;
    }
}
