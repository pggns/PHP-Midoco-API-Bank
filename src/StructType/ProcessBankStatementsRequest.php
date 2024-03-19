<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessBankStatementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessBankStatementsRequest extends AbstractStructBase
{
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * Constructor method for ProcessBankStatementsRequest
     * @uses ProcessBankStatementsRequest::setStatementId()
     * @uses ProcessBankStatementsRequest::setAccountPosition()
     * @param int $statementId
     * @param int $accountPosition
     */
    public function __construct(?int $statementId = null, ?int $accountPosition = null)
    {
        $this
            ->setStatementId($statementId)
            ->setAccountPosition($accountPosition);
    }
    /**
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsRequest
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsRequest
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
}
