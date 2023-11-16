<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVoucherTypeResponse StructType
 * @subpackage Structs
 */
class GetVoucherTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoVoucherType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucherType
     * @var \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO[]
     */
    protected array $MidocoVoucherType = [];
    /**
     * Constructor method for GetVoucherTypeResponse
     * @uses GetVoucherTypeResponse::setMidocoVoucherType()
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO[] $midocoVoucherType
     */
    public function __construct(array $midocoVoucherType = [])
    {
        $this
            ->setMidocoVoucherType($midocoVoucherType);
    }
    /**
     * Get MidocoVoucherType value
     * @return \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO[]
     */
    public function getMidocoVoucherType(): array
    {
        return $this->MidocoVoucherType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVoucherType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucherType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherTypeForArrayConstraintsFromSetMidocoVoucherType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVoucherTypeResponseMidocoVoucherTypeItem) {
            // validation for constraint: itemType
            if (!$getVoucherTypeResponseMidocoVoucherTypeItem instanceof \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO) {
                $invalidValues[] = is_object($getVoucherTypeResponseMidocoVoucherTypeItem) ? get_class($getVoucherTypeResponseMidocoVoucherTypeItem) : sprintf('%s(%s)', gettype($getVoucherTypeResponseMidocoVoucherTypeItem), var_export($getVoucherTypeResponseMidocoVoucherTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucherType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucherType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO[] $midocoVoucherType
     * @return \Pggns\MidocoApi\Bank\StructType\GetVoucherTypeResponse
     */
    public function setMidocoVoucherType(array $midocoVoucherType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherTypeArrayErrorMessage = self::validateMidocoVoucherTypeForArrayConstraintsFromSetMidocoVoucherType($midocoVoucherType))) {
            throw new InvalidArgumentException($midocoVoucherTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucherType = $midocoVoucherType;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucherType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetVoucherTypeResponse
     */
    public function addToMidocoVoucherType(\Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucherType property can only contain items of type \Pggns\MidocoApi\Bank\StructType\VoucherTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucherType[] = $item;
        
        return $this;
    }
}
