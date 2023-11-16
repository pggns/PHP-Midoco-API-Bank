<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/BankService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/BankService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Bank\ClassMap::get(),
];
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Bank\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveBankStatementFile operation/method
 */
if ($save->saveBankStatementFile(new \Pggns\MidocoApi\Bank\StructType\SaveBankStatementFileRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBankCache operation/method
 */
if ($save->saveBankCache(new \Pggns\MidocoApi\Bank\StructType\SaveBankCacheRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBankBookingJournal operation/method
 */
if ($save->saveBankBookingJournal(new \Pggns\MidocoApi\Bank\StructType\SaveBankBookingJournalRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveBankStatementProtocol operation/method
 */
if ($save->saveBankStatementProtocol(new \Pggns\MidocoApi\Bank\StructType\SaveBankStatementProtocolRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Bank\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getBankStatements4Account operation/method
 */
if ($get->getBankStatements4Account(new \Pggns\MidocoApi\Bank\StructType\GetBankStatements4AccountRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllBankStatements operation/method
 */
if ($get->getAllBankStatements(new \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankCache operation/method
 */
if ($get->getBankCache(new \Pggns\MidocoApi\Bank\StructType\GetBankCacheRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankBookingJournal operation/method
 */
if ($get->getBankBookingJournal(new \Pggns\MidocoApi\Bank\StructType\GetBankBookingJournalRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankAccount4StatementEntry operation/method
 */
if ($get->getBankAccount4StatementEntry(new \Pggns\MidocoApi\Bank\StructType\GetBankAccount4StatementEntryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankStatementEntryPurpose operation/method
 */
if ($get->getBankStatementEntryPurpose(new \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryPurposeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllBankStatementEntryPurpose operation/method
 */
if ($get->getAllBankStatementEntryPurpose(new \Pggns\MidocoApi\Bank\StructType\GetAllBankStatementEntryPurposeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllBankCache operation/method
 */
if ($get->getAllBankCache(new \Pggns\MidocoApi\Bank\StructType\GetAllBankCacheRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVat4VatCode operation/method
 */
if ($get->getVat4VatCode(new \Pggns\MidocoApi\Bank\StructType\GetVat4VatCodeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllNotCompletedBankStatements operation/method
 */
if ($get->getAllNotCompletedBankStatements(new \Pggns\MidocoApi\Bank\StructType\GetAllNotCompletedBankStatementsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDebitFile operation/method
 */
if ($get->getDebitFile(new \Pggns\MidocoApi\Bank\StructType\GetDebitFileRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEntry operation/method
 */
if ($get->getEntry(new \Pggns\MidocoApi\Bank\StructType\GetEntryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEntryHistory operation/method
 */
if ($get->getEntryHistory(new \Pggns\MidocoApi\Bank\StructType\GetEntryHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEntryRestAsProv operation/method
 */
if ($get->getEntryRestAsProv(new \Pggns\MidocoApi\Bank\StructType\GetEntryRestAsProvRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankCachePositions operation/method
 */
if ($get->getBankCachePositions(new \Pggns\MidocoApi\Bank\StructType\GetBankCachePositionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountPlan4OrgUnit operation/method
 */
if ($get->getAccountPlan4OrgUnit(new \Pggns\MidocoApi\Bank\StructType\GetAccountPlan4OrgUnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankStatementEntry operation/method
 */
if ($get->getBankStatementEntry(new \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRevenueInfoForOrder operation/method
 */
if ($get->getRevenueInfoForOrder(new \Pggns\MidocoApi\Bank\StructType\GetRevenueInfoForOrderRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankStatementEntryWorkingUser operation/method
 */
if ($get->getBankStatementEntryWorkingUser(new \Pggns\MidocoApi\Bank\StructType\GetBankStatementEntryWorkingUserRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDtazvTransactions operation/method
 */
if ($get->getDtazvTransactions(new \Pggns\MidocoApi\Bank\StructType\GetDtazvTransactionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBankStatementProtocol operation/method
 */
if ($get->getBankStatementProtocol(new \Pggns\MidocoApi\Bank\StructType\GetBankStatementProtocolRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoSearchBankStatementProtocol operation/method
 */
if ($get->getMidocoSearchBankStatementProtocol(new \Pggns\MidocoApi\Bank\StructType\GetMidocoSearchBankStatementProtocolRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\Bank\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchBankStatements operation/method
 */
if ($search->searchBankStatements(new \Pggns\MidocoApi\Bank\StructType\SearchBankStatementsRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBankCache operation/method
 */
if ($search->searchBankCache(new \Pggns\MidocoApi\Bank\StructType\SearchBankCacheRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchBankCache4Entry operation/method
 */
if ($search->searchBankCache4Entry(new \Pggns\MidocoApi\Bank\StructType\SearchBankCache4EntryRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchAccountEntriesBalances4Bank operation/method
 */
if ($search->searchAccountEntriesBalances4Bank(new \Pggns\MidocoApi\Bank\StructType\SearchAccountEntriesBalances4BankRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchOrder4Bank operation/method
 */
if ($search->searchOrder4Bank(new \Pggns\MidocoApi\Bank\StructType\SearchOrder4BankRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchDebitFile operation/method
 */
if ($search->searchDebitFile(new \Pggns\MidocoApi\Bank\StructType\SearchDebitFileRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchCreditor4SupplierSettlement operation/method
 */
if ($search->searchCreditor4SupplierSettlement(new \Pggns\MidocoApi\Bank\StructType\SearchCreditor4SupplierSettlementRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for Import ServiceType
 */
$import = new \Pggns\MidocoApi\Bank\ServiceType\Import($options);
$import->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for importBankFile operation/method
 */
if ($import->importBankFile(new \Pggns\MidocoApi\Bank\StructType\ImportBankFileRequest()) !== false) {
    print_r($import->getResult());
} else {
    print_r($import->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Bank\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteBankCache operation/method
 */
if ($delete->deleteBankCache(new \Pggns\MidocoApi\Bank\StructType\DeleteBankCacheRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankBookingJournal operation/method
 */
if ($delete->deleteBankBookingJournal(new \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournalRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDebitFile operation/method
 */
if ($delete->deleteDebitFile(new \Pggns\MidocoApi\Bank\StructType\DeleteDebitFileRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankBookingJournal4StatementEntry operation/method
 */
if ($delete->deleteBankBookingJournal4StatementEntry(new \Pggns\MidocoApi\Bank\StructType\DeleteBankBookingJournal4StatementEntryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankCachePosition operation/method
 */
if ($delete->deleteBankCachePosition(new \Pggns\MidocoApi\Bank\StructType\DeleteBankCachePositionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteStatementFile operation/method
 */
if ($delete->deleteStatementFile(new \Pggns\MidocoApi\Bank\StructType\DeleteStatementFileRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankStatementEntry operation/method
 */
if ($delete->deleteBankStatementEntry(new \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementEntryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteBankStatementProtocol operation/method
 */
if ($delete->deleteBankStatementProtocol(new \Pggns\MidocoApi\Bank\StructType\DeleteBankStatementProtocolRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Sepa ServiceType
 */
$sepa = new \Pggns\MidocoApi\Bank\ServiceType\Sepa($options);
$sepa->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for sepaOnlineDirectDebit operation/method
 */
if ($sepa->sepaOnlineDirectDebit(new \Pggns\MidocoApi\Bank\StructType\SepaOnlineDirectDebitRequest(), new \Pggns\MidocoApi\Bank\StructType\MidocoCredentialsType()) !== false) {
    print_r($sepa->getResult());
} else {
    print_r($sepa->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \Pggns\MidocoApi\Bank\ServiceType\Process($options);
$process->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for processBankStatements operation/method
 */
if ($process->processBankStatements(new \Pggns\MidocoApi\Bank\StructType\ProcessBankStatementsRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processBankSingleStatement operation/method
 */
if ($process->processBankSingleStatement(new \Pggns\MidocoApi\Bank\StructType\ProcessBankSingleStatementRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processCreditCardPositions operation/method
 */
if ($process->processCreditCardPositions(new \Pggns\MidocoApi\Bank\StructType\ProcessCreditCardPositionsRequest()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Export ServiceType
 */
$export = new \Pggns\MidocoApi\Bank\ServiceType\Export($options);
$export->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for exportBankJournal2BookingJournal operation/method
 */
if ($export->exportBankJournal2BookingJournal(new \Pggns\MidocoApi\Bank\StructType\ExportBankJournal2BookingJournalRequest()) !== false) {
    print_r($export->getResult());
} else {
    print_r($export->getLastError());
}
/**
 * Samples for Collect ServiceType
 */
$collect = new \Pggns\MidocoApi\Bank\ServiceType\Collect($options);
$collect->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for collectDirectDebitPositions operation/method
 */
if ($collect->collectDirectDebitPositions(new \Pggns\MidocoApi\Bank\StructType\CollectDirectDebitPositionsRequest()) !== false) {
    print_r($collect->getResult());
} else {
    print_r($collect->getLastError());
}
/**
 * Sample call for collectCreditCardPositions operation/method
 */
if ($collect->collectCreditCardPositions(new \Pggns\MidocoApi\Bank\StructType\CollectCreditCardPositionsRequest()) !== false) {
    print_r($collect->getResult());
} else {
    print_r($collect->getLastError());
}
/**
 * Sample call for collectCreditorDtazvPositions operation/method
 */
if ($collect->collectCreditorDtazvPositions(new \Pggns\MidocoApi\Bank\StructType\CollectCreditorDtazvPositionsRequest()) !== false) {
    print_r($collect->getResult());
} else {
    print_r($collect->getLastError());
}
/**
 * Sample call for collectBankPaymentPositions operation/method
 */
if ($collect->collectBankPaymentPositions(new \Pggns\MidocoApi\Bank\StructType\CollectBankPaymentPositionsRequest()) !== false) {
    print_r($collect->getResult());
} else {
    print_r($collect->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Pggns\MidocoApi\Bank\ServiceType\Check($options);
$check->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for checkBankBookingJournal operation/method
 */
if ($check->checkBankBookingJournal(new \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for checkManualBankBookingJournal operation/method
 */
if ($check->checkManualBankBookingJournal(new \Pggns\MidocoApi\Bank\StructType\CheckBankBookingJournalRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Pggns\MidocoApi\Bank\ServiceType\Set($options);
$set->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for setBankStatementEntryWorkingUser operation/method
 */
if ($set->setBankStatementEntryWorkingUser(new \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryWorkingUserRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for setBankStatementEntryComment operation/method
 */
if ($set->setBankStatementEntryComment(new \Pggns\MidocoApi\Bank\StructType\SetBankStatementEntryCommentRequest()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Pggns\MidocoApi\Bank\ServiceType\Create($options);
$create->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for createDtazvTransaction operation/method
 */
if ($create->createDtazvTransaction(new \Pggns\MidocoApi\Bank\StructType\CreateDtazvTransactionRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for createDtazvFile operation/method
 */
if ($create->createDtazvFile(new \Pggns\MidocoApi\Bank\StructType\CreateDtazvFileRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Rebuild ServiceType
 */
$rebuild = new \Pggns\MidocoApi\Bank\ServiceType\Rebuild($options);
$rebuild->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for rebuildDocument4BankStatementProtocol operation/method
 */
if ($rebuild->rebuildDocument4BankStatementProtocol(new \Pggns\MidocoApi\Bank\StructType\RebuildDocument4BankStatementProtocolRequest()) !== false) {
    print_r($rebuild->getResult());
} else {
    print_r($rebuild->getLastError());
}
