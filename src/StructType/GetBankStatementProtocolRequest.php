<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementProtocolRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankStatementProtocolRequest extends AbstractStructBase
{
    /**
     * The protocolId
     * @var int|null
     */
    protected ?int $protocolId = null;
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
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for GetBankStatementProtocolRequest
     * @uses GetBankStatementProtocolRequest::setProtocolId()
     * @uses GetBankStatementProtocolRequest::setStatementId()
     * @uses GetBankStatementProtocolRequest::setAccountPosition()
     * @uses GetBankStatementProtocolRequest::setRepositoryId()
     * @param int $protocolId
     * @param int $statementId
     * @param int $accountPosition
     * @param int $repositoryId
     */
    public function __construct(?int $protocolId = null, ?int $statementId = null, ?int $accountPosition = null, ?int $repositoryId = null)
    {
        $this
            ->setProtocolId($protocolId)
            ->setStatementId($statementId)
            ->setAccountPosition($accountPosition)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get protocolId value
     * @return int|null
     */
    public function getProtocolId(): ?int
    {
        return $this->protocolId;
    }
    /**
     * Set protocolId value
     * @param int $protocolId
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest
     */
    public function setProtocolId(?int $protocolId = null): self
    {
        // validation for constraint: int
        if (!is_null($protocolId) && !(is_int($protocolId) || ctype_digit($protocolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($protocolId, true), gettype($protocolId)), __LINE__);
        }
        $this->protocolId = $protocolId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest
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
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
