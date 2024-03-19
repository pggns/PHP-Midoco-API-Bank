<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: optional dunning infos at order level
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DunningInfo extends AbstractStructBase
{
    /**
     * The dunning_date
     * Meta information extracted from the WSDL
     * - documentation: date of dunning
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $dunning_date = null;
    /**
     * The payment_due_date
     * Meta information extracted from the WSDL
     * - documentation: payment due date of dunning
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $payment_due_date = null;
    /**
     * The deposit_dunning_date
     * Meta information extracted from the WSDL
     * - documentation: date of deposit dunning
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $deposit_dunning_date = null;
    /**
     * The deposit_payment_due_date
     * Meta information extracted from the WSDL
     * - documentation: payment due date of deposit dunning
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $deposit_payment_due_date = null;
    /**
     * Constructor method for DunningInfo
     * @uses DunningInfo::setDunning_date()
     * @uses DunningInfo::setPayment_due_date()
     * @uses DunningInfo::setDeposit_dunning_date()
     * @uses DunningInfo::setDeposit_payment_due_date()
     * @param string $dunning_date
     * @param string $payment_due_date
     * @param string $deposit_dunning_date
     * @param string $deposit_payment_due_date
     */
    public function __construct(?string $dunning_date = null, ?string $payment_due_date = null, ?string $deposit_dunning_date = null, ?string $deposit_payment_due_date = null)
    {
        $this
            ->setDunning_date($dunning_date)
            ->setPayment_due_date($payment_due_date)
            ->setDeposit_dunning_date($deposit_dunning_date)
            ->setDeposit_payment_due_date($deposit_payment_due_date);
    }
    /**
     * Get dunning_date value
     * @return string|null
     */
    public function getDunning_date(): ?string
    {
        return $this->{'dunning-date'};
    }
    /**
     * Set dunning_date value
     * @param string $dunning_date
     * @return \Pggns\MidocoApi\Bank\StructType\DunningInfo
     */
    public function setDunning_date(?string $dunning_date = null): self
    {
        // validation for constraint: string
        if (!is_null($dunning_date) && !is_string($dunning_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunning_date, true), gettype($dunning_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($dunning_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $dunning_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($dunning_date, true)), __LINE__);
        }
        $this->dunning_date = $this->{'dunning-date'} = $dunning_date;
        
        return $this;
    }
    /**
     * Get payment_due_date value
     * @return string|null
     */
    public function getPayment_due_date(): ?string
    {
        return $this->{'payment-due-date'};
    }
    /**
     * Set payment_due_date value
     * @param string $payment_due_date
     * @return \Pggns\MidocoApi\Bank\StructType\DunningInfo
     */
    public function setPayment_due_date(?string $payment_due_date = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_due_date) && !is_string($payment_due_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_due_date, true), gettype($payment_due_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($payment_due_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $payment_due_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($payment_due_date, true)), __LINE__);
        }
        $this->payment_due_date = $this->{'payment-due-date'} = $payment_due_date;
        
        return $this;
    }
    /**
     * Get deposit_dunning_date value
     * @return string|null
     */
    public function getDeposit_dunning_date(): ?string
    {
        return $this->{'deposit-dunning-date'};
    }
    /**
     * Set deposit_dunning_date value
     * @param string $deposit_dunning_date
     * @return \Pggns\MidocoApi\Bank\StructType\DunningInfo
     */
    public function setDeposit_dunning_date(?string $deposit_dunning_date = null): self
    {
        // validation for constraint: string
        if (!is_null($deposit_dunning_date) && !is_string($deposit_dunning_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deposit_dunning_date, true), gettype($deposit_dunning_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($deposit_dunning_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $deposit_dunning_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($deposit_dunning_date, true)), __LINE__);
        }
        $this->deposit_dunning_date = $this->{'deposit-dunning-date'} = $deposit_dunning_date;
        
        return $this;
    }
    /**
     * Get deposit_payment_due_date value
     * @return string|null
     */
    public function getDeposit_payment_due_date(): ?string
    {
        return $this->{'deposit-payment-due-date'};
    }
    /**
     * Set deposit_payment_due_date value
     * @param string $deposit_payment_due_date
     * @return \Pggns\MidocoApi\Bank\StructType\DunningInfo
     */
    public function setDeposit_payment_due_date(?string $deposit_payment_due_date = null): self
    {
        // validation for constraint: string
        if (!is_null($deposit_payment_due_date) && !is_string($deposit_payment_due_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deposit_payment_due_date, true), gettype($deposit_payment_due_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($deposit_payment_due_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $deposit_payment_due_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($deposit_payment_due_date, true)), __LINE__);
        }
        $this->deposit_payment_due_date = $this->{'deposit-payment-due-date'} = $deposit_payment_due_date;
        
        return $this;
    }
}
