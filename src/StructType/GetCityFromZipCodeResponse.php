<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCityFromZipCodeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCityFromZipCodeResponse extends AbstractStructBase
{
    /**
     * The MidocoCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCity
     * @var \Pggns\MidocoApi\Bank\StructType\CityDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\CityDTO $MidocoCity = null;
    /**
     * Constructor method for GetCityFromZipCodeResponse
     * @uses GetCityFromZipCodeResponse::setMidocoCity()
     * @param \Pggns\MidocoApi\Bank\StructType\CityDTO $midocoCity
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\CityDTO $midocoCity = null)
    {
        $this
            ->setMidocoCity($midocoCity);
    }
    /**
     * Get MidocoCity value
     * @return \Pggns\MidocoApi\Bank\StructType\CityDTO|null
     */
    public function getMidocoCity(): ?\Pggns\MidocoApi\Bank\StructType\CityDTO
    {
        return $this->MidocoCity;
    }
    /**
     * Set MidocoCity value
     * @param \Pggns\MidocoApi\Bank\StructType\CityDTO $midocoCity
     * @return \Pggns\MidocoApi\Bank\StructType\GetCityFromZipCodeResponse
     */
    public function setMidocoCity(?\Pggns\MidocoApi\Bank\StructType\CityDTO $midocoCity = null): self
    {
        $this->MidocoCity = $midocoCity;
        
        return $this;
    }
}
