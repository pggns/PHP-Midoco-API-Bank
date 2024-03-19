<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoQuestionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoQuestionRequest extends AbstractStructBase
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestion
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * Constructor method for SaveMidocoQuestionRequest
     * @uses SaveMidocoQuestionRequest::setMidocoQuestion()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQuestion $midocoQuestion
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoQuestion $midocoQuestion = null)
    {
        $this
            ->setMidocoQuestion($midocoQuestion);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\Bank\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\Bank\StructType\SaveMidocoQuestionRequest
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\Bank\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
}
