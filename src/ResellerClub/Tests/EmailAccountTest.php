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

	public function addUser() {


		$ca = $this->apicaller->emailaccount()->addUser( array (
																'order-id'=>'0',
																'email'=>'username@domainname.com',
																'passwd'=>'user-password',
																'notification-email'=>'username@alt-domainname.com',
																'first-name'='firstname',
																'last-name'='lastname',
																'country-code'='US',
																'language-code'='en'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function addForwardOnlyAccount() {


			order-id=0&email=username@domainname.com&forwards=user1@domainname.com,user2@domainname.com
		$pd = $this->apicaller->product()->getDetails(array());
		echo "<pre>";
		print_r($pd);
	}


	
	public function getUserDetails() {



		$pd = $this->apicaller->product()->getUserDetails(array(order-id=0&email=username@domainname.com));
		echo "<pre>";
		print_r($pd);

	}

	public function modifyUserDetails(){

		auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&notification-email=username1@alt-domainname.com&first-name=firstname1&last-name=lastname1

			$pd = $this->apicaller->product()-> getProductCategoryProductKeysMapping(array());
		echo "<pre>";
		print_r($pd);

	}

	public function suspendUser() {

		auth-userid=0&api-key=key&order-id=0&email=username@domainname.com

	}

	public function suspendUsers() {

		auth-userid=0&api-key=key&order-id=0&emails=username1@domainname.com,username2@domainname.coms

	}


	public function unsuspendUser() {

		auth-userid=0&api-key=key&order-id=0&email=username@domainname.com
	}


	public function unsuspendUsers() {

		auth-userid=0&api-key=key&order-id=0&emails=username1@domainname.com,username2@domainname.com

	}



	public function searchUsers(){
			auth-userid=0&api-key=key&order-id=0

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function getNoOfUsers(){

			
			auth-userid=0&api-key=key&order-id=0
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function changePassword(){

			auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&new-passwd=newpassword&old-passwd=oldpassword
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function resetPassword(){

			auth-userid=0&api-key=key&order-id=0&email=username@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}



	public function updateAutoResponder(){

				
				auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&subject=subject-of-auto-responder&message=message-of-auto-responder&message-format=text/plain&quote-original-message=true&is-autoresponder-on=true
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function authenticateUser(){

			auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&passwd=user-password
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function deleteUser(){

auth-userid=0&api-key=key&order-id=0&email=username@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deleteUsers(){

auth-userid=0&api-key=key&order-id=0&emails=username1@domainname.com,username2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function addAdminForwards(){

auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&forwards=user1@domainname.com,user2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deleteAdminForwards(){

		auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&forwards=user1@domainname.com,user2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}


	public function addUserForwards(){
			auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&forwards=user1@domainname.com,user2@domainname.com

		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}

	public function deleteUserForwards(){

		auth-userid=0&api-key=key&order-id=0&email=username@domainname.com&forwards=user1@domainname.com,user2@domainname.com
		$m 	=$this->apicaller->product()->move(array (
				
					'domain-name'	=>	'domain.com',
					'existing-customer-id'	=>	'11167292 ',
					'new-customer-id'	=>	'12536458',
					'default-contact'	=>	'o',		
				) );



		print_r($m) ;

	}







}



 