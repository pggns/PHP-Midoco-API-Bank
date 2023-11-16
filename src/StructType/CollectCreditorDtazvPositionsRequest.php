<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectCreditorDtazvPositionsRequest StructType
 * @subpackage Structs
 */
class CollectCreditorDtazvPositionsRequest extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoBankAccount
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The creditor
     * @var string|null
     */
    protected ?string $creditor = null;
    /**
     * The perDate
     * @var string|null
     */
    protected ?string $perDate = null;
    /**
     * The inclCreditTansfer
     * @var bool|null
     */
    protected ?bool $inclCreditTansfer = null;
    /**
     * Constructor method for CollectCreditorDtazvPositionsRequest
     * @uses CollectCreditorDtazvPositionsRequest::setMidocoBankAccount()
     * @uses CollectCreditorDtazvPositionsRequest::setCurrency()
     * @uses CollectCreditorDtazvPositionsRequest::setCreditor()
     * @uses CollectCreditorDtazvPositionsRequest::setPerDate()
     * @uses CollectCreditorDtazvPositionsRequest::setInclCreditTansfer()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @param string $currency
     * @param string $creditor
     * @param string $perDate
     * @param bool $inclCreditTansfer
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null, ?string $currency = null, ?string $creditor = null, ?string $perDate = null, ?bool $inclCreditTansfer = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount)
            ->setCurrency($currency)
            ->setCreditor($creditor)
            ->setPerDate($perDate)
            ->setInclCreditTansfer($inclCreditTansfer);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Bank\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get creditor value
     * @return string|null
     */
    public function getCreditor(): ?string
    {
        return $this->creditor;
    }
    /**
     * Set creditor value
     * @param string $creditor
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest
     */
    public function setCreditor(?string $creditor = null): self
    {
        // validation for constraint: string
        if (!is_null($creditor) && !is_string($creditor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditor, true), gettype($creditor)), __LINE__);
        }
        $this->creditor = $creditor;
        
        return $this;
    }
    /**
     * Get perDate value
     * @return string|null
     */
    public function getPerDate(): ?string
    {
        return $this->perDate;
    }
    /**
     * Set perDate value
     * @param string $perDate
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest
     */
    public function setPerDate(?string $perDate = null): self
    {
        // validation for constraint: string
        if (!is_null($perDate) && !is_string($perDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($perDate, true), gettype($perDate)), __LINE__);
        }
        $this->perDate = $perDate;
        
        return $this;
    }
    /**
     * Get inclCreditTansfer value
     * @return bool|null
     */
    public function getInclCreditTansfer(): ?bool
    {
        return $this->inclCreditTansfer;
    }
    /**
     * Set inclCreditTansfer value
     * @param bool $inclCreditTansfer
     * @return \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest
     */
    public function setInclCreditTansfer(?bool $inclCreditTansfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclCreditTansfer) && !is_bool($inclCreditTansfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclCreditTansfer, true), gettype($inclCreditTansfer)), __LINE__);
        }
        $this->inclCreditTansfer = $inclCreditTansfer;
        
        return $this;
    }
}
