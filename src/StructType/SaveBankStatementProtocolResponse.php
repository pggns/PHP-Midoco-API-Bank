<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankStatementProtocolResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: SaveBankStatementProtocol --- saves or updates a BankStatementProtocol, returns it's protocolId
 * @subpackage Structs
 */
class SaveBankStatementProtocolResponse extends AbstractStructBase
{
    /**
     * The protocolId
     * @var int|null
     */
    protected ?int $protocolId = null;
    /**
     * Constructor method for SaveBankStatementProtocolResponse
     * @uses SaveBankStatementProtocolResponse::setProtocolId()
     * @param int $protocolId
     */
    public function __construct(?int $protocolId = null)
    {
        $this
            ->setProtocolId($protocolId);
    }
    /**
     * Get protocolId value
     * @return int|null
     */
    public function getProtocolId(): ?int
    {
        return $this->protocolId;
    }
    /**
     * Set protocolId value
     * @param int $protocolId
     * @return \Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolResponse
     */
    public function setProtocolId(?int $protocolId = null): self
    {
        // validation for constraint: int
        if (!is_null($protocolId) && !(is_int($protocolId) || ctype_digit($protocolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($protocolId, true), gettype($protocolId)), __LINE__);
        }
        $this->protocolId = $protocolId;
        
        return $this;
    }
}
