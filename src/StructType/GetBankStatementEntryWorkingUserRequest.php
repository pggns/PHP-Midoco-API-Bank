<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementEntryWorkingUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankStatementEntryWorkingUserRequest extends AbstractStructBase
{
    /**
     * The accountPosition
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $accountPosition;
    /**
     * The statementId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $statementId;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * Constructor method for GetBankStatementEntryWorkingUserRequest
     * @uses GetBankStatementEntryWorkingUserRequest::setAccountPosition()
     * @uses GetBankStatementEntryWorkingUserRequest::setStatementId()
     * @uses GetBankStatementEntryWorkingUserRequest::setPosition()
     * @param int $accountPosition
     * @param int $statementId
     * @param int $position
     */
    public function __construct(int $accountPosition, int $statementId, int $position)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setStatementId($statementId)
            ->setPosition($position);
    }
    /**
     * Get accountPosition value
     * @return int
     */
    public function getAccountPosition(): int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest
     */
    public function setAccountPosition(int $accountPosition): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int
     */
    public function getStatementId(): int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest
     */
    public function setStatementId(int $statementId): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest
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
}
