<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteArticleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteArticleRequest extends AbstractStructBase
{
    /**
     * The MidocoArticle
     * Meta information extracted from the WSDL
     * - ref: MidocoArticle
     * @var \Pggns\MidocoApi\Bank\StructType\ArticleDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $MidocoArticle = null;
    /**
     * Constructor method for DeleteArticleRequest
     * @uses DeleteArticleRequest::setMidocoArticle()
     * @param \Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle = null)
    {
        $this
            ->setMidocoArticle($midocoArticle);
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
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteArticleRequest
     */
    public function setMidocoArticle(?\Pggns\MidocoApi\Bank\StructType\ArticleDTO $midocoArticle = null): self
    {
        $this->MidocoArticle = $midocoArticle;
        
        return $this;
    }
}
