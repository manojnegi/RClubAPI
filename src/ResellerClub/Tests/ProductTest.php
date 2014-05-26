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

	public function checkAvailability() {


		$ca = $this->apicaller->product()->checkAvailability(array (
																'domain-name'=>'abcd',
																'product-key'=>'2705138'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function getDetails() {

		$pd = $this->apicaller->product()->getDetails(array());
		echo "<pre>";
		print_r($pd);
	}


	public function getProductCategoryProductKeysMapping(){

			$pd = $this->apicaller->product()-> getProductCategoryProductKeysMapping(array());
		echo "<pre>";
		print_r($pd);

	}

	public function getPlanDetails() {

		$pd = $this->apicaller->product()->getPlanDetails(array());
		echo "<pre>";
		print_r($pd);

	}


	public function move(){


		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}




}



 