<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankStatementEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankStatementEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoBankStatementEntry
     * Meta information extracted from the WSDL
     * - ref: MidocoBankStatementEntry
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $MidocoBankStatementEntry = null;
    /**
     * The overrideWorkingUser
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $overrideWorkingUser = null;
    /**
     * Constructor method for GetBankStatementEntryRequest
     * @uses GetBankStatementEntryRequest::setMidocoBankStatementEntry()
     * @uses GetBankStatementEntryRequest::setOverrideWorkingUser()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry
     * @param bool $overrideWorkingUser
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null, ?bool $overrideWorkingUser = false)
    {
        $this
            ->setMidocoBankStatementEntry($midocoBankStatementEntry)
            ->setOverrideWorkingUser($overrideWorkingUser);
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
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryRequest
     */
    public function setMidocoBankStatementEntry(?\Pggns\MidocoApi\Bank\StructType\MidocoBankStatementEntry $midocoBankStatementEntry = null): self
    {
        $this->MidocoBankStatementEntry = $midocoBankStatementEntry;
        
        return $this;
    }
    /**
     * Get overrideWorkingUser value
     * @return bool|null
     */
    public function getOverrideWorkingUser(): ?bool
    {
        return $this->overrideWorkingUser;
    }
    /**
     * Set overrideWorkingUser value
     * @param bool $overrideWorkingUser
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryRequest
     */
    public function setOverrideWorkingUser(?bool $overrideWorkingUser = false): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideWorkingUser) && !is_bool($overrideWorkingUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideWorkingUser, true), gettype($overrideWorkingUser)), __LINE__);
        }
        $this->overrideWorkingUser = $overrideWorkingUser;
        
        return $this;
    }
}
