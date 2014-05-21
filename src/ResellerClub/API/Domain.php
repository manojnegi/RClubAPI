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
     * Show domain suggestions
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
      Cancels the Transfer-In Order that is awaiting Admin approval.trar.
     */

    public function waitingToCancelTransferOrder(array $params) {
        $endPoint = Http::prepare('domains/cancel-transfer.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
}
