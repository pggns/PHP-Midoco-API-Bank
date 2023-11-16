<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DtausTransactionTypeType EnumType
 * @subpackage Enumerations
 */
class DtausTransactionTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ADTAUS_COLLECT_TYPE_ORDER'
     * @return string 'ADTAUS_COLLECT_TYPE_ORDER'
     */
    const VALUE_ADTAUS_COLLECT_TYPE_ORDER = 'ADTAUS_COLLECT_TYPE_ORDER';
    /**
     * Constant for value 'BDTAUS_COLLECT_TYPE_DIVERS'
     * @return string 'BDTAUS_COLLECT_TYPE_DIVERS'
     */
    const VALUE_BDTAUS_COLLECT_TYPE_DIVERS = 'BDTAUS_COLLECT_TYPE_DIVERS';
    /**
     * Constant for value 'CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER'
     * @return string 'CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER'
     */
    const VALUE_CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER = 'CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER';
    /**
     * Return allowed values
     * @uses self::VALUE_ADTAUS_COLLECT_TYPE_ORDER
     * @uses self::VALUE_BDTAUS_COLLECT_TYPE_DIVERS
     * @uses self::VALUE_CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADTAUS_COLLECT_TYPE_ORDER,
            self::VALUE_BDTAUS_COLLECT_TYPE_DIVERS,
            self::VALUE_CDTAUS_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER,
        ];
    }
}
