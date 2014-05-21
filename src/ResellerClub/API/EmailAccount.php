<?php

namespace ResellerClub\API;

/**
 * to create products ,check availabiity
 */
class EmailAccount extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }



     /*
     * 1 . add user 
     */
    public function addUser(array $params) {
        
        $endPoint = Http::prepare('mail/user/add.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
    }



     /*
     * 2. add forward only accountget details of a product
     */
    public function addForwardOnlyAccount(array $params) {
        
        $endPoint = Http::prepare('mail/user/add-forward-only-account.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'GET');
       
        return $response;
        
    }
    
    
    
  
     /*
     * 3. get user details
     */
    public function getUserDetails(array $params) {
        $endPoint = Http::prepare('mail/user.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  4. modify user details.s
    */
    public function modifyUserDetails(array $params) {
        $endPoint = Http::prepare('mail/modify.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  5. suspend user
    */
    public function suspendUser(array $params) {
        $endPoint = Http::prepare('mail/user/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  6 suspend users
    */
    public function suspendUsers(array $params) {
        $endPoint = Http::prepare('mail/users/suspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    
     /*
     *  7 unsuspend user 
     */
    public function unsuspendUser(array $params) {
        $endPoint = Http::prepare('mail/user/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  8. unsuspend users
    */
    public function unsuspendUsers(array $params) {
        $endPoint = Http::prepare('mail/users/unsuspend.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  9. search users
    */
    public function searchUsers(array $params) {
        $endPoint = Http::prepare('mail/users/search.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }
    

    /*
    *  10  get no. of users
    */
    public function getNoOfUsers(array $params) {
        $endPoint = Http::prepare('mail/users/no-of-users.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  10  changePassword
    */
    public function changePassword(array $params) {
        $endPoint = Http::prepare('mail/user/change-password.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

    /*
    *  11 resetPassword
    */
    public function resetPassword(array $params) {
        $endPoint = Http::prepare('mail/user/reset-password.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  12  updateAutoResponder
    */
    public function updateAutoResponder(array $params) {
        $endPoint = Http::prepare('mail/user/update-autoresponder.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  13  authenticateUser
    */
    public function authenticateUser(array $params) {
        $endPoint = Http::prepare('mail/user/authenticate.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  14  deleteUser
    */
    public function deleteUser(array $params) {
        $endPoint = Http::prepare('mail/user/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


    /*
    *  15 deleteUsers
    */
    public function deleteUsers(array $params) {
        $endPoint = Http::prepare('mail/users/delete.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
    *  16 add admin forwards.
    */
    public function addAdminForwards(array $params) {
        $endPoint = Http::prepare('mail/user/add-admin-forwards.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

     /*
    *  17 delete admin forwards 
    */
    public function deleteAdminForwards(array $params) {
        $endPoint = Http::prepare('mail/user/delete-admin-forwards.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }


     /*
    *  18 add user forwards
    */
    public function addUserForwards(array $params) {
        $endPoint = Http::prepare('mail/user/add-user-forwards.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }

     /*
    *  19 delete user forwards
    */
    public function deleteUserForwards(array $params) {
        $endPoint = Http::prepare('mmail/user/delete-user-forwards.json');
        $response = json_decode(Http::send($this->apicaller, $endPoint, $params, 'GET'));
        if (!is_object($response)) {
            throw new ResponseException(__METHOD__);
        }
        return $response;
    }



}
