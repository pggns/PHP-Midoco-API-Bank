<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticket StructType
 * Meta information extracted from the WSDL
 * - documentation: Document information (mostly tickets for scheduled flights, for BSP settlement)
 * @subpackage Structs
 */
class Ticket extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The crs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $crs = null;
    /**
     * The ticket_type
     * @var string|null
     */
    protected ?string $ticket_type = null;
    /**
     * The ticket_subtype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticket_subtype = null;
    /**
     * The ticket_subgroup_emd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticket_subgroup_emd = null;
    /**
     * The ticket_doc_subtype_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticket_doc_subtype_description = null;
    /**
     * The ticket_no
     * @var string|null
     */
    protected ?string $ticket_no = null;
    /**
     * The ticket_no_conj
     * Meta information extracted from the WSDL
     * - documentation: in case of a conjunction ticket, the last ticket-no printed
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticket_no_conj = null;
    /**
     * The bsp_validator
     * @var string|null
     */
    protected ?string $bsp_validator = null;
    /**
     * The check_digit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $check_digit = null;
    /**
     * The ticket_media
     * @var string|null
     */
    protected ?string $ticket_media = null;
    /**
     * The payment_type
     * @var string|null
     */
    protected ?string $payment_type = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The base_fare
     * @var float|null
     */
    protected ?float $base_fare = null;
    /**
     * The fare_type
     * @var string|null
     */
    protected ?string $fare_type = null;
    /**
     * The tax_information
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Tax_information[]
     */
    protected array $tax_information = [];
    /**
     * The total_tax
     * Meta information extracted from the WSDL
     * - documentation: The sum of all taxes
     * @var float|null
     */
    protected ?float $total_tax = null;
    /**
     * The commission_percent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_percent = null;
    /**
     * The commission_amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_amount = null;
    /**
     * The commission_vat_amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_vat_amount = null;
    /**
     * The wholesale_price
     * Meta information extracted from the WSDL
     * - documentation: total price minus commission - commission-vat-amount
     * @var float|null
     */
    protected ?float $wholesale_price = null;
    /**
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The ticket_designator
     * Meta information extracted from the WSDL
     * - documentation: The bsp-airline code which is executing the ticket (carrier)
     * @var string|null
     */
    protected ?string $ticket_designator = null;
    /**
     * The segment_assignment
     * Meta information extracted from the WSDL
     * - documentation: The segments which are travelled with this ticket (e.g. 1-4 or 1-2,5-6)
     * @var string|null
     */
    protected ?string $segment_assignment = null;
    /**
     * The person_assignment
     * Meta information extracted from the WSDL
     * - documentation: The person (from the person section) who the ticket is printed for
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The it_information
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $it_information = null;
    /**
     * The ticketing_agent
     * Meta information extracted from the WSDL
     * - documentation: agent code in crs
     * @var string|null
     */
    protected ?string $ticketing_agent = null;
    /**
     * The ticketing_pcc
     * @var string|null
     */
    protected ?string $ticketing_pcc = null;
    /**
     * The bsp_agency
     * @var string|null
     */
    protected ?string $bsp_agency = null;
    /**
     * The travel_date
     * Meta information extracted from the WSDL
     * - documentation: date of travel
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $travel_date = null;
    /**
     * The issue_date
     * Meta information extracted from the WSDL
     * - documentation: date of ticket printing (when the ticket was printed)
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $issue_date = null;
    /**
     * The cc_information
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: cc-information
     * @var \Pggns\MidocoApi\Bank\StructType\Cc_information|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\Cc_information $cc_information = null;
    /**
     * The is_domestic
     * @var bool|null
     */
    protected ?bool $is_domestic = null;
    /**
     * The ticketing_city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketing_city = null;
    /**
     * The vat_content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vat_content = null;
    /**
     * The exchange_information
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $exchange_information = null;
    /**
     * The airline_fee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $airline_fee = null;
    /**
     * The cancellation_fee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $cancellation_fee = null;
    /**
     * The original_amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $original_amount = null;
    /**
     * The original_currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $original_currency = null;
    /**
     * The filekey
     * Meta information extracted from the WSDL
     * - documentation: Filekey used for issueing the ticket. It is used for matching the flight booking, it should be the same with the booking-id of the flight booking
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The saving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: saving
     * @var \Pggns\MidocoApi\Bank\StructType\Saving[]
     */
    protected array $saving = [];
    /**
     * The price_ref
     * Meta information extracted from the WSDL
     * - documentation: declaring a price-ref is used to provide a different price than total-price to the customer (customers price = total-price + margin) the price referenced is normally in section flight-price. This is mainly used to cover IT-Tickets
     * @var int|null
     */
    protected ?int $price_ref = null;
    /**
     * Constructor method for ticket
     * @uses Ticket::setPosition()
     * @uses Ticket::setCrs()
     * @uses Ticket::setTicket_type()
     * @uses Ticket::setTicket_subtype()
     * @uses Ticket::setTicket_subgroup_emd()
     * @uses Ticket::setTicket_doc_subtype_description()
     * @uses Ticket::setTicket_no()
     * @uses Ticket::setTicket_no_conj()
     * @uses Ticket::setBsp_validator()
     * @uses Ticket::setCheck_digit()
     * @uses Ticket::setTicket_media()
     * @uses Ticket::setPayment_type()
     * @uses Ticket::setExtPaymentType()
     * @uses Ticket::setBase_fare()
     * @uses Ticket::setFare_type()
     * @uses Ticket::setTax_information()
     * @uses Ticket::setTotal_tax()
     * @uses Ticket::setCommission_percent()
     * @uses Ticket::setCommission_amount()
     * @uses Ticket::setCommission_vat_amount()
     * @uses Ticket::setWholesale_price()
     * @uses Ticket::setTotal_price()
     * @uses Ticket::setCurrency()
     * @uses Ticket::setTicket_designator()
     * @uses Ticket::setSegment_assignment()
     * @uses Ticket::setPerson_assignment()
     * @uses Ticket::setIt_information()
     * @uses Ticket::setTicketing_agent()
     * @uses Ticket::setTicketing_pcc()
     * @uses Ticket::setBsp_agency()
     * @uses Ticket::setTravel_date()
     * @uses Ticket::setIssue_date()
     * @uses Ticket::setCc_information()
     * @uses Ticket::setIs_domestic()
     * @uses Ticket::setTicketing_city()
     * @uses Ticket::setVat_content()
     * @uses Ticket::setExchange_information()
     * @uses Ticket::setAirline_fee()
     * @uses Ticket::setCancellation_fee()
     * @uses Ticket::setOriginal_amount()
     * @uses Ticket::setOriginal_currency()
     * @uses Ticket::setFilekey()
     * @uses Ticket::setSaving()
     * @uses Ticket::setPrice_ref()
     * @param int $position
     * @param string $crs
     * @param string $ticket_type
     * @param string $ticket_subtype
     * @param string $ticket_subgroup_emd
     * @param string $ticket_doc_subtype_description
     * @param string $ticket_no
     * @param string $ticket_no_conj
     * @param string $bsp_validator
     * @param string $check_digit
     * @param string $ticket_media
     * @param string $payment_type
     * @param string $extPaymentType
     * @param float $base_fare
     * @param string $fare_type
     * @param \Pggns\MidocoApi\Bank\StructType\Tax_information[] $tax_information
     * @param float $total_tax
     * @param float $commission_percent
     * @param float $commission_amount
     * @param float $commission_vat_amount
     * @param float $wholesale_price
     * @param float $total_price
     * @param string $currency
     * @param string $ticket_designator
     * @param string $segment_assignment
     * @param string $person_assignment
     * @param string $it_information
     * @param string $ticketing_agent
     * @param string $ticketing_pcc
     * @param string $bsp_agency
     * @param string $travel_date
     * @param string $issue_date
     * @param \Pggns\MidocoApi\Bank\StructType\Cc_information $cc_information
     * @param bool $is_domestic
     * @param string $ticketing_city
     * @param string $vat_content
     * @param string $exchange_information
     * @param float $airline_fee
     * @param float $cancellation_fee
     * @param float $original_amount
     * @param string $original_currency
     * @param string $filekey
     * @param \Pggns\MidocoApi\Bank\StructType\Saving[] $saving
     * @param int $price_ref
     */
    public function __construct(int $position, ?string $crs = null, ?string $ticket_type = null, ?string $ticket_subtype = null, ?string $ticket_subgroup_emd = null, ?string $ticket_doc_subtype_description = null, ?string $ticket_no = null, ?string $ticket_no_conj = null, ?string $bsp_validator = null, ?string $check_digit = null, ?string $ticket_media = null, ?string $payment_type = null, ?string $extPaymentType = null, ?float $base_fare = null, ?string $fare_type = null, array $tax_information = [], ?float $total_tax = null, ?float $commission_percent = null, ?float $commission_amount = null, ?float $commission_vat_amount = null, ?float $wholesale_price = null, ?float $total_price = null, ?string $currency = null, ?string $ticket_designator = null, ?string $segment_assignment = null, ?string $person_assignment = null, ?string $it_information = null, ?string $ticketing_agent = null, ?string $ticketing_pcc = null, ?string $bsp_agency = null, ?string $travel_date = null, ?string $issue_date = null, ?\Pggns\MidocoApi\Bank\StructType\Cc_information $cc_information = null, ?bool $is_domestic = null, ?string $ticketing_city = null, ?string $vat_content = null, ?string $exchange_information = null, ?float $airline_fee = null, ?float $cancellation_fee = null, ?float $original_amount = null, ?string $original_currency = null, ?string $filekey = null, array $saving = [], ?int $price_ref = null)
    {
        $this
            ->setPosition($position)
            ->setCrs($crs)
            ->setTicket_type($ticket_type)
            ->setTicket_subtype($ticket_subtype)
            ->setTicket_subgroup_emd($ticket_subgroup_emd)
            ->setTicket_doc_subtype_description($ticket_doc_subtype_description)
            ->setTicket_no($ticket_no)
            ->setTicket_no_conj($ticket_no_conj)
            ->setBsp_validator($bsp_validator)
            ->setCheck_digit($check_digit)
            ->setTicket_media($ticket_media)
            ->setPayment_type($payment_type)
            ->setExtPaymentType($extPaymentType)
            ->setBase_fare($base_fare)
            ->setFare_type($fare_type)
            ->setTax_information($tax_information)
            ->setTotal_tax($total_tax)
            ->setCommission_percent($commission_percent)
            ->setCommission_amount($commission_amount)
            ->setCommission_vat_amount($commission_vat_amount)
            ->setWholesale_price($wholesale_price)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setTicket_designator($ticket_designator)
            ->setSegment_assignment($segment_assignment)
            ->setPerson_assignment($person_assignment)
            ->setIt_information($it_information)
            ->setTicketing_agent($ticketing_agent)
            ->setTicketing_pcc($ticketing_pcc)
            ->setBsp_agency($bsp_agency)
            ->setTravel_date($travel_date)
            ->setIssue_date($issue_date)
            ->setCc_information($cc_information)
            ->setIs_domestic($is_domestic)
            ->setTicketing_city($ticketing_city)
            ->setVat_content($vat_content)
            ->setExchange_information($exchange_information)
            ->setAirline_fee($airline_fee)
            ->setCancellation_fee($cancellation_fee)
            ->setOriginal_amount($original_amount)
            ->setOriginal_currency($original_currency)
            ->setFilekey($filekey)
            ->setSaving($saving)
            ->setPrice_ref($price_ref);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get crs value
     * @return string|null
     */
    public function getCrs(): ?string
    {
        return $this->crs;
    }
    /**
     * Set crs value
     * @param string $crs
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCrs(?string $crs = null): self
    {
        // validation for constraint: string
        if (!is_null($crs) && !is_string($crs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs, true), gettype($crs)), __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
    /**
     * Get ticket_type value
     * @return string|null
     */
    public function getTicket_type(): ?string
    {
        return $this->{'ticket-type'};
    }
    /**
     * Set ticket_type value
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticket_type
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_type(?string $ticket_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\Ticket_type::valueIsValid($ticket_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\Ticket_type', is_array($ticket_type) ? implode(', ', $ticket_type) : var_export($ticket_type, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\Ticket_type::getValidValues())), __LINE__);
        }
        $this->ticket_type = $this->{'ticket-type'} = $ticket_type;
        
        return $this;
    }
    /**
     * Get ticket_subtype value
     * @return string|null
     */
    public function getTicket_subtype(): ?string
    {
        return $this->{'ticket-subtype'};
    }
    /**
     * Set ticket_subtype value
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_subtype::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_subtype::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticket_subtype
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_subtype(?string $ticket_subtype = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\Ticket_subtype::valueIsValid($ticket_subtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\Ticket_subtype', is_array($ticket_subtype) ? implode(', ', $ticket_subtype) : var_export($ticket_subtype, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\Ticket_subtype::getValidValues())), __LINE__);
        }
        $this->ticket_subtype = $this->{'ticket-subtype'} = $ticket_subtype;
        
        return $this;
    }
    /**
     * Get ticket_subgroup_emd value
     * @return string|null
     */
    public function getTicket_subgroup_emd(): ?string
    {
        return $this->{'ticket-subgroup-emd'};
    }
    /**
     * Set ticket_subgroup_emd value
     * @param string $ticket_subgroup_emd
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_subgroup_emd(?string $ticket_subgroup_emd = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_subgroup_emd) && !is_string($ticket_subgroup_emd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_subgroup_emd, true), gettype($ticket_subgroup_emd)), __LINE__);
        }
        $this->ticket_subgroup_emd = $this->{'ticket-subgroup-emd'} = $ticket_subgroup_emd;
        
        return $this;
    }
    /**
     * Get ticket_doc_subtype_description value
     * @return string|null
     */
    public function getTicket_doc_subtype_description(): ?string
    {
        return $this->{'ticket-doc-subtype-description'};
    }
    /**
     * Set ticket_doc_subtype_description value
     * @param string $ticket_doc_subtype_description
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_doc_subtype_description(?string $ticket_doc_subtype_description = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_doc_subtype_description) && !is_string($ticket_doc_subtype_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_doc_subtype_description, true), gettype($ticket_doc_subtype_description)), __LINE__);
        }
        $this->ticket_doc_subtype_description = $this->{'ticket-doc-subtype-description'} = $ticket_doc_subtype_description;
        
        return $this;
    }
    /**
     * Get ticket_no value
     * @return string|null
     */
    public function getTicket_no(): ?string
    {
        return $this->{'ticket-no'};
    }
    /**
     * Set ticket_no value
     * @param string $ticket_no
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_no(?string $ticket_no = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_no) && !is_string($ticket_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_no, true), gettype($ticket_no)), __LINE__);
        }
        $this->ticket_no = $this->{'ticket-no'} = $ticket_no;
        
        return $this;
    }
    /**
     * Get ticket_no_conj value
     * @return string|null
     */
    public function getTicket_no_conj(): ?string
    {
        return $this->{'ticket-no-conj'};
    }
    /**
     * Set ticket_no_conj value
     * @param string $ticket_no_conj
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_no_conj(?string $ticket_no_conj = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_no_conj) && !is_string($ticket_no_conj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_no_conj, true), gettype($ticket_no_conj)), __LINE__);
        }
        $this->ticket_no_conj = $this->{'ticket-no-conj'} = $ticket_no_conj;
        
        return $this;
    }
    /**
     * Get bsp_validator value
     * @return string|null
     */
    public function getBsp_validator(): ?string
    {
        return $this->{'bsp-validator'};
    }
    /**
     * Set bsp_validator value
     * @param string $bsp_validator
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setBsp_validator(?string $bsp_validator = null): self
    {
        // validation for constraint: string
        if (!is_null($bsp_validator) && !is_string($bsp_validator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bsp_validator, true), gettype($bsp_validator)), __LINE__);
        }
        $this->bsp_validator = $this->{'bsp-validator'} = $bsp_validator;
        
        return $this;
    }
    /**
     * Get check_digit value
     * @return string|null
     */
    public function getCheck_digit(): ?string
    {
        return $this->{'check-digit'};
    }
    /**
     * Set check_digit value
     * @param string $check_digit
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCheck_digit(?string $check_digit = null): self
    {
        // validation for constraint: string
        if (!is_null($check_digit) && !is_string($check_digit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($check_digit, true), gettype($check_digit)), __LINE__);
        }
        $this->check_digit = $this->{'check-digit'} = $check_digit;
        
        return $this;
    }
    /**
     * Get ticket_media value
     * @return string|null
     */
    public function getTicket_media(): ?string
    {
        return $this->{'ticket-media'};
    }
    /**
     * Set ticket_media value
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_media::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\Ticket_media::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticket_media
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_media(?string $ticket_media = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\Ticket_media::valueIsValid($ticket_media)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\Ticket_media', is_array($ticket_media) ? implode(', ', $ticket_media) : var_export($ticket_media, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\Ticket_media::getValidValues())), __LINE__);
        }
        $this->ticket_media = $this->{'ticket-media'} = $ticket_media;
        
        return $this;
    }
    /**
     * Get payment_type value
     * @return string|null
     */
    public function getPayment_type(): ?string
    {
        return $this->{'payment-type'};
    }
    /**
     * Set payment_type value
     * @uses \Pggns\MidocoApi\Bank\EnumType\Payment_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\Payment_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payment_type
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setPayment_type(?string $payment_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\Payment_type::valueIsValid($payment_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\Payment_type', is_array($payment_type) ? implode(', ', $payment_type) : var_export($payment_type, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\Payment_type::getValidValues())), __LINE__);
        }
        $this->payment_type = $this->{'payment-type'} = $payment_type;
        
        return $this;
    }
    /**
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\ExtPaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\ExtPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\ExtPaymentType::valueIsValid($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\ExtPaymentType', is_array($extPaymentType) ? implode(', ', $extPaymentType) : var_export($extPaymentType, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\ExtPaymentType::getValidValues())), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get base_fare value
     * @return float|null
     */
    public function getBase_fare(): ?float
    {
        return $this->{'base-fare'};
    }
    /**
     * Set base_fare value
     * @param float $base_fare
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setBase_fare(?float $base_fare = null): self
    {
        // validation for constraint: float
        if (!is_null($base_fare) && !(is_float($base_fare) || is_numeric($base_fare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($base_fare, true), gettype($base_fare)), __LINE__);
        }
        $this->base_fare = $this->{'base-fare'} = $base_fare;
        
        return $this;
    }
    /**
     * Get fare_type value
     * @return string|null
     */
    public function getFare_type(): ?string
    {
        return $this->{'fare-type'};
    }
    /**
     * Set fare_type value
     * @uses \Pggns\MidocoApi\Bank\EnumType\Fare_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\Fare_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fare_type
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setFare_type(?string $fare_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\Fare_type::valueIsValid($fare_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\Fare_type', is_array($fare_type) ? implode(', ', $fare_type) : var_export($fare_type, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\Fare_type::getValidValues())), __LINE__);
        }
        $this->fare_type = $this->{'fare-type'} = $fare_type;
        
        return $this;
    }
    /**
     * Get tax_information value
     * @return \Pggns\MidocoApi\Bank\StructType\Tax_information[]
     */
    public function getTax_information(): array
    {
        return $this->{'tax-information'};
    }
    /**
     * This method is responsible for validating the values passed to the setTax_information method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTax_information method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTax_informationForArrayConstraintsFromSetTax_information(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketTax_informationItem) {
            // validation for constraint: itemType
            if (!$ticketTax_informationItem instanceof \Pggns\MidocoApi\Bank\StructType\Tax_information) {
                $invalidValues[] = is_object($ticketTax_informationItem) ? get_class($ticketTax_informationItem) : sprintf('%s(%s)', gettype($ticketTax_informationItem), var_export($ticketTax_informationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tax_information property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Tax_information, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tax_information value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Tax_information[] $tax_information
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTax_information(array $tax_information = []): self
    {
        // validation for constraint: array
        if ('' !== ($tax_informationArrayErrorMessage = self::validateTax_informationForArrayConstraintsFromSetTax_information($tax_information))) {
            throw new InvalidArgumentException($tax_informationArrayErrorMessage, __LINE__);
        }
        $this->tax_information = $this->{'tax-information'} = $tax_information;
        
        return $this;
    }
    /**
     * Add item to tax_information value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Tax_information $item
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function addToTax_information(\Pggns\MidocoApi\Bank\StructType\Tax_information $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Tax_information) {
            throw new InvalidArgumentException(sprintf('The tax_information property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Tax_information, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tax_information[] = $this->{'tax-information'}[] = $item;
        
        return $this;
    }
    /**
     * Get total_tax value
     * @return float|null
     */
    public function getTotal_tax(): ?float
    {
        return $this->{'total-tax'};
    }
    /**
     * Set total_tax value
     * @param float $total_tax
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTotal_tax(?float $total_tax = null): self
    {
        // validation for constraint: float
        if (!is_null($total_tax) && !(is_float($total_tax) || is_numeric($total_tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_tax, true), gettype($total_tax)), __LINE__);
        }
        $this->total_tax = $this->{'total-tax'} = $total_tax;
        
        return $this;
    }
    /**
     * Get commission_percent value
     * @return float|null
     */
    public function getCommission_percent(): ?float
    {
        return $this->{'commission-percent'};
    }
    /**
     * Set commission_percent value
     * @param float $commission_percent
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCommission_percent(?float $commission_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_percent) && !(is_float($commission_percent) || is_numeric($commission_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_percent, true), gettype($commission_percent)), __LINE__);
        }
        $this->commission_percent = $this->{'commission-percent'} = $commission_percent;
        
        return $this;
    }
    /**
     * Get commission_amount value
     * @return float|null
     */
    public function getCommission_amount(): ?float
    {
        return $this->{'commission-amount'};
    }
    /**
     * Set commission_amount value
     * @param float $commission_amount
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCommission_amount(?float $commission_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_amount) && !(is_float($commission_amount) || is_numeric($commission_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_amount, true), gettype($commission_amount)), __LINE__);
        }
        $this->commission_amount = $this->{'commission-amount'} = $commission_amount;
        
        return $this;
    }
    /**
     * Get commission_vat_amount value
     * @return float|null
     */
    public function getCommission_vat_amount(): ?float
    {
        return $this->{'commission-vat-amount'};
    }
    /**
     * Set commission_vat_amount value
     * @param float $commission_vat_amount
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCommission_vat_amount(?float $commission_vat_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_vat_amount) && !(is_float($commission_vat_amount) || is_numeric($commission_vat_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_vat_amount, true), gettype($commission_vat_amount)), __LINE__);
        }
        $this->commission_vat_amount = $this->{'commission-vat-amount'} = $commission_vat_amount;
        
        return $this;
    }
    /**
     * Get wholesale_price value
     * @return float|null
     */
    public function getWholesale_price(): ?float
    {
        return $this->{'wholesale-price'};
    }
    /**
     * Set wholesale_price value
     * @param float $wholesale_price
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setWholesale_price(?float $wholesale_price = null): self
    {
        // validation for constraint: float
        if (!is_null($wholesale_price) && !(is_float($wholesale_price) || is_numeric($wholesale_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wholesale_price, true), gettype($wholesale_price)), __LINE__);
        }
        $this->wholesale_price = $this->{'wholesale-price'} = $wholesale_price;
        
        return $this;
    }
    /**
     * Get total_price value
     * @return float|null
     */
    public function getTotal_price(): ?float
    {
        return $this->{'total-price'};
    }
    /**
     * Set total_price value
     * @param float $total_price
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTotal_price(?float $total_price = null): self
    {
        // validation for constraint: float
        if (!is_null($total_price) && !(is_float($total_price) || is_numeric($total_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_price, true), gettype($total_price)), __LINE__);
        }
        $this->total_price = $this->{'total-price'} = $total_price;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
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
     * Get ticket_designator value
     * @return string|null
     */
    public function getTicket_designator(): ?string
    {
        return $this->{'ticket-designator'};
    }
    /**
     * Set ticket_designator value
     * @param string $ticket_designator
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicket_designator(?string $ticket_designator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_designator) && !is_string($ticket_designator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_designator, true), gettype($ticket_designator)), __LINE__);
        }
        $this->ticket_designator = $this->{'ticket-designator'} = $ticket_designator;
        
        return $this;
    }
    /**
     * Get segment_assignment value
     * @return string|null
     */
    public function getSegment_assignment(): ?string
    {
        return $this->{'segment-assignment'};
    }
    /**
     * Set segment_assignment value
     * @param string $segment_assignment
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setSegment_assignment(?string $segment_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($segment_assignment) && !is_string($segment_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segment_assignment, true), gettype($segment_assignment)), __LINE__);
        }
        $this->segment_assignment = $this->{'segment-assignment'} = $segment_assignment;
        
        return $this;
    }
    /**
     * Get person_assignment value
     * @return string|null
     */
    public function getPerson_assignment(): ?string
    {
        return $this->{'person-assignment'};
    }
    /**
     * Set person_assignment value
     * @param string $person_assignment
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setPerson_assignment(?string $person_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($person_assignment) && !is_string($person_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($person_assignment, true), gettype($person_assignment)), __LINE__);
        }
        $this->person_assignment = $this->{'person-assignment'} = $person_assignment;
        
        return $this;
    }
    /**
     * Get it_information value
     * @return string|null
     */
    public function getIt_information(): ?string
    {
        return $this->{'it-information'};
    }
    /**
     * Set it_information value
     * @param string $it_information
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setIt_information(?string $it_information = null): self
    {
        // validation for constraint: string
        if (!is_null($it_information) && !is_string($it_information)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($it_information, true), gettype($it_information)), __LINE__);
        }
        $this->it_information = $this->{'it-information'} = $it_information;
        
        return $this;
    }
    /**
     * Get ticketing_agent value
     * @return string|null
     */
    public function getTicketing_agent(): ?string
    {
        return $this->{'ticketing-agent'};
    }
    /**
     * Set ticketing_agent value
     * @param string $ticketing_agent
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicketing_agent(?string $ticketing_agent = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketing_agent) && !is_string($ticketing_agent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketing_agent, true), gettype($ticketing_agent)), __LINE__);
        }
        $this->ticketing_agent = $this->{'ticketing-agent'} = $ticketing_agent;
        
        return $this;
    }
    /**
     * Get ticketing_pcc value
     * @return string|null
     */
    public function getTicketing_pcc(): ?string
    {
        return $this->{'ticketing-pcc'};
    }
    /**
     * Set ticketing_pcc value
     * @param string $ticketing_pcc
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicketing_pcc(?string $ticketing_pcc = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketing_pcc) && !is_string($ticketing_pcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketing_pcc, true), gettype($ticketing_pcc)), __LINE__);
        }
        $this->ticketing_pcc = $this->{'ticketing-pcc'} = $ticketing_pcc;
        
        return $this;
    }
    /**
     * Get bsp_agency value
     * @return string|null
     */
    public function getBsp_agency(): ?string
    {
        return $this->{'bsp-agency'};
    }
    /**
     * Set bsp_agency value
     * @param string $bsp_agency
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setBsp_agency(?string $bsp_agency = null): self
    {
        // validation for constraint: string
        if (!is_null($bsp_agency) && !is_string($bsp_agency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bsp_agency, true), gettype($bsp_agency)), __LINE__);
        }
        $this->bsp_agency = $this->{'bsp-agency'} = $bsp_agency;
        
        return $this;
    }
    /**
     * Get travel_date value
     * @return string|null
     */
    public function getTravel_date(): ?string
    {
        return $this->{'travel-date'};
    }
    /**
     * Set travel_date value
     * @param string $travel_date
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTravel_date(?string $travel_date = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_date) && !is_string($travel_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_date, true), gettype($travel_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($travel_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $travel_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($travel_date, true)), __LINE__);
        }
        $this->travel_date = $this->{'travel-date'} = $travel_date;
        
        return $this;
    }
    /**
     * Get issue_date value
     * @return string|null
     */
    public function getIssue_date(): ?string
    {
        return $this->{'issue-date'};
    }
    /**
     * Set issue_date value
     * @param string $issue_date
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setIssue_date(?string $issue_date = null): self
    {
        // validation for constraint: string
        if (!is_null($issue_date) && !is_string($issue_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issue_date, true), gettype($issue_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($issue_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $issue_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($issue_date, true)), __LINE__);
        }
        $this->issue_date = $this->{'issue-date'} = $issue_date;
        
        return $this;
    }
    /**
     * Get cc_information value
     * @return \Pggns\MidocoApi\Bank\StructType\Cc_information|null
     */
    public function getCc_information(): ?\Pggns\MidocoApi\Bank\StructType\Cc_information
    {
        return $this->{'cc-information'};
    }
    /**
     * Set cc_information value
     * @param \Pggns\MidocoApi\Bank\StructType\Cc_information $cc_information
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCc_information(?\Pggns\MidocoApi\Bank\StructType\Cc_information $cc_information = null): self
    {
        $this->cc_information = $this->{'cc-information'} = $cc_information;
        
        return $this;
    }
    /**
     * Get is_domestic value
     * @return bool|null
     */
    public function getIs_domestic(): ?bool
    {
        return $this->{'is-domestic'};
    }
    /**
     * Set is_domestic value
     * @param bool $is_domestic
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setIs_domestic(?bool $is_domestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_domestic) && !is_bool($is_domestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_domestic, true), gettype($is_domestic)), __LINE__);
        }
        $this->is_domestic = $this->{'is-domestic'} = $is_domestic;
        
        return $this;
    }
    /**
     * Get ticketing_city value
     * @return string|null
     */
    public function getTicketing_city(): ?string
    {
        return $this->{'ticketing-city'};
    }
    /**
     * Set ticketing_city value
     * @param string $ticketing_city
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setTicketing_city(?string $ticketing_city = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketing_city) && !is_string($ticketing_city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketing_city, true), gettype($ticketing_city)), __LINE__);
        }
        $this->ticketing_city = $this->{'ticketing-city'} = $ticketing_city;
        
        return $this;
    }
    /**
     * Get vat_content value
     * @return string|null
     */
    public function getVat_content(): ?string
    {
        return $this->{'vat-content'};
    }
    /**
     * Set vat_content value
     * @param string $vat_content
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setVat_content(?string $vat_content = null): self
    {
        // validation for constraint: string
        if (!is_null($vat_content) && !is_string($vat_content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat_content, true), gettype($vat_content)), __LINE__);
        }
        $this->vat_content = $this->{'vat-content'} = $vat_content;
        
        return $this;
    }
    /**
     * Get exchange_information value
     * @return string|null
     */
    public function getExchange_information(): ?string
    {
        return $this->{'exchange-information'};
    }
    /**
     * Set exchange_information value
     * @param string $exchange_information
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setExchange_information(?string $exchange_information = null): self
    {
        // validation for constraint: string
        if (!is_null($exchange_information) && !is_string($exchange_information)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchange_information, true), gettype($exchange_information)), __LINE__);
        }
        $this->exchange_information = $this->{'exchange-information'} = $exchange_information;
        
        return $this;
    }
    /**
     * Get airline_fee value
     * @return float|null
     */
    public function getAirline_fee(): ?float
    {
        return $this->{'airline-fee'};
    }
    /**
     * Set airline_fee value
     * @param float $airline_fee
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setAirline_fee(?float $airline_fee = null): self
    {
        // validation for constraint: float
        if (!is_null($airline_fee) && !(is_float($airline_fee) || is_numeric($airline_fee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($airline_fee, true), gettype($airline_fee)), __LINE__);
        }
        $this->airline_fee = $this->{'airline-fee'} = $airline_fee;
        
        return $this;
    }
    /**
     * Get cancellation_fee value
     * @return float|null
     */
    public function getCancellation_fee(): ?float
    {
        return $this->{'cancellation-fee'};
    }
    /**
     * Set cancellation_fee value
     * @param float $cancellation_fee
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setCancellation_fee(?float $cancellation_fee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellation_fee) && !(is_float($cancellation_fee) || is_numeric($cancellation_fee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellation_fee, true), gettype($cancellation_fee)), __LINE__);
        }
        $this->cancellation_fee = $this->{'cancellation-fee'} = $cancellation_fee;
        
        return $this;
    }
    /**
     * Get original_amount value
     * @return float|null
     */
    public function getOriginal_amount(): ?float
    {
        return $this->{'original-amount'};
    }
    /**
     * Set original_amount value
     * @param float $original_amount
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setOriginal_amount(?float $original_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($original_amount) && !(is_float($original_amount) || is_numeric($original_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($original_amount, true), gettype($original_amount)), __LINE__);
        }
        $this->original_amount = $this->{'original-amount'} = $original_amount;
        
        return $this;
    }
    /**
     * Get original_currency value
     * @return string|null
     */
    public function getOriginal_currency(): ?string
    {
        return $this->{'original-currency'};
    }
    /**
     * Set original_currency value
     * @param string $original_currency
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setOriginal_currency(?string $original_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($original_currency) && !is_string($original_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_currency, true), gettype($original_currency)), __LINE__);
        }
        $this->original_currency = $this->{'original-currency'} = $original_currency;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get saving value
     * @return \Pggns\MidocoApi\Bank\StructType\Saving[]
     */
    public function getSaving(): array
    {
        return $this->saving;
    }
    /**
     * This method is responsible for validating the values passed to the setSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaving method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavingForArrayConstraintsFromSetSaving(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketSavingItem) {
            // validation for constraint: itemType
            if (!$ticketSavingItem instanceof \Pggns\MidocoApi\Bank\StructType\Saving) {
                $invalidValues[] = is_object($ticketSavingItem) ? get_class($ticketSavingItem) : sprintf('%s(%s)', gettype($ticketSavingItem), var_export($ticketSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The saving property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Saving, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Saving[] $saving
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setSaving(array $saving = []): self
    {
        // validation for constraint: array
        if ('' !== ($savingArrayErrorMessage = self::validateSavingForArrayConstraintsFromSetSaving($saving))) {
            throw new InvalidArgumentException($savingArrayErrorMessage, __LINE__);
        }
        $this->saving = $saving;
        
        return $this;
    }
    /**
     * Add item to saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Saving $item
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function addToSaving(\Pggns\MidocoApi\Bank\StructType\Saving $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Saving) {
            throw new InvalidArgumentException(sprintf('The saving property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Saving, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->saving[] = $item;
        
        return $this;
    }
    /**
     * Get price_ref value
     * @return int|null
     */
    public function getPrice_ref(): ?int
    {
        return $this->{'price-ref'};
    }
    /**
     * Set price_ref value
     * @param int $price_ref
     * @return \Pggns\MidocoApi\Bank\StructType\Ticket
     */
    public function setPrice_ref(?int $price_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($price_ref) && !(is_int($price_ref) || ctype_digit($price_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($price_ref, true), gettype($price_ref)), __LINE__);
        }
        $this->price_ref = $this->{'price-ref'} = $price_ref;
        
        return $this;
    }
}
