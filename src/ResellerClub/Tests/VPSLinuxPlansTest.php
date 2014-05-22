<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class VPSLinuxPlansTest {

	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function add() {

		$ca = $this->apicaller->vpslinuxplans()->add( array (
																 	'domain-name'=>'name' ,
																	'customer-id'=>0,
																	'months'=>0,
																	'plan-id'=>0,
																 	'invoice-option'=>'NoInvoice'
																 )
		);

		print_r($ca);
	}



	/*

	

	*/
	public function renew() {


			
		$pd = $this->apicaller->vpslinuxplans()->renew( array ( 
																	'order-id'=>0 ,
																	'months'=>0,
																	'invoice-option'=>'NoInvoice'
																)
		);

		echo "<pre>";
		print_r($pd);
	}


	public function modify() {


			
		$pd = $this->apicaller->vpslinuxplans()->modify( array ( 
																	'order-id'=>0 ,
																	'months'=>0,
																	'new-plan-id'=0 ,
																	'invoice-option'=>'NoInvoice'
																)
		);

		echo "<pre>";
		print_r($pd);
	}


	public function addAddOn() {


		
		$pd = $this->apicaller->vpslinuxplans()->addAddOn(	array( 

																'order-id'=>0 ,
																 'addon'=>'ssl'
																'invoice-option'=>'NoInvoice'
															)
		);

		echo "<pre>";
		print_r($pd);

	}

	public function deleteAddOn(){

	

			$pd = $this->apicaller->vpslinuxplans()->deleteAddOn(array('order-id'=>0 ,
							'addon-id'=>0));
		echo "<pre>";
		print_r($pd);

	}

	public function suspend() {

	
		$pd = $this->apicaller->vpslinuxplans()->suspend(array('order-id'=>0 ,
													'reason'=>'reason-for-suspension'
							));
		echo "<pre>";
		print_r($pd);

	}

	public function unsuspend() {

		$pd = $this->apicaller->vpslinuxplans()->suspend(array('order-id'=>0 ,
													
							));
		echo "<pre>";
		print_r($pd);


	}


	public function delete() {

		$pd = $this->apicaller->vpslinuxplans()->delete(array('order-id'=>0 ,
													
							));
		echo "<pre>";
		print_r($pd);
	}


	public function getDetails() {

		$pd = $this->apicaller->vpslinuxplans()->getDetails(array('order-id'=>0 ,
													
							));
		echo "<pre>";
		print_r($pd);

	}


	public function getPlanDetails() {

		$pd = $this->apicaller->vpslinuxplans()->getPlanDetails(array(
													
							));
		echo "<pre>";
		print_r($pd);

	}



	public function getOrderId(){
			

		$pd = $this->apicaller->vpslinuxplans()->getOrderId(array( 'domain-name'=>'domainname.asia'
													
							));
		echo "<pre>";
		print_r($pd);

	}


	public function searchOrders(){

			
		$pd = $this->apicaller->vpslinuxplans()->searchOrders(array( 
																'no-of-records'=>1,
																'page-no'=>1
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}


	public function modifyPrice(){
	
		$pd = $this->apicaller->vpslinuxplans()->modifyPrice(array( 

																'order-id'=>0 ,
																'new-plan-id'=0,
																'months'=0
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}


	public function getCustomerPricing(){

			
		$pd = $this->apicaller->vpslinuxplans()->getCustomerPricing(array( 
																'customer-id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}

	public function getResellerPricing(){

				
		$pd = $this->apicaller->vpslinuxplans()->getResellerPricing(array( 
																'reseller_id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}



}



 