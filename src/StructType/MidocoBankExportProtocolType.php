<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankExportProtocolType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankExportProtocolType extends AbstractStructBase
{
    /**
     * The MidocoBankBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankBookingJournal
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[]
     */
    protected ?array $MidocoBankBookingJournal = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorArgs = null;
    /**
     * The pageNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pageNo = null;
    /**
     * The statementNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $statementNo = null;
    /**
     * The bookingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The infoName1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $infoName1 = null;
    /**
     * Constructor method for MidocoBankExportProtocolType
     * @uses MidocoBankExportProtocolType::setMidocoBankBookingJournal()
     * @uses MidocoBankExportProtocolType::setErrorCode()
     * @uses MidocoBankExportProtocolType::setErrorBundle()
     * @uses MidocoBankExportProtocolType::setErrorArgs()
     * @uses MidocoBankExportProtocolType::setPageNo()
     * @uses MidocoBankExportProtocolType::setStatementNo()
     * @uses MidocoBankExportProtocolType::setBookingDate()
     * @uses MidocoBankExportProtocolType::setInfoName1()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal[] $midocoBankBookingJournal
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorArgs
     * @param string $pageNo
     * @param string $statementNo
     * @param string $bookingDate
     * @param string $infoName1
     */
    public function __construct(?array $midocoBankBookingJournal = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $errorArgs = null, ?string $pageNo = null, ?string $statementNo = null, ?string $bookingDate = null, ?string $infoName1 = null)
    {
        $this
            ->setMidocoBankBookingJournal($midocoBankBookingJournal)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs)
            ->setPageNo($pageNo)
            ->setStatementNo($statementNo)
            ->setBookingDate($bookingDate)
            ->setInfoName1($infoName1);
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
        foreach ($values as $midocoBankExportProtocolTypeMidocoBankBookingJournalItem) {
            // validation for constraint: itemType
            if (!$midocoBankExportProtocolTypeMidocoBankBookingJournalItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankBookingJournal) {
                $invalidValues[] = is_object($midocoBankExportProtocolTypeMidocoBankBookingJournalItem) ? get_class($midocoBankExportProtocolTypeMidocoBankBookingJournalItem) : sprintf('%s(%s)', gettype($midocoBankExportProtocolTypeMidocoBankBookingJournalItem), var_export($midocoBankExportProtocolTypeMidocoBankBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
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
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorArgs value
     * @return string|null
     */
    public function getErrorArgs(): ?string
    {
        return $this->errorArgs;
    }
    /**
     * Set errorArgs value
     * @param string $errorArgs
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
     */
    public function setErrorArgs(?string $errorArgs = null): self
    {
        // validation for constraint: string
        if (!is_null($errorArgs) && !is_string($errorArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorArgs, true), gettype($errorArgs)), __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return string|null
     */
    public function getPageNo(): ?string
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param string $pageNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
     */
    public function setPageNo(?string $pageNo = null): self
    {
        // validation for constraint: string
        if (!is_null($pageNo) && !is_string($pageNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
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
     * Get infoName1 value
     * @return string|null
     */
    public function getInfoName1(): ?string
    {
        return $this->infoName1;
    }
    /**
     * Set infoName1 value
     * @param string $infoName1
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankExportProtocolType
     */
    public function setInfoName1(?string $infoName1 = null): self
    {
        // validation for constraint: string
        if (!is_null($infoName1) && !is_string($infoName1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoName1, true), gettype($infoName1)), __LINE__);
        }
        $this->infoName1 = $infoName1;
        
        return $this;
    }
}
