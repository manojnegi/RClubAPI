<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class RHWindowsPlansTest {

	protected $apicaller ;
	protected $slcode = 'uk' ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function add() {

		
		$ca = $this->apicaller->rhwindowsplans()->add( array (
																 	'domain-name'=>'name' ,
																	'customer-id'=>0,
																	'months'=>0,
																	'plan-id'=>0,
																 	'invoice-option'=>'NoInvoice'
																 ),$this->slcode
		)

		print_r($ca);
	}



	/*

	

	*/
	public function renew() {


			
		$pd = $this->apicaller->rhwindowsplans()->renew( array ( 
																	'order-id'=>0 ,
																	'months'=>0,
																	'invoice-option'=>'NoInvoice'
																),$this->slcode
		);

		echo "<pre>";
		print_r($pd);
	}


	public function modify() {


			
		$pd = $this->apicaller->rhwindowsplans()->modify( array ( 
																	'order-id'=>0 ,
																	'months'=>0,
																	'new-plan-id'=0 ,
																	'invoice-option'=>'NoInvoice'
																),$this->slcode
		);

		echo "<pre>";
		print_r($pd);
	}


	public function addDedicatedIP() {


		
		$pd = $this->apicaller->rhwindowsplans()->addDedicatedIP(	array( 

																'order-id'=>0 ,
																'invoice-option'=>'NoInvoice'
															),$this->slcode
		);

		echo "<pre>";
		print_r($pd);

	}

	public function deleteDedicatedIP(){

	

			$pd = $this->apicaller->rhwindowsplans()->deleteDedicatedIP(array( 'order-id'=>0,
																			'ips'='0.0.0.0' ,
																			'ips'='1.1.1.1'
															),
															$this->slcode
															);
		echo "<pre>";
		print_r($pd);

	}

	public function suspend() {

	
		$pd = $this->apicaller->rhwindowsplans()->suspend(array('order-id'=>0 ,
													'reason'=>'reason-for-suspension'
							));
		echo "<pre>";
		print_r($pd);

	}

	public function unsuspend() {

		$pd = $this->apicaller->rhwindowsplans()->suspend(array('order-id'=>0 ,
													
							));
		echo "<pre>";
		print_r($pd);


	}


	public function delete() {

		$pd = $this->apicaller->rhwindowsplans()->delete(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);
	}


	public function getDetails() {

		$pd = $this->apicaller->rhwindowsplans()->getDetails(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}

	public function generateLicenseKey() {

		$pd = $this->apicaller->rhwindowsplans()->generateLicenseKey(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}

	public function getPlanDetails() {

		$pd = $this->apicaller->rhwindowsplans()->getPlanDetails(array(
													
							)
		echo "<pre>";
		print_r($pd);

	}



	public function getOrderId(){
			

		$pd = $this->apicaller->rhwindowsplans()->getOrderId(array( 'domain-name'=>'domainname.asia'
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}


	public function searchOrders(){

			
		$pd = $this->apicaller->rhwindowsplans()->searchOrders(array( 
																'no-of-records'=>1,
																'page-no'=>1
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}


	public function modifyPrice(){
	
		$pd = $this->apicaller->rhwindowsplans()->modifyPrice(array( 

																'order-id'=>0 ,
																'new-plan-id'=0,
																'months'=0
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}


	public function getCustomerPricing(){

			
		$pd = $this->apicaller->rhwindowsplans()->getCustomerPricing(array( 
																'customer-id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		echo "<pre>";
		print_r($pd);

	}

	public function getResellerPricing(){

				
		$pd = $this->apicaller->rhwindowsplans()->getResellerPricing(array( 
																'reseller_id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}


	public function changeHostingPanelPassword(){

				
		$pd = $this->apicaller->rhwindowsplans()->changeHostingPanelPassword(array( 
																'order-id'=>0,
																'new-passwd'=>'password1'
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}

	public function getDNSRecords(){

				
		$pd = $this->apicaller->rhwindowsplans()->getDNSRecords(array( 
																'order_id'=>0  .
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}
}



 