<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankBookingJournalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankBookingJournalRequest extends AbstractStructBase
{
    /**
     * The automaticBooking
     * @var bool|null
     */
    protected ?bool $automaticBooking = null;
    /**
     * The infoAccount
     * @var string|null
     */
    protected ?string $infoAccount = null;
    /**
     * The infoBankNo
     * @var string|null
     */
    protected ?string $infoBankNo = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The debitCreditIndicator
     * @var string|null
     */
    protected ?string $debitCreditIndicator = null;
    /**
     * The MidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[]
     */
    protected ?array $MidocoBankBookingJournal = null;
    /**
     * Constructor method for SaveBankBookingJournalRequest
     * @uses SaveBankBookingJournalRequest::setAutomaticBooking()
     * @uses SaveBankBookingJournalRequest::setInfoAccount()
     * @uses SaveBankBookingJournalRequest::setInfoBankNo()
     * @uses SaveBankBookingJournalRequest::setBookingText()
     * @uses SaveBankBookingJournalRequest::setDebitCreditIndicator()
     * @uses SaveBankBookingJournalRequest::setMidocoBankBookingJournal()
     * @param bool $automaticBooking
     * @param string $infoAccount
     * @param string $infoBankNo
     * @param string $bookingText
     * @param string $debitCreditIndicator
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     */
    public function __construct(?bool $automaticBooking = null, ?string $infoAccount = null, ?string $infoBankNo = null, ?string $bookingText = null, ?string $debitCreditIndicator = null, ?array $midocoBankBookingJournal = null)
    {
        $this
            ->setAutomaticBooking($automaticBooking)
            ->setInfoAccount($infoAccount)
            ->setInfoBankNo($infoBankNo)
            ->setBookingText($bookingText)
            ->setDebitCreditIndicator($debitCreditIndicator)
            ->setMidocoBankBookingJournal($midocoBankBookingJournal);
    }
    /**
     * Get automaticBooking value
     * @return bool|null
     */
    public function getAutomaticBooking(): ?bool
    {
        return $this->automaticBooking;
    }
    /**
     * Set automaticBooking value
     * @param bool $automaticBooking
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setAutomaticBooking(?bool $automaticBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticBooking) && !is_bool($automaticBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticBooking, true), gettype($automaticBooking)), __LINE__);
        }
        $this->automaticBooking = $automaticBooking;
        
        return $this;
    }
    /**
     * Get infoAccount value
     * @return string|null
     */
    public function getInfoAccount(): ?string
    {
        return $this->infoAccount;
    }
    /**
     * Set infoAccount value
     * @param string $infoAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setInfoAccount(?string $infoAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($infoAccount) && !is_string($infoAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoAccount, true), gettype($infoAccount)), __LINE__);
        }
        $this->infoAccount = $infoAccount;
        
        return $this;
    }
    /**
     * Get infoBankNo value
     * @return string|null
     */
    public function getInfoBankNo(): ?string
    {
        return $this->infoBankNo;
    }
    /**
     * Set infoBankNo value
     * @param string $infoBankNo
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setInfoBankNo(?string $infoBankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($infoBankNo) && !is_string($infoBankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoBankNo, true), gettype($infoBankNo)), __LINE__);
        }
        $this->infoBankNo = $infoBankNo;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get debitCreditIndicator value
     * @return string|null
     */
    public function getDebitCreditIndicator(): ?string
    {
        return $this->debitCreditIndicator;
    }
    /**
     * Set debitCreditIndicator value
     * @param string $debitCreditIndicator
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setDebitCreditIndicator(?string $debitCreditIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCreditIndicator) && !is_string($debitCreditIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCreditIndicator, true), gettype($debitCreditIndicator)), __LINE__);
        }
        $this->debitCreditIndicator = $debitCreditIndicator;
        
        return $this;
    }
    /**
     * Get MidocoBankBookingJournal value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[]
     */
    public function getMidocoBankBookingJournal(): ?array
    {
        return $this->MidocoBankBookingJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankBookingJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankBookingJournalForArrayConstraintFromSetMidocoBankBookingJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveBankBookingJournalRequestMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$saveBankBookingJournalRequestMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($saveBankBookingJournalRequestMidocoBankBookingJournalItem) ? get_class($saveBankBookingJournalRequestMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($saveBankBookingJournalRequestMidocoBankBookingJournalItem), var_export($saveBankBookingJournalRequestMidocoBankBookingJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function setMidocoBankBookingJournal(?array $midocoBankBookingJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankBookingJournalArrayErrorMessage = self::validateMidocoBankBookingJournalForArrayConstraintFromSetMidocoBankBookingJournal($midocoBankBookingJournal))) {
            throw new InvalidArgumentException($midocoBankBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankBookingJournal = $midocoBankBookingJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoBankBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $item
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest
     */
    public function addToMidocoBankBookingJournal(\Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoBankBookingJournal property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankBookingJournal[] = $item;
        
        return $this;
    }
}
