<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBookingsQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteBookingsQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteBookingsQueryRequest
     * @uses ExecuteBookingsQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Bank\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Bank\StructType\ExecuteBookingsQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Bank\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
