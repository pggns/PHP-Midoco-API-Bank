<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDebitFileRequest StructType
 * @subpackage Structs
 */
class SearchDebitFileRequest extends AbstractStructBase
{
    /**
     * The createDateFrom
     * @var string|null
     */
    protected ?string $createDateFrom = null;
    /**
     * The createDateTo
     * @var string|null
     */
    protected ?string $createDateTo = null;
    /**
     * The bankAccountNo
     * @var string|null
     */
    protected ?string $bankAccountNo = null;
    /**
     * The bankAccountBlz
     * @var string|null
     */
    protected ?string $bankAccountBlz = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * Constructor method for SearchDebitFileRequest
     * @uses SearchDebitFileRequest::setCreateDateFrom()
     * @uses SearchDebitFileRequest::setCreateDateTo()
     * @uses SearchDebitFileRequest::setBankAccountNo()
     * @uses SearchDebitFileRequest::setBankAccountBlz()
     * @uses SearchDebitFileRequest::setCreationUserId()
     * @param string $createDateFrom
     * @param string $createDateTo
     * @param string $bankAccountNo
     * @param string $bankAccountBlz
     * @param int $creationUserId
     */
    public function __construct(?string $createDateFrom = null, ?string $createDateTo = null, ?string $bankAccountNo = null, ?string $bankAccountBlz = null, ?int $creationUserId = null)
    {
        $this
            ->setCreateDateFrom($createDateFrom)
            ->setCreateDateTo($createDateTo)
            ->setBankAccountNo($bankAccountNo)
            ->setBankAccountBlz($bankAccountBlz)
            ->setCreationUserId($creationUserId);
    }
    /**
     * Get createDateFrom value
     * @return string|null
     */
    public function getCreateDateFrom(): ?string
    {
        return $this->createDateFrom;
    }
    /**
     * Set createDateFrom value
     * @param string $createDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest
     */
    public function setCreateDateFrom(?string $createDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($createDateFrom) && !is_string($createDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDateFrom, true), gettype($createDateFrom)), __LINE__);
        }
        $this->createDateFrom = $createDateFrom;
        
        return $this;
    }
    /**
     * Get createDateTo value
     * @return string|null
     */
    public function getCreateDateTo(): ?string
    {
        return $this->createDateTo;
    }
    /**
     * Set createDateTo value
     * @param string $createDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest
     */
    public function setCreateDateTo(?string $createDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($createDateTo) && !is_string($createDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDateTo, true), gettype($createDateTo)), __LINE__);
        }
        $this->createDateTo = $createDateTo;
        
        return $this;
    }
    /**
     * Get bankAccountNo value
     * @return string|null
     */
    public function getBankAccountNo(): ?string
    {
        return $this->bankAccountNo;
    }
    /**
     * Set bankAccountNo value
     * @param string $bankAccountNo
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest
     */
    public function setBankAccountNo(?string $bankAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountNo) && !is_string($bankAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountNo, true), gettype($bankAccountNo)), __LINE__);
        }
        $this->bankAccountNo = $bankAccountNo;
        
        return $this;
    }
    /**
     * Get bankAccountBlz value
     * @return string|null
     */
    public function getBankAccountBlz(): ?string
    {
        return $this->bankAccountBlz;
    }
    /**
     * Set bankAccountBlz value
     * @param string $bankAccountBlz
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest
     */
    public function setBankAccountBlz(?string $bankAccountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountBlz) && !is_string($bankAccountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountBlz, true), gettype($bankAccountBlz)), __LINE__);
        }
        $this->bankAccountBlz = $bankAccountBlz;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
}
