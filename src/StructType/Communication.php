<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for communication StructType
 * Meta information extracted from the WSDL
 * - documentation: How to communicate with the customer (telephone, email, fax etc).
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Communication extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $type;
    /**
     * The communication_data
     * Meta information extracted from the WSDL
     * - documentation: The data for communication (a telephone no, an email address etc)
     * @var string|null
     */
    protected ?string $communication_data = null;
    /**
     * The Consent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Consent
     * @var \Pggns\MidocoApi\Bank\StructType\ConsentType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ConsentType $Consent = null;
    /**
     * The use_for_mailing
     * Meta information extracted from the WSDL
     * - documentation: Boolean field, which can be used to suppress usage of this information for mailings
     * - default: true
     * @var bool|null
     */
    protected ?bool $use_for_mailing = null;
    /**
     * Constructor method for communication
     * @uses Communication::setType()
     * @uses Communication::setCommunication_data()
     * @uses Communication::setConsent()
     * @uses Communication::setUse_for_mailing()
     * @param string $type
     * @param string $communication_data
     * @param \Pggns\MidocoApi\Bank\StructType\ConsentType $consent
     * @param bool $use_for_mailing
     */
    public function __construct(string $type, ?string $communication_data = null, ?\Pggns\MidocoApi\Bank\StructType\ConsentType $consent = null, ?bool $use_for_mailing = true)
    {
        $this
            ->setType($type)
            ->setCommunication_data($communication_data)
            ->setConsent($consent)
            ->setUse_for_mailing($use_for_mailing);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Bank\StructType\Communication
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get communication_data value
     * @return string|null
     */
    public function getCommunication_data(): ?string
    {
        return $this->{'communication-data'};
    }
    /**
     * Set communication_data value
     * @param string $communication_data
     * @return \Pggns\MidocoApi\Bank\StructType\Communication
     */
    public function setCommunication_data(?string $communication_data = null): self
    {
        // validation for constraint: string
        if (!is_null($communication_data) && !is_string($communication_data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($communication_data, true), gettype($communication_data)), __LINE__);
        }
        $this->communication_data = $this->{'communication-data'} = $communication_data;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Communication
     */
    public function setConsent(?\Pggns\MidocoApi\Bank\StructType\ConsentType $consent = null): self
    {
        $this->Consent = $consent;
        
        return $this;
    }
    /**
     * Get use_for_mailing value
     * @return bool|null
     */
    public function getUse_for_mailing(): ?bool
    {
        return $this->{'use-for-mailing'};
    }
    /**
     * Set use_for_mailing value
     * @param bool $use_for_mailing
     * @return \Pggns\MidocoApi\Bank\StructType\Communication
     */
    public function setUse_for_mailing(?bool $use_for_mailing = true): self
    {
        // validation for constraint: boolean
        if (!is_null($use_for_mailing) && !is_bool($use_for_mailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use_for_mailing, true), gettype($use_for_mailing)), __LINE__);
        }
        $this->use_for_mailing = $this->{'use-for-mailing'} = $use_for_mailing;
        
        return $this;
    }
}
