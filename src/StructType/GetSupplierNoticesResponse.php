<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierNoticesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierNoticesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierNotice
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice[]
     */
    protected ?array $MidocoSupplierNotice = null;
    /**
     * Constructor method for GetSupplierNoticesResponse
     * @uses GetSupplierNoticesResponse::setMidocoSupplierNotice()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice[] $midocoSupplierNotice
     */
    public function __construct(?array $midocoSupplierNotice = null)
    {
        $this
            ->setMidocoSupplierNotice($midocoSupplierNotice);
    }
    /**
     * Get MidocoSupplierNotice value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice[]
     */
    public function getMidocoSupplierNotice(): ?array
    {
        return $this->MidocoSupplierNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierNoticeForArrayConstraintFromSetMidocoSupplierNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierNoticesResponseMidocoSupplierNoticeItem) {
            // validation for constraint: itemType
            if (!$getSupplierNoticesResponseMidocoSupplierNoticeItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice) {
                $invalidValues[] = is_object($getSupplierNoticesResponseMidocoSupplierNoticeItem) ? get_class($getSupplierNoticesResponseMidocoSupplierNoticeItem) : sprintf('%s(%s)', gettype($getSupplierNoticesResponseMidocoSupplierNoticeItem), var_export($getSupplierNoticesResponseMidocoSupplierNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierNotice property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice[] $midocoSupplierNotice
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierNoticesResponse
     */
    public function setMidocoSupplierNotice(?array $midocoSupplierNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierNoticeArrayErrorMessage = self::validateMidocoSupplierNoticeForArrayConstraintFromSetMidocoSupplierNotice($midocoSupplierNotice))) {
            throw new InvalidArgumentException($midocoSupplierNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierNotice = $midocoSupplierNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierNoticesResponse
     */
    public function addToMidocoSupplierNotice(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierNotice property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierNotice[] = $item;
        
        return $this;
    }
}
