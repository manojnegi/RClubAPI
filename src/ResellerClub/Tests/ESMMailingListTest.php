<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ESMMailingListTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

	public function addMailingList() {
			auth-userid=0&api-key=key&order-id=0&list-address=list-name@domainname.com&subscription-held=false&who-can-post=only_members&send-messages-for-moderation=false&reply-to=sender&moderators=user1@domainname.com,user2@domainname.com

		$ca = $this->apicaller->product()->checkAvailability(array (
																'domain-name'=>'abcd',
																'product-key'=>'2705138'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function modifyMailingList() {

		auth-userid=0&api-key=key&order-id=0&list-address=list-name@domainname.com&subscription-held=false&who-can-post=only_members&send-messages-for-moderation=false&reply-to=sender

		$pd = $this->apicaller->product()->getDetails(array());
		echo "<pre>";
		print_r($pd);
	}


	public function getMailingListOfDomain(){
			auth-userid=0&api-key=key&order-id=0
			$pd = $this->apicaller->product()-> getProductCategoryProductKeysMapping(array());
		echo "<pre>";
		print_r($pd);

	}

	public function getDetails() {
			auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com
		$pd = $this->apicaller->product()->getPlanDetails(array());
		echo "<pre>";
		print_r($pd);

	}


	public function addSubscribers(){
			auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com&subscribers=user1@domainname.com,user2@domainname.com

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function listSubscribers(){

			auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deleteSubscribers(){
				auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com&subscribers=user1@domainname.com,user2@domainname.com

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deleteMailingList(){

			auth-userid=0&api-key=key&order-id=0&list-address-prefixes=list1,list2
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function addModerators(){

			auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com&moderators=user1@domainname.com,user2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function deleteModerators(){

			auth-userid=0&api-key=key&order-id=0&list-address=list1@domainname.com&moderators=user1@domainname.com,user2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}




}



 