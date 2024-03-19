<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintReceiptForBankTransfersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintReceiptForBankTransfersRequest extends AbstractStructBase
{
    /**
     * The statementId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $statementId = null;
    /**
     * The PrintReceiptForBankTransfersType
     * Meta information extracted from the WSDL
     * - ref: PrintReceiptForBankTransfersType
     * @var \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $PrintReceiptForBankTransfersType = null;
    /**
     * Constructor method for PrintReceiptForBankTransfersRequest
     * @uses PrintReceiptForBankTransfersRequest::setStatementId()
     * @uses PrintReceiptForBankTransfersRequest::setPrintReceiptForBankTransfersType()
     * @param int[] $statementId
     * @param \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $printReceiptForBankTransfersType
     */
    public function __construct(?array $statementId = null, ?\Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $printReceiptForBankTransfersType = null)
    {
        $this
            ->setStatementId($statementId)
            ->setPrintReceiptForBankTransfersType($printReceiptForBankTransfersType);
    }
    /**
     * Get statementId value
     * @return int[]
     */
    public function getStatementId(): ?array
    {
        return $this->statementId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStatementId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatementId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatementIdForArrayConstraintFromSetStatementId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printReceiptForBankTransfersRequestStatementIdItem) {
            // validation for constraint: itemType
            if (!(is_int($printReceiptForBankTransfersRequestStatementIdItem) || ctype_digit($printReceiptForBankTransfersRequestStatementIdItem))) {
                $invalidValues[] = is_object($printReceiptForBankTransfersRequestStatementIdItem) ? get_class($printReceiptForBankTransfersRequestStatementIdItem) : sprintf('%s(%s)', gettype($printReceiptForBankTransfersRequestStatementIdItem), var_export($printReceiptForBankTransfersRequestStatementIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The statementId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set statementId value
     * @throws InvalidArgumentException
     * @param int[] $statementId
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersRequest
     */
    public function setStatementId(?array $statementId = null): self
    {
        // validation for constraint: array
        if ('' !== ($statementIdArrayErrorMessage = self::validateStatementIdForArrayConstraintFromSetStatementId($statementId))) {
            throw new InvalidArgumentException($statementIdArrayErrorMessage, __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
    /**
     * Add item to statementId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersRequest
     */
    public function addToStatementId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The statementId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->statementId[] = $item;
        
        return $this;
    }
    /**
     * Get PrintReceiptForBankTransfersType value
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType|null
     */
    public function getPrintReceiptForBankTransfersType(): ?\Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType
    {
        return $this->PrintReceiptForBankTransfersType;
    }
    /**
     * Set PrintReceiptForBankTransfersType value
     * @param \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $printReceiptForBankTransfersType
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersRequest
     */
    public function setPrintReceiptForBankTransfersType(?\Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $printReceiptForBankTransfersType = null): self
    {
        $this->PrintReceiptForBankTransfersType = $printReceiptForBankTransfersType;
        
        return $this;
    }
}
