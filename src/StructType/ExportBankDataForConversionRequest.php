<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBankDataForConversionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBankDataForConversionRequest extends AbstractStructBase
{
    /**
     * The exportCrmData
     * @var bool|null
     */
    protected ?bool $exportCrmData = null;
    /**
     * The exportOrderData
     * @var bool|null
     */
    protected ?bool $exportOrderData = null;
    /**
     * Constructor method for ExportBankDataForConversionRequest
     * @uses ExportBankDataForConversionRequest::setExportCrmData()
     * @uses ExportBankDataForConversionRequest::setExportOrderData()
     * @param bool $exportCrmData
     * @param bool $exportOrderData
     */
    public function __construct(?bool $exportCrmData = null, ?bool $exportOrderData = null)
    {
        $this
            ->setExportCrmData($exportCrmData)
            ->setExportOrderData($exportOrderData);
    }
    /**
     * Get exportCrmData value
     * @return bool|null
     */
    public function getExportCrmData(): ?bool
    {
        return $this->exportCrmData;
    }
    /**
     * Set exportCrmData value
     * @param bool $exportCrmData
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankDataForConversionRequest
     */
    public function setExportCrmData(?bool $exportCrmData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportCrmData) && !is_bool($exportCrmData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportCrmData, true), gettype($exportCrmData)), __LINE__);
        }
        $this->exportCrmData = $exportCrmData;
        
        return $this;
    }
    /**
     * Get exportOrderData value
     * @return bool|null
     */
    public function getExportOrderData(): ?bool
    {
        return $this->exportOrderData;
    }
    /**
     * Set exportOrderData value
     * @param bool $exportOrderData
     * @return \Pggns\MidocoApi\Bank\StructType\ExportBankDataForConversionRequest
     */
    public function setExportOrderData(?bool $exportOrderData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportOrderData) && !is_bool($exportOrderData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportOrderData, true), gettype($exportOrderData)), __LINE__);
        }
        $this->exportOrderData = $exportOrderData;
        
        return $this;
    }
}
