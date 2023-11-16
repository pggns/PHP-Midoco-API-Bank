<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintReceiptForBankTransfersResponse StructType
 * @subpackage Structs
 */
class PrintReceiptForBankTransfersResponse extends AbstractStructBase
{
    /**
     * The PrintReceiptForBankTransfersType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: PrintReceiptForBankTransfersType
     * @var \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType[]
     */
    protected array $PrintReceiptForBankTransfersType = [];
    /**
     * The printJobId
     * @var int|null
     */
    protected ?int $printJobId = null;
    /**
     * Constructor method for PrintReceiptForBankTransfersResponse
     * @uses PrintReceiptForBankTransfersResponse::setPrintReceiptForBankTransfersType()
     * @uses PrintReceiptForBankTransfersResponse::setPrintJobId()
     * @param \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType[] $printReceiptForBankTransfersType
     * @param int $printJobId
     */
    public function __construct(array $printReceiptForBankTransfersType = [], ?int $printJobId = null)
    {
        $this
            ->setPrintReceiptForBankTransfersType($printReceiptForBankTransfersType)
            ->setPrintJobId($printJobId);
    }
    /**
     * Get PrintReceiptForBankTransfersType value
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType[]
     */
    public function getPrintReceiptForBankTransfersType(): array
    {
        return $this->PrintReceiptForBankTransfersType;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintReceiptForBankTransfersType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintReceiptForBankTransfersType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintReceiptForBankTransfersTypeForArrayConstraintsFromSetPrintReceiptForBankTransfersType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem) {
            // validation for constraint: itemType
            if (!$printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType) {
                $invalidValues[] = is_object($printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem) ? get_class($printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem) : sprintf('%s(%s)', gettype($printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem), var_export($printReceiptForBankTransfersResponsePrintReceiptForBankTransfersTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PrintReceiptForBankTransfersType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PrintReceiptForBankTransfersType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType[] $printReceiptForBankTransfersType
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersResponse
     */
    public function setPrintReceiptForBankTransfersType(array $printReceiptForBankTransfersType = []): self
    {
        // validation for constraint: array
        if ('' !== ($printReceiptForBankTransfersTypeArrayErrorMessage = self::validatePrintReceiptForBankTransfersTypeForArrayConstraintsFromSetPrintReceiptForBankTransfersType($printReceiptForBankTransfersType))) {
            throw new InvalidArgumentException($printReceiptForBankTransfersTypeArrayErrorMessage, __LINE__);
        }
        $this->PrintReceiptForBankTransfersType = $printReceiptForBankTransfersType;
        
        return $this;
    }
    /**
     * Add item to PrintReceiptForBankTransfersType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $item
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersResponse
     */
    public function addToPrintReceiptForBankTransfersType(\Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType) {
            throw new InvalidArgumentException(sprintf('The PrintReceiptForBankTransfersType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PrintReceiptForBankTransfersType[] = $item;
        
        return $this;
    }
    /**
     * Get printJobId value
     * @return int|null
     */
    public function getPrintJobId(): ?int
    {
        return $this->printJobId;
    }
    /**
     * Set printJobId value
     * @param int $printJobId
     * @return \Pggns\MidocoApi\Bank\StructType\PrintReceiptForBankTransfersResponse
     */
    public function setPrintJobId(?int $printJobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printJobId) && !(is_int($printJobId) || ctype_digit($printJobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printJobId, true), gettype($printJobId)), __LINE__);
        }
        $this->printJobId = $printJobId;
        
        return $this;
    }
}
