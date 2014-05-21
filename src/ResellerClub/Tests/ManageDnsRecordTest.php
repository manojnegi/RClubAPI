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

						array( 'domain-name'='domain.asia',
								'value'='0.0.0.0'
							);
	}


	public function addIPv6AddressRecord() {

						array( 'domain-name'='domain.asia',
							'value'='2001:252:0:1::2008:6'
						);
	}


	public function addCNAMERecord() {

		array(	
				'domain-name'='domain.asia',
				'value'='www.domain.com'
		);
	}

	public function addMXRecord() {

		array(	
				'domain-name'='domain.asia' ,
				'value'='www.domain.com' 
		);
	}


	public function addNSRecord() {

		array(	
				'domain-name'='domain.asia' ,
				'value'='ns1.domain.com'
				);
	}


	public function addTXTRecord() {

		array(	
				'domain-name'='domain.asia' ,
				'value'='Mail Server'
				);
	}


	public function addSRVRecord() {

		array( 
					'domain-name'='domain.asia',
					'host'='_chat._tcp.domain-name.com',
					'value'='chat.domain.com'
			 ) ;


	}


	public function ModifyIPv4AddressRecord() {

	 	array( 	
	 			'domain-name'='domain.asia' ,
	 			'current-value'='0.0.0.0',
	 			'new-value'='1.1.1.1'
	 		);
	 }


	 
	public function ModifyIPv6AddressRecord() {

	 	array( 'domain-name'='domain.asia' ,
	 		'current-value'='2001:252:0:1::2008:6',
	 		'new-value'='2001:252:0:1::2008:8'
	 }

	 public function ModifyCNAMERecord() {

	 	array( 'domain-name'='domain.asia' ,'current-value'='blog.domain.com','new-value'='wp.domain.com' ) ;
	 }


	public function ModifyMXRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.asia&current-value=mail.domain.com&new-value=mail1.domain.com
	
	}
	

	public function ModifyNSRecord() {

	 auth-userid=0&api-key=key&domain-name=domain.asia&current-value=ns1.domain.com&new-value=ns2.domain.com
	 }

	  public function ModifyTXTRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.asia&current-value=Mail Server&new-value=Chat Server
	 }

	  public function ModifySRVRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.asia&host=_chat._tcp.domain-name.com&current-value=chat.domain.com&new-value=chat2.domain.com
	 }

	 public function ModifySOARecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&responsible-person=admin@domain.com&refresh=7200&retry=7200&expire=172800&ttl=14400
	 }

	  public function searchDnsRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.asia&type=A&no-of-records=10&page-no=1
	 }

	  public function deleteDnsRecord() {		//deprecated.

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=ns&value=ns1.domain.com
	 }

	  public function deleteIPv4Record() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=www&value=0.0.0.0
	 }

	  public function deleteIPv6Record() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=www&value=0.0.0.0
	 }

	  public function deleteCNAMERecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=webmail&value=webmail.domain.com
	 }
	  public function deleteMXRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=@&value=mx1.domain.com
	 }
	  public function deleteNSRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=@&value=ns1.domain.com
	 }

	
	public function deleteTXTRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=@&value=text-value

	}

	
	public function deleteSRVRecord() {

	 	auth-userid=0&api-key=key&domain-name=domain.com&host=_chat._tcp.domain-name.com&value=chat.domain.com&port=0000&weight=0
	 }


}



 