<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for booking StructType
 * Meta information extracted from the WSDL
 * - documentation: optional payments at booking level | if there is additional service included, it should be added here | each contained booking and the services for this booking are contained here
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Booking extends AbstractStructBase
{
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - documentation: The code representing the supplier (tour operator) of the booking.
     * - use: required
     * @var string
     */
    protected string $supplier;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - documentation: Numeric position of this booking in a sequence of all bookings
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The option_period
     * Meta information extracted from the WSDL
     * - documentation: The option period for each booking
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $option_period = null;
    /**
     * The service_description
     * Meta information extracted from the WSDL
     * - documentation: Description of the service in non-coded form (human readable) e.g. the hotel name and the stars, hotel location etc.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_description = null;
    /**
     * The accomodation_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation_code = null;
    /**
     * The accomodation_description
     * Meta information extracted from the WSDL
     * - documentation: Description of the accomodation in case of an accomodation (e.g. double room, shower, balcony etc.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation_description = null;
    /**
     * The departure_code
     * Meta information extracted from the WSDL
     * - documentation: In case of a transport, the code from the departing location (like the airport short code)
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_code = null;
    /**
     * The departure_description
     * Meta information extracted from the WSDL
     * - documentation: Long description of the departure location
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_description = null;
    /**
     * The destination_code
     * Meta information extracted from the WSDL
     * - documentation: see departure-code
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_code = null;
    /**
     * The destination_description
     * Meta information extracted from the WSDL
     * - documentation: see depatiure description
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_description = null;
    /**
     * The return_departure_code
     * Meta information extracted from the WSDL
     * - documentation: In case of a transport, the code from the departing location (like the airport short code)
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_departure_code = null;
    /**
     * The return_departure_description
     * Meta information extracted from the WSDL
     * - documentation: Long description of the departure location
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_departure_description = null;
    /**
     * The return_destination_code
     * Meta information extracted from the WSDL
     * - documentation: see departure-code
     * - base: xs:string
     * - maxLength: 4
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_code = null;
    /**
     * The return_destination_description
     * Meta information extracted from the WSDL
     * - documentation: see depatiure description
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_description = null;
    /**
     * The return_code
     * Meta information extracted from the WSDL
     * - documentation: optional code of return flight destination (if different from depatrture)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_code = null;
    /**
     * The return_description
     * Meta information extracted from the WSDL
     * - documentation: description of the return code
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_description = null;
    /**
     * The catering_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering_description = null;
    /**
     * The room_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $room_description = null;
    /**
     * The insurance_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insurance_description = null;
    /**
     * The area_code
     * Meta information extracted from the WSDL
     * - documentation: a code for the destination area of this travel (e.g. BAL = Balear islands)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area_code = null;
    /**
     * The area_description
     * Meta information extracted from the WSDL
     * - documentation: optional description of the area. If left empty, area_code will be looked up to fill this field internally
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area_description = null;
    /**
     * The location_description
     * Meta information extracted from the WSDL
     * - documentation: optional description of the destination city
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_description = null;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - documentation: optional country code of destination
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The country_description
     * Meta information extracted from the WSDL
     * - documentation: optional country description of destination
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country_description = null;
    /**
     * The cruise_description
     * Meta information extracted from the WSDL
     * - documentation: optional description of cruise
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cruise_description = null;
    /**
     * The source_ext_id
     * Meta information extracted from the WSDL
     * - documentation: source external id
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $source_ext_id = null;
    /**
     * The source_ext_system
     * Meta information extracted from the WSDL
     * - documentation: source external system
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $source_ext_system = null;
    /**
     * The carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The flight_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flight_no = null;
    /**
     * The return_carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_carrier = null;
    /**
     * The return_flight_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_flight_no = null;
    /**
     * The generic_service
     * Meta information extracted from the WSDL
     * - documentation: Used to store information about an unspecified booking (like a leisure booking, which contains multiple services)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Generic_service_type[]
     */
    protected ?array $generic_service = null;
    /**
     * The car_service
     * Meta information extracted from the WSDL
     * - documentation: Special information about a car rental
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Car_service_type[]
     */
    protected ?array $car_service = null;
    /**
     * The flight_service
     * Meta information extracted from the WSDL
     * - documentation: Information in case of a flight-only booking
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Flight_service_type[]
     */
    protected ?array $flight_service = null;
    /**
     * The accomodation_service
     * Meta information extracted from the WSDL
     * - documentation: Information in case of a accomodation only booking (like hotel, holiday flat etc.)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type[]
     */
    protected ?array $accomodation_service = null;
    /**
     * The insurance_service
     * Meta information extracted from the WSDL
     * - documentation: Special insurance based info in case of a insurance-only booking
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Insurance_service_type[]
     */
    protected ?array $insurance_service = null;
    /**
     * The transfer_service
     * Meta information extracted from the WSDL
     * - documentation: Used to store information about an tranfer bookings
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Transfer_service_type[]
     */
    protected ?array $transfer_service = null;
    /**
     * The bus_service
     * Meta information extracted from the WSDL
     * - documentation: Information in case of a bus only booking
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Bus_service_type[]
     */
    protected ?array $bus_service = null;
    /**
     * The rail_service
     * Meta information extracted from the WSDL
     * - documentation: Information in case of a rail only booking
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Rail_service_type[]
     */
    protected ?array $rail_service = null;
    /**
     * The cruise_service
     * Meta information extracted from the WSDL
     * - documentation: Information in case of a cruise only booking
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Cruise_service_type[]
     */
    protected ?array $cruise_service = null;
    /**
     * The event_service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Event_service_type[]
     */
    protected ?array $event_service = null;
    /**
     * The hints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Hints|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\Hints $hints = null;
    /**
     * The person
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: person
     * @var \Pggns\MidocoApi\Bank\StructType\Person[]
     */
    protected ?array $person = null;
    /**
     * The cc_authorisation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Cc_authorisation[]
     */
    protected ?array $cc_authorisation = null;
    /**
     * The midoco_cc_authorisation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation[]
     */
    protected ?array $midoco_cc_authorisation = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Remark[]
     */
    protected ?array $remark = null;
    /**
     * The saving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: saving
     * @var \Pggns\MidocoApi\Bank\StructType\Saving[]
     */
    protected ?array $saving = null;
    /**
     * The attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Bank\StructType\Attribute[]
     */
    protected ?array $attribute = null;
    /**
     * The AdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AdditionalService
     * @var \Pggns\MidocoApi\Bank\StructType\AdditionalService[]
     */
    protected ?array $AdditionalService = null;
    /**
     * The departure_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $departure_time = null;
    /**
     * The arrival_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $arrival_time = null;
    /**
     * The return_departure_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $return_departure_time = null;
    /**
     * The return_arrival_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $return_arrival_time = null;
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ExternalPayment
     * @var \Pggns\MidocoApi\Bank\StructType\ExternalPayment[]
     */
    protected ?array $ExternalPayment = null;
    /**
     * The travel_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travel_no = null;
    /**
     * The travel_no_description
     * Meta information extracted from the WSDL
     * - documentation: optional for creating travel-nos on import. only used with travel-no-accounts functionality.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travel_no_description = null;
    /**
     * The catalog
     * Meta information extracted from the WSDL
     * - documentation: The traveltype of the booking. In case of a STADIS-booking this should be the content of the field TRAVELTYPE
     * @var string|null
     */
    protected ?string $catalog = null;
    /**
     * The product_type
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling product type data
     * @var string|null
     */
    protected ?string $product_type = null;
    /**
     * The is_request
     * Meta information extracted from the WSDL
     * - documentation: Used to notify a request booking, which is not yet really booked.
     * - default: false
     * @var bool|null
     */
    protected ?bool $is_request = null;
    /**
     * The is_option
     * Meta information extracted from the WSDL
     * - documentation: Used to notify an option booking.
     * - default: false
     * @var bool|null
     */
    protected ?bool $is_option = null;
    /**
     * The is_one_way
     * Meta information extracted from the WSDL
     * - documentation: Used to mark as one way travel.
     * - default: false
     * @var bool|null
     */
    protected ?bool $is_one_way = null;
    /**
     * The booking_id
     * Meta information extracted from the WSDL
     * - documentation: should be left out for insurances, if insurance should be booked and reported by midoco (available in a future release) also left empty for request info
     * @var string|null
     */
    protected ?string $booking_id = null;
    /**
     * The booking_version
     * Meta information extracted from the WSDL
     * - documentation: supplier version indicator of this booking
     * @var string|null
     */
    protected ?string $booking_version = null;
    /**
     * The supplier_agency
     * Meta information extracted from the WSDL
     * - documentation: Agency for the travelagency, from touroperator
     * @var string|null
     */
    protected ?string $supplier_agency = null;
    /**
     * The reference_booking_id
     * Meta information extracted from the WSDL
     * - documentation: This booking-id is set to refer to a third-party system which has an external reference to a booking (because it was created there), should be set e.g. to the travel tainment booking-id in case of travel tainment
     * @var string|null
     */
    protected ?string $reference_booking_id = null;
    /**
     * The reference_type
     * Meta information extracted from the WSDL
     * - documentation: set to the external system id, which has a refernce to this booking (e.g. TRAVELTAINMENT)
     * @var string|null
     */
    protected ?string $reference_type = null;
    /**
     * The reference_url
     * Meta information extracted from the WSDL
     * - documentation: contains (optionally) the url, which has to be called to display the booking in the referenced system
     * @var string|null
     */
    protected ?string $reference_url = null;
    /**
     * The price_ref
     * Meta information extracted from the WSDL
     * - documentation: contains the position of the entry in the prices section, which represents the selling price for this booking
     * @var int|null
     */
    protected ?int $price_ref = null;
    /**
     * The configuration_ref
     * Meta information extracted from the WSDL
     * - documentation: Reference this booking to a special import behaviour
     * @var int|null
     */
    protected ?int $configuration_ref = null;
    /**
     * The package_ref
     * Meta information extracted from the WSDL
     * - documentation: reference to package position
     * @var int|null
     */
    protected ?int $package_ref = null;
    /**
     * The prevent_printing
     * Meta information extracted from the WSDL
     * - documentation: if true the booking is not printed from midoco midoffice
     * @var bool|null
     */
    protected ?bool $prevent_printing = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - documentation: optional category for the accomodation (Hotel Stars)
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The booking_date
     * Meta information extracted from the WSDL
     * - documentation: should be left empty for request info
     * @var string|null
     */
    protected ?string $booking_date = null;
    /**
     * The creation_date
     * Meta information extracted from the WSDL
     * - documentation: booking creation date, default is import time
     * @var string|null
     */
    protected ?string $creation_date = null;
    /**
     * The selling_mode
     * @var string|null
     */
    protected ?string $selling_mode = null;
    /**
     * The confirmation_group
     * Meta information extracted from the WSDL
     * - documentation: confirmation group
     * @var string|null
     */
    protected ?string $confirmation_group = null;
    /**
     * The mobility_indicator
     * Meta information extracted from the WSDL
     * - documentation: mobility indicator
     * @var bool|null
     */
    protected ?bool $mobility_indicator = null;
    /**
     * The contract_time
     * Meta information extracted from the WSDL
     * - documentation: contract time
     * @var string|null
     */
    protected ?string $contract_time = null;
    /**
     * The transfer
     * Meta information extracted from the WSDL
     * - documentation: transfer infomation
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The settlement_type
     * Meta information extracted from the WSDL
     * - documentation: settlement type for the booking
     * @var string|null
     */
    protected ?string $settlement_type = null;
    /**
     * The group_item_name
     * Meta information extracted from the WSDL
     * - documentation: group information field for sellitem and billingposition e.g. the combination of flight date flight number
     * @var string|null
     */
    protected ?string $group_item_name = null;
    /**
     * The group_item_flag
     * Meta information extracted from the WSDL
     * - documentation: the flag for group booking
     * @var bool|null
     */
    protected ?bool $group_item_flag = null;
    /**
     * Constructor method for booking
     * @uses Booking::setSupplier()
     * @uses Booking::setPosition()
     * @uses Booking::setOption_period()
     * @uses Booking::setService_description()
     * @uses Booking::setAccomodation_code()
     * @uses Booking::setAccomodation_description()
     * @uses Booking::setDeparture_code()
     * @uses Booking::setDeparture_description()
     * @uses Booking::setDestination_code()
     * @uses Booking::setDestination_description()
     * @uses Booking::setReturn_departure_code()
     * @uses Booking::setReturn_departure_description()
     * @uses Booking::setReturn_destination_code()
     * @uses Booking::setReturn_destination_description()
     * @uses Booking::setReturn_code()
     * @uses Booking::setReturn_description()
     * @uses Booking::setCatering_description()
     * @uses Booking::setRoom_description()
     * @uses Booking::setInsurance_description()
     * @uses Booking::setArea_code()
     * @uses Booking::setArea_description()
     * @uses Booking::setLocation_description()
     * @uses Booking::setCountry()
     * @uses Booking::setCountry_description()
     * @uses Booking::setCruise_description()
     * @uses Booking::setSource_ext_id()
     * @uses Booking::setSource_ext_system()
     * @uses Booking::setCarrier()
     * @uses Booking::setFlight_no()
     * @uses Booking::setReturn_carrier()
     * @uses Booking::setReturn_flight_no()
     * @uses Booking::setGeneric_service()
     * @uses Booking::setCar_service()
     * @uses Booking::setFlight_service()
     * @uses Booking::setAccomodation_service()
     * @uses Booking::setInsurance_service()
     * @uses Booking::setTransfer_service()
     * @uses Booking::setBus_service()
     * @uses Booking::setRail_service()
     * @uses Booking::setCruise_service()
     * @uses Booking::setEvent_service()
     * @uses Booking::setHints()
     * @uses Booking::setPerson()
     * @uses Booking::setCc_authorisation()
     * @uses Booking::setMidoco_cc_authorisation()
     * @uses Booking::setRemark()
     * @uses Booking::setSaving()
     * @uses Booking::setAttribute()
     * @uses Booking::setAdditionalService()
     * @uses Booking::setDeparture_time()
     * @uses Booking::setArrival_time()
     * @uses Booking::setReturn_departure_time()
     * @uses Booking::setReturn_arrival_time()
     * @uses Booking::setExternalPayment()
     * @uses Booking::setTravel_no()
     * @uses Booking::setTravel_no_description()
     * @uses Booking::setCatalog()
     * @uses Booking::setProduct_type()
     * @uses Booking::setIs_request()
     * @uses Booking::setIs_option()
     * @uses Booking::setIs_one_way()
     * @uses Booking::setBooking_id()
     * @uses Booking::setBooking_version()
     * @uses Booking::setSupplier_agency()
     * @uses Booking::setReference_booking_id()
     * @uses Booking::setReference_type()
     * @uses Booking::setReference_url()
     * @uses Booking::setPrice_ref()
     * @uses Booking::setConfiguration_ref()
     * @uses Booking::setPackage_ref()
     * @uses Booking::setPrevent_printing()
     * @uses Booking::setCategory()
     * @uses Booking::setBooking_date()
     * @uses Booking::setCreation_date()
     * @uses Booking::setSelling_mode()
     * @uses Booking::setConfirmation_group()
     * @uses Booking::setMobility_indicator()
     * @uses Booking::setContract_time()
     * @uses Booking::setTransfer()
     * @uses Booking::setSettlement_type()
     * @uses Booking::setGroup_item_name()
     * @uses Booking::setGroup_item_flag()
     * @param string $supplier
     * @param int $position
     * @param int $option_period
     * @param string $service_description
     * @param string $accomodation_code
     * @param string $accomodation_description
     * @param string $departure_code
     * @param string $departure_description
     * @param string $destination_code
     * @param string $destination_description
     * @param string $return_departure_code
     * @param string $return_departure_description
     * @param string $return_destination_code
     * @param string $return_destination_description
     * @param string $return_code
     * @param string $return_description
     * @param string $catering_description
     * @param string $room_description
     * @param string $insurance_description
     * @param string $area_code
     * @param string $area_description
     * @param string $location_description
     * @param string $country
     * @param string $country_description
     * @param string $cruise_description
     * @param string $source_ext_id
     * @param string $source_ext_system
     * @param string $carrier
     * @param string $flight_no
     * @param string $return_carrier
     * @param string $return_flight_no
     * @param \Pggns\MidocoApi\Bank\StructType\Generic_service_type[] $generic_service
     * @param \Pggns\MidocoApi\Bank\StructType\Car_service_type[] $car_service
     * @param \Pggns\MidocoApi\Bank\StructType\Flight_service_type[] $flight_service
     * @param \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type[] $accomodation_service
     * @param \Pggns\MidocoApi\Bank\StructType\Insurance_service_type[] $insurance_service
     * @param \Pggns\MidocoApi\Bank\StructType\Transfer_service_type[] $transfer_service
     * @param \Pggns\MidocoApi\Bank\StructType\Bus_service_type[] $bus_service
     * @param \Pggns\MidocoApi\Bank\StructType\Rail_service_type[] $rail_service
     * @param \Pggns\MidocoApi\Bank\StructType\Cruise_service_type[] $cruise_service
     * @param \Pggns\MidocoApi\Bank\StructType\Event_service_type[] $event_service
     * @param \Pggns\MidocoApi\Bank\StructType\Hints $hints
     * @param \Pggns\MidocoApi\Bank\StructType\Person[] $person
     * @param \Pggns\MidocoApi\Bank\StructType\Cc_authorisation[] $cc_authorisation
     * @param \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation[] $midoco_cc_authorisation
     * @param \Pggns\MidocoApi\Bank\StructType\Remark[] $remark
     * @param \Pggns\MidocoApi\Bank\StructType\Saving[] $saving
     * @param \Pggns\MidocoApi\Bank\StructType\Attribute[] $attribute
     * @param \Pggns\MidocoApi\Bank\StructType\AdditionalService[] $additionalService
     * @param string $departure_time
     * @param string $arrival_time
     * @param string $return_departure_time
     * @param string $return_arrival_time
     * @param \Pggns\MidocoApi\Bank\StructType\ExternalPayment[] $externalPayment
     * @param string $travel_no
     * @param string $travel_no_description
     * @param string $catalog
     * @param string $product_type
     * @param bool $is_request
     * @param bool $is_option
     * @param bool $is_one_way
     * @param string $booking_id
     * @param string $booking_version
     * @param string $supplier_agency
     * @param string $reference_booking_id
     * @param string $reference_type
     * @param string $reference_url
     * @param int $price_ref
     * @param int $configuration_ref
     * @param int $package_ref
     * @param bool $prevent_printing
     * @param string $category
     * @param string $booking_date
     * @param string $creation_date
     * @param string $selling_mode
     * @param string $confirmation_group
     * @param bool $mobility_indicator
     * @param string $contract_time
     * @param string $transfer
     * @param string $settlement_type
     * @param string $group_item_name
     * @param bool $group_item_flag
     */
    public function __construct(string $supplier, int $position, ?int $option_period = null, ?string $service_description = null, ?string $accomodation_code = null, ?string $accomodation_description = null, ?string $departure_code = null, ?string $departure_description = null, ?string $destination_code = null, ?string $destination_description = null, ?string $return_departure_code = null, ?string $return_departure_description = null, ?string $return_destination_code = null, ?string $return_destination_description = null, ?string $return_code = null, ?string $return_description = null, ?string $catering_description = null, ?string $room_description = null, ?string $insurance_description = null, ?string $area_code = null, ?string $area_description = null, ?string $location_description = null, ?string $country = null, ?string $country_description = null, ?string $cruise_description = null, ?string $source_ext_id = null, ?string $source_ext_system = null, ?string $carrier = null, ?string $flight_no = null, ?string $return_carrier = null, ?string $return_flight_no = null, ?array $generic_service = null, ?array $car_service = null, ?array $flight_service = null, ?array $accomodation_service = null, ?array $insurance_service = null, ?array $transfer_service = null, ?array $bus_service = null, ?array $rail_service = null, ?array $cruise_service = null, ?array $event_service = null, ?\Pggns\MidocoApi\Bank\StructType\Hints $hints = null, ?array $person = null, ?array $cc_authorisation = null, ?array $midoco_cc_authorisation = null, ?array $remark = null, ?array $saving = null, ?array $attribute = null, ?array $additionalService = null, ?string $departure_time = null, ?string $arrival_time = null, ?string $return_departure_time = null, ?string $return_arrival_time = null, ?array $externalPayment = null, ?string $travel_no = null, ?string $travel_no_description = null, ?string $catalog = null, ?string $product_type = null, ?bool $is_request = false, ?bool $is_option = false, ?bool $is_one_way = false, ?string $booking_id = null, ?string $booking_version = null, ?string $supplier_agency = null, ?string $reference_booking_id = null, ?string $reference_type = null, ?string $reference_url = null, ?int $price_ref = null, ?int $configuration_ref = null, ?int $package_ref = null, ?bool $prevent_printing = null, ?string $category = null, ?string $booking_date = null, ?string $creation_date = null, ?string $selling_mode = null, ?string $confirmation_group = null, ?bool $mobility_indicator = null, ?string $contract_time = null, ?string $transfer = null, ?string $settlement_type = null, ?string $group_item_name = null, ?bool $group_item_flag = null)
    {
        $this
            ->setSupplier($supplier)
            ->setPosition($position)
            ->setOption_period($option_period)
            ->setService_description($service_description)
            ->setAccomodation_code($accomodation_code)
            ->setAccomodation_description($accomodation_description)
            ->setDeparture_code($departure_code)
            ->setDeparture_description($departure_description)
            ->setDestination_code($destination_code)
            ->setDestination_description($destination_description)
            ->setReturn_departure_code($return_departure_code)
            ->setReturn_departure_description($return_departure_description)
            ->setReturn_destination_code($return_destination_code)
            ->setReturn_destination_description($return_destination_description)
            ->setReturn_code($return_code)
            ->setReturn_description($return_description)
            ->setCatering_description($catering_description)
            ->setRoom_description($room_description)
            ->setInsurance_description($insurance_description)
            ->setArea_code($area_code)
            ->setArea_description($area_description)
            ->setLocation_description($location_description)
            ->setCountry($country)
            ->setCountry_description($country_description)
            ->setCruise_description($cruise_description)
            ->setSource_ext_id($source_ext_id)
            ->setSource_ext_system($source_ext_system)
            ->setCarrier($carrier)
            ->setFlight_no($flight_no)
            ->setReturn_carrier($return_carrier)
            ->setReturn_flight_no($return_flight_no)
            ->setGeneric_service($generic_service)
            ->setCar_service($car_service)
            ->setFlight_service($flight_service)
            ->setAccomodation_service($accomodation_service)
            ->setInsurance_service($insurance_service)
            ->setTransfer_service($transfer_service)
            ->setBus_service($bus_service)
            ->setRail_service($rail_service)
            ->setCruise_service($cruise_service)
            ->setEvent_service($event_service)
            ->setHints($hints)
            ->setPerson($person)
            ->setCc_authorisation($cc_authorisation)
            ->setMidoco_cc_authorisation($midoco_cc_authorisation)
            ->setRemark($remark)
            ->setSaving($saving)
            ->setAttribute($attribute)
            ->setAdditionalService($additionalService)
            ->setDeparture_time($departure_time)
            ->setArrival_time($arrival_time)
            ->setReturn_departure_time($return_departure_time)
            ->setReturn_arrival_time($return_arrival_time)
            ->setExternalPayment($externalPayment)
            ->setTravel_no($travel_no)
            ->setTravel_no_description($travel_no_description)
            ->setCatalog($catalog)
            ->setProduct_type($product_type)
            ->setIs_request($is_request)
            ->setIs_option($is_option)
            ->setIs_one_way($is_one_way)
            ->setBooking_id($booking_id)
            ->setBooking_version($booking_version)
            ->setSupplier_agency($supplier_agency)
            ->setReference_booking_id($reference_booking_id)
            ->setReference_type($reference_type)
            ->setReference_url($reference_url)
            ->setPrice_ref($price_ref)
            ->setConfiguration_ref($configuration_ref)
            ->setPackage_ref($package_ref)
            ->setPrevent_printing($prevent_printing)
            ->setCategory($category)
            ->setBooking_date($booking_date)
            ->setCreation_date($creation_date)
            ->setSelling_mode($selling_mode)
            ->setConfirmation_group($confirmation_group)
            ->setMobility_indicator($mobility_indicator)
            ->setContract_time($contract_time)
            ->setTransfer($transfer)
            ->setSettlement_type($settlement_type)
            ->setGroup_item_name($group_item_name)
            ->setGroup_item_flag($group_item_flag);
    }
    /**
     * Get supplier value
     * @return string
     */
    public function getSupplier(): string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSupplier(string $supplier): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
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
     * Get option_period value
     * @return int|null
     */
    public function getOption_period(): ?int
    {
        return $this->{'option-period'};
    }
    /**
     * Set option_period value
     * @param int $option_period
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setOption_period(?int $option_period = null): self
    {
        // validation for constraint: int
        if (!is_null($option_period) && !(is_int($option_period) || ctype_digit($option_period))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($option_period, true), gettype($option_period)), __LINE__);
        }
        $this->option_period = $this->{'option-period'} = $option_period;
        
        return $this;
    }
    /**
     * Get service_description value
     * @return string|null
     */
    public function getService_description(): ?string
    {
        return $this->{'service-description'};
    }
    /**
     * Set service_description value
     * @param string $service_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setService_description(?string $service_description = null): self
    {
        // validation for constraint: string
        if (!is_null($service_description) && !is_string($service_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_description, true), gettype($service_description)), __LINE__);
        }
        $this->service_description = $this->{'service-description'} = $service_description;
        
        return $this;
    }
    /**
     * Get accomodation_code value
     * @return string|null
     */
    public function getAccomodation_code(): ?string
    {
        return $this->{'accomodation-code'};
    }
    /**
     * Set accomodation_code value
     * @param string $accomodation_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setAccomodation_code(?string $accomodation_code = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_code) && !is_string($accomodation_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_code, true), gettype($accomodation_code)), __LINE__);
        }
        $this->accomodation_code = $this->{'accomodation-code'} = $accomodation_code;
        
        return $this;
    }
    /**
     * Get accomodation_description value
     * @return string|null
     */
    public function getAccomodation_description(): ?string
    {
        return $this->{'accomodation-description'};
    }
    /**
     * Set accomodation_description value
     * @param string $accomodation_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setAccomodation_description(?string $accomodation_description = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_description) && !is_string($accomodation_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_description, true), gettype($accomodation_description)), __LINE__);
        }
        $this->accomodation_description = $this->{'accomodation-description'} = $accomodation_description;
        
        return $this;
    }
    /**
     * Get departure_code value
     * @return string|null
     */
    public function getDeparture_code(): ?string
    {
        return $this->{'departure-code'};
    }
    /**
     * Set departure_code value
     * @param string $departure_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setDeparture_code(?string $departure_code = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_code) && !is_string($departure_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_code, true), gettype($departure_code)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($departure_code) && mb_strlen((string) $departure_code) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $departure_code)), __LINE__);
        }
        $this->departure_code = $this->{'departure-code'} = $departure_code;
        
        return $this;
    }
    /**
     * Get departure_description value
     * @return string|null
     */
    public function getDeparture_description(): ?string
    {
        return $this->{'departure-description'};
    }
    /**
     * Set departure_description value
     * @param string $departure_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setDeparture_description(?string $departure_description = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_description) && !is_string($departure_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_description, true), gettype($departure_description)), __LINE__);
        }
        $this->departure_description = $this->{'departure-description'} = $departure_description;
        
        return $this;
    }
    /**
     * Get destination_code value
     * @return string|null
     */
    public function getDestination_code(): ?string
    {
        return $this->{'destination-code'};
    }
    /**
     * Set destination_code value
     * @param string $destination_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setDestination_code(?string $destination_code = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_code) && !is_string($destination_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_code, true), gettype($destination_code)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($destination_code) && mb_strlen((string) $destination_code) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $destination_code)), __LINE__);
        }
        $this->destination_code = $this->{'destination-code'} = $destination_code;
        
        return $this;
    }
    /**
     * Get destination_description value
     * @return string|null
     */
    public function getDestination_description(): ?string
    {
        return $this->{'destination-description'};
    }
    /**
     * Set destination_description value
     * @param string $destination_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setDestination_description(?string $destination_description = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_description) && !is_string($destination_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_description, true), gettype($destination_description)), __LINE__);
        }
        $this->destination_description = $this->{'destination-description'} = $destination_description;
        
        return $this;
    }
    /**
     * Get return_departure_code value
     * @return string|null
     */
    public function getReturn_departure_code(): ?string
    {
        return $this->{'return-departure-code'};
    }
    /**
     * Set return_departure_code value
     * @param string $return_departure_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_departure_code(?string $return_departure_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_code) && !is_string($return_departure_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_code, true), gettype($return_departure_code)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($return_departure_code) && mb_strlen((string) $return_departure_code) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $return_departure_code)), __LINE__);
        }
        $this->return_departure_code = $this->{'return-departure-code'} = $return_departure_code;
        
        return $this;
    }
    /**
     * Get return_departure_description value
     * @return string|null
     */
    public function getReturn_departure_description(): ?string
    {
        return $this->{'return-departure-description'};
    }
    /**
     * Set return_departure_description value
     * @param string $return_departure_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_departure_description(?string $return_departure_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_description) && !is_string($return_departure_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_description, true), gettype($return_departure_description)), __LINE__);
        }
        $this->return_departure_description = $this->{'return-departure-description'} = $return_departure_description;
        
        return $this;
    }
    /**
     * Get return_destination_code value
     * @return string|null
     */
    public function getReturn_destination_code(): ?string
    {
        return $this->{'return-destination-code'};
    }
    /**
     * Set return_destination_code value
     * @param string $return_destination_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_destination_code(?string $return_destination_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_code) && !is_string($return_destination_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_code, true), gettype($return_destination_code)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($return_destination_code) && mb_strlen((string) $return_destination_code) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $return_destination_code)), __LINE__);
        }
        $this->return_destination_code = $this->{'return-destination-code'} = $return_destination_code;
        
        return $this;
    }
    /**
     * Get return_destination_description value
     * @return string|null
     */
    public function getReturn_destination_description(): ?string
    {
        return $this->{'return-destination-description'};
    }
    /**
     * Set return_destination_description value
     * @param string $return_destination_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_destination_description(?string $return_destination_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_description) && !is_string($return_destination_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_description, true), gettype($return_destination_description)), __LINE__);
        }
        $this->return_destination_description = $this->{'return-destination-description'} = $return_destination_description;
        
        return $this;
    }
    /**
     * Get return_code value
     * @return string|null
     */
    public function getReturn_code(): ?string
    {
        return $this->{'return-code'};
    }
    /**
     * Set return_code value
     * @param string $return_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_code(?string $return_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_code) && !is_string($return_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_code, true), gettype($return_code)), __LINE__);
        }
        $this->return_code = $this->{'return-code'} = $return_code;
        
        return $this;
    }
    /**
     * Get return_description value
     * @return string|null
     */
    public function getReturn_description(): ?string
    {
        return $this->{'return-description'};
    }
    /**
     * Set return_description value
     * @param string $return_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_description(?string $return_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_description) && !is_string($return_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_description, true), gettype($return_description)), __LINE__);
        }
        $this->return_description = $this->{'return-description'} = $return_description;
        
        return $this;
    }
    /**
     * Get catering_description value
     * @return string|null
     */
    public function getCatering_description(): ?string
    {
        return $this->{'catering-description'};
    }
    /**
     * Set catering_description value
     * @param string $catering_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCatering_description(?string $catering_description = null): self
    {
        // validation for constraint: string
        if (!is_null($catering_description) && !is_string($catering_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering_description, true), gettype($catering_description)), __LINE__);
        }
        $this->catering_description = $this->{'catering-description'} = $catering_description;
        
        return $this;
    }
    /**
     * Get room_description value
     * @return string|null
     */
    public function getRoom_description(): ?string
    {
        return $this->{'room-description'};
    }
    /**
     * Set room_description value
     * @param string $room_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setRoom_description(?string $room_description = null): self
    {
        // validation for constraint: string
        if (!is_null($room_description) && !is_string($room_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($room_description, true), gettype($room_description)), __LINE__);
        }
        $this->room_description = $this->{'room-description'} = $room_description;
        
        return $this;
    }
    /**
     * Get insurance_description value
     * @return string|null
     */
    public function getInsurance_description(): ?string
    {
        return $this->{'insurance-description'};
    }
    /**
     * Set insurance_description value
     * @param string $insurance_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setInsurance_description(?string $insurance_description = null): self
    {
        // validation for constraint: string
        if (!is_null($insurance_description) && !is_string($insurance_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurance_description, true), gettype($insurance_description)), __LINE__);
        }
        $this->insurance_description = $this->{'insurance-description'} = $insurance_description;
        
        return $this;
    }
    /**
     * Get area_code value
     * @return string|null
     */
    public function getArea_code(): ?string
    {
        return $this->area_code;
    }
    /**
     * Set area_code value
     * @param string $area_code
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setArea_code(?string $area_code = null): self
    {
        // validation for constraint: string
        if (!is_null($area_code) && !is_string($area_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_code, true), gettype($area_code)), __LINE__);
        }
        $this->area_code = $area_code;
        
        return $this;
    }
    /**
     * Get area_description value
     * @return string|null
     */
    public function getArea_description(): ?string
    {
        return $this->area_description;
    }
    /**
     * Set area_description value
     * @param string $area_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setArea_description(?string $area_description = null): self
    {
        // validation for constraint: string
        if (!is_null($area_description) && !is_string($area_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_description, true), gettype($area_description)), __LINE__);
        }
        $this->area_description = $area_description;
        
        return $this;
    }
    /**
     * Get location_description value
     * @return string|null
     */
    public function getLocation_description(): ?string
    {
        return $this->{'location-description'};
    }
    /**
     * Set location_description value
     * @param string $location_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setLocation_description(?string $location_description = null): self
    {
        // validation for constraint: string
        if (!is_null($location_description) && !is_string($location_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_description, true), gettype($location_description)), __LINE__);
        }
        $this->location_description = $this->{'location-description'} = $location_description;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
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
     * Get country_description value
     * @return string|null
     */
    public function getCountry_description(): ?string
    {
        return $this->{'country-description'};
    }
    /**
     * Set country_description value
     * @param string $country_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCountry_description(?string $country_description = null): self
    {
        // validation for constraint: string
        if (!is_null($country_description) && !is_string($country_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_description, true), gettype($country_description)), __LINE__);
        }
        $this->country_description = $this->{'country-description'} = $country_description;
        
        return $this;
    }
    /**
     * Get cruise_description value
     * @return string|null
     */
    public function getCruise_description(): ?string
    {
        return $this->cruise_description;
    }
    /**
     * Set cruise_description value
     * @param string $cruise_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCruise_description(?string $cruise_description = null): self
    {
        // validation for constraint: string
        if (!is_null($cruise_description) && !is_string($cruise_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruise_description, true), gettype($cruise_description)), __LINE__);
        }
        $this->cruise_description = $cruise_description;
        
        return $this;
    }
    /**
     * Get source_ext_id value
     * @return string|null
     */
    public function getSource_ext_id(): ?string
    {
        return $this->{'source-ext-id'};
    }
    /**
     * Set source_ext_id value
     * @param string $source_ext_id
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSource_ext_id(?string $source_ext_id = null): self
    {
        // validation for constraint: string
        if (!is_null($source_ext_id) && !is_string($source_ext_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source_ext_id, true), gettype($source_ext_id)), __LINE__);
        }
        $this->source_ext_id = $this->{'source-ext-id'} = $source_ext_id;
        
        return $this;
    }
    /**
     * Get source_ext_system value
     * @return string|null
     */
    public function getSource_ext_system(): ?string
    {
        return $this->{'source-ext-system'};
    }
    /**
     * Set source_ext_system value
     * @param string $source_ext_system
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSource_ext_system(?string $source_ext_system = null): self
    {
        // validation for constraint: string
        if (!is_null($source_ext_system) && !is_string($source_ext_system)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source_ext_system, true), gettype($source_ext_system)), __LINE__);
        }
        $this->source_ext_system = $this->{'source-ext-system'} = $source_ext_system;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get flight_no value
     * @return string|null
     */
    public function getFlight_no(): ?string
    {
        return $this->{'flight-no'};
    }
    /**
     * Set flight_no value
     * @param string $flight_no
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setFlight_no(?string $flight_no = null): self
    {
        // validation for constraint: string
        if (!is_null($flight_no) && !is_string($flight_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flight_no, true), gettype($flight_no)), __LINE__);
        }
        $this->flight_no = $this->{'flight-no'} = $flight_no;
        
        return $this;
    }
    /**
     * Get return_carrier value
     * @return string|null
     */
    public function getReturn_carrier(): ?string
    {
        return $this->{'return-carrier'};
    }
    /**
     * Set return_carrier value
     * @param string $return_carrier
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_carrier(?string $return_carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($return_carrier) && !is_string($return_carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_carrier, true), gettype($return_carrier)), __LINE__);
        }
        $this->return_carrier = $this->{'return-carrier'} = $return_carrier;
        
        return $this;
    }
    /**
     * Get return_flight_no value
     * @return string|null
     */
    public function getReturn_flight_no(): ?string
    {
        return $this->{'return-flight-no'};
    }
    /**
     * Set return_flight_no value
     * @param string $return_flight_no
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_flight_no(?string $return_flight_no = null): self
    {
        // validation for constraint: string
        if (!is_null($return_flight_no) && !is_string($return_flight_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_flight_no, true), gettype($return_flight_no)), __LINE__);
        }
        $this->return_flight_no = $this->{'return-flight-no'} = $return_flight_no;
        
        return $this;
    }
    /**
     * Get generic_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Generic_service_type[]
     */
    public function getGeneric_service(): ?array
    {
        return $this->{'generic-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGeneric_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneric_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneric_serviceForArrayConstraintFromSetGeneric_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingGeneric_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingGeneric_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Generic_service_type) {
                $invalidValues[] = is_object($bookingGeneric_serviceItem) ? get_class($bookingGeneric_serviceItem) : sprintf('%s(%s)', gettype($bookingGeneric_serviceItem), var_export($bookingGeneric_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The generic_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Generic_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set generic_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Generic_service_type[] $generic_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setGeneric_service(?array $generic_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($generic_serviceArrayErrorMessage = self::validateGeneric_serviceForArrayConstraintFromSetGeneric_service($generic_service))) {
            throw new InvalidArgumentException($generic_serviceArrayErrorMessage, __LINE__);
        }
        $this->generic_service = $this->{'generic-service'} = $generic_service;
        
        return $this;
    }
    /**
     * Add item to generic_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Generic_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToGeneric_service(\Pggns\MidocoApi\Bank\StructType\Generic_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Generic_service_type) {
            throw new InvalidArgumentException(sprintf('The generic_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Generic_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->generic_service[] = $this->{'generic-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get car_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Car_service_type[]
     */
    public function getCar_service(): ?array
    {
        return $this->{'car-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCar_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCar_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCar_serviceForArrayConstraintFromSetCar_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingCar_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingCar_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Car_service_type) {
                $invalidValues[] = is_object($bookingCar_serviceItem) ? get_class($bookingCar_serviceItem) : sprintf('%s(%s)', gettype($bookingCar_serviceItem), var_export($bookingCar_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The car_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Car_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set car_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Car_service_type[] $car_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCar_service(?array $car_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($car_serviceArrayErrorMessage = self::validateCar_serviceForArrayConstraintFromSetCar_service($car_service))) {
            throw new InvalidArgumentException($car_serviceArrayErrorMessage, __LINE__);
        }
        $this->car_service = $this->{'car-service'} = $car_service;
        
        return $this;
    }
    /**
     * Add item to car_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Car_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToCar_service(\Pggns\MidocoApi\Bank\StructType\Car_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Car_service_type) {
            throw new InvalidArgumentException(sprintf('The car_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Car_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->car_service[] = $this->{'car-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get flight_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_service_type[]
     */
    public function getFlight_service(): ?array
    {
        return $this->{'flight-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlight_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlight_serviceForArrayConstraintFromSetFlight_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingFlight_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingFlight_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Flight_service_type) {
                $invalidValues[] = is_object($bookingFlight_serviceItem) ? get_class($bookingFlight_serviceItem) : sprintf('%s(%s)', gettype($bookingFlight_serviceItem), var_export($bookingFlight_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flight_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Flight_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set flight_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Flight_service_type[] $flight_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setFlight_service(?array $flight_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($flight_serviceArrayErrorMessage = self::validateFlight_serviceForArrayConstraintFromSetFlight_service($flight_service))) {
            throw new InvalidArgumentException($flight_serviceArrayErrorMessage, __LINE__);
        }
        $this->flight_service = $this->{'flight-service'} = $flight_service;
        
        return $this;
    }
    /**
     * Add item to flight_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Flight_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToFlight_service(\Pggns\MidocoApi\Bank\StructType\Flight_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Flight_service_type) {
            throw new InvalidArgumentException(sprintf('The flight_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Flight_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flight_service[] = $this->{'flight-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get accomodation_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type[]
     */
    public function getAccomodation_service(): ?array
    {
        return $this->{'accomodation-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccomodation_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccomodation_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccomodation_serviceForArrayConstraintFromSetAccomodation_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingAccomodation_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingAccomodation_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type) {
                $invalidValues[] = is_object($bookingAccomodation_serviceItem) ? get_class($bookingAccomodation_serviceItem) : sprintf('%s(%s)', gettype($bookingAccomodation_serviceItem), var_export($bookingAccomodation_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accomodation_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accomodation_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type[] $accomodation_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setAccomodation_service(?array $accomodation_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($accomodation_serviceArrayErrorMessage = self::validateAccomodation_serviceForArrayConstraintFromSetAccomodation_service($accomodation_service))) {
            throw new InvalidArgumentException($accomodation_serviceArrayErrorMessage, __LINE__);
        }
        $this->accomodation_service = $this->{'accomodation-service'} = $accomodation_service;
        
        return $this;
    }
    /**
     * Add item to accomodation_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToAccomodation_service(\Pggns\MidocoApi\Bank\StructType\Accomodation_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type) {
            throw new InvalidArgumentException(sprintf('The accomodation_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Accomodation_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accomodation_service[] = $this->{'accomodation-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get insurance_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Insurance_service_type[]
     */
    public function getInsurance_service(): ?array
    {
        return $this->{'insurance-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInsurance_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInsurance_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInsurance_serviceForArrayConstraintFromSetInsurance_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingInsurance_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingInsurance_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Insurance_service_type) {
                $invalidValues[] = is_object($bookingInsurance_serviceItem) ? get_class($bookingInsurance_serviceItem) : sprintf('%s(%s)', gettype($bookingInsurance_serviceItem), var_export($bookingInsurance_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The insurance_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Insurance_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set insurance_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Insurance_service_type[] $insurance_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setInsurance_service(?array $insurance_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($insurance_serviceArrayErrorMessage = self::validateInsurance_serviceForArrayConstraintFromSetInsurance_service($insurance_service))) {
            throw new InvalidArgumentException($insurance_serviceArrayErrorMessage, __LINE__);
        }
        $this->insurance_service = $this->{'insurance-service'} = $insurance_service;
        
        return $this;
    }
    /**
     * Add item to insurance_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Insurance_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToInsurance_service(\Pggns\MidocoApi\Bank\StructType\Insurance_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Insurance_service_type) {
            throw new InvalidArgumentException(sprintf('The insurance_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Insurance_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->insurance_service[] = $this->{'insurance-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get transfer_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Transfer_service_type[]
     */
    public function getTransfer_service(): ?array
    {
        return $this->{'transfer-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTransfer_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransfer_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransfer_serviceForArrayConstraintFromSetTransfer_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTransfer_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingTransfer_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Transfer_service_type) {
                $invalidValues[] = is_object($bookingTransfer_serviceItem) ? get_class($bookingTransfer_serviceItem) : sprintf('%s(%s)', gettype($bookingTransfer_serviceItem), var_export($bookingTransfer_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The transfer_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Transfer_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set transfer_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Transfer_service_type[] $transfer_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setTransfer_service(?array $transfer_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($transfer_serviceArrayErrorMessage = self::validateTransfer_serviceForArrayConstraintFromSetTransfer_service($transfer_service))) {
            throw new InvalidArgumentException($transfer_serviceArrayErrorMessage, __LINE__);
        }
        $this->transfer_service = $this->{'transfer-service'} = $transfer_service;
        
        return $this;
    }
    /**
     * Add item to transfer_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Transfer_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToTransfer_service(\Pggns\MidocoApi\Bank\StructType\Transfer_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Transfer_service_type) {
            throw new InvalidArgumentException(sprintf('The transfer_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Transfer_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->transfer_service[] = $this->{'transfer-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get bus_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Bus_service_type[]
     */
    public function getBus_service(): ?array
    {
        return $this->{'bus-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBus_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBus_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBus_serviceForArrayConstraintFromSetBus_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingBus_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingBus_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Bus_service_type) {
                $invalidValues[] = is_object($bookingBus_serviceItem) ? get_class($bookingBus_serviceItem) : sprintf('%s(%s)', gettype($bookingBus_serviceItem), var_export($bookingBus_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bus_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Bus_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bus_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Bus_service_type[] $bus_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setBus_service(?array $bus_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($bus_serviceArrayErrorMessage = self::validateBus_serviceForArrayConstraintFromSetBus_service($bus_service))) {
            throw new InvalidArgumentException($bus_serviceArrayErrorMessage, __LINE__);
        }
        $this->bus_service = $this->{'bus-service'} = $bus_service;
        
        return $this;
    }
    /**
     * Add item to bus_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Bus_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToBus_service(\Pggns\MidocoApi\Bank\StructType\Bus_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Bus_service_type) {
            throw new InvalidArgumentException(sprintf('The bus_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Bus_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bus_service[] = $this->{'bus-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get rail_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Rail_service_type[]
     */
    public function getRail_service(): ?array
    {
        return $this->{'rail-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRail_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRail_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRail_serviceForArrayConstraintFromSetRail_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRail_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingRail_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Rail_service_type) {
                $invalidValues[] = is_object($bookingRail_serviceItem) ? get_class($bookingRail_serviceItem) : sprintf('%s(%s)', gettype($bookingRail_serviceItem), var_export($bookingRail_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rail_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Rail_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rail_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Rail_service_type[] $rail_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setRail_service(?array $rail_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($rail_serviceArrayErrorMessage = self::validateRail_serviceForArrayConstraintFromSetRail_service($rail_service))) {
            throw new InvalidArgumentException($rail_serviceArrayErrorMessage, __LINE__);
        }
        $this->rail_service = $this->{'rail-service'} = $rail_service;
        
        return $this;
    }
    /**
     * Add item to rail_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Rail_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToRail_service(\Pggns\MidocoApi\Bank\StructType\Rail_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Rail_service_type) {
            throw new InvalidArgumentException(sprintf('The rail_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Rail_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rail_service[] = $this->{'rail-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get cruise_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Cruise_service_type[]
     */
    public function getCruise_service(): ?array
    {
        return $this->{'cruise-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCruise_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCruise_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCruise_serviceForArrayConstraintFromSetCruise_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingCruise_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingCruise_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Cruise_service_type) {
                $invalidValues[] = is_object($bookingCruise_serviceItem) ? get_class($bookingCruise_serviceItem) : sprintf('%s(%s)', gettype($bookingCruise_serviceItem), var_export($bookingCruise_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cruise_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Cruise_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cruise_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Cruise_service_type[] $cruise_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCruise_service(?array $cruise_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($cruise_serviceArrayErrorMessage = self::validateCruise_serviceForArrayConstraintFromSetCruise_service($cruise_service))) {
            throw new InvalidArgumentException($cruise_serviceArrayErrorMessage, __LINE__);
        }
        $this->cruise_service = $this->{'cruise-service'} = $cruise_service;
        
        return $this;
    }
    /**
     * Add item to cruise_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Cruise_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToCruise_service(\Pggns\MidocoApi\Bank\StructType\Cruise_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Cruise_service_type) {
            throw new InvalidArgumentException(sprintf('The cruise_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Cruise_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cruise_service[] = $this->{'cruise-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get event_service value
     * @return \Pggns\MidocoApi\Bank\StructType\Event_service_type[]
     */
    public function getEvent_service(): ?array
    {
        return $this->{'event-service'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEvent_service method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvent_service method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEvent_serviceForArrayConstraintFromSetEvent_service(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingEvent_serviceItem) {
            // validation for constraint: itemType
            if (!$bookingEvent_serviceItem instanceof \Pggns\MidocoApi\Bank\StructType\Event_service_type) {
                $invalidValues[] = is_object($bookingEvent_serviceItem) ? get_class($bookingEvent_serviceItem) : sprintf('%s(%s)', gettype($bookingEvent_serviceItem), var_export($bookingEvent_serviceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The event_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Event_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set event_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Event_service_type[] $event_service
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setEvent_service(?array $event_service = null): self
    {
        // validation for constraint: array
        if ('' !== ($event_serviceArrayErrorMessage = self::validateEvent_serviceForArrayConstraintFromSetEvent_service($event_service))) {
            throw new InvalidArgumentException($event_serviceArrayErrorMessage, __LINE__);
        }
        $this->event_service = $this->{'event-service'} = $event_service;
        
        return $this;
    }
    /**
     * Add item to event_service value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Event_service_type $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToEvent_service(\Pggns\MidocoApi\Bank\StructType\Event_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Event_service_type) {
            throw new InvalidArgumentException(sprintf('The event_service property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Event_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->event_service[] = $this->{'event-service'}[] = $item;
        
        return $this;
    }
    /**
     * Get hints value
     * @return \Pggns\MidocoApi\Bank\StructType\Hints|null
     */
    public function getHints(): ?\Pggns\MidocoApi\Bank\StructType\Hints
    {
        return $this->hints;
    }
    /**
     * Set hints value
     * @param \Pggns\MidocoApi\Bank\StructType\Hints $hints
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setHints(?\Pggns\MidocoApi\Bank\StructType\Hints $hints = null): self
    {
        $this->hints = $hints;
        
        return $this;
    }
    /**
     * Get person value
     * @return \Pggns\MidocoApi\Bank\StructType\Person[]
     */
    public function getPerson(): ?array
    {
        return $this->person;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonForArrayConstraintFromSetPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingPersonItem) {
            // validation for constraint: itemType
            if (!$bookingPersonItem instanceof \Pggns\MidocoApi\Bank\StructType\Person) {
                $invalidValues[] = is_object($bookingPersonItem) ? get_class($bookingPersonItem) : sprintf('%s(%s)', gettype($bookingPersonItem), var_export($bookingPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The person property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Person, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set person value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Person[] $person
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setPerson(?array $person = null): self
    {
        // validation for constraint: array
        if ('' !== ($personArrayErrorMessage = self::validatePersonForArrayConstraintFromSetPerson($person))) {
            throw new InvalidArgumentException($personArrayErrorMessage, __LINE__);
        }
        $this->person = $person;
        
        return $this;
    }
    /**
     * Add item to person value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Person $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToPerson(\Pggns\MidocoApi\Bank\StructType\Person $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Person) {
            throw new InvalidArgumentException(sprintf('The person property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Person, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->person[] = $item;
        
        return $this;
    }
    /**
     * Get cc_authorisation value
     * @return \Pggns\MidocoApi\Bank\StructType\Cc_authorisation[]
     */
    public function getCc_authorisation(): ?array
    {
        return $this->{'cc-authorisation'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCc_authorisation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCc_authorisation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCc_authorisationForArrayConstraintFromSetCc_authorisation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingCc_authorisationItem) {
            // validation for constraint: itemType
            if (!$bookingCc_authorisationItem instanceof \Pggns\MidocoApi\Bank\StructType\Cc_authorisation) {
                $invalidValues[] = is_object($bookingCc_authorisationItem) ? get_class($bookingCc_authorisationItem) : sprintf('%s(%s)', gettype($bookingCc_authorisationItem), var_export($bookingCc_authorisationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The cc_authorisation property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Cc_authorisation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set cc_authorisation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Cc_authorisation[] $cc_authorisation
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCc_authorisation(?array $cc_authorisation = null): self
    {
        // validation for constraint: array
        if ('' !== ($cc_authorisationArrayErrorMessage = self::validateCc_authorisationForArrayConstraintFromSetCc_authorisation($cc_authorisation))) {
            throw new InvalidArgumentException($cc_authorisationArrayErrorMessage, __LINE__);
        }
        $this->cc_authorisation = $this->{'cc-authorisation'} = $cc_authorisation;
        
        return $this;
    }
    /**
     * Add item to cc_authorisation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Cc_authorisation $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToCc_authorisation(\Pggns\MidocoApi\Bank\StructType\Cc_authorisation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Cc_authorisation) {
            throw new InvalidArgumentException(sprintf('The cc_authorisation property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Cc_authorisation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->cc_authorisation[] = $this->{'cc-authorisation'}[] = $item;
        
        return $this;
    }
    /**
     * Get midoco_cc_authorisation value
     * @return \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation[]
     */
    public function getMidoco_cc_authorisation(): ?array
    {
        return $this->{'midoco-cc-authorisation'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidoco_cc_authorisation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidoco_cc_authorisation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidoco_cc_authorisationForArrayConstraintFromSetMidoco_cc_authorisation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingMidoco_cc_authorisationItem) {
            // validation for constraint: itemType
            if (!$bookingMidoco_cc_authorisationItem instanceof \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation) {
                $invalidValues[] = is_object($bookingMidoco_cc_authorisationItem) ? get_class($bookingMidoco_cc_authorisationItem) : sprintf('%s(%s)', gettype($bookingMidoco_cc_authorisationItem), var_export($bookingMidoco_cc_authorisationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midoco_cc_authorisation property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midoco_cc_authorisation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation[] $midoco_cc_authorisation
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setMidoco_cc_authorisation(?array $midoco_cc_authorisation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midoco_cc_authorisationArrayErrorMessage = self::validateMidoco_cc_authorisationForArrayConstraintFromSetMidoco_cc_authorisation($midoco_cc_authorisation))) {
            throw new InvalidArgumentException($midoco_cc_authorisationArrayErrorMessage, __LINE__);
        }
        $this->midoco_cc_authorisation = $this->{'midoco-cc-authorisation'} = $midoco_cc_authorisation;
        
        return $this;
    }
    /**
     * Add item to midoco_cc_authorisation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToMidoco_cc_authorisation(\Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation) {
            throw new InvalidArgumentException(sprintf('The midoco_cc_authorisation property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Midoco_cc_authorisation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midoco_cc_authorisation[] = $this->{'midoco-cc-authorisation'}[] = $item;
        
        return $this;
    }
    /**
     * Get remark value
     * @return \Pggns\MidocoApi\Bank\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->remark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintFromSetRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRemarkItem) {
            // validation for constraint: itemType
            if (!$bookingRemarkItem instanceof \Pggns\MidocoApi\Bank\StructType\Remark) {
                $invalidValues[] = is_object($bookingRemarkItem) ? get_class($bookingRemarkItem) : sprintf('%s(%s)', gettype($bookingRemarkItem), var_export($bookingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The remark property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set remark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Remark[] $remark
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setRemark(?array $remark = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintFromSetRemark($remark))) {
            throw new InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Add item to remark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Remark $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToRemark(\Pggns\MidocoApi\Bank\StructType\Remark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Remark) {
            throw new InvalidArgumentException(sprintf('The remark property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->remark[] = $item;
        
        return $this;
    }
    /**
     * Get saving value
     * @return \Pggns\MidocoApi\Bank\StructType\Saving[]
     */
    public function getSaving(): ?array
    {
        return $this->saving;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaving method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavingForArrayConstraintFromSetSaving(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingSavingItem) {
            // validation for constraint: itemType
            if (!$bookingSavingItem instanceof \Pggns\MidocoApi\Bank\StructType\Saving) {
                $invalidValues[] = is_object($bookingSavingItem) ? get_class($bookingSavingItem) : sprintf('%s(%s)', gettype($bookingSavingItem), var_export($bookingSavingItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSaving(?array $saving = null): self
    {
        // validation for constraint: array
        if ('' !== ($savingArrayErrorMessage = self::validateSavingForArrayConstraintFromSetSaving($saving))) {
            throw new InvalidArgumentException($savingArrayErrorMessage, __LINE__);
        }
        $this->saving = $saving;
        
        return $this;
    }
    /**
     * Add item to saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Saving $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
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
     * Get attribute value
     * @return \Pggns\MidocoApi\Bank\StructType\Attribute[]
     */
    public function getAttribute(): ?array
    {
        return $this->attribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingAttributeItem) {
            // validation for constraint: itemType
            if (!$bookingAttributeItem instanceof \Pggns\MidocoApi\Bank\StructType\Attribute) {
                $invalidValues[] = is_object($bookingAttributeItem) ? get_class($bookingAttributeItem) : sprintf('%s(%s)', gettype($bookingAttributeItem), var_export($bookingAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Attribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Attribute[] $attribute
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\Attribute $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToAttribute(\Pggns\MidocoApi\Bank\StructType\Attribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\Attribute) {
            throw new InvalidArgumentException(sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Bank\StructType\Attribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attribute[] = $item;
        
        return $this;
    }
    /**
     * Get AdditionalService value
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalService[]
     */
    public function getAdditionalService(): ?array
    {
        return $this->AdditionalService;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalService method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalServiceForArrayConstraintFromSetAdditionalService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$bookingAdditionalServiceItem instanceof \Pggns\MidocoApi\Bank\StructType\AdditionalService) {
                $invalidValues[] = is_object($bookingAdditionalServiceItem) ? get_class($bookingAdditionalServiceItem) : sprintf('%s(%s)', gettype($bookingAdditionalServiceItem), var_export($bookingAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Bank\StructType\AdditionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\AdditionalService[] $additionalService
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setAdditionalService(?array $additionalService = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalServiceArrayErrorMessage = self::validateAdditionalServiceForArrayConstraintFromSetAdditionalService($additionalService))) {
            throw new InvalidArgumentException($additionalServiceArrayErrorMessage, __LINE__);
        }
        $this->AdditionalService = $additionalService;
        
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\AdditionalService $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToAdditionalService(\Pggns\MidocoApi\Bank\StructType\AdditionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\AdditionalService) {
            throw new InvalidArgumentException(sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Bank\StructType\AdditionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalService[] = $item;
        
        return $this;
    }
    /**
     * Get departure_time value
     * @return string|null
     */
    public function getDeparture_time(): ?string
    {
        return $this->{'departure-time'};
    }
    /**
     * Set departure_time value
     * @param string $departure_time
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setDeparture_time(?string $departure_time = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_time) && !is_string($departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_time, true), gettype($departure_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($departure_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($departure_time, true)), __LINE__);
        }
        $this->departure_time = $this->{'departure-time'} = $departure_time;
        
        return $this;
    }
    /**
     * Get arrival_time value
     * @return string|null
     */
    public function getArrival_time(): ?string
    {
        return $this->{'arrival-time'};
    }
    /**
     * Set arrival_time value
     * @param string $arrival_time
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setArrival_time(?string $arrival_time = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_time) && !is_string($arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_time, true), gettype($arrival_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($arrival_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($arrival_time, true)), __LINE__);
        }
        $this->arrival_time = $this->{'arrival-time'} = $arrival_time;
        
        return $this;
    }
    /**
     * Get return_departure_time value
     * @return string|null
     */
    public function getReturn_departure_time(): ?string
    {
        return $this->{'return-departure-time'};
    }
    /**
     * Set return_departure_time value
     * @param string $return_departure_time
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_departure_time(?string $return_departure_time = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_time) && !is_string($return_departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_time, true), gettype($return_departure_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($return_departure_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $return_departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($return_departure_time, true)), __LINE__);
        }
        $this->return_departure_time = $this->{'return-departure-time'} = $return_departure_time;
        
        return $this;
    }
    /**
     * Get return_arrival_time value
     * @return string|null
     */
    public function getReturn_arrival_time(): ?string
    {
        return $this->{'return-arrival-time'};
    }
    /**
     * Set return_arrival_time value
     * @param string $return_arrival_time
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReturn_arrival_time(?string $return_arrival_time = null): self
    {
        // validation for constraint: string
        if (!is_null($return_arrival_time) && !is_string($return_arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_arrival_time, true), gettype($return_arrival_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($return_arrival_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $return_arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($return_arrival_time, true)), __LINE__);
        }
        $this->return_arrival_time = $this->{'return-arrival-time'} = $return_arrival_time;
        
        return $this;
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): ?array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintFromSetExternalPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$bookingExternalPaymentItem instanceof \Pggns\MidocoApi\Bank\StructType\ExternalPayment) {
                $invalidValues[] = is_object($bookingExternalPaymentItem) ? get_class($bookingExternalPaymentItem) : sprintf('%s(%s)', gettype($bookingExternalPaymentItem), var_export($bookingExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setExternalPayment(?array $externalPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Bank\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Bank\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
        return $this;
    }
    /**
     * Get travel_no value
     * @return string|null
     */
    public function getTravel_no(): ?string
    {
        return $this->{'travel-no'};
    }
    /**
     * Set travel_no value
     * @param string $travel_no
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setTravel_no(?string $travel_no = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_no) && !is_string($travel_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_no, true), gettype($travel_no)), __LINE__);
        }
        $this->travel_no = $this->{'travel-no'} = $travel_no;
        
        return $this;
    }
    /**
     * Get travel_no_description value
     * @return string|null
     */
    public function getTravel_no_description(): ?string
    {
        return $this->{'travel-no-description'};
    }
    /**
     * Set travel_no_description value
     * @param string $travel_no_description
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setTravel_no_description(?string $travel_no_description = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_no_description) && !is_string($travel_no_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_no_description, true), gettype($travel_no_description)), __LINE__);
        }
        $this->travel_no_description = $this->{'travel-no-description'} = $travel_no_description;
        
        return $this;
    }
    /**
     * Get catalog value
     * @return string|null
     */
    public function getCatalog(): ?string
    {
        return $this->catalog;
    }
    /**
     * Set catalog value
     * @param string $catalog
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCatalog(?string $catalog = null): self
    {
        // validation for constraint: string
        if (!is_null($catalog) && !is_string($catalog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalog, true), gettype($catalog)), __LINE__);
        }
        $this->catalog = $catalog;
        
        return $this;
    }
    /**
     * Get product_type value
     * @return string|null
     */
    public function getProduct_type(): ?string
    {
        return $this->{'product-type'};
    }
    /**
     * Set product_type value
     * @param string $product_type
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setProduct_type(?string $product_type = null): self
    {
        // validation for constraint: string
        if (!is_null($product_type) && !is_string($product_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product_type, true), gettype($product_type)), __LINE__);
        }
        $this->product_type = $this->{'product-type'} = $product_type;
        
        return $this;
    }
    /**
     * Get is_request value
     * @return bool|null
     */
    public function getIs_request(): ?bool
    {
        return $this->is_request;
    }
    /**
     * Set is_request value
     * @param bool $is_request
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setIs_request(?bool $is_request = false): self
    {
        // validation for constraint: boolean
        if (!is_null($is_request) && !is_bool($is_request)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_request, true), gettype($is_request)), __LINE__);
        }
        $this->is_request = $is_request;
        
        return $this;
    }
    /**
     * Get is_option value
     * @return bool|null
     */
    public function getIs_option(): ?bool
    {
        return $this->is_option;
    }
    /**
     * Set is_option value
     * @param bool $is_option
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setIs_option(?bool $is_option = false): self
    {
        // validation for constraint: boolean
        if (!is_null($is_option) && !is_bool($is_option)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_option, true), gettype($is_option)), __LINE__);
        }
        $this->is_option = $is_option;
        
        return $this;
    }
    /**
     * Get is_one_way value
     * @return bool|null
     */
    public function getIs_one_way(): ?bool
    {
        return $this->is_one_way;
    }
    /**
     * Set is_one_way value
     * @param bool $is_one_way
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setIs_one_way(?bool $is_one_way = false): self
    {
        // validation for constraint: boolean
        if (!is_null($is_one_way) && !is_bool($is_one_way)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_one_way, true), gettype($is_one_way)), __LINE__);
        }
        $this->is_one_way = $is_one_way;
        
        return $this;
    }
    /**
     * Get booking_id value
     * @return string|null
     */
    public function getBooking_id(): ?string
    {
        return $this->{'booking-id'};
    }
    /**
     * Set booking_id value
     * @param string $booking_id
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setBooking_id(?string $booking_id = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_id) && !is_string($booking_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_id, true), gettype($booking_id)), __LINE__);
        }
        $this->booking_id = $this->{'booking-id'} = $booking_id;
        
        return $this;
    }
    /**
     * Get booking_version value
     * @return string|null
     */
    public function getBooking_version(): ?string
    {
        return $this->{'booking-version'};
    }
    /**
     * Set booking_version value
     * @param string $booking_version
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setBooking_version(?string $booking_version = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_version) && !is_string($booking_version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_version, true), gettype($booking_version)), __LINE__);
        }
        $this->booking_version = $this->{'booking-version'} = $booking_version;
        
        return $this;
    }
    /**
     * Get supplier_agency value
     * @return string|null
     */
    public function getSupplier_agency(): ?string
    {
        return $this->supplier_agency;
    }
    /**
     * Set supplier_agency value
     * @param string $supplier_agency
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSupplier_agency(?string $supplier_agency = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_agency) && !is_string($supplier_agency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_agency, true), gettype($supplier_agency)), __LINE__);
        }
        $this->supplier_agency = $supplier_agency;
        
        return $this;
    }
    /**
     * Get reference_booking_id value
     * @return string|null
     */
    public function getReference_booking_id(): ?string
    {
        return $this->{'reference-booking-id'};
    }
    /**
     * Set reference_booking_id value
     * @param string $reference_booking_id
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReference_booking_id(?string $reference_booking_id = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_booking_id) && !is_string($reference_booking_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_booking_id, true), gettype($reference_booking_id)), __LINE__);
        }
        $this->reference_booking_id = $this->{'reference-booking-id'} = $reference_booking_id;
        
        return $this;
    }
    /**
     * Get reference_type value
     * @return string|null
     */
    public function getReference_type(): ?string
    {
        return $this->{'reference-type'};
    }
    /**
     * Set reference_type value
     * @param string $reference_type
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReference_type(?string $reference_type = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_type) && !is_string($reference_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_type, true), gettype($reference_type)), __LINE__);
        }
        $this->reference_type = $this->{'reference-type'} = $reference_type;
        
        return $this;
    }
    /**
     * Get reference_url value
     * @return string|null
     */
    public function getReference_url(): ?string
    {
        return $this->reference_url;
    }
    /**
     * Set reference_url value
     * @param string $reference_url
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setReference_url(?string $reference_url = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_url) && !is_string($reference_url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_url, true), gettype($reference_url)), __LINE__);
        }
        $this->reference_url = $reference_url;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
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
    /**
     * Get configuration_ref value
     * @return int|null
     */
    public function getConfiguration_ref(): ?int
    {
        return $this->{'configuration-ref'};
    }
    /**
     * Set configuration_ref value
     * @param int $configuration_ref
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setConfiguration_ref(?int $configuration_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($configuration_ref) && !(is_int($configuration_ref) || ctype_digit($configuration_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configuration_ref, true), gettype($configuration_ref)), __LINE__);
        }
        $this->configuration_ref = $this->{'configuration-ref'} = $configuration_ref;
        
        return $this;
    }
    /**
     * Get package_ref value
     * @return int|null
     */
    public function getPackage_ref(): ?int
    {
        return $this->{'package-ref'};
    }
    /**
     * Set package_ref value
     * @param int $package_ref
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setPackage_ref(?int $package_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($package_ref) && !(is_int($package_ref) || ctype_digit($package_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($package_ref, true), gettype($package_ref)), __LINE__);
        }
        $this->package_ref = $this->{'package-ref'} = $package_ref;
        
        return $this;
    }
    /**
     * Get prevent_printing value
     * @return bool|null
     */
    public function getPrevent_printing(): ?bool
    {
        return $this->{'prevent-printing'};
    }
    /**
     * Set prevent_printing value
     * @param bool $prevent_printing
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setPrevent_printing(?bool $prevent_printing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prevent_printing) && !is_bool($prevent_printing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prevent_printing, true), gettype($prevent_printing)), __LINE__);
        }
        $this->prevent_printing = $this->{'prevent-printing'} = $prevent_printing;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get booking_date value
     * @return string|null
     */
    public function getBooking_date(): ?string
    {
        return $this->{'booking-date'};
    }
    /**
     * Set booking_date value
     * @param string $booking_date
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setBooking_date(?string $booking_date = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_date) && !is_string($booking_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_date, true), gettype($booking_date)), __LINE__);
        }
        $this->booking_date = $this->{'booking-date'} = $booking_date;
        
        return $this;
    }
    /**
     * Get creation_date value
     * @return string|null
     */
    public function getCreation_date(): ?string
    {
        return $this->{'creation-date'};
    }
    /**
     * Set creation_date value
     * @param string $creation_date
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setCreation_date(?string $creation_date = null): self
    {
        // validation for constraint: string
        if (!is_null($creation_date) && !is_string($creation_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creation_date, true), gettype($creation_date)), __LINE__);
        }
        $this->creation_date = $this->{'creation-date'} = $creation_date;
        
        return $this;
    }
    /**
     * Get selling_mode value
     * @return string|null
     */
    public function getSelling_mode(): ?string
    {
        return $this->{'selling-mode'};
    }
    /**
     * Set selling_mode value
     * @uses \Pggns\MidocoApi\Bank\EnumType\BookingSellingModeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\BookingSellingModeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $selling_mode
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSelling_mode(?string $selling_mode = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\BookingSellingModeType::valueIsValid($selling_mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\BookingSellingModeType', is_array($selling_mode) ? implode(', ', $selling_mode) : var_export($selling_mode, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\BookingSellingModeType::getValidValues())), __LINE__);
        }
        $this->selling_mode = $this->{'selling-mode'} = $selling_mode;
        
        return $this;
    }
    /**
     * Get confirmation_group value
     * @return string|null
     */
    public function getConfirmation_group(): ?string
    {
        return $this->{'confirmation-group'};
    }
    /**
     * Set confirmation_group value
     * @param string $confirmation_group
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setConfirmation_group(?string $confirmation_group = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmation_group) && !is_string($confirmation_group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmation_group, true), gettype($confirmation_group)), __LINE__);
        }
        $this->confirmation_group = $this->{'confirmation-group'} = $confirmation_group;
        
        return $this;
    }
    /**
     * Get mobility_indicator value
     * @return bool|null
     */
    public function getMobility_indicator(): ?bool
    {
        return $this->{'mobility-indicator'};
    }
    /**
     * Set mobility_indicator value
     * @param bool $mobility_indicator
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setMobility_indicator(?bool $mobility_indicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mobility_indicator) && !is_bool($mobility_indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobility_indicator, true), gettype($mobility_indicator)), __LINE__);
        }
        $this->mobility_indicator = $this->{'mobility-indicator'} = $mobility_indicator;
        
        return $this;
    }
    /**
     * Get contract_time value
     * @return string|null
     */
    public function getContract_time(): ?string
    {
        return $this->{'contract-time'};
    }
    /**
     * Set contract_time value
     * @param string $contract_time
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setContract_time(?string $contract_time = null): self
    {
        // validation for constraint: string
        if (!is_null($contract_time) && !is_string($contract_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_time, true), gettype($contract_time)), __LINE__);
        }
        $this->contract_time = $this->{'contract-time'} = $contract_time;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
        return $this;
    }
    /**
     * Get settlement_type value
     * @return string|null
     */
    public function getSettlement_type(): ?string
    {
        return $this->{'settlement-type'};
    }
    /**
     * Set settlement_type value
     * @param string $settlement_type
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setSettlement_type(?string $settlement_type = null): self
    {
        // validation for constraint: string
        if (!is_null($settlement_type) && !is_string($settlement_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlement_type, true), gettype($settlement_type)), __LINE__);
        }
        $this->settlement_type = $this->{'settlement-type'} = $settlement_type;
        
        return $this;
    }
    /**
     * Get group_item_name value
     * @return string|null
     */
    public function getGroup_item_name(): ?string
    {
        return $this->{'group-item-name'};
    }
    /**
     * Set group_item_name value
     * @param string $group_item_name
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setGroup_item_name(?string $group_item_name = null): self
    {
        // validation for constraint: string
        if (!is_null($group_item_name) && !is_string($group_item_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group_item_name, true), gettype($group_item_name)), __LINE__);
        }
        $this->group_item_name = $this->{'group-item-name'} = $group_item_name;
        
        return $this;
    }
    /**
     * Get group_item_flag value
     * @return bool|null
     */
    public function getGroup_item_flag(): ?bool
    {
        return $this->{'group-item-flag'};
    }
    /**
     * Set group_item_flag value
     * @param bool $group_item_flag
     * @return \Pggns\MidocoApi\Bank\StructType\Booking
     */
    public function setGroup_item_flag(?bool $group_item_flag = null): self
    {
        // validation for constraint: boolean
        if (!is_null($group_item_flag) && !is_bool($group_item_flag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($group_item_flag, true), gettype($group_item_flag)), __LINE__);
        }
        $this->group_item_flag = $this->{'group-item-flag'} = $group_item_flag;
        
        return $this;
    }
}
