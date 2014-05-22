<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ProductTest {

	
	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function addIPv4AddressRecord() {

		$d = $this->apicaller->managednsrecord()->addIPv4AddressRecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'0.0.0.0'
														)
		);


		print_r($d);
	}


	public function addIPv6AddressRecord() {

		$d = $this->apicaller->managednsrecord()->addIPv6AddressRecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'2001:252:0:1::2008:6'
						);

		);


		print_r($d);
	}


	public function addCNAMERecord() {

		
		$d = $this->apicaller->managednsrecord()->addCNAMERecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'www.domain.com'
						);

		);
		print_r($d);
	}

	public function addMXRecord() {

		$d = $this->apicaller->managednsrecord()->addMXRecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'www.domain.com'
						);

		);
		print_r($d);
	}


	public function addNSRecord() {

		
		$d = $this->apicaller->managednsrecord()->addNSRecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'ns1.domain.com'
						);

		);
		print_r($d);
	}


	public function addTXTRecord() {

		
		$d = $this->apicaller->managednsrecord()->addTXTRecord(array( 
															'domain-name'=>'domain.asia',
															'value'=>'Mail Server'
						);

		);

		print_r($d);
	}


	public function addSRVRecord() {

		
		$d = $this->apicaller->managednsrecord()->addSRVRecord(array( 
															'domain-name'=>'domain.asia',
															'host'=>'_chat._tcp.domain-name.com',
															'value'=>'chat.domain.com'
						);

		);

		print_r($d);

	}


	public function modifyIPv4AddressRecord() {

	 	
	 	$d = $this->apicaller->managednsrecord()->modifyIPv4AddressRecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'0.0.0.0',
															'new-value'=>'1.1.1.1'
						);

		);

		print_r($d);
	 }


	 
	public function modifyIPv6AddressRecord() {

	 
	 		

	 	$d = $this->apicaller->managednsrecord()->modifyIPv6AddressRecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'2001:252:0:1::2008:6',
															'new-value'=>'2001:252:0:1::2008:8'
						);

		);

		print_r($d);
	 }

	 public function modifyCNAMERecord() {

	 	$d = $this->apicaller->managednsrecord()->modifyCNAMERecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'blog.domain.com'
															'new-value'=>'wp.domain.com' 
						);

		);

		print_r($d);
	 

	 }


	public function modifyMXRecord() {

	

	 	$d = $this->apicaller->managednsrecord()->modifyMXRecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'mail.domain.com'
															'new-value'=>'mail1.domain.com'
						);

		);

		print_r($d);
	
	}
	

	public function modifyNSRecord() {

	
	 	$d = $this->apicaller->managednsrecord()->modifyNSRecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'ns1.domain.com'
															'new-value'=>'ns2.domain.com'
						);

		);

		print_r($d);
	 }

	  public function modifyTXTRecord() {

	
	 	$d = $this->apicaller->managednsrecord()->modifyTXTRecord(array( 
															'domain-name'=>'domain.asia',
															'current-value'=>'Mail Server'
															'new-value'=>'Chat Server'
						);

		);

		print_r($d);
	 }

	  public function modifySRVRecord() {


	
	 	$d = $this->apicaller->managednsrecord()->modifySRVRecord(array( 
															'domain-name'=>'domain.asia',
															'host'=>'_chat._tcp.domain-name.com',
															'current-value'=>'chat.domain.com'
															'new-value'=>'chat2.domain.com'
						);

		);

		print_r($d);

	 }

	 public function modifySOARecord() {

	 	
	 
	 	$d = $this->apicaller->managednsrecord()-> modifySOARecord(array( 
															'domain-name'=>'domain.com',
															'responsible-person'=>'admin@domain.com',
															'refresh'=>7200,
															'retry'=7200,
															'expire'=172800,
															'ttl'=14400
						);

		);

		print_r($d);

	 }

	  public function searchDnsRecord() {

	 	$d = $this->apicaller->managednsrecord()-> searchDnsRecord(array( 
															'domain-name'=>'domain.asia',
															'type'='A',
															'no-of-records'=>1,
																'page-no'=>1
						);

		);

		print_r($d);
	 }

	  public function deleteDnsRecord() {		//deprecated.

	
	 	$d = $this->apicaller->managednsrecord()->deleteDnsRecord(array( 
															'domain-name'=>'domain.com',
															'host'='ns',
															'value'='ns1.domain.com'
														
						);

		);

		print_r($d);
	 }

	  public function deleteIPv4Record() {

	 	$d = $this->apicaller->managednsrecord()->deleteIPv4Record(array( 
															'domain-name'=>'domain.com',
															
															'host'='www',
															'value'='0.0.0.0'
														
						);

		);

		print_r($d);
	 }

	  public function deleteIPv6Record() {

	 	
	 	$d = $this->apicaller->managednsrecord()->deleteIPv6Record(array( 
															'domain-name'=>'domain.com',
															
															'host'='www',
															'value'='0.0.0.0'
														
						);

		);

		print_r($d);
	 }

	  public function deleteCNAMERecord() {

	
	 	$d = $this->apicaller->managednsrecord()->deleteCNAMERecord(array( 
															'domain-name'=>'domain.com',
															
															'host'='webmail',
															'value'='webmail.domain.com'
														
						);

		);

		print_r($d);
	 }
	  public function deleteMXRecord() {


	 	$d = $this->apicaller->managednsrecord()->deleteMXRecord(array( 
															'domain-name'=>'domain.com',
															
															'host'='@',
															'value'='mx1.domain.com'
														
						);

		);

		print_r($d);
	 }
	  public function deleteNSRecord() {

	
	 	$d = $this->apicaller->managednsrecord()->deleteNSRecord(array( 
															'domain-name'=>'domain.com',
															
															'host'='@',
															'value'='ns1.domain.com'
														
						);

		);
	 }

	
	public function deleteTXTRecord() {

	 	
	 	$d = $this->apicaller->managednsrecord()->deleteTXTRecord(array( 
															'domain-name'=>'domain.com',
															
															'host'='@',
															'value'='text-value'
														
						);

		);

	}

	
	public function deleteSRVRecord() {

	 	
	 	$d = $this->apicaller->managednsrecord()->deleteSRVRecord(array( 
															'domain-name'=>'domain.com',														
															'host'='_chat._tcp.domain-name.com',
															'value'='chat.domain.com',
															'port'=0000 ,
															'weight'= 0
														
						);

		);
	}


}



 