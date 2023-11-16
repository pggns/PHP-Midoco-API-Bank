<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBankStatementEntryCommentRequest StructType
 * @subpackage Structs
 */
class SetBankStatementEntryCommentRequest extends AbstractStructBase
{
    /**
     * The accountPosition
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $accountPosition;
    /**
     * The statementId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $statementId;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The commentText
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $commentText = null;
    /**
     * Constructor method for SetBankStatementEntryCommentRequest
     * @uses SetBankStatementEntryCommentRequest::setAccountPosition()
     * @uses SetBankStatementEntryCommentRequest::setStatementId()
     * @uses SetBankStatementEntryCommentRequest::setPosition()
     * @uses SetBankStatementEntryCommentRequest::setCommentText()
     * @param int $accountPosition
     * @param int $statementId
     * @param int $position
     * @param string $commentText
     */
    public function __construct(int $accountPosition, int $statementId, int $position, ?string $commentText = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setStatementId($statementId)
            ->setPosition($position)
            ->setCommentText($commentText);
    }
    /**
     * Get accountPosition value
     * @return int
     */
    public function getAccountPosition(): int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest
     */
    public function setAccountPosition(int $accountPosition): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int
     */
    public function getStatementId(): int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest
     */
    public function setStatementId(int $statementId): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get commentText value
     * @return string|null
     */
    public function getCommentText(): ?string
    {
        return $this->commentText;
    }
    /**
     * Set commentText value
     * @param string $commentText
     * @return \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest
     */
    public function setCommentText(?string $commentText = null): self
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->commentText = $commentText;
        
        return $this;
    }
}
