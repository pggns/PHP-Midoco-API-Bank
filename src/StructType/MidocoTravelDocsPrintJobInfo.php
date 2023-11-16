<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelDocsPrintJobInfo StructType
 * @subpackage Structs
 */
class MidocoTravelDocsPrintJobInfo extends AbstractStructBase
{
    /**
     * The MidocoTravelDocsPrintInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelDocsPrintInfo
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo $MidocoTravelDocsPrintInfo = null;
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect[]
     */
    protected array $MidocoPrintSelect = [];
    /**
     * Constructor method for MidocoTravelDocsPrintJobInfo
     * @uses MidocoTravelDocsPrintJobInfo::setMidocoTravelDocsPrintInfo()
     * @uses MidocoTravelDocsPrintJobInfo::setMidocoPrintSelect()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect[] $midocoPrintSelect
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo = null, array $midocoPrintSelect = [])
    {
        $this
            ->setMidocoTravelDocsPrintInfo($midocoTravelDocsPrintInfo)
            ->setMidocoPrintSelect($midocoPrintSelect);
    }
    /**
     * Get MidocoTravelDocsPrintInfo value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo|null
     */
    public function getMidocoTravelDocsPrintInfo(): ?\Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo
    {
        return $this->MidocoTravelDocsPrintInfo;
    }
    /**
     * Set MidocoTravelDocsPrintInfo value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function setMidocoTravelDocsPrintInfo(?\Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo = null): self
    {
        $this->MidocoTravelDocsPrintInfo = $midocoTravelDocsPrintInfo;
        
        return $this;
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$midocoTravelDocsPrintJobInfoMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) ? get_class($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem), var_export($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function setMidocoPrintSelect(array $midocoPrintSelect = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
}
