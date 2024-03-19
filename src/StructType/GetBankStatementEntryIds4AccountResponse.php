<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementEntryIds4AccountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankStatementEntryIds4AccountResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntryId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntryId
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId[]
     */
    protected ?array $MidocoBankStatementEntryId = null;
    /**
     * Constructor method for GetBankStatementEntryIds4AccountResponse
     * @uses GetBankStatementEntryIds4AccountResponse::setMidocoBankStatementEntryId()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId[] $midocoBankStatementEntryId
     */
    public function __construct(?array $midocoBankStatementEntryId = null)
    {
        $this
            ->setMidocoBankStatementEntryId($midocoBankStatementEntryId);
    }
    /**
     * Get MidocoBankStatementEntryId value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId[]
     */
    public function getMidocoBankStatementEntryId(): ?array
    {
        return $this->MidocoBankStatementEntryId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementEntryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntryId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryIdForArrayConstraintFromSetMidocoBankStatementEntryId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem) {
            // validation for constraint: itemType
            if (!$getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId) {
                $invalidValues[] = is_object($getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem) ? get_class($getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem) : sprintf('%s(%s)', gettype($getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem), var_export($getBankStatementEntryIds4AccountResponseMidocoBankStatementEntryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntryId property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntryId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId[] $midocoBankStatementEntryId
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryIds4AccountResponse
     */
    public function setMidocoBankStatementEntryId(?array $midocoBankStatementEntryId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryIdArrayErrorMessage = self::validateMidocoBankStatementEntryIdForArrayConstraintFromSetMidocoBankStatementEntryId($midocoBankStatementEntryId))) {
            throw new InvalidArgumentException($midocoBankStatementEntryIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntryId = $midocoBankStatementEntryId;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntryId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryIds4AccountResponse
     */
    public function addToMidocoBankStatementEntryId(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntryId property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntryId[] = $item;
        
        return $this;
    }
}
