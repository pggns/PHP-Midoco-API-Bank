<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrder4BankRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrder4BankRequest extends AbstractStructBase
{
    /**
     * The MidocoBankSearchOrderCriteriaType
     * Meta information extracted from the WSDL
     * - ref: MidocoBankSearchOrderCriteriaType
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType $MidocoBankSearchOrderCriteriaType = null;
    /**
     * The ignorePackageServices
     * @var bool|null
     */
    protected ?bool $ignorePackageServices = null;
    /**
     * Constructor method for SearchOrder4BankRequest
     * @uses SearchOrder4BankRequest::setMidocoBankSearchOrderCriteriaType()
     * @uses SearchOrder4BankRequest::setIgnorePackageServices()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType $midocoBankSearchOrderCriteriaType
     * @param bool $ignorePackageServices
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType $midocoBankSearchOrderCriteriaType = null, ?bool $ignorePackageServices = null)
    {
        $this
            ->setMidocoBankSearchOrderCriteriaType($midocoBankSearchOrderCriteriaType)
            ->setIgnorePackageServices($ignorePackageServices);
    }
    /**
     * Get MidocoBankSearchOrderCriteriaType value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType|null
     */
    public function getMidocoBankSearchOrderCriteriaType(): ?\Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType
    {
        return $this->MidocoBankSearchOrderCriteriaType;
    }
    /**
     * Set MidocoBankSearchOrderCriteriaType value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType $midocoBankSearchOrderCriteriaType
     * @return \Pggns\MidocoApi\Bank\StructType\SearchOrder4BankRequest
     */
    public function setMidocoBankSearchOrderCriteriaType(?\Pggns\MidocoApi\Bank\StructType\MidocoBankSearchOrderCriteriaType $midocoBankSearchOrderCriteriaType = null): self
    {
        $this->MidocoBankSearchOrderCriteriaType = $midocoBankSearchOrderCriteriaType;
        
        return $this;
    }
    /**
     * Get ignorePackageServices value
     * @return bool|null
     */
    public function getIgnorePackageServices(): ?bool
    {
        return $this->ignorePackageServices;
    }
    /**
     * Set ignorePackageServices value
     * @param bool $ignorePackageServices
     * @return \Pggns\MidocoApi\Bank\StructType\SearchOrder4BankRequest
     */
    public function setIgnorePackageServices(?bool $ignorePackageServices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignorePackageServices) && !is_bool($ignorePackageServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignorePackageServices, true), gettype($ignorePackageServices)), __LINE__);
        }
        $this->ignorePackageServices = $ignorePackageServices;
        
        return $this;
    }
}
