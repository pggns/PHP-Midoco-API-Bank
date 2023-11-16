<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintReceiptForBankTransfersType StructType
 * @subpackage Structs
 */
class PrintReceiptForBankTransfersType extends AbstractStructBase
{
    /**
     * The journalPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var int[]
     */
    protected array $journalPosition = [];
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
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for PrintReceiptForBankTransfersType
     * @uses PrintReceiptForBankTransfersType::setJournalPosition()
     * @uses PrintReceiptForBankTransfersType::setStatementId()
     * @uses PrintReceiptForBankTransfersType::setAccountPosition()
     * @uses PrintReceiptForBankTransfersType::setPosition()
     * @uses PrintReceiptForBankTransfersType::setCustomerId()
     * @param int[] $journalPosition
     * @param int $statementId
     * @param int $accountPosition
     * @param int $position
     * @param int $customerId
     */
    public function __construct(array $journalPosition, ?int $statementId = null, ?int $accountPosition = null, ?int $position = null, ?int $customerId = null)
    {
        $this
            ->setJournalPosition($journalPosition)
            ->setStatementId($statementId)
            ->setAccountPosition($accountPosition)
            ->setPosition($position)
            ->setCustomerId($customerId);
    }
    /**
     * Get journalPosition value
     * @return int[]
     */
    public function getJournalPosition(): array
    {
        return $this->journalPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setJournalPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalPositionForArrayConstraintsFromSetJournalPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printReceiptForBankTransfersTypeJournalPositionItem) {
            // validation for constraint: itemType
            if (!(is_int($printReceiptForBankTransfersTypeJournalPositionItem) || ctype_digit($printReceiptForBankTransfersTypeJournalPositionItem))) {
                $invalidValues[] = is_object($printReceiptForBankTransfersTypeJournalPositionItem) ? get_class($printReceiptForBankTransfersTypeJournalPositionItem) : sprintf('%s(%s)', gettype($printReceiptForBankTransfersTypeJournalPositionItem), var_export($printReceiptForBankTransfersTypeJournalPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The journalPosition property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set journalPosition value
     * @throws InvalidArgumentException
     * @param int[] $journalPosition
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
     */
    public function setJournalPosition(array $journalPosition): self
    {
        // validation for constraint: array
        if ('' !== ($journalPositionArrayErrorMessage = self::validateJournalPositionForArrayConstraintsFromSetJournalPosition($journalPosition))) {
            throw new InvalidArgumentException($journalPositionArrayErrorMessage, __LINE__);
        }
        $this->journalPosition = $journalPosition;
        
        return $this;
    }
    /**
     * Add item to journalPosition value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
     */
    public function addToJournalPosition(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The journalPosition property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->journalPosition[] = $item;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
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
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
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
}
