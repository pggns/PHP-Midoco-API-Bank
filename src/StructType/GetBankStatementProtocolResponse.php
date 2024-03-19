<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementProtocolResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankStatementProtocolResponse extends AbstractStructBase
{
    /**
     * The MidocoBankStatementProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankStatementProtocol
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol[]
     */
    protected ?array $MidocoBankStatementProtocol = null;
    /**
     * Constructor method for GetBankStatementProtocolResponse
     * @uses GetBankStatementProtocolResponse::setMidocoBankStatementProtocol()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol[] $midocoBankStatementProtocol
     */
    public function __construct(?array $midocoBankStatementProtocol = null)
    {
        $this
            ->setMidocoBankStatementProtocol($midocoBankStatementProtocol);
    }
    /**
     * Get MidocoBankStatementProtocol value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol[]
     */
    public function getMidocoBankStatementProtocol(): ?array
    {
        return $this->MidocoBankStatementProtocol;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankStatementProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankStatementProtocol method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankStatementProtocolForArrayConstraintFromSetMidocoBankStatementProtocol(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBankStatementProtocolResponseMidocoBankStatementProtocolItem) {
            // validation for constraint: itemType
            if (!$getBankStatementProtocolResponseMidocoBankStatementProtocolItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol) {
                $invalidValues[] = is_object($getBankStatementProtocolResponseMidocoBankStatementProtocolItem) ? get_class($getBankStatementProtocolResponseMidocoBankStatementProtocolItem) : sprintf('%s(%s)', gettype($getBankStatementProtocolResponseMidocoBankStatementProtocolItem), var_export($getBankStatementProtocolResponseMidocoBankStatementProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankStatementProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankStatementProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol[] $midocoBankStatementProtocol
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolResponse
     */
    public function setMidocoBankStatementProtocol(?array $midocoBankStatementProtocol = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankStatementProtocolArrayErrorMessage = self::validateMidocoBankStatementProtocolForArrayConstraintFromSetMidocoBankStatementProtocol($midocoBankStatementProtocol))) {
            throw new InvalidArgumentException($midocoBankStatementProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankStatementProtocol = $midocoBankStatementProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoBankStatementProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolResponse
     */
    public function addToMidocoBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol) {
            throw new InvalidArgumentException(sprintf('The MidocoBankStatementProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementProtocol, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankStatementProtocol[] = $item;
        
        return $this;
    }
}
