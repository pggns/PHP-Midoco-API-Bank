<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalFlightPassengerInfos StructType
 * @subpackage Structs
 */
class AdditionalFlightPassengerInfos extends AbstractStructBase
{
    /**
     * The frequent_flyer_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_type = null;
    /**
     * The frequent_flyer_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_no = null;
    /**
     * The frequent_flyer_airline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $frequent_flyer_airline = null;
    /**
     * The identity_card_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identity_card_type = null;
    /**
     * The identity_card_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $identity_card_no = null;
    /**
     * The identity_card_required
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $identity_card_required = null;
    /**
     * The ticket_mail
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ticket_mail = null;
    /**
     * Constructor method for AdditionalFlightPassengerInfos
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_type()
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_no()
     * @uses AdditionalFlightPassengerInfos::setFrequent_flyer_airline()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_type()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_no()
     * @uses AdditionalFlightPassengerInfos::setIdentity_card_required()
     * @uses AdditionalFlightPassengerInfos::setTicket_mail()
     * @param string $frequent_flyer_type
     * @param string $frequent_flyer_no
     * @param string $frequent_flyer_airline
     * @param string $identity_card_type
     * @param string $identity_card_no
     * @param bool $identity_card_required
     * @param bool $ticket_mail
     */
    public function __construct(?string $frequent_flyer_type = null, ?string $frequent_flyer_no = null, ?string $frequent_flyer_airline = null, ?string $identity_card_type = null, ?string $identity_card_no = null, ?bool $identity_card_required = false, ?bool $ticket_mail = false)
    {
        $this
            ->setFrequent_flyer_type($frequent_flyer_type)
            ->setFrequent_flyer_no($frequent_flyer_no)
            ->setFrequent_flyer_airline($frequent_flyer_airline)
            ->setIdentity_card_type($identity_card_type)
            ->setIdentity_card_no($identity_card_no)
            ->setIdentity_card_required($identity_card_required)
            ->setTicket_mail($ticket_mail);
    }
    /**
     * Get frequent_flyer_type value
     * @return string|null
     */
    public function getFrequent_flyer_type(): ?string
    {
        return $this->{'frequent-flyer-type'};
    }
    /**
     * Set frequent_flyer_type value
     * @param string $frequent_flyer_type
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_type(?string $frequent_flyer_type = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_type) && !is_string($frequent_flyer_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_type, true), gettype($frequent_flyer_type)), __LINE__);
        }
        $this->frequent_flyer_type = $this->{'frequent-flyer-type'} = $frequent_flyer_type;
        
        return $this;
    }
    /**
     * Get frequent_flyer_no value
     * @return string|null
     */
    public function getFrequent_flyer_no(): ?string
    {
        return $this->{'frequent-flyer-no'};
    }
    /**
     * Set frequent_flyer_no value
     * @param string $frequent_flyer_no
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_no(?string $frequent_flyer_no = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_no) && !is_string($frequent_flyer_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_no, true), gettype($frequent_flyer_no)), __LINE__);
        }
        $this->frequent_flyer_no = $this->{'frequent-flyer-no'} = $frequent_flyer_no;
        
        return $this;
    }
    /**
     * Get frequent_flyer_airline value
     * @return string|null
     */
    public function getFrequent_flyer_airline(): ?string
    {
        return $this->{'frequent-flyer-airline'};
    }
    /**
     * Set frequent_flyer_airline value
     * @param string $frequent_flyer_airline
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setFrequent_flyer_airline(?string $frequent_flyer_airline = null): self
    {
        // validation for constraint: string
        if (!is_null($frequent_flyer_airline) && !is_string($frequent_flyer_airline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequent_flyer_airline, true), gettype($frequent_flyer_airline)), __LINE__);
        }
        $this->frequent_flyer_airline = $this->{'frequent-flyer-airline'} = $frequent_flyer_airline;
        
        return $this;
    }
    /**
     * Get identity_card_type value
     * @return string|null
     */
    public function getIdentity_card_type(): ?string
    {
        return $this->{'identity-card-type'};
    }
    /**
     * Set identity_card_type value
     * @param string $identity_card_type
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_type(?string $identity_card_type = null): self
    {
        // validation for constraint: string
        if (!is_null($identity_card_type) && !is_string($identity_card_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identity_card_type, true), gettype($identity_card_type)), __LINE__);
        }
        $this->identity_card_type = $this->{'identity-card-type'} = $identity_card_type;
        
        return $this;
    }
    /**
     * Get identity_card_no value
     * @return string|null
     */
    public function getIdentity_card_no(): ?string
    {
        return $this->{'identity-card-no'};
    }
    /**
     * Set identity_card_no value
     * @param string $identity_card_no
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_no(?string $identity_card_no = null): self
    {
        // validation for constraint: string
        if (!is_null($identity_card_no) && !is_string($identity_card_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identity_card_no, true), gettype($identity_card_no)), __LINE__);
        }
        $this->identity_card_no = $this->{'identity-card-no'} = $identity_card_no;
        
        return $this;
    }
    /**
     * Get identity_card_required value
     * @return bool|null
     */
    public function getIdentity_card_required(): ?bool
    {
        return $this->{'identity-card-required'};
    }
    /**
     * Set identity_card_required value
     * @param bool $identity_card_required
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setIdentity_card_required(?bool $identity_card_required = false): self
    {
        // validation for constraint: boolean
        if (!is_null($identity_card_required) && !is_bool($identity_card_required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($identity_card_required, true), gettype($identity_card_required)), __LINE__);
        }
        $this->identity_card_required = $this->{'identity-card-required'} = $identity_card_required;
        
        return $this;
    }
    /**
     * Get ticket_mail value
     * @return bool|null
     */
    public function getTicket_mail(): ?bool
    {
        return $this->{'ticket-mail'};
    }
    /**
     * Set ticket_mail value
     * @param bool $ticket_mail
     * @return \Pggns\MidocoApi\Bank\StructType\AdditionalFlightPassengerInfos
     */
    public function setTicket_mail(?bool $ticket_mail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ticket_mail) && !is_bool($ticket_mail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticket_mail, true), gettype($ticket_mail)), __LINE__);
        }
        $this->ticket_mail = $this->{'ticket-mail'} = $ticket_mail;
        
        return $this;
    }
}
