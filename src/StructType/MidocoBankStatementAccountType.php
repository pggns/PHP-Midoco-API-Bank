<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankStatementAccountType StructType
 * @subpackage Structs
 */
class MidocoBankStatementAccountType extends BankStatementAccountDTO
{
    /**
     * The readUserId
     * @var int|null
     */
    protected ?int $readUserId = null;
    /**
     * The readUserName
     * @var string|null
     */
    protected ?string $readUserName = null;
    /**
     * The readDate
     * @var string|null
     */
    protected ?string $readDate = null;
    /**
     * The numberAccounted
     * @var string|null
     */
    protected ?string $numberAccounted = null;
    /**
     * The numberBooked
     * @var string|null
     */
    protected ?string $numberBooked = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The fileFormat
     * @var string|null
     */
    protected ?string $fileFormat = null;
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    protected array $MidocoBankStatementEntry = [];
    /**
     * Constructor method for MidocoBankStatementAccountType
     * @uses MidocoBankStatementAccountType::setReadUserId()
     * @uses MidocoBankStatementAccountType::setReadUserName()
     * @uses MidocoBankStatementAccountType::setReadDate()
     * @uses MidocoBankStatementAccountType::setNumberAccounted()
     * @uses MidocoBankStatementAccountType::setNumberBooked()
     * @uses MidocoBankStatementAccountType::setUnitName()
     * @uses MidocoBankStatementAccountType::setFileFormat()
     * @uses MidocoBankStatementAccountType::setMidocoBankStatementEntry()
     * @param int $readUserId
     * @param string $readUserName
     * @param string $readDate
     * @param string $numberAccounted
     * @param string $numberBooked
     * @param string $unitName
     * @param string $fileFormat
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     */
    public function __construct(?int $readUserId = null, ?string $readUserName = null, ?string $readDate = null, ?string $numberAccounted = null, ?string $numberBooked = null, ?string $unitName = null, ?string $fileFormat = null, array $midocoBankStatementEntry = [])
    {
        $this
            ->setReadUserId($readUserId)
            ->setReadUserName($readUserName)
            ->setReadDate($readDate)
            ->setNumberAccounted($numberAccounted)
            ->setNumberBooked($numberBooked)
            ->setUnitName($unitName)
            ->setFileFormat($fileFormat)
            ->setMidocoBankStatementEntry($midocoBankStatementEntry);
    }
    /**
     * Get readUserId value
     * @return int|null
     */
    public function getReadUserId(): ?int
    {
        return $this->readUserId;
    }
    /**
     * Set readUserId value
     * @param int $readUserId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setReadUserId(?int $readUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($readUserId) && !(is_int($readUserId) || ctype_digit($readUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($readUserId, true), gettype($readUserId)), __LINE__);
        }
        $this->readUserId = $readUserId;
        
        return $this;
    }
    /**
     * Get readUserName value
     * @return string|null
     */
    public function getReadUserName(): ?string
    {
        return $this->readUserName;
    }
    /**
     * Set readUserName value
     * @param string $readUserName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setReadUserName(?string $readUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($readUserName) && !is_string($readUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readUserName, true), gettype($readUserName)), __LINE__);
        }
        $this->readUserName = $readUserName;
        
        return $this;
    }
    /**
     * Get readDate value
     * @return string|null
     */
    public function getReadDate(): ?string
    {
        return $this->readDate;
    }
    /**
     * Set readDate value
     * @param string $readDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setReadDate(?string $readDate = null): self
    {
        // validation for constraint: string
        if (!is_null($readDate) && !is_string($readDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readDate, true), gettype($readDate)), __LINE__);
        }
        $this->readDate = $readDate;
        
        return $this;
    }
    /**
     * Get numberAccounted value
     * @return string|null
     */
    public function getNumberAccounted(): ?string
    {
        return $this->numberAccounted;
    }
    /**
     * Set numberAccounted value
     * @param string $numberAccounted
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setNumberAccounted(?string $numberAccounted = null): self
    {
        // validation for constraint: string
        if (!is_null($numberAccounted) && !is_string($numberAccounted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberAccounted, true), gettype($numberAccounted)), __LINE__);
        }
        $this->numberAccounted = $numberAccounted;
        
        return $this;
    }
    /**
     * Get numberBooked value
     * @return string|null
     */
    public function getNumberBooked(): ?string
    {
        return $this->numberBooked;
    }
    /**
     * Set numberBooked value
     * @param string $numberBooked
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setNumberBooked(?string $numberBooked = null): self
    {
        // validation for constraint: string
        if (!is_null($numberBooked) && !is_string($numberBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberBooked, true), gettype($numberBooked)), __LINE__);
        }
        $this->numberBooked = $numberBooked;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get fileFormat value
     * @return string|null
     */
    public function getFileFormat(): ?string
    {
        return $this->fileFormat;
    }
    /**
     * Set fileFormat value
     * @param string $fileFormat
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setFileFormat(?string $fileFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($fileFormat) && !is_string($fileFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->fileFormat = $fileFormat;
        
        return $this;
    }
    /**
     * Get MidocoBankStatementEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[]
     */
    public function getMidocoBankStatementEntry(): array
    {
        return $this->MidocoBankStatementEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankStatementEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryForArrayConstraintsFromSetMidocoBankStatementEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBankStatementAccountTypeMidocoBankStatementEntryItem) {
            // validation for constraint: itemType
            if (!$midocoBankStatementAccountTypeMidocoBankStatementEntryItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
                $invalidValues[] = is_object($midocoBankStatementAccountTypeMidocoBankStatementEntryItem) ? get_class($midocoBankStatementAccountTypeMidocoBankStatementEntryItem) : sprintf('%s(%s)', gettype($midocoBankStatementAccountTypeMidocoBankStatementEntryItem), var_export($midocoBankStatementAccountTypeMidocoBankStatementEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry[] $midocoBankStatementEntry
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function setMidocoBankStatementEntry(array $midocoBankStatementEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryArrayErrorMessage = self::validateMidocoBankStatementEntryForArrayConstraintsFromSetMidocoBankStatementEntry($midocoBankStatementEntry))) {
            throw new InvalidArgumentException($midocoBankStatementEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountType
     */
    public function addToMidocoBankStatementEntry(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntry property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntry[] = $item;
        
        return $this;
    }
}
