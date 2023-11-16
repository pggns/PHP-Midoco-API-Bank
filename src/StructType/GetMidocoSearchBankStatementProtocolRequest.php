<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSearchBankStatementProtocolRequest StructType
 * @subpackage Structs
 */
class GetMidocoSearchBankStatementProtocolRequest extends AbstractStructBase
{
    /**
     * The bookingDateFrom
     * @var string|null
     */
    protected ?string $bookingDateFrom = null;
    /**
     * The bookingDateUntil
     * @var string|null
     */
    protected ?string $bookingDateUntil = null;
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
     * Constructor method for GetMidocoSearchBankStatementProtocolRequest
     * @uses GetMidocoSearchBankStatementProtocolRequest::setBookingDateFrom()
     * @uses GetMidocoSearchBankStatementProtocolRequest::setBookingDateUntil()
     * @uses GetMidocoSearchBankStatementProtocolRequest::setAccountInfo()
     * @uses GetMidocoSearchBankStatementProtocolRequest::setStatementNo()
     * @param string $bookingDateFrom
     * @param string $bookingDateUntil
     * @param string $accountInfo
     * @param string $statementNo
     */
    public function __construct(?string $bookingDateFrom = null, ?string $bookingDateUntil = null, ?string $accountInfo = null, ?string $statementNo = null)
    {
        $this
            ->setBookingDateFrom($bookingDateFrom)
            ->setBookingDateUntil($bookingDateUntil)
            ->setAccountInfo($accountInfo)
            ->setStatementNo($statementNo);
    }
    /**
     * Get bookingDateFrom value
     * @return string|null
     */
    public function getBookingDateFrom(): ?string
    {
        return $this->bookingDateFrom;
    }
    /**
     * Set bookingDateFrom value
     * @param string $bookingDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest
     */
    public function setBookingDateFrom(?string $bookingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateFrom) && !is_string($bookingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateFrom, true), gettype($bookingDateFrom)), __LINE__);
        }
        $this->bookingDateFrom = $bookingDateFrom;
        
        return $this;
    }
    /**
     * Get bookingDateUntil value
     * @return string|null
     */
    public function getBookingDateUntil(): ?string
    {
        return $this->bookingDateUntil;
    }
    /**
     * Set bookingDateUntil value
     * @param string $bookingDateUntil
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest
     */
    public function setBookingDateUntil(?string $bookingDateUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateUntil) && !is_string($bookingDateUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateUntil, true), gettype($bookingDateUntil)), __LINE__);
        }
        $this->bookingDateUntil = $bookingDateUntil;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest
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
}
