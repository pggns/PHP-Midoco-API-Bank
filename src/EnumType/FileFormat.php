<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for fileFormat EnumType
 * @subpackage Enumerations
 */
class FileFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MT940'
     * @return string 'MT940'
     */
    const VALUE_MT_940 = 'MT940';
    /**
     * Constant for value 'CAMT'
     * @return string 'CAMT'
     */
    const VALUE_CAMT = 'CAMT';
    /**
     * Constant for value 'WIRECARD'
     * @return string 'WIRECARD'
     */
    const VALUE_WIRECARD = 'WIRECARD';
    /**
     * Constant for value 'BOA'
     * @return string 'BOA'
     */
    const VALUE_BOA = 'BOA';
    /**
     * Constant for value 'V11'
     * @return string 'V11'
     */
    const VALUE_V_11 = 'V11';
    /**
     * Constant for value 'BAI2'
     * @return string 'BAI2'
     */
    const VALUE_BAI_2 = 'BAI2';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Return allowed values
     * @uses self::VALUE_MT_940
     * @uses self::VALUE_CAMT
     * @uses self::VALUE_WIRECARD
     * @uses self::VALUE_BOA
     * @uses self::VALUE_V_11
     * @uses self::VALUE_BAI_2
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MT_940,
            self::VALUE_CAMT,
            self::VALUE_WIRECARD,
            self::VALUE_BOA,
            self::VALUE_V_11,
            self::VALUE_BAI_2,
            self::VALUE_UNKNOWN,
        ];
    }
}
