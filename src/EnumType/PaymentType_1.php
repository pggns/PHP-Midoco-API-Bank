<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for paymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType_1 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT_1 = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH_1 = 'CASH';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC_1 = 'CC';
    /**
     * Return allowed values
     * @uses self::VALUE_DEBIT_1
     * @uses self::VALUE_CASH_1
     * @uses self::VALUE_CC_1
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEBIT_1,
            self::VALUE_CASH_1,
            self::VALUE_CC_1,
        ];
    }
}
