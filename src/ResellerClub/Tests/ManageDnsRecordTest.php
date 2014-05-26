<?php

namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;

class ManageDnsRecordTest {

    protected $apicaller;

    public function __construct($apihost, $authid, $apikey) {

        $this->apicaller = new RClubAPI($apihost, $authid);

        $this->apicaller->setAuth('apikey', $apikey);
    }

    /*


     */

    public function addIPv4AddressRecord() {

        $d = $this->apicaller->managednsrecord()->addIPv4AddressRecord(array(
            'domain-name' => 'mrinmoy.com',
            'value' => $_SERVER['REMOTE_ADDR']
                )
        );


        print_r($d);
    }

    public function addIPv6AddressRecord() {

        $d = $this->apicaller->managednsrecord()->addIPv6AddressRecord(array(
        'domain-name' => 'mrinmoy.com',
        'value' => $_SERVER['REMOTE_ADDR']
        )

        );


        print_r($d);
    }

    public function addCNAMERecord() {


        $d = $this->apicaller->managednsrecord()->addCNAMERecord(array(
        'domain-name' => 'mrinmoy.com',
        'value' => 'fdfsdfhf.com',
        )

        );
        print_r($d);
    }

    public function addMXRecord() {

        $d = $this->apicaller->managednsrecord()->addMXRecord(array(
        'domain-name' => 'mrinmoy.com',
        'value' => '1.1.1.1'
        )

        );
        print_r($d);
    }

    public function addNSRecord() {


        $d = $this->apicaller->managednsrecord()->addNSRecord(array(
        'domain-name' => 'mrinmoy.com',
        'value' => $_SERVER['REMOTE_ADDR']
        )

        );
        print_r($d);
    }

    public function addTXTRecord() {


        $d = $this->apicaller->managednsrecord()->addTXTRecord(array(
        'domain-name' => 'mrinmoy.com',
        'value' => $_SERVER['REMOTE_ADDR']
        )

        );

        print_r($d);
    }

    public function addSRVRecord() {


        $d = $this->apicaller->managednsrecord()->addSRVRecord(array(
        'domain-name' => 'mrinmoy.com',
        'host' => '_chat._tcp.domain-name.com',
        'value' => $_SERVER['REMOTE_ADDR']
        )

        );

        print_r($d);
    }

    public function modifyIPv4AddressRecord() {


        $d = $this->apicaller->managednsrecord()->modifyIPv4AddressRecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => '1.1.1.1'
        )

        );

        print_r($d);
    }

    public function modifyIPv6AddressRecord() {




        $d = $this->apicaller->managednsrecord()->modifyIPv6AddressRecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => '2001:252:0:1::2008:8'
        )

        );

        print_r($d);
    }

    public function modifyCNAMERecord() {

        $d = $this->apicaller->managednsrecord()->modifyCNAMERecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => 'wp.dfgf.com'
        )

        );

        print_r($d);
    }

    public function modifyMXRecord() {



        $d = $this->apicaller->managednsrecord()->modifyMXRecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => 'mail1.domsfsdfain.com'
        )

        );

        print_r($d);
    }

    public function modifyNSRecord() {


        $d = $this->apicaller->managednsrecord()->modifyNSRecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => 'ns2.hfghf.com'
        )

        );

        print_r($d);
    }

    public function modifyTXTRecord() {


        $d = $this->apicaller->managednsrecord()->modifyTXTRecord(array(
        'domain-name' => 'mrinmoy.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' =>  'mail1.domsfsdfain.com'
        )

        );

        print_r($d);
    }

    public function modifySRVRecord() {



        $d = $this->apicaller->managednsrecord()->modifySRVRecord(array(
        'domain-name' => 'mrinmoy.com',
        'host' => '_chat._tcp.domain-name.com',
        'current-value' => $_SERVER['REMOTE_ADDR'],
        'new-value' => 'chat2.dogdfdmain.com'
        )

        );

        print_r($d);
    }

    public function modifySOARecord() {



        $d = $this->apicaller->managednsrecord()->modifySOARecord(array(
        'domain-name' => 'mrinmoy.com',
        'responsible-person' => 'admin@domain.com',
        'refresh' => '7200',
        'retry' => '7200',
        'expire' => '172800',
        'ttl' => '14400'
        )

        );

        print_r($d);
    }

    public function searchDnsRecord() {

        $d = $this->apicaller->managednsrecord()->searchDnsRecord(array(
        'domain-name' => 'mrinmoy.com',
        'type' => 'A',
        'no-of-records' => '1',
        'page-no' => '1'
        )

        );

        print_r($d);
    }

    public function deleteDnsRecord() {  //deprecated.
        $d = $this->apicaller->managednsrecord()->deleteDnsRecord(array(
        'domain-name' => 'mrinmoy.com',
        'host' => 'ns',
        'value' => 'ns1.domain.com'

        )

        );

        print_r($d);
    }

    public function deleteIPv4Record() {

        $d = $this->apicaller->managednsrecord()->deleteIPv4Record(array(
        'domain-name' => 'mrinmoy.com',
        'host' => 'www',
        'value' =>  'ns1.domain.com'

        )

        );

        print_r($d);
    }

    public function deleteIPv6Record() {


        $d = $this->apicaller->managednsrecord()->deleteIPv6Record(array(
        'domain-name' =>'mrinmoy.com',
        'host' => 'www',
        'value' => 'ns1.domain.com'

        )

        );

        print_r($d);
    }

    public function deleteCNAMERecord() {


        $d = $this->apicaller->managednsrecord()->deleteCNAMERecord(array(
        'domain-name' =>'mrinmoy.com',
        'host' => 'webmail',
        'value' => 'webmail.dfgdfomain.com'

        )

        );

        print_r($d);
    }

    public function deleteMXRecord() {


        $d = $this->apicaller->managednsrecord()->deleteMXRecord(array(
        'domain-name' =>'mrinmoy.com',
        'host' => '@',
        'value' => 'mx1.dosdfmain.com'

        )

        );

        print_r($d);
    }

    public function deleteNSRecord() {


        $d = $this->apicaller->managednsrecord()->deleteNSRecord(array(
        'domain-name' => 'mrinmoy.com',
        'host' => '@',
        'value' => 'ns1.doddmain.com'

        )

        );
           print_r($d);
    }

    public function deleteTXTRecord() {


        $d = $this->apicaller->managednsrecord()->deleteTXTRecord(array(
        'domain-name' =>'mrinmoy.com',
        'host' => '@',
        'value' =>'ns1.doddmain.com'

        )

        );
           print_r($d);
    }

    public function deleteSRVRecord() {


        $d = $this->apicaller->managednsrecord()->deleteSRVRecord(array(
        'domain-name' => 'mrinmoy.com',
        'host' => '_chat._tcp.domain-name.com',
        'value' => 'ns1.doddmain.com',
        'port' => 0000,
        'weight' => 0

        )

        );
           print_r($d);
    }

}
