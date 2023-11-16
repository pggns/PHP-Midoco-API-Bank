<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReimportIbanDataResponse StructType
 * @subpackage Structs
 */
class ReimportIbanDataResponse extends AbstractStructBase
{
    /**
     * The IBANImportExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: IBANImportExport
     * @var \Pggns\MidocoApi\Bank\StructType\IBANImportExport[]
     */
    protected array $IBANImportExport = [];
    /**
     * Constructor method for ReimportIbanDataResponse
     * @uses ReimportIbanDataResponse::setIBANImportExport()
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport[] $iBANImportExport
     */
    public function __construct(array $iBANImportExport = [])
    {
        $this
            ->setIBANImportExport($iBANImportExport);
    }
    /**
     * Get IBANImportExport value
     * @return \Pggns\MidocoApi\Bank\StructType\IBANImportExport[]
     */
    public function getIBANImportExport(): array
    {
        return $this->IBANImportExport;
    }
    /**
     * This method is responsible for validating the values passed to the setIBANImportExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIBANImportExport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIBANImportExportForArrayConstraintsFromSetIBANImportExport(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $reimportIbanDataResponseIBANImportExportItem) {
            // validation for constraint: itemType
            if (!$reimportIbanDataResponseIBANImportExportItem instanceof \Pggns\MidocoApi\Bank\StructType\IBANImportExport) {
                $invalidValues[] = is_object($reimportIbanDataResponseIBANImportExportItem) ? get_class($reimportIbanDataResponseIBANImportExportItem) : sprintf('%s(%s)', gettype($reimportIbanDataResponseIBANImportExportItem), var_export($reimportIbanDataResponseIBANImportExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IBANImportExport property can only contain items of type \Pggns\MidocoApi\Bank\StructType\IBANImportExport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IBANImportExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport[] $iBANImportExport
     * @return \Pggns\MidocoApi\Bank\StructType\ReimportIbanDataResponse
     */
    public function setIBANImportExport(array $iBANImportExport = []): self
    {
        // validation for constraint: array
        if ('' !== ($iBANImportExportArrayErrorMessage = self::validateIBANImportExportForArrayConstraintsFromSetIBANImportExport($iBANImportExport))) {
            throw new InvalidArgumentException($iBANImportExportArrayErrorMessage, __LINE__);
        }
        $this->IBANImportExport = $iBANImportExport;
        
        return $this;
    }
    /**
     * Add item to IBANImportExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\IBANImportExport $item
     * @return \Pggns\MidocoApi\Bank\StructType\ReimportIbanDataResponse
     */
    public function addToIBANImportExport(\Pggns\MidocoApi\Bank\StructType\IBANImportExport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\IBANImportExport) {
            throw new InvalidArgumentException(sprintf('The IBANImportExport property can only contain items of type \Pggns\MidocoApi\Bank\StructType\IBANImportExport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IBANImportExport[] = $item;
        
        return $this;
    }
}
