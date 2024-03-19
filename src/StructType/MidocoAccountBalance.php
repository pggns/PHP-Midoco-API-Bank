<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAccountBalance StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAccountBalance extends AbstractStructBase
{
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The balance
     * @var float|null
     */
    protected ?float $balance = null;
    /**
     * Constructor method for MidocoAccountBalance
     * @uses MidocoAccountBalance::setReceiptNo()
     * @uses MidocoAccountBalance::setAccountNo()
     * @uses MidocoAccountBalance::setBalance()
     * @param string $receiptNo
     * @param string $accountNo
     * @param float $balance
     */
    public function __construct(?string $receiptNo = null, ?string $accountNo = null, ?float $balance = null)
    {
        $this
            ->setReceiptNo($receiptNo)
            ->setAccountNo($accountNo)
            ->setBalance($balance);
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccountBalance
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccountBalance
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get balance value
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param float $balance
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAccountBalance
     */
    public function setBalance(?float $balance = null): self
    {
        // validation for constraint: float
        if (!is_null($balance) && !(is_float($balance) || is_numeric($balance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        $this->balance = $balance;
        
        return $this;
    }
}
