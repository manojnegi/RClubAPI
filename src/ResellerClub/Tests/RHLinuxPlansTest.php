<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class RHLinuxPlansTest {

	protected $apicaller ;
	protected $slcode = 'uk' ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function add() {

		
		$ca = $this->apicaller->rhlinuxplans()->add( array (
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


			
		$pd = $this->apicaller->rhlinuxplans()->renew( array ( 
																	'order-id'=>0 ,
																	'months'=>0,
																	'invoice-option'=>'NoInvoice'
																),$this->slcode
		);

		echo "<pre>";
		print_r($pd);
	}


	public function modify() {


			
		$pd = $this->apicaller->rhlinuxplans()->modify( array ( 
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


		
		$pd = $this->apicaller->rhlinuxplans()->addDedicatedIP(	array( 

																'order-id'=>0 ,
																'invoice-option'=>'NoInvoice'
															),$this->slcode
		);

		echo "<pre>";
		print_r($pd);

	}

	public function deleteDedicatedIP(){

	

			$pd = $this->apicaller->rhlinuxplans()->deleteDedicatedIP(array( 'order-id'=>0,
																			'ips'='0.0.0.0' ,
																			'ips'='1.1.1.1'
															),
															$this->slcode
															);
		echo "<pre>";
		print_r($pd);

	}

	public function suspend() {

	
		$pd = $this->apicaller->rhlinuxplans()->suspend(array('order-id'=>0 ,
													'reason'=>'reason-for-suspension'
							));
		echo "<pre>";
		print_r($pd);

	}

	public function unsuspend() {

		$pd = $this->apicaller->rhlinuxplans()->suspend(array('order-id'=>0 ,
													
							));
		echo "<pre>";
		print_r($pd);


	}


	public function delete() {

		$pd = $this->apicaller->rhlinuxplans()->delete(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);
	}


	public function getDetails() {

		$pd = $this->apicaller->rhlinuxplans()->getDetails(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}

	public function generateLicenseKey() {

		$pd = $this->apicaller->rhlinuxplans()->generateLicenseKey(array('order-id'=>0 ,
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}

	public function getPlanDetails() {

		$pd = $this->apicaller->rhlinuxplans()->getPlanDetails(array(
													
							)
		echo "<pre>";
		print_r($pd);

	}



	public function getOrderId(){
			

		$pd = $this->apicaller->rhlinuxplans()->getOrderId(array( 'domain-name'=>'domainname.asia'
													
							),$this->slcode);
		echo "<pre>";
		print_r($pd);

	}


	public function searchOrders(){

			
		$pd = $this->apicaller->rhlinuxplans()->searchOrders(array( 
																'no-of-records'=>1,
																'page-no'=>1
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}


	public function modifyPrice(){
	
		$pd = $this->apicaller->rhlinuxplans()->modifyPrice(array( 

																'order-id'=>0 ,
																'new-plan-id'=0,
																'months'=0
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}


	public function getCustomerPricing(){

			
		$pd = $this->apicaller->rhlinuxplans()->getCustomerPricing(array( 
																'customer-id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		echo "<pre>";
		print_r($pd);

	}

	public function getResellerPricing(){

				
		$pd = $this->apicaller->rhlinuxplans()->getResellerPricing(array( 
																'reseller_id'=>0  //optional , By default, generic Customer Pricing will be retrieved.
													
															)
		);
		echo "<pre>";
		print_r($pd);

	}


	public function changeHostingPanelPassword(){

				
		$pd = $this->apicaller->rhlinuxplans()->changeHostingPanelPassword(array( 
																'order-id'=>0,
																'new-passwd'=>'password1'
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}

	public function getDNSRecords(){

				
		$pd = $this->apicaller->rhlinuxplans()->getDNSRecords(array( 
																'order_id'=>0  .
													
															),$this->slcode
		);
		echo "<pre>";
		print_r($pd);

	}
}



 