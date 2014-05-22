<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class EmailAccountTest {

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
																'first-name'=>'firstname',
																'last-name'=>'lastname',
																'country-code'=>'US',
																'language-code'=>'en'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function addForwardOnlyAccount() {


			
		$pd = $this->apicaller->emailaccount()->getDetails(array(
															'order-id'=>0,
															'email'=>'username@domainname.com',
															'forwards'=>'user1@domainname.com,user2@domainname.com'
															)
		);
		echo "<pre>";
		print_r($pd);
	}


	
	public function getUserDetails() {



		$pd = $this->apicaller->emailaccount()->getUserDetails(array(
													'order-id'=>0
													'email'=>'username@domainname.com'
													));
		echo "<pre>";
		print_r($pd);

	}

	public function modifyUserDetails(){

		

			$pd = $this->apicaller->emailaccount()-> modifyUserDetails(array(
																	'order-id'=>0,
																	'email'=>'username@domainname.com',
																	'notification-email'=>'username1@alt-domainname.com',
																	'first-name'=>'firstname1',
																	'last-name'=>'lastname1'
															));
		echo "<pre>";
		print_r($pd);

	}

	public function suspendUser() {

	
		$pd = $this->apicaller->emailaccount()->suspendUser(array(
																	'order-id'=>0,
																	'email'=>'username@domainname.com'
																	
															));
		echo "<pre>";
		print_r($pd);

	}

	public function suspendUsers() {

		
		$pd = $this->apicaller->emailaccount()-> suspendUsers(array(
																	'order-id'=>0,
																	'emails'=>'username1@domainname.com,username2@domainname.coms',
																	
															));
		echo "<pre>";
		print_r($pd);

	}


	public function unsuspendUser() {

	
		$pd = $this->apicaller->emailaccount()-> unsuspendUser(array(
																	'order-id'=>0,
																	'email'=>'username@domainname.com'
																	
															));
		echo "<pre>";
		print_r($pd);
	}


	public function unsuspendUsers() {

		
		$pd = $this->apicaller->emailaccount()-> unsuspendUsers(array(
																'order-id'=>0,
																'emails'=>'username1@domainname.com,username2@domainname.coms',
																	
															));
		echo "<pre>";
		print_r($pd);

	}



	public function searchUsers(){
			
		$m 	=$this->apicaller->emailaccount()->searchUsers(array (
				
					'order-id'=>0,
					
				) );



		print_r($m) ;

	}


	public function getNoOfUsers(){

			
			
		$m 	=$this->apicaller->emailaccount()->getNoOfUsers(array (
				
					'order-id'=>0,
				) );



		print_r($m) ;

	}


	public function changePassword(){

		
		$m 	=$this->apicaller->emailaccount()->changePassword(array (
				
					'order-id'=>0,
					'email'=>'username@domainname.com',
					'new-passwd'=>'newpassword',
					'old-passwd'=>'oldpassword'
				) );



		print_r($m) ;

	}

	public function resetPassword(){

			
		$m 	=$this->apicaller->emailaccount()->resetPassword(array (
				
					'order-id'=>0,
					'email'=>'username@domainname.com',		
				) );



		print_r($m) ;

	}



	public function updateAutoResponder(){

				
				
		$m 	=$this->apicaller->emailaccount()->updateAutoResponder(array (
																'order-id'=>0,
																'email'=>'username@domainname.com',	
																'subject'=>'subject-of-auto-responder',
																'message'=>'message-of-auto-responder',
																'message-format'=>'text/plain',
																'quote-original-message'=>true,
																'is-autoresponder-on'=>true		
				) );



		print_r($m) ;

	}


	public function authenticateUser(){

			
		$m 	=$this->apicaller->emailaccount()->authenticateUser(array (
				
																'order-id'=>0,
																'email'=>'username@domainname.com',	
																'passwd'=>'user-password'	
				) );



		print_r($m) ;

	}


	public function deleteUser(){


		$m 	=$this->apicaller->emailaccount()->deleteUser(array (
				
													'order-id'=>0,
													'email'=>'username@domainname.com',	
				) );



		print_r($m) ;

	}

	public function deleteUsers(){

		$m 	=$this->apicaller->emailaccount()->deleteUsers(array (
				
													'order-id'=>0,
													'emails'=>'username1@domainname.com,username2@domainname.com',	
				) );



		print_r($m) ;

	}


	public function addAdminForwards(){

				
		$m 	=$this->apicaller->emailaccount()->addAdminForwards(array (
				
					'order-id'=>0,
					'email'=>'username@domainname.com',
					'forwards'=>'user1@domainname.com,user2@domainname.com	'
				) );



		print_r($m) ;

	}

	public function deleteAdminForwards(){

		
		$m 	=$this->apicaller->emailaccount()->deleteAdminForwards(array (
				
					'order-id'=>0,
					'email'=>'username@domainname.com',
					'forwards'=>'user1@domainname.com,user2@domainname.com	'	
				) );



		print_r($m) ;

	}


	public function addUserForwards(){
			

		$m 	=$this->apicaller->emailaccount()->addUserForwards(array (
				
					'order-id'=>0,
					'email'=>'username@domainname.com',
					'forwards'=>'user1@domainname.com,user2@domainname.com	'	
				) );



		print_r($m) ;

	}

	public function deleteUserForwards(){

		
		$m 	=$this->apicaller->emailaccount()->deleteUserForwards(array (
												'order-id'=>0,
												'email'=>'username@domainname.com',
												'forwards'=>'user1@domainname.com,user2@domainname.com	'		
				) );



		print_r($m) ;

	}







}



 