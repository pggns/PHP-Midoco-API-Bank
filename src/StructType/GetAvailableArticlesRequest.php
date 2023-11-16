<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableArticlesRequest StructType
 * @subpackage Structs
 */
class GetAvailableArticlesRequest extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\Bank\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for GetAvailableArticlesRequest
     * @uses GetAvailableArticlesRequest::setMidocoArticle()
     * @uses GetAvailableArticlesRequest::setStartDate()
     * @uses GetAvailableArticlesRequest::setEndDate()
     * @param \Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle = null, ?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setMidocoArticle($midocoArticle)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
    }
    /**
     * Get MidocoArticle value
     * @return \Pggns\MidocoApi\Bank\StructType\ArticleDTO|null
     */
    public function getMidocoArticle(): ?\Pggns\MidocoApi\Bank\StructType\ArticleDTO
    {
        return $this->MidocoArticle;
    }
    /**
     * Set MidocoArticle value
     * @param \Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableArticlesRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableArticlesRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableArticlesRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
