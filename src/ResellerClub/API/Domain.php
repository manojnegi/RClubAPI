<?php

namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class Domain extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }

    /*
     * Check availability for a domain
     */

    public function checkAvailability(array $params) {
        $endPoint = Http::prepare('domains/available.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

     /*
     *    Show domain suggestions
     */
     

    public function suggestDomains(array $params) {
        $endPoint = Http::prepare('domains/suggest-names.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Validate domain transfer request
     */

    public function validateTransferRequest(array $params) {
        $endPoint = Http::prepare('domains/validate-transfer.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Validate Renews Domains request
     */

    public function renewsDomainRegistration(array $params) {
        $endPoint = Http::prepare('domains/renew.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Gets a list of Domain Registration Orders 
     * matching the search criteria, along with the details.
     */

    public function DomainRegistrationOrders(array $params) {
        $endPoint = Http::prepare('domains/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Gets the default Name Servers of the specified Customer
     */

    public function getSeverNameOfCustomer(array $params) {
        $endPoint = Http::prepare('domains/customer-default-ns.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));

        return $response;
    }

    /*
     * Gets the Order Id of a Registered domain name.
     */

    public function orderIdAgainstDomain(array $params) {
        $endPoint = Http::prepare('domains/orderid.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));

        return $response;
    }

    /*
     * Gets details of the Domain Registration 
     * Order associated with the specified Order Id.
     */

    public function detailOfDomainRegistration(array $params) {
        $endPoint = Http::prepare('domains/details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Gets details of the Domain Registration Order 
     * associated with the specified domain name.
     */

    public function detailOfSpecifiedDomain(array $params) {
        $endPoint = Http::prepare('domains/details-by-name.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Modifies the Name Servers of 
     * the specified Domain Registration Order.
     */

    public function modifyServerName(array $params) {
        $endPoint = Http::prepare('domains/modify-ns.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Adds Child Name Servers for
     *  the specified Domain Registration Order..
     */

    public function addChildNameServer(array $params) {
        $endPoint = Http::prepare('domains/add-cns.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Modifies the Host Name of the Child 
     * Name Server for the specified Domain Registration Order.
     */

    public function modifyHostNameChild(array $params) {
        $endPoint = Http::prepare('domains/modify-cns-name.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Modifies the IP address associated with the 
     * specified Child Name Server of the specified 
     * Domain Registration Order.
     */

    public function modifyIPAddressChildServeName(array $params) {
        $endPoint = Http::prepare('domains/modify-cns-ip.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Deletes the IP address associated with the 
     * specified Child Name Server of the particular
     *  Domain Registration Order.
     */

    public function deleteIPAddressChildName(array $params) {
        $endPoint = Http::prepare('domains/delete-cns-ip.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Modifies the Contacts of the specified Domain Registration Order.
     */

    public function modifySpecifiedDomainContacts(array $params) {
        $endPoint = Http::prepare('domains/modify-contact.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
     * Adds / Renews the Privacy Protection service for the
     *  specified Domain Registration Order.
     */

    public function renewPrivacyDomain(array $params) {
        $endPoint = Http::prepare('domains/purchase-privacy.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Changes the Privacy Protection
     * status of the specified Domain Registration Order.
     */

    public function modifyPrivacyProcDomain(array $params) {
        $endPoint = Http::prepare('domains/modify-privacy-protection.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Modifies the Auth-Code of the specified Domain Registration Order
     */

    public function modifyAuthCodeProcDomain(array $params) {
        $endPoint = Http::prepare('domains/modify-auth-code.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Applies the Theft Protection Lock on the specified Order.
     */

    public function theftProtectionLock(array $params) {
        $endPoint = Http::prepare('domains/enable-theft-protection.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Disables the Theft Protection Lock on the specified order.
     */

    public function disableTheftProtectionLock(array $params) {
        $endPoint = Http::prepare('domains/disable-theft-protection.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Gets the list of the Locks applied on
     * the specified Domain Registration Order..
     */

    public function listLockDomain(array $params) {
        $endPoint = Http::prepare('domains/locks.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      GGets the CTH Login Details for the specified
     * .TEL Domain Registration Order.
     */

    public function CTHLoginDetails(array $params) {
        $endPoint = Http::prepare('domains/tel/cth-details.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Modifies the Whois Preference of the .TEL Domain Registration Order.
     */

    public function modifyTelDomain(array $params) {
        $endPoint = Http::prepare('domains/tel/modify-whois-pref.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Resends the Transfer Approval Mail for the specified Order.
     */

    public function resendMailOrder(array $params) {
        $endPoint = Http::prepare('domains/resend-rfa.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
      Releases (transfers out) the specified .UK domain name to the specified Registrar.
     */

    public function releaseUKDomain(array $params) {
        $endPoint = Http::prepare('domains/uk/release.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    
      /*
      30 Cancels the Transfer-In Order that is awaiting Admin approval.trar.
     */

    public function cancelTransferOrder(array $params) {
        $endPoint = Http::prepare('domains/cancel-transfer.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }




    /*
     * 32 Suspend order
     */
    public function suspend(array $params) {
        $endPoint = Http::prepare('orders/suspend.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }

    // public function suspend(array $params) {
    //     return $this->apicaller->ordermanagement()->suspend($params) ;
    // }
    
    /*
     * 33 Unsuspend order
     */
    public function Unsuspend(array $params) {
        $endPoint = Http::prepare('orders/unsuspend.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }

    // public function unsuspend(array $params) {
    // //     return $this->apicaller->ordermanagement()->unsuspend($params) ;
    // // }


    /*
     * 34 Deletes the specified Domain Registration Order.
     */
    public function delete(array $params) {
        $endPoint = Http::prepare('domains/delete.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }



   


    /*
     * 35 Restores the specified Domain Registration Order.  //order-id=0&invoice-option=KeepInvoice
     */
    public function restore(array $params) {
        $endPoint = Http::prepare('domains/restore.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


    /*
     * 36 Recheck zone configuration with .DE Registry of the expired .DE Domain Registration order.
                                                    // order-id=0
     */
    public function recheckNS(array $params) {
        $endPoint = Http::prepare('domains/de/recheck-ns.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }

    /*
     37  Allows associating/dissociating the Membership Token/ID provided by the .XXX Registry, 
          to a Domain Registration Order.
                                                                              // order-id=123&association-id=123
     */
    public function DotXXXAssociationDetails(array $params) {
        $endPoint = Http::prepare('domains/dotxxx/association-details');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


    /*
     38  Adds a Delegation Signer (DS) Record for a Domain Registration Order.
                  //order-id=0&attr-name1=keytag&attr-value1=123&attr-name2=algorithm&attr-value2=3
                  &attr-name3=digesttype&attr-value3=1&attr-name4=digest
                  &attr-value4=49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111
     */
    public function addDSRecord(array $params) {
        $endPoint = Http::prepare('domains/add-dnssec.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


    /*
     39  delete a Delegation Signer (DS) Record for a Domain Registration Order.
                  //order-id=0&attr-name1=keytag&attr-value1=123&attr-name2=algorithm
                  &attr-value2=3&attr-name3=digesttype&attr-value3=1&attr-name4=digest
                  &attr-value4=49FD46E6C4B45C55D4AC49FD46E6C4B45C55D111
     */
    public function deleteDSRecord(array $params) {
        $endPoint = Http::prepare('domains/del-dnssec.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


    //40 access denied for skip Verification of Registrant Contact Email Address


    /*
     41 Resends the verification email to the Registrant Contact Email Address for the specified Domain Registration Order.
                  //order-id=0
     */
    public function resendVerification(array $params) {
        $endPoint = Http::prepare('domains/raa/resend-verification.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


    /*
     42 RAdds a Pre-Registration Order for the specified Domain Name(s).
          //customerid=0&domain=domain1.ads
     */
    public function addPreRegistrationOrder(array $params) {
        $endPoint = Http::prepare('domains/preordering/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }


      /*
     43  Deletes the Pre-Registration Order for the specified Domain Name(s).
          //customerid=0&domain=domain1.ads
    */

    public function deletePreRegistrationOrder(array $params) {
        $endPoint = Http::prepare('domains/preordering/delete.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }



      /*
     44  Fetches the Pre-Registration Wishlist.
          //no-of-records=10&page-no=1
    */

    public function fetchPreRegistrationWishlist(array $params) {
        $endPoint = Http::prepare('domains/preordering/fetch.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }

       /*
     45  Fetches the TLDs for the specified Category.
          //category=services
    */

    public function fetchPreRegistrationTLDs(array $params) {
        $endPoint = Http::prepare('domains/preordering/fetchtldlist.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }


       /*
     46  Checks the availability of the specified Domain Name(s) in the Sunrise Phase.
          //domainname=domain1&tld=bike&smd=<smd_file_content>
    */

    public function  checkAvailabilitySunRise(array $params) {
        $endPoint = Http::prepare('domains/available-sunrise.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }


        /*
     47  Fetches the Trademark Claim Data, based on the Trademark Claim Key.
          //lookup-key=claim-key
    */

    public function fetchTMNotice(array $params) {
        $endPoint = Http::prepare('domains/get-tm-notice.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }


         /*
     48 Fetches the list of TLDs currently in the Sunrise / Landrush Period
          //phase=sunrise
    */

    public function fetchTLDSunRise(array $params) {
        $endPoint = Http::prepare('domains/tlds-in-phase.xml');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
        return $response;
    }
}