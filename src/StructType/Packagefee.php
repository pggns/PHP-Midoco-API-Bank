<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packagefee StructType
 * Meta information extracted from the WSDL
 * - documentation: Service fee information, calculated by a delivering system, like storno fee, change fee, name change fee etc.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Packagefee extends AbstractStructBase
{
    /**
     * The fee_code
     * @var string|null
     */
    protected ?string $fee_code = null;
    /**
     * The fee_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fee_description = null;
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
     * The vat_free_amount
     * Meta information extracted from the WSDL
     * - documentation: standard: use vat-free amount for whole fee amount
     * @var float|null
     */
    protected ?float $vat_free_amount = null;
    /**
     * The taxable_amount
     * Meta information extracted from the WSDL
     * - documentation: fee (or part of the fee) which should be added a vat amount
     * @var float|null
     */
    protected ?float $taxable_amount = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - documentation: set to true, when in a taxable amount a vat is already included and should be calculated instead of adding it to the provided value
     * @var bool|null
     */
    protected ?bool $vat_included = null;
    /**
     * The fee_calculation_info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fee_calculation_info = null;
    /**
     * The supplier_id
     * @var string|null
     */
    protected ?string $supplier_id = null;
    /**
     * The booking_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_id = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - default: OK
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The prevent_printing
     * Meta information extracted from the WSDL
     * - documentation: if true the fee is not printed from midoco midoffice
     * @var bool|null
     */
    protected ?bool $prevent_printing = null;
    /**
     * Constructor method for packagefee
     * @uses Packagefee::setFee_code()
     * @uses Packagefee::setFee_description()
     * @uses Packagefee::setTotal_price()
     * @uses Packagefee::setCurrency()
     * @uses Packagefee::setVat_free_amount()
     * @uses Packagefee::setTaxable_amount()
     * @uses Packagefee::setVat_included()
     * @uses Packagefee::setFee_calculation_info()
     * @uses Packagefee::setSupplier_id()
     * @uses Packagefee::setBooking_id()
     * @uses Packagefee::setStatus()
     * @uses Packagefee::setPosition()
     * @uses Packagefee::setPrevent_printing()
     * @param string $fee_code
     * @param string $fee_description
     * @param float $total_price
     * @param string $currency
     * @param float $vat_free_amount
     * @param float $taxable_amount
     * @param bool $vat_included
     * @param string $fee_calculation_info
     * @param string $supplier_id
     * @param string $booking_id
     * @param string $status
     * @param int $position
     * @param bool $prevent_printing
     */
    public function __construct(?string $fee_code = null, ?string $fee_description = null, ?float $total_price = null, ?string $currency = null, ?float $vat_free_amount = null, ?float $taxable_amount = null, ?bool $vat_included = null, ?string $fee_calculation_info = null, ?string $supplier_id = null, ?string $booking_id = null, ?string $status = 'OK', ?int $position = null, ?bool $prevent_printing = null)
    {
        $this
            ->setFee_code($fee_code)
            ->setFee_description($fee_description)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setVat_free_amount($vat_free_amount)
            ->setTaxable_amount($taxable_amount)
            ->setVat_included($vat_included)
            ->setFee_calculation_info($fee_calculation_info)
            ->setSupplier_id($supplier_id)
            ->setBooking_id($booking_id)
            ->setStatus($status)
            ->setPosition($position)
            ->setPrevent_printing($prevent_printing);
    }
    /**
     * Get fee_code value
     * @return string|null
     */
    public function getFee_code(): ?string
    {
        return $this->{'fee-code'};
    }
    /**
     * Set fee_code value
     * @param string $fee_code
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setFee_code(?string $fee_code = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_code) && !is_string($fee_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_code, true), gettype($fee_code)), __LINE__);
        }
        $this->fee_code = $this->{'fee-code'} = $fee_code;
        
        return $this;
    }
    /**
     * Get fee_description value
     * @return string|null
     */
    public function getFee_description(): ?string
    {
        return $this->{'fee-description'};
    }
    /**
     * Set fee_description value
     * @param string $fee_description
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setFee_description(?string $fee_description = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_description) && !is_string($fee_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_description, true), gettype($fee_description)), __LINE__);
        }
        $this->fee_description = $this->{'fee-description'} = $fee_description;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
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
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
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
     * Get vat_free_amount value
     * @return float|null
     */
    public function getVat_free_amount(): ?float
    {
        return $this->{'vat-free-amount'};
    }
    /**
     * Set vat_free_amount value
     * @param float $vat_free_amount
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setVat_free_amount(?float $vat_free_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_free_amount) && !(is_float($vat_free_amount) || is_numeric($vat_free_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_free_amount, true), gettype($vat_free_amount)), __LINE__);
        }
        $this->vat_free_amount = $this->{'vat-free-amount'} = $vat_free_amount;
        
        return $this;
    }
    /**
     * Get taxable_amount value
     * @return float|null
     */
    public function getTaxable_amount(): ?float
    {
        return $this->{'taxable-amount'};
    }
    /**
     * Set taxable_amount value
     * @param float $taxable_amount
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setTaxable_amount(?float $taxable_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxable_amount) && !(is_float($taxable_amount) || is_numeric($taxable_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxable_amount, true), gettype($taxable_amount)), __LINE__);
        }
        $this->taxable_amount = $this->{'taxable-amount'} = $taxable_amount;
        
        return $this;
    }
    /**
     * Get vat_included value
     * @return bool|null
     */
    public function getVat_included(): ?bool
    {
        return $this->{'vat-included'};
    }
    /**
     * Set vat_included value
     * @param bool $vat_included
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setVat_included(?bool $vat_included = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vat_included) && !is_bool($vat_included)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vat_included, true), gettype($vat_included)), __LINE__);
        }
        $this->vat_included = $this->{'vat-included'} = $vat_included;
        
        return $this;
    }
    /**
     * Get fee_calculation_info value
     * @return string|null
     */
    public function getFee_calculation_info(): ?string
    {
        return $this->{'fee-calculation-info'};
    }
    /**
     * Set fee_calculation_info value
     * @param string $fee_calculation_info
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setFee_calculation_info(?string $fee_calculation_info = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_calculation_info) && !is_string($fee_calculation_info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_calculation_info, true), gettype($fee_calculation_info)), __LINE__);
        }
        $this->fee_calculation_info = $this->{'fee-calculation-info'} = $fee_calculation_info;
        
        return $this;
    }
    /**
     * Get supplier_id value
     * @return string|null
     */
    public function getSupplier_id(): ?string
    {
        return $this->{'supplier-id'};
    }
    /**
     * Set supplier_id value
     * @param string $supplier_id
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setSupplier_id(?string $supplier_id = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_id) && !is_string($supplier_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_id, true), gettype($supplier_id)), __LINE__);
        }
        $this->supplier_id = $this->{'supplier-id'} = $supplier_id;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setStatus(?string $status = 'OK'): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\Packagefee
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
}
