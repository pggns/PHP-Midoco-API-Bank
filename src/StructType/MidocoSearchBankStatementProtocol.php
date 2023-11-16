<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSearchBankStatementProtocol StructType
 * @subpackage Structs
 */
class MidocoSearchBankStatementProtocol extends AbstractStructBase
{
    /**
     * The protocolId
     * @var int|null
     */
    protected ?int $protocolId = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The accountInfo
     * @var string|null
     */
    protected ?string $accountInfo = null;
    /**
     * The statementNo
     * @var string|null
     */
    protected ?string $statementNo = null;
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * Constructor method for MidocoSearchBankStatementProtocol
     * @uses MidocoSearchBankStatementProtocol::setProtocolId()
     * @uses MidocoSearchBankStatementProtocol::setRepositoryId()
     * @uses MidocoSearchBankStatementProtocol::setBookingDate()
     * @uses MidocoSearchBankStatementProtocol::setAccountInfo()
     * @uses MidocoSearchBankStatementProtocol::setStatementNo()
     * @uses MidocoSearchBankStatementProtocol::setAccountPosition()
     * @uses MidocoSearchBankStatementProtocol::setStatementId()
     * @param int $protocolId
     * @param int $repositoryId
     * @param string $bookingDate
     * @param string $accountInfo
     * @param string $statementNo
     * @param int $accountPosition
     * @param int $statementId
     */
    public function __construct(?int $protocolId = null, ?int $repositoryId = null, ?string $bookingDate = null, ?string $accountInfo = null, ?string $statementNo = null, ?int $accountPosition = null, ?int $statementId = null)
    {
        $this
            ->setProtocolId($protocolId)
            ->setRepositoryId($repositoryId)
            ->setBookingDate($bookingDate)
            ->setAccountInfo($accountInfo)
            ->setStatementNo($statementNo)
            ->setAccountPosition($accountPosition)
            ->setStatementId($statementId);
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
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
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get accountInfo value
     * @return string|null
     */
    public function getAccountInfo(): ?string
    {
        return $this->accountInfo;
    }
    /**
     * Set accountInfo value
     * @param string $accountInfo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
     */
    public function setAccountInfo(?string $accountInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountInfo) && !is_string($accountInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountInfo, true), gettype($accountInfo)), __LINE__);
        }
        $this->accountInfo = $accountInfo;
        
        return $this;
    }
    /**
     * Get statementNo value
     * @return string|null
     */
    public function getStatementNo(): ?string
    {
        return $this->statementNo;
    }
    /**
     * Set statementNo value
     * @param string $statementNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
     */
    public function setStatementNo(?string $statementNo = null): self
    {
        // validation for constraint: string
        if (!is_null($statementNo) && !is_string($statementNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementNo, true), gettype($statementNo)), __LINE__);
        }
        $this->statementNo = $statementNo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol
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
}
