<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEntryHistoryRequest extends AbstractStructBase
{
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
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
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dueDateFrom
     * @var string|null
     */
    protected ?string $dueDateFrom = null;
    /**
     * The dueDateTo
     * @var string|null
     */
    protected ?string $dueDateTo = null;
    /**
     * Constructor method for GetEntryHistoryRequest
     * @uses GetEntryHistoryRequest::setEntryId()
     * @uses GetEntryHistoryRequest::setAccountId()
     * @uses GetEntryHistoryRequest::setPlanId()
     * @uses GetEntryHistoryRequest::setCustomerId()
     * @uses GetEntryHistoryRequest::setDueDateFrom()
     * @uses GetEntryHistoryRequest::setDueDateTo()
     * @param string $entryId
     * @param string $accountId
     * @param string $planId
     * @param int $customerId
     * @param string $dueDateFrom
     * @param string $dueDateTo
     */
    public function __construct(?string $entryId = null, ?string $accountId = null, ?string $planId = null, ?int $customerId = null, ?string $dueDateFrom = null, ?string $dueDateTo = null)
    {
        $this
            ->setEntryId($entryId)
            ->setAccountId($accountId)
            ->setPlanId($planId)
            ->setCustomerId($customerId)
            ->setDueDateFrom($dueDateFrom)
            ->setDueDateTo($dueDateTo);
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get dueDateFrom value
     * @return string|null
     */
    public function getDueDateFrom(): ?string
    {
        return $this->dueDateFrom;
    }
    /**
     * Set dueDateFrom value
     * @param string $dueDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
     */
    public function setDueDateFrom(?string $dueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateFrom) && !is_string($dueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateFrom, true), gettype($dueDateFrom)), __LINE__);
        }
        $this->dueDateFrom = $dueDateFrom;
        
        return $this;
    }
    /**
     * Get dueDateTo value
     * @return string|null
     */
    public function getDueDateTo(): ?string
    {
        return $this->dueDateTo;
    }
    /**
     * Set dueDateTo value
     * @param string $dueDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest
     */
    public function setDueDateTo(?string $dueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateTo) && !is_string($dueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateTo, true), gettype($dueDateTo)), __LINE__);
        }
        $this->dueDateTo = $dueDateTo;
        
        return $this;
    }
}
