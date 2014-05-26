<?php


namespace ResellerClub\Tests;

use ResellerClub\API\APICaller as RClubAPI;


class ESMDomainTest {


	protected $apicaller ;

	public function __construct($apihost,$authid,$apikey) {

		$this->apicaller = new RClubAPI($apihost, $authid);

		$this->apicaller->setAuth('apikey', $apikey); 

	}
	


	/*
		

	*/

public function isOwnershipVerified() {


$ca = $this->apicaller->esmdomain()->isOwnershipVerified(array (
'order-id'=>'54792590',
));

print_r($ca);
}



/*



*/
public function addDomainAlias() {


$pd = $this->apicaller->esmdomain()->addDomainAlias(array(
    'order-id'=>'54792590',
'alias'=>'pukai@hotmail.com'));
echo "<pre>";
print_r($pd);
}


public function deleteDomainAlias(){

$pd = $this->apicaller->esmdomain()-> deleteDomainAlias(array(
'order-id'=>'54792590',
'alias'=>'pukai@hotmail.com'
)
);

echo "<pre>";
print_r($pd);

}

public function getNotificationEmail() {

$pd = $this->apicaller->esmdomain()->getNotificationEmail(array('order-id'=>'54792590' ));
echo "<pre>";
print_r($pd);

}


public function modifyNotificationEmail(){

$m 	=$this->apicaller->esmdomain()->modifyNotificationEmail(array (

'order-id'=>'54792590' ,	
'notification-email'=>'pukai@hotmail.com'
) );



print_r($m) ;

}

public function getCatchAllAcount(){


$m 	=$this->apicaller->esmdomain()->getCatchAllAcount(array (

'order-id'=>'54792590' ,	
) );



print_r($m) ;

}

public function activateCatchAllAcount(){


$m 	=$this->apicaller->esmdomain()->activateCatchAllAcount(array (

'order-id'=>'54792590' ,
'catchall-email'=>'pukai@hotmail.com'	
) );



print_r($m) ;

}

public function deactivateCatchAllAcount(){


$m 	=$this->apicaller->esmdomain()->deactivateCatchAllAcount(array (

'order-id'	=>	'54792590',	
) );



print_r($m) ;

}

public function getDNSRecords(){


$m 	=$this->apicaller->esmdomain()->getDNSRecords(array (

'order-id'	=>	'54792590',

) );



print_r($m) ;

}




}



 