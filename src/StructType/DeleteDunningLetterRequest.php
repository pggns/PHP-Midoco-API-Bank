<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningLetterRequest StructType
 * @subpackage Structs
 */
class DeleteDunningLetterRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for DeleteDunningLetterRequest
     * @uses DeleteDunningLetterRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Bank\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteDunningLetterRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Bank\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}
