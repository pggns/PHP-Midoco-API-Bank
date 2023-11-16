<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDebitor4EntryResponse StructType
 * @subpackage Structs
 */
class SearchDebitor4EntryResponse extends AbstractStructBase
{
    /**
     * The debitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $debitor = [];
    /**
     * Constructor method for SearchDebitor4EntryResponse
     * @uses SearchDebitor4EntryResponse::setDebitor()
     * @param string[] $debitor
     */
    public function __construct(array $debitor = [])
    {
        $this
            ->setDebitor($debitor);
    }
    /**
     * Get debitor value
     * @return string[]
     */
    public function getDebitor(): array
    {
        return $this->debitor;
    }
    /**
     * This method is responsible for validating the values passed to the setDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDebitorForArrayConstraintsFromSetDebitor(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDebitor4EntryResponseDebitorItem) {
            // validation for constraint: itemType
            if (!is_string($searchDebitor4EntryResponseDebitorItem)) {
                $invalidValues[] = is_object($searchDebitor4EntryResponseDebitorItem) ? get_class($searchDebitor4EntryResponseDebitorItem) : sprintf('%s(%s)', gettype($searchDebitor4EntryResponseDebitorItem), var_export($searchDebitor4EntryResponseDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The debitor property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set debitor value
     * @throws InvalidArgumentException
     * @param string[] $debitor
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitor4EntryResponse
     */
    public function setDebitor(array $debitor = []): self
    {
        // validation for constraint: array
        if ('' !== ($debitorArrayErrorMessage = self::validateDebitorForArrayConstraintsFromSetDebitor($debitor))) {
            throw new InvalidArgumentException($debitorArrayErrorMessage, __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Add item to debitor value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\SearchDebitor4EntryResponse
     */
    public function addToDebitor(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The debitor property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->debitor[] = $item;
        
        return $this;
    }
}
