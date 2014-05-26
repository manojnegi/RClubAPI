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


$ca = $this->apicaller->esmmailinglist()->addMailingList(array (
'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',
'subscription-held'=>'false',
'who-can-post'=>'only_members',
'send-messages-for-moderation'=>'false',
'reply-to'=>'sender',
'moderators'=>'pukai@hotmail.com,mrinmoy.mukherjee@netfunda.com'
));

print_r($ca);
}



/*



*/
public function modifyMailingList() {



$pd = $this->apicaller->esmmailinglist()->modifyMailingList(array(
                            'order-id'=>'54792590' ,
                            'list-address'=>'pukai@hotmail.com',
                            'subscription-held'=>'false',
                            'who-can-post'=>'only_members',
                            'send-messages-for-moderation'=>'false',
                            'reply-to'=>'sender'

                            )
);
echo "<pre>";
print_r($pd);
}


public function getMailingListDomain(){

$pd = $this->apicaller->esmmailinglist()-> getMailingListDomain(array('order-id'=>'54792590'));
echo "<pre>";
print_r($pd);

}

public function getDetails() {

$pd = $this->apicaller->esmmailinglist()->getDetails(array( 
                            'order-id'=>'54792590' ,
                            'list-address'=>'pukai@hotmail.com'
                            )
);
echo "<pre>";
print_r($pd);

}


public function addSubscribers(){

$m 	=$this->apicaller->esmmailinglist()->addSubscribers(array (

'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',
'subscribers'=>'pukai@hotmail.com,mrinmoy.mukherjee@netfunda.com'				
) );



print_r($m) ;

}

public function listSubscribers(){

$m 	=$this->apicaller->esmmailinglist()-> listSubscribers(array (


'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',

) );



print_r($m) ;

}

public function deleteSubscribers(){


$m 	=$this->apicaller->esmmailinglist()->deleteSubscribers(array (

'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',
'subscribers'=>'pukai@hotmail.com,mrinmoy.mukherjee@netfunda.com'			
) );



print_r($m) ;

}

public function deleteMailingList(){


$m 	=$this->apicaller->esmmailinglist()->deleteMailingList(array (

'order-id'=>'54792590',
'list-address-prefixes'=>'pukai,mrinmoy.mukherjee	'
) );



print_r($m) ;

}

public function addModerators(){


$m 	=$this->apicaller->esmmailinglist()->addModerators(array (

'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',
'moderators'=>'pukai@hotmail.com,mrinmoy.mukherjee@netfunda.com'		
) );



print_r($m) ;

}


public function deleteModerators(){


$m 	=$this->apicaller->esmmailinglist()->deleteModerators(array (

'order-id'=>'54792590' ,
'list-address'=>'pukai@hotmail.com',
'moderators'=>'pukai@hotmail.com,mrinmoy.mukherjee@netfunda.com'
) );



print_r($m) ;

}




}



 