<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSepaMandateTypesRequest StructType
 * @subpackage Structs
 */
class GetSepaMandateTypesRequest extends AbstractStructBase
{
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The bic
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * The isCustomerMandate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCustomerMandate = null;
    /**
     * The isOrderMandate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isOrderMandate = null;
    /**
     * The isBillingMandate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isBillingMandate = null;
    /**
     * The isReceiptMandate
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isReceiptMandate = null;
    /**
     * Constructor method for GetSepaMandateTypesRequest
     * @uses GetSepaMandateTypesRequest::setIban()
     * @uses GetSepaMandateTypesRequest::setBic()
     * @uses GetSepaMandateTypesRequest::setIsCustomerMandate()
     * @uses GetSepaMandateTypesRequest::setIsOrderMandate()
     * @uses GetSepaMandateTypesRequest::setIsBillingMandate()
     * @uses GetSepaMandateTypesRequest::setIsReceiptMandate()
     * @param string $iban
     * @param string $bic
     * @param bool $isCustomerMandate
     * @param bool $isOrderMandate
     * @param bool $isBillingMandate
     * @param bool $isReceiptMandate
     */
    public function __construct(?string $iban = null, ?string $bic = null, ?bool $isCustomerMandate = false, ?bool $isOrderMandate = false, ?bool $isBillingMandate = false, ?bool $isReceiptMandate = false)
    {
        $this
            ->setIban($iban)
            ->setBic($bic)
            ->setIsCustomerMandate($isCustomerMandate)
            ->setIsOrderMandate($isOrderMandate)
            ->setIsBillingMandate($isBillingMandate)
            ->setIsReceiptMandate($isReceiptMandate);
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
        return $this;
    }
    /**
     * Get isCustomerMandate value
     * @return bool|null
     */
    public function getIsCustomerMandate(): ?bool
    {
        return $this->isCustomerMandate;
    }
    /**
     * Set isCustomerMandate value
     * @param bool $isCustomerMandate
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setIsCustomerMandate(?bool $isCustomerMandate = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCustomerMandate) && !is_bool($isCustomerMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerMandate, true), gettype($isCustomerMandate)), __LINE__);
        }
        $this->isCustomerMandate = $isCustomerMandate;
        
        return $this;
    }
    /**
     * Get isOrderMandate value
     * @return bool|null
     */
    public function getIsOrderMandate(): ?bool
    {
        return $this->isOrderMandate;
    }
    /**
     * Set isOrderMandate value
     * @param bool $isOrderMandate
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setIsOrderMandate(?bool $isOrderMandate = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderMandate) && !is_bool($isOrderMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderMandate, true), gettype($isOrderMandate)), __LINE__);
        }
        $this->isOrderMandate = $isOrderMandate;
        
        return $this;
    }
    /**
     * Get isBillingMandate value
     * @return bool|null
     */
    public function getIsBillingMandate(): ?bool
    {
        return $this->isBillingMandate;
    }
    /**
     * Set isBillingMandate value
     * @param bool $isBillingMandate
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setIsBillingMandate(?bool $isBillingMandate = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isBillingMandate) && !is_bool($isBillingMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBillingMandate, true), gettype($isBillingMandate)), __LINE__);
        }
        $this->isBillingMandate = $isBillingMandate;
        
        return $this;
    }
    /**
     * Get isReceiptMandate value
     * @return bool|null
     */
    public function getIsReceiptMandate(): ?bool
    {
        return $this->isReceiptMandate;
    }
    /**
     * Set isReceiptMandate value
     * @param bool $isReceiptMandate
     * @return \Pggns\MidocoApi\Bank\StructType\GetSepaMandateTypesRequest
     */
    public function setIsReceiptMandate(?bool $isReceiptMandate = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isReceiptMandate) && !is_bool($isReceiptMandate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReceiptMandate, true), gettype($isReceiptMandate)), __LINE__);
        }
        $this->isReceiptMandate = $isReceiptMandate;
        
        return $this;
    }
}
