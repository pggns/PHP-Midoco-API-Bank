<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryRestAsProvRequest StructType
 * @subpackage Structs
 */
class GetEntryRestAsProvRequest extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The name1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name1 = null;
    /**
     * Constructor method for GetEntryRestAsProvRequest
     * @uses GetEntryRestAsProvRequest::setAccountId()
     * @uses GetEntryRestAsProvRequest::setPlanId()
     * @uses GetEntryRestAsProvRequest::setEntryId()
     * @uses GetEntryRestAsProvRequest::setAmount()
     * @uses GetEntryRestAsProvRequest::setName1()
     * @param string $accountId
     * @param string $planId
     * @param string $entryId
     * @param float $amount
     * @param string $name1
     */
    public function __construct(?string $accountId = null, ?string $planId = null, ?string $entryId = null, ?float $amount = null, ?string $name1 = null)
    {
        $this
            ->setAccountId($accountId)
            ->setPlanId($planId)
            ->setEntryId($entryId)
            ->setAmount($amount)
            ->setName1($name1);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get name1 value
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->name1;
    }
    /**
     * Set name1 value
     * @param string $name1
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest
     */
    public function setName1(?string $name1 = null): self
    {
        // validation for constraint: string
        if (!is_null($name1) && !is_string($name1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name1, true), gettype($name1)), __LINE__);
        }
        $this->name1 = $name1;
        
        return $this;
    }
}
