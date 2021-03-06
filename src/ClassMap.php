<?php

namespace Enesdayanc\MasterpassCommitPurchase;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'CommitPurchase' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchase',
            'CommitPurchaseResponse' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchaseResponse',
            'CustomCommitPurchase' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchase',
            'CustomCommitPurchaseResponse' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchaseResponse',
            'CommitPurchaseRequest' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchaseRequest',
            'CommitPurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchaseRequestBody',
            'BasePurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\BasePurchaseRequestBody',
            'OtherMerchantRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OtherMerchantRequestBody',
            'DirectPurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DirectPurchaseRequestBody',
            'PurchaseAndRegisterRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\PurchaseAndRegisterRequestBody',
            'RegisterData' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\RegisterData',
            'CommitPurchaseResult' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchaseResult',
            'CommitPurchaseResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitPurchaseResponseBody',
            'ReversePurchaseResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ReversePurchaseResponseBody',
            'RewardResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\RewardResponseBody',
            'CustomRewardResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomRewardResponseBody',
            'OtherMerchantResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OtherMerchantResponseBody',
            'CustomRemotePurchaseResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomRemotePurchaseResponseBody',
            'CustomCommitPurchaseResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchaseResponseBody',
            'ProcessPaymentResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ProcessPaymentResponseBody',
            'PurchaseAndRegisterResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\PurchaseAndRegisterResponseBody',
            'DirectPurchaseResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DirectPurchaseResponseBody',
            'CustomCommitPurchaseRequest' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchaseRequest',
            'CustomCommitPurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchaseRequestBody',
            'BaseCustomPurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\BaseCustomPurchaseRequestBody',
            'CustomRemotePurchaseRequestBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomRemotePurchaseRequestBody',
            'CustomCommitPurchaseResult' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitPurchaseResult',
            'RequestHeader' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\RequestHeader',
            'ArrayOfRewardList' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfRewardList',
            'RewardList' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\RewardList',
            'ArrayOfChequeList' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfChequeList',
            'ChequeList' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ChequeList',
            'MoneyCard' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MoneyCard',
            'AdditionalFields' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AdditionalFields',
            'CustomField' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomField',
            'OrderDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OrderDetails',
            'ArrayOfOrderItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ArrayOfOrderItem',
            'OrderItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OrderItem',
            'BillDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\BillDetails',
            'DeliveryDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DeliveryDetails',
            'BuyerDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\BuyerDetails',
            'AntiFraudDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AntiFraudDetails',
            'OtherDetails' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OtherDetails',
            'MasterPassRequestCustomField' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MasterPassRequestCustomField',
            'ResponseHeader' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ResponseHeader',
            'ConsumerFinancialResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerFinancialResponseBody',
            'ResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ResponseBody',
            'SmsNotification' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\SmsNotification',
            'ConsumerRewardResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerRewardResponseBody',
            'MoneySendResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MoneySendResponseBody',
            'MerchantFinancialResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MerchantFinancialResponseBody',
            'ArrayOfListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfListItem',
            'ListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ListItem',
            'MasterPassResponseCustomField' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MasterPassResponseCustomField',
            'DirectPurchaseRequestBody3DAuth' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DirectPurchaseRequestBody3DAuth',
            'OtherMerchantRequestBody3DAuth' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\OtherMerchantRequestBody3DAuth',
            'DirectPurchaseResponseBody3DAuth' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DirectPurchaseResponseBody3DAuth',
            'GenerateKeyResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\GenerateKeyResponseBody',
            'TransactionVoidResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\TransactionVoidResponseBody',
            'CustomTransactionVoidResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomTransactionVoidResponseBody',
            'MerchantRegistrationResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MerchantRegistrationResponseBody',
            'CustomFields' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomFields',
            'DefineAuthTokenResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\DefineAuthTokenResponseBody',
            'UnBlockMPinResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\UnBlockMPinResponseBody',
            'GenerateOTPResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\GenerateOTPResponseBody',
            'ValidateTransactionResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ValidateTransactionResponseBody',
            'LoginResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\LoginResponseBody',
            'CheckMasterPassEndUserResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CheckMasterPassEndUserResponseBody',
            'VerifyMpinResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\VerifyMpinResponseBody',
            'ForgotPasswordResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ForgotPasswordResponseBody',
            'ResendOTPResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ResendOTPResponseBody',
            'UpdateUserResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\UpdateUserResponseBody',
            'ChangeAuthTokenResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ChangeAuthTokenResponseBody',
            'VerifyResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\VerifyResponseBody',
            'AuthenticateResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AuthenticateResponseBody',
            'UpdateCardLockResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\UpdateCardLockResponseBody',
            'ViewAddressListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ViewAddressListResponseBody',
            'ArrayOfAddressListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfAddressListItem',
            'AddressListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AddressListItem',
            'AddAddressResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AddAddressResponseBody',
            'MaintainAddressListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MaintainAddressListResponseBody',
            'MaintainListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MaintainListResponseBody',
            'ViewListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ViewListResponseBody',
            'IssuerCardRegistrationResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\IssuerCardRegistrationResponseBody',
            'TransactionQueryResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\TransactionQueryResponseBody',
            'CustomTransactionQueryResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomTransactionQueryResponseBody',
            'ResetMPinResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ResetMPinResponseBody',
            'RedownloadListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\RedownloadListResponseBody',
            'ArrayOfString1' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfString1',
            'ReinitializeDukptResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ReinitializeDukptResponseBody',
            'SetDefaultAccountResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\SetDefaultAccountResponseBody',
            'SetDefaultAddressResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\SetDefaultAddressResponseBody',
            'ArrayOfString' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfString',
            'ConsumerRegistrationResponseBodyForPurchase' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerRegistrationResponseBodyForPurchase',
            'VerifyUserResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\VerifyUserResponseBody',
            'ViewMPListResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ViewMPListResponseBody',
            'ArrayOfMPListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\ArrayType\\ArrayOfMPListItem',
            'MPListItem' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MPListItem',
            'Card' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\Card',
            'Contact' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\Contact',
            'ConsumerRegistrationResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerRegistrationResponseBody',
            'MPGAccountResponse' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MPGAccountResponse',
            'MPGAccountCustomField' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MPGAccountCustomField',
            'ExternalAccountResponse' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ExternalAccountResponse',
            'ExternalAccountCustomField' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ExternalAccountCustomField',
            'ConsumerAccountSearchResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerAccountSearchResponseBody',
            'ConsumerAccount' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ConsumerAccount',
            'LinkAccountToClientResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\LinkAccountToClientResponseBody',
            'AddCardToMasterPassResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\AddCardToMasterPassResponseBody',
            'CompleteRegistrationResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CompleteRegistrationResponseBody',
            'GetCardResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\GetCardResponseBody',
            'MasterpassPostbackResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\MasterpassPostbackResponseBody',
            'ManageRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\ManageRecurringPaymentResponseBody',
            'CustomCommitRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomCommitRecurringPaymentResponseBody',
            'CommitRecurringPaymentResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CommitRecurringPaymentResponseBody',
            'TransactionRefundResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\TransactionRefundResponseBody',
            'CustomTransactionRefundResponseBody' => '\\Enesdayanc\\MasterpassCommitPurchase\\StructType\\CustomTransactionRefundResponseBody',
        );
    }
}
