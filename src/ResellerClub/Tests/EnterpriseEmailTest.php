<?php

namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;

class EnterpriseEmailTest {

    protected $apicaller;

    public function __construct($apihost, $authid, $apikey) {

        $this->apicaller = new RClubAPI($apihost, $authid);

        $this->apicaller->setAuth('apikey', $apikey);
    }

    /*


     */

    public function add() {


        $ca = $this->apicaller->enterpriseemail()->add(array(
            'domain-name' => 'mrinmoy.com',
            'customer-id' => '10693064',
            'months' =>'12',
            'no-of-accounts' => '1',
            'invoice-option' => 'NoInvoice'
                )
        );

        print_r($ca);
    }

    /*



     */

    public function renew() {
        $pd = $this->apicaller->enterpriseemail()->renew(array(
            'order-id' => '54792315',
            'months' => '12',
            'invoice-option' => 'NoInvoice'
                )
        );

        echo "<pre>";
        print_r($pd);
    }

    public function addEmailAccounts() {



        $pd = $this->apicaller->enterpriseemail()->addEmailAccounts(array(
            'order-id' => '54792315',
            'no-of-accounts' => '1',
            'invoice-option' => 'NoInvoice'
                )
        );

        echo "<pre>";
        print_r($pd);
    }

    public function deleteEmailAccounts() {



        $pd = $this->apicaller->enterpriseemail()->deleteEmailAccounts(array(
            'order-id' =>'54792315',
            'no-of-accounts'=>'2'));
        echo "<pre>";
        print_r($pd);
    }

    public function suspend() {


        $pd = $this->apicaller->enterpriseemail()->suspend(array(
            'order-id' =>'54792315',
            'reason' => 'reason-for-suspension'
        ));
        echo "<pre>";
        print_r($pd);
    }

    public function unsuspend() {

        $pd = $this->apicaller->enterpriseemail()->suspend(array(
            'order-id' => '54792315',
            'reason' => 'reason-for-suspension'
        ));
        echo "<pre>";
        print_r($pd);
    }

    public function delete() {

        $pd = $this->apicaller->enterpriseemail()->delete(array(
            'order-id' => '54792315',
        ));
        echo "<pre>";
        print_r($pd);
    }

    public function getDetails() {

        $pd = $this->apicaller->enterpriseemail()->getDetails(array(
            'order-id' => '54792315',
        ));
        echo "<pre>";
        print_r($pd);
    }

    public function getOrderId() {


        $pd = $this->apicaller->enterpriseemail()->getOrderId(array(
            'domain-name' => 'mrinmoy.com'
        ));
        echo "<pre>";
        print_r($pd);
    }

    public function searchOrders() {


        $pd = $this->apicaller->enterpriseemail()->searchOrders(array(
            'no-of-records' => '10',
            'page-no' => '1'
                )
        );
        echo "<pre>";
        print_r($pd);
    }

    public function getCustomerPricing() {


        $pd = $this->apicaller->enterpriseemail()->getCustomerPricing(array(
            'customer-id' =>'10693064',  //optional , By default, generic Customer Pricing will be retrieved.
                )
        );
        echo "<pre>";
        print_r($pd);
    }

    public function getResellerPricing() {


        $pd = $this->apicaller->enterpriseemail()->getResellerPricing(array(
            'customer-id' => '10693064', //optional , By default, generic Customer Pricing will be retrieved.
                )
        );
        echo "<pre>";
        print_r($pd);
    }

    public function getDNSRecords() {


        $pd = $this->apicaller->enterpriseemail()->getDNSRecords(array(
            'order-id' => '54792315',
                )
        );
        echo "<pre>";
        print_r($pd);
    }

}
