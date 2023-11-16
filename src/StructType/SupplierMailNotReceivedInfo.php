<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierMailNotReceivedInfo StructType
 * @subpackage Structs
 */
class SupplierMailNotReceivedInfo extends SupplierMailNotReceivedSellItemInfo
{
    /**
     * The SupplierMailNotReceivedCustomerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SupplierMailNotReceivedCustomerInfo
     * @var \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO[]
     */
    protected array $SupplierMailNotReceivedCustomerInfo = [];
    /**
     * The MidocoFlightDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightDetail
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail[]
     */
    protected array $MidocoFlightDetail = [];
    /**
     * Constructor method for SupplierMailNotReceivedInfo
     * @uses SupplierMailNotReceivedInfo::setSupplierMailNotReceivedCustomerInfo()
     * @uses SupplierMailNotReceivedInfo::setMidocoFlightDetail()
     * @param \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO[] $supplierMailNotReceivedCustomerInfo
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail[] $midocoFlightDetail
     */
    public function __construct(array $supplierMailNotReceivedCustomerInfo = [], array $midocoFlightDetail = [])
    {
        $this
            ->setSupplierMailNotReceivedCustomerInfo($supplierMailNotReceivedCustomerInfo)
            ->setMidocoFlightDetail($midocoFlightDetail);
    }
    /**
     * Get SupplierMailNotReceivedCustomerInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO[]
     */
    public function getSupplierMailNotReceivedCustomerInfo(): array
    {
        return $this->SupplierMailNotReceivedCustomerInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierMailNotReceivedCustomerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierMailNotReceivedCustomerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierMailNotReceivedCustomerInfoForArrayConstraintsFromSetSupplierMailNotReceivedCustomerInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem) {
            // validation for constraint: itemType
            if (!$supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem instanceof \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO) {
                $invalidValues[] = is_object($supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem) ? get_class($supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem) : sprintf('%s(%s)', gettype($supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem), var_export($supplierMailNotReceivedInfoSupplierMailNotReceivedCustomerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierMailNotReceivedCustomerInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierMailNotReceivedCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO[] $supplierMailNotReceivedCustomerInfo
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierMailNotReceivedInfo
     */
    public function setSupplierMailNotReceivedCustomerInfo(array $supplierMailNotReceivedCustomerInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($supplierMailNotReceivedCustomerInfoArrayErrorMessage = self::validateSupplierMailNotReceivedCustomerInfoForArrayConstraintsFromSetSupplierMailNotReceivedCustomerInfo($supplierMailNotReceivedCustomerInfo))) {
            throw new InvalidArgumentException($supplierMailNotReceivedCustomerInfoArrayErrorMessage, __LINE__);
        }
        $this->SupplierMailNotReceivedCustomerInfo = $supplierMailNotReceivedCustomerInfo;
        
        return $this;
    }
    /**
     * Add item to SupplierMailNotReceivedCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierMailNotReceivedInfo
     */
    public function addToSupplierMailNotReceivedCustomerInfo(\Pggns\MidocoApi\Bank\StructType\SellPassengerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO) {
            throw new InvalidArgumentException(sprintf('The SupplierMailNotReceivedCustomerInfo property can only contain items of type \Pggns\MidocoApi\Bank\StructType\SellPassengerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SupplierMailNotReceivedCustomerInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoFlightDetail value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail[]
     */
    public function getMidocoFlightDetail(): array
    {
        return $this->MidocoFlightDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightDetailForArrayConstraintsFromSetMidocoFlightDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $supplierMailNotReceivedInfoMidocoFlightDetailItem) {
            // validation for constraint: itemType
            if (!$supplierMailNotReceivedInfoMidocoFlightDetailItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail) {
                $invalidValues[] = is_object($supplierMailNotReceivedInfoMidocoFlightDetailItem) ? get_class($supplierMailNotReceivedInfoMidocoFlightDetailItem) : sprintf('%s(%s)', gettype($supplierMailNotReceivedInfoMidocoFlightDetailItem), var_export($supplierMailNotReceivedInfoMidocoFlightDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightDetail property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail[] $midocoFlightDetail
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierMailNotReceivedInfo
     */
    public function setMidocoFlightDetail(array $midocoFlightDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightDetailArrayErrorMessage = self::validateMidocoFlightDetailForArrayConstraintsFromSetMidocoFlightDetail($midocoFlightDetail))) {
            throw new InvalidArgumentException($midocoFlightDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightDetail = $midocoFlightDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail $item
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierMailNotReceivedInfo
     */
    public function addToMidocoFlightDetail(\Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightDetail property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoFlightDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightDetail[] = $item;
        
        return $this;
    }
}
