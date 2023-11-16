<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementEntryWorkingUserResponse StructType
 * @subpackage Structs
 */
class GetBankStatementEntryWorkingUserResponse extends AbstractStructBase
{
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * The workingTimestamp
     * @var string|null
     */
    protected ?string $workingTimestamp = null;
    /**
     * Constructor method for GetBankStatementEntryWorkingUserResponse
     * @uses GetBankStatementEntryWorkingUserResponse::setWorkingUser()
     * @uses GetBankStatementEntryWorkingUserResponse::setWorkingTimestamp()
     * @param int $workingUser
     * @param string $workingTimestamp
     */
    public function __construct(?int $workingUser = null, ?string $workingTimestamp = null)
    {
        $this
            ->setWorkingUser($workingUser)
            ->setWorkingTimestamp($workingTimestamp);
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserResponse
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
    /**
     * Get workingTimestamp value
     * @return string|null
     */
    public function getWorkingTimestamp(): ?string
    {
        return $this->workingTimestamp;
    }
    /**
     * Set workingTimestamp value
     * @param string $workingTimestamp
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserResponse
     */
    public function setWorkingTimestamp(?string $workingTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($workingTimestamp) && !is_string($workingTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingTimestamp, true), gettype($workingTimestamp)), __LINE__);
        }
        $this->workingTimestamp = $workingTimestamp;
        
        return $this;
    }
}
