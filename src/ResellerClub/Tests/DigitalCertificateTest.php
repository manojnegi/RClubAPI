<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class DigitalCertificateTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function add() {
		auth-userid=0&api-key=key&domain-name=domainname&customer-id=0&years=0&additional-licenses=0&cert-key=wild&invoice-option=NoInvoice
$a = $apicaller->digitalcertificate()->add(array ( 
																
																'domain-name'=>'www.afddf.com',
																'customer-id'=>'11167692',
																'years'=>'2' ,
																'additional-licenses'=>0 ,
																'cert-key'=>'wild',
																'invoice-option'=>'NoInvoice'
 														));

print_r ($a);
	}



	/*

	

	*/
	public function cancel() {

		$c = $apicaller->digitalcertificate()->cancel(array ( 
																'order-id'=>'54732819',
																	));

		print_r($c)
	}


	public function enroll() {

		auth-userid=0&api-key=key&order-id=0&attr-name1=org_name&attr-value1=name&attr-name2=org_street1&attr-value2=Organizationaddress
	}

	
	public function checkStatus() {
		
		auth-userid=0&api-key=key&order-id=0&standard-certificate-format=true
		$apicaller->digitalcertificate()->checkStatus(array ( 
																'order-id'=>'54732819',
																'standard-certificate-format'=>'true'
																	));

	}


	public function details(){

			auth-userid=0&api-key=key&order-id=0&option=All


	}

	
	public function search(){
			auth-userid=0&api-key=key&no-of-records=10&page-no=1

	}

	
	public function getOrderId(){

			auth-userid=0&api-key=key&domain-name=xyz

	}

	
	public function reissue(){

			auth-userid=0&api-key=key&order-id=0&csr-string=-----BEGIN NEW CERTIFICATE REQUEST---MIIBwzCCASwCAQAwgYIxCzAJBgNVB-----END NEW CERTIFICATE REQUEST----&csr-software=IIS&approver-email=wew@approver.com
	}
	

	public function renew(){

			auth-userid=0&api-key=key&order-id=0&years=1&exp-date=1279012036&invoice-option=NoInvoice&attr-name1=org_name&attr-value1=The organisation Name&attr-name2=org_street1&attr-value2=Organization address

	}
	
	//ordermanagement
	public function suspend(){

			auth-userid=0&api-key=key&order-id=0&reason=reason-for-suspension
	}
	
//order management 
	public function unsuspend(){

			auth-userid=0&api-key=key&order-id=0

	}
	

	public function delete(){

			auth-userid=0&api-key=key&order-id=0


	}
	


}



 