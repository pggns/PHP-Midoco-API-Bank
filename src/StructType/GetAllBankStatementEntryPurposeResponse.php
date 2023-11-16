<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllBankStatementEntryPurposeResponse StructType
 * @subpackage Structs
 */
class GetAllBankStatementEntryPurposeResponse extends AbstractStructBase
{
    /**
     * The GetBankStatementEntryPurposeResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GetBankStatementEntryPurposeResponse
     * @var \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse[]
     */
    protected array $GetBankStatementEntryPurposeResponse = [];
    /**
     * Constructor method for GetAllBankStatementEntryPurposeResponse
     * @uses GetAllBankStatementEntryPurposeResponse::setGetBankStatementEntryPurposeResponse()
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse[] $getBankStatementEntryPurposeResponse
     */
    public function __construct(array $getBankStatementEntryPurposeResponse = [])
    {
        $this
            ->setGetBankStatementEntryPurposeResponse($getBankStatementEntryPurposeResponse);
    }
    /**
     * Get GetBankStatementEntryPurposeResponse value
     * @return \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse[]
     */
    public function getGetBankStatementEntryPurposeResponse(): array
    {
        return $this->GetBankStatementEntryPurposeResponse;
    }
    /**
     * This method is responsible for validating the values passed to the setGetBankStatementEntryPurposeResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetBankStatementEntryPurposeResponse method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetBankStatementEntryPurposeResponseForArrayConstraintsFromSetGetBankStatementEntryPurposeResponse(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem) {
            // validation for constraint: itemType
            if (!$getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem instanceof \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse) {
                $invalidValues[] = is_object($getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem) ? get_class($getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem) : sprintf('%s(%s)', gettype($getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem), var_export($getAllBankStatementEntryPurposeResponseGetBankStatementEntryPurposeResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetBankStatementEntryPurposeResponse property can only contain items of type \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetBankStatementEntryPurposeResponse value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse[] $getBankStatementEntryPurposeResponse
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeResponse
     */
    public function setGetBankStatementEntryPurposeResponse(array $getBankStatementEntryPurposeResponse = []): self
    {
        // validation for constraint: array
        if ('' !== ($getBankStatementEntryPurposeResponseArrayErrorMessage = self::validateGetBankStatementEntryPurposeResponseForArrayConstraintsFromSetGetBankStatementEntryPurposeResponse($getBankStatementEntryPurposeResponse))) {
            throw new InvalidArgumentException($getBankStatementEntryPurposeResponseArrayErrorMessage, __LINE__);
        }
        $this->GetBankStatementEntryPurposeResponse = $getBankStatementEntryPurposeResponse;
        
        return $this;
    }
    /**
     * Add item to GetBankStatementEntryPurposeResponse value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeResponse
     */
    public function addToGetBankStatementEntryPurposeResponse(\Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse) {
            throw new InvalidArgumentException(sprintf('The GetBankStatementEntryPurposeResponse property can only contain items of type \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetBankStatementEntryPurposeResponse[] = $item;
        
        return $this;
    }
}
