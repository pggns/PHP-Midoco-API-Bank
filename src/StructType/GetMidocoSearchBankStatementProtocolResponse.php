<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSearchBankStatementProtocolResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSearchBankStatementProtocolResponse extends AbstractStructBase
{
    /**
     * The MidocoSearchBankStatementProtocol
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSearchBankStatementProtocol
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol[]
     */
    protected ?array $MidocoSearchBankStatementProtocol = null;
    /**
     * Constructor method for GetMidocoSearchBankStatementProtocolResponse
     * @uses GetMidocoSearchBankStatementProtocolResponse::setMidocoSearchBankStatementProtocol()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol[] $midocoSearchBankStatementProtocol
     */
    public function __construct(?array $midocoSearchBankStatementProtocol = null)
    {
        $this
            ->setMidocoSearchBankStatementProtocol($midocoSearchBankStatementProtocol);
    }
    /**
     * Get MidocoSearchBankStatementProtocol value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol[]
     */
    public function getMidocoSearchBankStatementProtocol(): ?array
    {
        return $this->MidocoSearchBankStatementProtocol;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSearchBankStatementProtocol method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSearchBankStatementProtocol method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSearchBankStatementProtocolForArrayConstraintFromSetMidocoSearchBankStatementProtocol(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem) {
            // validation for constraint: itemType
            if (!$getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol) {
                $invalidValues[] = is_object($getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem) ? get_class($getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem) : sprintf('%s(%s)', gettype($getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem), var_export($getMidocoSearchBankStatementProtocolResponseMidocoSearchBankStatementProtocolItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSearchBankStatementProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSearchBankStatementProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol[] $midocoSearchBankStatementProtocol
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolResponse
     */
    public function setMidocoSearchBankStatementProtocol(?array $midocoSearchBankStatementProtocol = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSearchBankStatementProtocolArrayErrorMessage = self::validateMidocoSearchBankStatementProtocolForArrayConstraintFromSetMidocoSearchBankStatementProtocol($midocoSearchBankStatementProtocol))) {
            throw new InvalidArgumentException($midocoSearchBankStatementProtocolArrayErrorMessage, __LINE__);
        }
        $this->MidocoSearchBankStatementProtocol = $midocoSearchBankStatementProtocol;
        
        return $this;
    }
    /**
     * Add item to MidocoSearchBankStatementProtocol value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolResponse
     */
    public function addToMidocoSearchBankStatementProtocol(\Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol) {
            throw new InvalidArgumentException(sprintf('The MidocoSearchBankStatementProtocol property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSearchBankStatementProtocol, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSearchBankStatementProtocol[] = $item;
        
        return $this;
    }
}
