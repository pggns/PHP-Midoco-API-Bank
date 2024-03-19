<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDtazvTransactionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDtazvTransactionsRequest extends AbstractStructBase
{
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * Constructor method for GetDtazvTransactionsRequest
     * @uses GetDtazvTransactionsRequest::setFileId()
     * @param int $fileId
     */
    public function __construct(?int $fileId = null)
    {
        $this
            ->setFileId($fileId);
    }
    /**
     * Get fileId value
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }
    /**
     * Set fileId value
     * @param int $fileId
     * @return \Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsRequest
     */
    public function setFileId(?int $fileId = null): self
    {
        // validation for constraint: int
        if (!is_null($fileId) && !(is_int($fileId) || ctype_digit($fileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileId, true), gettype($fileId)), __LINE__);
        }
        $this->fileId = $fileId;
        
        return $this;
    }
}
