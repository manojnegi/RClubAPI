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
		

		$ca = $this->apicaller->essmailinglist()->addMailingList(array (
																'order-id'=>0 ,
					 									'list-address'=>'list1@domainname.com',
					 									'subscription-held'=>'false',
					 									'who-can-post'=>'only_members',
					 									'send-messages-for-moderation'=>'false',
					 									'reply-to'='sender',
					 									'moderators'=>'user1@domainname.com,user2@domainname.com'
		));

		print_r($ca);
	}



	/*

	

	*/
	public function modifyMailingList() {

		

		$pd = $this->apicaller->essmailinglist()->modifyMailingList(array(
														'order-id'=>0 ,
					 									'list-address'=>'list1@domainname.com',
					 									'subscription-held'=>'false',
					 									'who-can-post'=>'only_members',
					 									'send-messages-for-moderation'=>'false',
					 									'reply-to'='sender'

					 									)
		);
		echo "<pre>";
		print_r($pd);
	}


	public function getMailingListDomain(){
			
			$pd = $this->apicaller->essmailinglist()-> getMailingListDomain(array('order-id'=>0 ,));
		echo "<pre>";
		print_r($pd);

	}

	public function getDetails() {
			
		$pd = $this->apicaller->essmailinglist()->getDetails(array( 
														'order-id'=>0 ,
					 									'list-address'=>'list1@domainname.com'
					 									)
		);
		echo "<pre>";
		print_r($pd);

	}


	public function addSubscribers(){
			
			$m 	=$this->apicaller->essmailinglist()->addSubscribers(array (
				
					 'order-id'=>0 ,
					 'list-address'=>'list1@domainname.com',
					 'subscribers'=>'user1@domainname.com,user2@domainname.com'				
				) );



		print_r($m) ;

	}

	public function listSubscribers(){

		$m 	=$this->apicaller->essmailinglist()-> listSubscribers(array (
				
					
					 'order-id'=>0 ,
					 'list-address'=>'list1@domainname.com',
					 		
				) );



		print_r($m) ;

	}

	public function deleteSubscribers(){
		

		$m 	=$this->apicaller->essmailinglist()->deleteSubscribers(array (
				
					 'order-id'=>0 ,
					 'list-address'=>'list1@domainname.com',
					 'subscribers'=>'user1@domainname.com,user2@domainname.com'			
				) );



		print_r($m) ;

	}

	public function deleteMailingList(){

		
		$m 	=$this->apicaller->essmailinglist()->deleteMailingList(array (
				
					'order-id'=>0,
					'list-address-prefixes'=>'list1,list2	'
				) );



		print_r($m) ;

	}

	public function addModerators(){

			
		$m 	=$this->apicaller->essmailinglist()->addModerators(array (
				
					 'order-id'=>0 ,
					 'list-address'=>'list1@domainname.com',
					 'moderators'=>'user1@domainname.com,user2@domainname.com'		
				) );



		print_r($m) ;

	}


	public function deleteModerators(){

			
		$m 	=$this->apicaller->essmailinglist()->deleteModerators(array (
				
					 'order-id'=>0 ,
					 'list-address'=>'list1@domainname.com',
					 'moderators'=>'user1@domainname.com,user2@domainname.com'	
				) );



		print_r($m) ;

	}




}



 