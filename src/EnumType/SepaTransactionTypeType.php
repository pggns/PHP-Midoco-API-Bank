<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SepaTransactionTypeType EnumType
 * @subpackage Enumerations
 */
class SepaTransactionTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ASEPA_COLLECT_TYPE_ORDER'
     * @return string 'ASEPA_COLLECT_TYPE_ORDER'
     */
    const VALUE_ASEPA_COLLECT_TYPE_ORDER = 'ASEPA_COLLECT_TYPE_ORDER';
    /**
     * Constant for value 'BSEPA_COLLECT_TYPE_BILLING'
     * @return string 'BSEPA_COLLECT_TYPE_BILLING'
     */
    const VALUE_BSEPA_COLLECT_TYPE_BILLING = 'BSEPA_COLLECT_TYPE_BILLING';
    /**
     * Constant for value 'CSEPA_COLLECT_TYPE_DIVERS'
     * @return string 'CSEPA_COLLECT_TYPE_DIVERS'
     */
    const VALUE_CSEPA_COLLECT_TYPE_DIVERS = 'CSEPA_COLLECT_TYPE_DIVERS';
    /**
     * Constant for value 'DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER'
     * @return string 'DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER'
     */
    const VALUE_DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER = 'DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER';
    /**
     * Return allowed values
     * @uses self::VALUE_ASEPA_COLLECT_TYPE_ORDER
     * @uses self::VALUE_BSEPA_COLLECT_TYPE_BILLING
     * @uses self::VALUE_CSEPA_COLLECT_TYPE_DIVERS
     * @uses self::VALUE_DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASEPA_COLLECT_TYPE_ORDER,
            self::VALUE_BSEPA_COLLECT_TYPE_BILLING,
            self::VALUE_CSEPA_COLLECT_TYPE_DIVERS,
            self::VALUE_DSEPA_COLLECT_TYPE_DIVERS_INCL_CREDIT_TRANSFER,
        ];
    }
}
