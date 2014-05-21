<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ESMDomainTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function isOwnershipVerified() {
			auth-userid=0&api-key=key&order-id=0

		$ca = $this->apicaller->product()->checkAvailability(array (
																'domain-name'=>'abcd',
																'product-key'=>'2705138'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function addDomainAlias() {

		auth-userid=0&api-key=key&order-id=0&alias=alias-domainname.com

		$pd = $this->apicaller->product()->getDetails(array());
		echo "<pre>";
		print_r($pd);
	}


	public function deleteDomainAlias(){
				auth-userid=0&api-key=key&order-id=0&alias=alias-domainname.com
			$pd = $this->apicaller->product()-> getProductCategoryProductKeysMapping(array());
		echo "<pre>";
		print_r($pd);

	}

	public function getNotificationEmail() {
			auth-userid=0&api-key=key&order-id=0
		$pd = $this->apicaller->product()->getPlanDetails(array());
		echo "<pre>";
		print_r($pd);

	}


	public function modifyNotificationEmail(){
			auth-userid=0&api-key=key&order-id=0&notification-email=user1@emailaddress2.com

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function getCatchAllAcount(){

			auth-userid=0&api-key=key&order-id=0
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function activateCatchAllAcount(){
				auth-userid=0&api-key=key&order-id=0&catchall-email=user1@domainname.com

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deactivateCatchAllAcount(){

			auth-userid=0&api-key=key&order-id=0
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function getDNSRecords(){

			auth-userid=0&api-key=key&order-id=0
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}




}



 