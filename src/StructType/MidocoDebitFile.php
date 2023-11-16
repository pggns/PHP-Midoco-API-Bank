<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitFile StructType
 * @subpackage Structs
 */
class MidocoDebitFile extends DtausFileDTO
{
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The typeName
     * @var string|null
     */
    protected ?string $typeName = null;
    /**
     * Constructor method for MidocoDebitFile
     * @uses MidocoDebitFile::setUserName()
     * @uses MidocoDebitFile::setTypeName()
     * @param string $userName
     * @param string $typeName
     */
    public function __construct(?string $userName = null, ?string $typeName = null)
    {
        $this
            ->setUserName($userName)
            ->setTypeName($typeName);
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get typeName value
     * @return string|null
     */
    public function getTypeName(): ?string
    {
        return $this->typeName;
    }
    /**
     * Set typeName value
     * @param string $typeName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoDebitFile
     */
    public function setTypeName(?string $typeName = null): self
    {
        // validation for constraint: string
        if (!is_null($typeName) && !is_string($typeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeName, true), gettype($typeName)), __LINE__);
        }
        $this->typeName = $typeName;
        
        return $this;
    }
}
