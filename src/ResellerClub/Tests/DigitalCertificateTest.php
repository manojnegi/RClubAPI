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

		$a = $this->apicaller->digitalcertificate()->add(array( 
														        'domain-name'=>'www.mrinmoy.com',
																'customer-id'=>'10693064',
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

		$c = $this->apicaller->digitalcertificate()->cancel(array ( 
																'order-id'=>'54792315',
																	));

		print_r($c);
	}


	public function enroll() {

		
		$c =$this->apicaller->digitalcertificate()->cancel(array ( 

															'order-id'=>'54792315',
															'attr-name1'=>'org_name',
															'attr-value1'=>'name',
															'attr-name2'=>'org_street1',
															'attr-value2'=>'Organizationaddress'
														)
		);

		print_r($c);

	}

	
	public function checkStatus() {
		
		
		$cs = $this->apicaller->digitalcertificate()->checkStatus(array ( 
																'order-id'=>'54792315',
																'standard-certificate-format'=>'true'
																	));
		print_r($cs);
	}


	public function details(){

			$cs = $this->apicaller->digitalcertificate()->details(array ( 
																'order-id'=>'54792315',
																'option'=>'All'
																	));
		print_r($cs);


	}

	
	public function search(){
	
			$cs = $this->apicaller->digitalcertificate()->search(array ( 
																'no-of-records'=>10,
																'page-no'=>1
																)
			);

			print_r($cs);

	}

	
	public function getOrderId(){

		$cs = $this->apicaller->digitalcertificate()->getOrderId(array ( 
																'domain-name'=>'xyz'
																)
		);

		print_r($cs);

	}

	
	public function reissue(){

			
		
		$cs = $this->apicaller->digitalcertificate()->reissue(array ( 
																'order-id'=>54792315,
																'csr-string'=>'-----BEGIN NEW CERTIFICATE REQUEST---MIIBwzCCASwCAQAwgYIxCzAJBgNVB-----END NEW CERTIFICATE REQUEST----',
																'csr-software'=>'IIS',
																'approver-email'=>'wew@approver.com'
																)
		);

		print_r($cs);
	}
	

	public function renew(){

			

	$cs = $this->apicaller->digitalcertificate()->renew(array ( 
																'order-id'=>54792315,
																'years'=>1,
																'additional-licenses'=>"2",
																'exp-date'=>'1279012036',
																'invoice-option'=>'NoInvoice',
																'attr-name1'=>'org_name',
																'attr-value1'=>'The organisation Name',
																'attr-name2'=>'org_street1',
																'attr-value2'=>'Organization address'
																)
		);

		print_r($cs);

	}
	
	//ordermanagement
	public function suspend(){

			$cs = $this->apicaller->digitalcertificate()->suspend(array ( 
																'order-id'=>54792315,
																'reason'=>'reason-for-suspension'
																)
		);

		print_r($cs);
	}
	
//order management 
	public function unsuspend(){

			$cs = $this->apicaller->digitalcertificate()->unsuspend(array ( 
																'order-id'=>54792315
																)
		);

		print_r($cs);
	}
	

	public function delete(){

			$cs =$this->apicaller->digitalcertificate()->delete(array ( 
																'order-id'=>54792315
																
																)
		);

		print_r($cs);


	}
	


}



 