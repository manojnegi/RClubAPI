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
			

		$ca = $this->apicaller->essdomain()->isOwnershipVerified(array (
																'order-id'=>'0',
		));

		print_r($ca);
	}



	/*

	

	*/
	public function addDomainAlias() {

		
		$pd = $this->apicaller->essdomain()->addDomainAlias(array('order-id'=0,
											'alias'=>'alias-domainname.com'));
		echo "<pre>";
		print_r($pd);
	}


	public function deleteDomainAlias(){
			
			$pd = $this->apicaller->essdomain()-> deleteDomainAlias(array(
												'order-id'=>0,
												'alias'=>'alias-domainname.com'
												)
			);

		echo "<pre>";
		print_r($pd);

	}

	public function getNotificationEmail() {
			
		$pd = $this->apicaller->essdomain()->getNotificationEmail(array('order-id'=>0 ));
		echo "<pre>";
		print_r($pd);

	}


	public function modifyNotificationEmail(){
			
		$m 	=$this->apicaller->essdomain()->modifyNotificationEmail(array (
				
					'order-id'=>0 ,	
					'notification-email'=>'user1@emailaddress2.com	'
				) );



		print_r($m) ;

	}

	public function getCatchAllAcount(){

			
		$m 	=$this->apicaller->essdomain()->getCatchAllAcount(array (
				
					'order-id'=>0 ,	
				) );



		print_r($m) ;

	}

	public function activateCatchAllAcount(){
			

		$m 	=$this->apicaller->essdomain()->activateCatchAllAcount(array (
				
					'order-id'=>0 ,
					'catchall-email'=>'user1@domainname.com'	
				) );



		print_r($m) ;

	}

	public function deactivateCatchAllAcount(){

			
		$m 	=$this->apicaller->essdomain()->deactivateCatchAllAcount(array (
				
					'order-id'	=>	0,	
				) );



		print_r($m) ;

	}

	public function getDNSRecords(){

			
		$m 	=$this->apicaller->essdomain()->getDNSRecords(array (
				
					'order-id'	=>	0,
						
				) );



		print_r($m) ;

	}




}



 