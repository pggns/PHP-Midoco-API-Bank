<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankCache4EntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankCache4EntryRequest extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $MidocoBankStatementEntry = null;
    /**
     * The fibAccount
     * @var string|null
     */
    protected ?string $fibAccount = null;
    /**
     * The search4Fee
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $search4Fee = null;
    /**
     * The chargeBackOrderNo
     * @var int|null
     */
    protected ?int $chargeBackOrderNo = null;
    /**
     * Constructor method for SearchBankCache4EntryRequest
     * @uses SearchBankCache4EntryRequest::setMidocoBankStatementEntry()
     * @uses SearchBankCache4EntryRequest::setFibAccount()
     * @uses SearchBankCache4EntryRequest::setSearch4Fee()
     * @uses SearchBankCache4EntryRequest::setChargeBackOrderNo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry
     * @param string $fibAccount
     * @param bool $search4Fee
     * @param int $chargeBackOrderNo
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null, ?string $fibAccount = null, ?bool $search4Fee = false, ?int $chargeBackOrderNo = null)
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry)
            ->setFibAccount($fibAccount)
            ->setSearch4Fee($search4Fee)
            ->setChargeBackOrderNo($chargeBackOrderNo);
    }
    /**
     * Get MidocoBankStatementEntry value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry|null
     */
    public function getMidocoBankStatementEntry(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry
    {
        return $this->MidocoBankStatementEntry;
    }
    /**
     * Set MidocoBankStatementEntry value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest
     */
    public function setMidocoBankStatementEntry(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null): self
    {
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
    /**
     * Get fibAccount value
     * @return string|null
     */
    public function getFibAccount(): ?string
    {
        return $this->fibAccount;
    }
    /**
     * Set fibAccount value
     * @param string $fibAccount
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest
     */
    public function setFibAccount(?string $fibAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($fibAccount) && !is_string($fibAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fibAccount, true), gettype($fibAccount)), __LINE__);
        }
        $this->fibAccount = $fibAccount;
        
        return $this;
    }
    /**
     * Get search4Fee value
     * @return bool|null
     */
    public function getSearch4Fee(): ?bool
    {
        return $this->search4Fee;
    }
    /**
     * Set search4Fee value
     * @param bool $search4Fee
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest
     */
    public function setSearch4Fee(?bool $search4Fee = false): self
    {
        // validation for constraint: boolean
        if (!is_null($search4Fee) && !is_bool($search4Fee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($search4Fee, true), gettype($search4Fee)), __LINE__);
        }
        $this->search4Fee = $search4Fee;
        
        return $this;
    }
    /**
     * Get chargeBackOrderNo value
     * @return int|null
     */
    public function getChargeBackOrderNo(): ?int
    {
        return $this->chargeBackOrderNo;
    }
    /**
     * Set chargeBackOrderNo value
     * @param int $chargeBackOrderNo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest
     */
    public function setChargeBackOrderNo(?int $chargeBackOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeBackOrderNo) && !(is_int($chargeBackOrderNo) || ctype_digit($chargeBackOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeBackOrderNo, true), gettype($chargeBackOrderNo)), __LINE__);
        }
        $this->chargeBackOrderNo = $chargeBackOrderNo;
        
        return $this;
    }
}
