<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FillDTAUSReportRequest StructType
 * @subpackage Structs
 */
class FillDTAUSReportRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitFile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitFile
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile[]
     */
    protected array $MidocoDebitFile = [];
    /**
     * Constructor method for FillDTAUSReportRequest
     * @uses FillDTAUSReportRequest::setMidocoDebitFile()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile[] $midocoDebitFile
     */
    public function __construct(array $midocoDebitFile = [])
    {
        $this
            ->setMidocoDebitFile($midocoDebitFile);
    }
    /**
     * Get MidocoDebitFile value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile[]
     */
    public function getMidocoDebitFile(): array
    {
        return $this->MidocoDebitFile;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitFile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitFile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitFileForArrayConstraintsFromSetMidocoDebitFile(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $fillDTAUSReportRequestMidocoDebitFileItem) {
            // validation for constraint: itemType
            if (!$fillDTAUSReportRequestMidocoDebitFileItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile) {
                $invalidValues[] = is_object($fillDTAUSReportRequestMidocoDebitFileItem) ? get_class($fillDTAUSReportRequestMidocoDebitFileItem) : sprintf('%s(%s)', gettype($fillDTAUSReportRequestMidocoDebitFileItem), var_export($fillDTAUSReportRequestMidocoDebitFileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitFile property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitFile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile[] $midocoDebitFile
     * @return \Pggns\MidocoApi\Bank\StructType\FillDTAUSReportRequest
     */
    public function setMidocoDebitFile(array $midocoDebitFile = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitFileArrayErrorMessage = self::validateMidocoDebitFileForArrayConstraintsFromSetMidocoDebitFile($midocoDebitFile))) {
            throw new InvalidArgumentException($midocoDebitFileArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitFile = $midocoDebitFile;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitFile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $item
     * @return \Pggns\MidocoApi\Bank\StructType\FillDTAUSReportRequest
     */
    public function addToMidocoDebitFile(\Pggns\MidocoApi\Bank\StructType\MidocoDebitFile $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitFile property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitFile[] = $item;
        
        return $this;
    }
}
