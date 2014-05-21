<?php
namespace ResellerClub\API;

/**
 * The Tickets class exposes key methods for reading and updating ticket data
 */
class OrderManagement extends APICallerAbstract {

    public function __construct($apicaller) {
        parent::__construct($apicaller);
    }


     /*
     * Suspend order
     */
    public function suspend(array $params) {
        $endPoint = Http::prepare('orders/suspend.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
    
    /*
     * Unsuspend order
     */
    public function Unsuspend(array $params) {
        $endPoint = Http::prepare('orders/unsuspend.json');
        $response = Http::send($this->apicaller, $endPoint, $params, 'POST');
        return $response;
    }
}
