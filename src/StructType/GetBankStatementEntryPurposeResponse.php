<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementEntryPurposeResponse StructType
 * @subpackage Structs
 */
class GetBankStatementEntryPurposeResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntryPurpose
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementEntryPurpose
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[]
     */
    protected array $MidocoBankStatementEntryPurpose = [];
    /**
     * Constructor method for GetBankStatementEntryPurposeResponse
     * @uses GetBankStatementEntryPurposeResponse::setMidocoBankStatementEntryPurpose()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[] $midocoBankStatementEntryPurpose
     */
    public function __construct(array $midocoBankStatementEntryPurpose = [])
    {
        $this
            ->setMidocoBankStatementEntryPurpose($midocoBankStatementEntryPurpose);
    }
    /**
     * Get MidocoBankStatementEntryPurpose value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[]
     */
    public function getMidocoBankStatementEntryPurpose(): array
    {
        return $this->MidocoBankStatementEntryPurpose;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankStatementEntryPurpose method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementEntryPurpose method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementEntryPurposeForArrayConstraintsFromSetMidocoBankStatementEntryPurpose(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem) {
            // validation for constraint: itemType
            if (!$getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose) {
                $invalidValues[] = is_object($getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem) ? get_class($getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem) : sprintf('%s(%s)', gettype($getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem), var_export($getBankStatementEntryPurposeResponseMidocoBankStatementEntryPurposeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementEntryPurpose property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementEntryPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose[] $midocoBankStatementEntryPurpose
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse
     */
    public function setMidocoBankStatementEntryPurpose(array $midocoBankStatementEntryPurpose = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementEntryPurposeArrayErrorMessage = self::validateMidocoBankStatementEntryPurposeForArrayConstraintsFromSetMidocoBankStatementEntryPurpose($midocoBankStatementEntryPurpose))) {
            throw new InvalidArgumentException($midocoBankStatementEntryPurposeArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementEntryPurpose = $midocoBankStatementEntryPurpose;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementEntryPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse
     */
    public function addToMidocoBankStatementEntryPurpose(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementEntryPurpose property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntryPurpose, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementEntryPurpose[] = $item;
        
        return $this;
    }
}
