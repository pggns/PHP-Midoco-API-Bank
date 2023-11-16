<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDebitFileRequest StructType
 * @subpackage Structs
 */
class DeleteDebitFileRequest extends AbstractStructBase
{
    /**
     * The fileId
     * @var int|null
     */
    protected ?int $fileId = null;
    /**
     * Constructor method for DeleteDebitFileRequest
     * @uses DeleteDebitFileRequest::setFileId()
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
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteDebitFileRequest
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
