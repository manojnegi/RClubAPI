<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Billing extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Fetch Transaction Details For Customer
     */
    public function transactionDetails(array $params) {
        $endPoint = Http::prepare('billing/customer-transactions.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * Fetch Transaction Details For Sub-Reseller
     */
    public function transactionDetailsSubReseller(array $params) {
        $endPoint = Http::prepare('billing/reseller-transactions.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    /*
     * Fetch Greedy Transaction Details For Customer
     */
    public function greedyTransactionDetails(array $params) {
        $endPoint = Http::prepare('billing/customer-greedy-transactions.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * Fetch Greedy Transaction Details For Sub-Reseller
     */
    public function greedyTransactionDetailsSubReseller(array $params) {
        $endPoint = Http::prepare('billing/reseller-greedy-transactions.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * Pay Customer Transactions
     */
    public function payCustomer(array $params) {
        $endPoint = Http::prepare('billing/customer-pay.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * Customer Available Balance
     */
    public function customerAvailableBalance(array $params) {
        $endPoint = Http::prepare('billing/customer-balance.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    
    /*
     * Order Without Payment
     */
    public function orderWithoutPayment(array $params) {
        $endPoint = Http::prepare('billing/execute-order-without-payment.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * search transactions of customer
     */
    public function searchTransactionCustomer(array $params) {
        $endPoint = Http::prepare('billing/customer-transactions/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    /*
     * search transactions of sub-reseller
     */
    public function searchTransactionSubReseller(array $params) {
        $endPoint = Http::prepare('billing/reseller-transactions/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * search  archived transactions of sub-reseller
     */
    public function searchArchivedTransactionSubReseller(array $params) {
        $endPoint = Http::prepare('billing/reseller-archived-transactions/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * search  archived transactions of customer
     */
    public function searchArchivedTransactionCustomer(array $params) {
        $endPoint = Http::prepare('billing/customer-archived-transactions/search.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * Subreseller Available Balance
     */
    public function subresellerAvailableBalance(array $params) {
        $endPoint = Http::prepare('billing/reseller-balance.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    /*
     * add fund to customer
     */
    public function addFundCustomer(array $params) {
        $endPoint = Http::prepare('billing/add-customer-fund.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * add fund to subreseller
     */
    public function addFundSubReseller(array $params) {
        $endPoint = Http::prepare('billing/add-reseller-fund.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * add debit note customer
     */
    public function addDebtNoteCustomer(array $params) {
        $endPoint = Http::prepare('billing/add-customer-debit-note.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    
    /*
     * add debt note to subreseller
     */
    public function addDebtNoteSubReseller(array $params) {
        $endPoint = Http::prepare('billing/add-reseller-debit-note.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
    
    /*
     * add miscellaneous Invoice To Customer
     */
    public function addMisInvoiceCustomer(array $params) {
        $endPoint = Http::prepare('billing/add-customer-misc-invoice.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * add debit note customer
     */
    public function addMisInvoiceSubReseller(array $params) {
        $endPoint = Http::prepare('billing/add-reseller-misc-invoice.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
}

