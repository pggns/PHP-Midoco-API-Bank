<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogMidocoClientPerformanceInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LogMidocoClientPerformanceInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer[]
     */
    protected ?array $MidocoCheckDtdAnswer = null;
    /**
     * Constructor method for LogMidocoClientPerformanceInfoResponse
     * @uses LogMidocoClientPerformanceInfoResponse::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer[] $midocoCheckDtdAnswer
     */
    public function __construct(?array $midocoCheckDtdAnswer = null)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer[]
     */
    public function getMidocoCheckDtdAnswer(): ?array
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCheckDtdAnswer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCheckDtdAnswer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCheckDtdAnswerForArrayConstraintFromSetMidocoCheckDtdAnswer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem) {
            // validation for constraint: itemType
            if (!$logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer) {
                $invalidValues[] = is_object($logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem) ? get_class($logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem) : sprintf('%s(%s)', gettype($logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem), var_export($logMidocoClientPerformanceInfoResponseMidocoCheckDtdAnswerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCheckDtdAnswer property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer[] $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Bank\StructType\LogMidocoClientPerformanceInfoResponse
     */
    public function setMidocoCheckDtdAnswer(?array $midocoCheckDtdAnswer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCheckDtdAnswerArrayErrorMessage = self::validateMidocoCheckDtdAnswerForArrayConstraintFromSetMidocoCheckDtdAnswer($midocoCheckDtdAnswer))) {
            throw new InvalidArgumentException($midocoCheckDtdAnswerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
    /**
     * Add item to MidocoCheckDtdAnswer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer $item
     * @return \Pggns\MidocoApi\Bank\StructType\LogMidocoClientPerformanceInfoResponse
     */
    public function addToMidocoCheckDtdAnswer(\Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer) {
            throw new InvalidArgumentException(sprintf('The MidocoCheckDtdAnswer property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoCheckDtdAnswer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCheckDtdAnswer[] = $item;
        
        return $this;
    }
}
