<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueInfoForOrderRequest StructType
 * @subpackage Structs
 */
class GetRevenueInfoForOrderRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderNo;
    /**
     * Constructor method for GetRevenueInfoForOrderRequest
     * @uses GetRevenueInfoForOrderRequest::setOrderNo()
     * @param int $orderNo
     */
    public function __construct(int $orderNo)
    {
        $this
            ->setOrderNo($orderNo);
    }
    /**
     * Get orderNo value
     * @return int
     */
    public function getOrderNo(): int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderRequest
     */
    public function setOrderNo(int $orderNo): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
