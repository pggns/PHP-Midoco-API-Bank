<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateDtazvTransactionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateDtazvTransactionResponse extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: order:MidocoDirectDebitTransaction
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction $MidocoDirectDebitTransaction = null;
    /**
     * Constructor method for CreateDtazvTransactionResponse
     * @uses CreateDtazvTransactionResponse::setMidocoDirectDebitTransaction()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction = null)
    {
        $this
            ->setMidocoDirectDebitTransaction($midocoDirectDebitTransaction);
    }
    /**
     * Get MidocoDirectDebitTransaction value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction|null
     */
    public function getMidocoDirectDebitTransaction(): ?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction
    {
        return $this->MidocoDirectDebitTransaction;
    }
    /**
     * Set MidocoDirectDebitTransaction value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction
     * @return \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionResponse
     */
    public function setMidocoDirectDebitTransaction(?\Pggns\MidocoApi\Bank\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction = null): self
    {
        $this->MidocoDirectDebitTransaction = $midocoDirectDebitTransaction;
        
        return $this;
    }
}
