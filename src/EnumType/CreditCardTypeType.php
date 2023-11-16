<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CreditCardTypeType EnumType
 * @subpackage Enumerations
 */
class CreditCardTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'VI'
     * @return string 'VI'
     */
    const VALUE_VI = 'VI';
    /**
     * Constant for value 'MC'
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'AX'
     * @return string 'AX'
     */
    const VALUE_AX = 'AX';
    /**
     * Constant for value 'DC'
     * @return string 'DC'
     */
    const VALUE_DC = 'DC';
    /**
     * Constant for value 'DI'
     * @return string 'DI'
     */
    const VALUE_DI = 'DI';
    /**
     * Constant for value 'JC'
     * @return string 'JC'
     */
    const VALUE_JC = 'JC';
    /**
     * Constant for value 'ENROUTE'
     * @return string 'ENROUTE'
     */
    const VALUE_ENROUTE = 'ENROUTE';
    /**
     * Constant for value 'CB'
     * @return string 'CB'
     */
    const VALUE_CB = 'CB';
    /**
     * Constant for value 'TP'
     * @return string 'TP'
     */
    const VALUE_TP = 'TP';
    /**
     * Constant for value 'PV'
     * @return string 'PV'
     */
    const VALUE_PV = 'PV';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Return allowed values
     * @uses self::VALUE_VI
     * @uses self::VALUE_MC
     * @uses self::VALUE_AX
     * @uses self::VALUE_DC
     * @uses self::VALUE_DI
     * @uses self::VALUE_JC
     * @uses self::VALUE_ENROUTE
     * @uses self::VALUE_CB
     * @uses self::VALUE_TP
     * @uses self::VALUE_PV
     * @uses self::VALUE_PP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VI,
            self::VALUE_MC,
            self::VALUE_AX,
            self::VALUE_DC,
            self::VALUE_DI,
            self::VALUE_JC,
            self::VALUE_ENROUTE,
            self::VALUE_CB,
            self::VALUE_TP,
            self::VALUE_PV,
            self::VALUE_PP,
        ];
    }
}
