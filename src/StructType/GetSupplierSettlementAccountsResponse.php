<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierSettlementAccountsResponse StructType
 * @subpackage Structs
 */
class GetSupplierSettlementAccountsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierSettlementAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount[]
     */
    protected array $MidocoSupplierSettlementAccount = [];
    /**
     * Constructor method for GetSupplierSettlementAccountsResponse
     * @uses GetSupplierSettlementAccountsResponse::setMidocoSupplierSettlementAccount()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount[] $midocoSupplierSettlementAccount
     */
    public function __construct(array $midocoSupplierSettlementAccount = [])
    {
        $this
            ->setMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount);
    }
    /**
     * Get MidocoSupplierSettlementAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount[]
     */
    public function getMidocoSupplierSettlementAccount(): array
    {
        return $this->MidocoSupplierSettlementAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierSettlementAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierSettlementAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierSettlementAccountForArrayConstraintsFromSetMidocoSupplierSettlementAccount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem) {
            // validation for constraint: itemType
            if (!$getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount) {
                $invalidValues[] = is_object($getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem) ? get_class($getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem) : sprintf('%s(%s)', gettype($getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem), var_export($getSupplierSettlementAccountsResponseMidocoSupplierSettlementAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierSettlementAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierSettlementAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount[] $midocoSupplierSettlementAccount
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierSettlementAccountsResponse
     */
    public function setMidocoSupplierSettlementAccount(array $midocoSupplierSettlementAccount = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierSettlementAccountArrayErrorMessage = self::validateMidocoSupplierSettlementAccountForArrayConstraintsFromSetMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount))) {
            throw new InvalidArgumentException($midocoSupplierSettlementAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierSettlementAccount = $midocoSupplierSettlementAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierSettlementAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetSupplierSettlementAccountsResponse
     */
    public function addToMidocoSupplierSettlementAccount(\Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierSettlementAccount property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoSupplierSettlementAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierSettlementAccount[] = $item;
        
        return $this;
    }
}
