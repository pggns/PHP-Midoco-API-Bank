<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportBookingJournalsDataResponse StructType
 * @subpackage Structs
 */
class ImportBookingJournalsDataResponse extends AbstractStructBase
{
    /**
     * The ImportBookingJournalsDataResult
     * Meta information extracted from the WSDL
     * - ref: ImportBookingJournalsDataResult
     * @var \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult $ImportBookingJournalsDataResult = null;
    /**
     * Constructor method for ImportBookingJournalsDataResponse
     * @uses ImportBookingJournalsDataResponse::setImportBookingJournalsDataResult()
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult $importBookingJournalsDataResult
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult $importBookingJournalsDataResult = null)
    {
        $this
            ->setImportBookingJournalsDataResult($importBookingJournalsDataResult);
    }
    /**
     * Get ImportBookingJournalsDataResult value
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult|null
     */
    public function getImportBookingJournalsDataResult(): ?\Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult
    {
        return $this->ImportBookingJournalsDataResult;
    }
    /**
     * Set ImportBookingJournalsDataResult value
     * @param \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult $importBookingJournalsDataResult
     * @return \Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResponse
     */
    public function setImportBookingJournalsDataResult(?\Pggns\MidocoApi\Bank\StructType\ImportBookingJournalsDataResult $importBookingJournalsDataResult = null): self
    {
        $this->ImportBookingJournalsDataResult = $importBookingJournalsDataResult;
        
        return $this;
    }
}
