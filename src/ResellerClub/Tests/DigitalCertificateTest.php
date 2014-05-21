<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class DigitalCertificateTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	

	public function add() {

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

		
		$c = $apicaller->digitalcertificate()->cancel(array ( 

															'order-id'=>'54732819',
															'attr-name1'=>'org_name',
															'attr-value1'=>'name',
															'attr-name2'=>'org_street1',
															'attr-value2'=>'Organizationaddress'
														)
		);

		print_r($c)

	}

	
	public function checkStatus() {
		
		
		$cs = $apicaller->digitalcertificate()->checkStatus(array ( 
																'order-id'=>'54732819',
																'standard-certificate-format'=>'true'
																	));
		print_r($cs)
	}


	public function details(){

			$cs = $apicaller->digitalcertificate()->details(array ( 
																'order-id'=>'54732819',
																'option'=>'All'
																	));
		print_r($cs)


	}

	
	public function search(){
	
			$cs = $apicaller->digitalcertificate()->search(array ( 
																'no-of-records'=>10,
																'page-no'=>1
																)
			);

			print_r($cs)

	}

	
	public function getOrderId(){

		$cs = $apicaller->digitalcertificate()->getOrderId(array ( 
																'domain-name'=>'xyz'
																)
		);

		print_r($cs)

	}

	
	public function reissue(){

			
		
		$cs = $apicaller->digitalcertificate()->reissue(array ( 
																'order-id'=>0,
																'csr-string'=>'-----BEGIN NEW CERTIFICATE REQUEST---MIIBwzCCASwCAQAwgYIxCzAJBgNVB-----END NEW CERTIFICATE REQUEST----',
																'csr-software'=>'IIS',
																'approver-email'=>'wew@approver.com'
																)
		);

		print_r($cs)
	}
	

	public function renew(){

			

	$cs = $apicaller->digitalcertificate()->renew(array ( 
																'order-id'=>0,
																'years'=>1,
																'exp-date'=>'1279012036',
																'invoice-option'=>'NoInvoice',
																'attr-name1'=>'org_name'
																'attr-value1'=>'The organisation Name',
																'attr-name2'=>'org_street1',
																'attr-value2'=>'Organization address'
																)
		);

		print_r($cs)

	}
	
	//ordermanagement
	public function suspend(){

			$cs = $apicaller->digitalcertificate()->suspend(array ( 
																'order-id'=>0,
																'reason'=>'reason-for-suspension'
																)
		);

		print_r($cs)
	}
	
//order management 
	public function unsuspend(){

			$cs = $apicaller->digitalcertificate()->unsuspend(array ( 
																'order-id'=>0
																)
		);

		print_r($cs)
	}
	

	public function delete(){

			$cs = $apicaller->digitalcertificate()->delete(array ( 
																'order-id'=>0
																
																)
		);

		print_r($cs)


	}
	


}



 