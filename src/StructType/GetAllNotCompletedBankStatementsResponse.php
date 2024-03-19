<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllNotCompletedBankStatementsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllNotCompletedBankStatementsResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementAccountWithDiff
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementAccountWithDiff
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff[]
     */
    protected ?array $MidocoBankStatementAccountWithDiff = null;
    /**
     * Constructor method for GetAllNotCompletedBankStatementsResponse
     * @uses GetAllNotCompletedBankStatementsResponse::setMidocoBankStatementAccountWithDiff()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff[] $midocoBankStatementAccountWithDiff
     */
    public function __construct(?array $midocoBankStatementAccountWithDiff = null)
    {
        $this
            ->setMidocoBankStatementAccountWithDiff($midocoBankStatementAccountWithDiff);
    }
    /**
     * Get MidocoBankStatementAccountWithDiff value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff[]
     */
    public function getMidocoBankStatementAccountWithDiff(): ?array
    {
        return $this->MidocoBankStatementAccountWithDiff;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementAccountWithDiff method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementAccountWithDiff method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementAccountWithDiffForArrayConstraintFromSetMidocoBankStatementAccountWithDiff(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem) {
            // validation for constraint: itemType
            if (!$getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff) {
                $invalidValues[] = is_object($getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem) ? get_class($getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem) : sprintf('%s(%s)', gettype($getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem), var_export($getAllNotCompletedBankStatementsResponseMidocoBankStatementAccountWithDiffItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementAccountWithDiff property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementAccountWithDiff value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff[] $midocoBankStatementAccountWithDiff
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsResponse
     */
    public function setMidocoBankStatementAccountWithDiff(?array $midocoBankStatementAccountWithDiff = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementAccountWithDiffArrayErrorMessage = self::validateMidocoBankStatementAccountWithDiffForArrayConstraintFromSetMidocoBankStatementAccountWithDiff($midocoBankStatementAccountWithDiff))) {
            throw new InvalidArgumentException($midocoBankStatementAccountWithDiffArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementAccountWithDiff = $midocoBankStatementAccountWithDiff;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementAccountWithDiff value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsResponse
     */
    public function addToMidocoBankStatementAccountWithDiff(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementAccountWithDiff property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementAccountWithDiff, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementAccountWithDiff[] = $item;
        
        return $this;
    }
}
