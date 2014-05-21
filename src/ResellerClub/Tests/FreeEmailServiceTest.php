<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class FreeEmailServiceTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function activate() {


			$ca = $this->apicaller->freeemailservice()->activate(	array (
																			'order-id'=>'54730087'
																			)
			);

			print_r($ca);
	}


}