<?php

namespace ResellerClub\API;

/**
 * HTTP functions via curl
 */
class Http {

    /*
     * Prepares an endpoint URL with optional side-loading
     */
    public static function prepare($endPoint, $sideload = null, $iterators = null) {
        $addParams = array();
        // First look for side-loaded variables
        if(is_array($sideload)) {
            $addParams['include'] = implode(',', $sideload);
        }
        // Next look for special collection iterators
        if(is_array($iterators)) {
            foreach($iterators as $k => $v) {
                if(in_array($k, array('per_page', 'page', 'sort_order'))) {
                    $addParams[$k] = $v;
                }
            }
        }
        // Send it back...
        if(count($addParams)) {
            return $endPoint.(strpos($endPoint, '?') === false ? '?' : '&').http_build_query($addParams);
        } else {
            return $endPoint;
        }
    }

    /*
     * Use the send method to call every endpoint
     */
    public static function send($apicaller, $endPoint, $json = null, $method = 'GET', $contentType = 'application/json') {
		$url = $apicaller->getApiUrl().$endPoint;
        $method = strtoupper($method);
		$json = $apicaller->getAuthUserIDKey() + $json;
		 
        //$json = ($json == null ? (object) null : (($method != 'GET') && ($method != 'DELETE') && ($contentType == 'application/json') ? json_encode($json) : $json));
 
        if($method == 'POST') {
			
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            
            if(isset($json['filename'])) {
							$file = fopen($json['filename'], 'r');
							$size = filesize($json['filename']);
							$filedata = fread($file, $size);
							curl_setopt($curl, CURLOPT_POSTFIELDS, $filedata);
							curl_setopt($curl, CURLOPT_INFILE, $file);
							curl_setopt($curl, CURLOPT_INFILESIZE, $size);
							curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/binary'));
						} else {
							// url-ify the data for the POST
							$fields_string = '';
							foreach($json as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
							rtrim($fields_string, '&');
							curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
							curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));				
						}
        } else
        if($method == 'PUT') {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        } else {
			$curl_url = preg_replace('/%5B[0-9]+%5D/simU', '', $url.($json != (object) null ? '?'.http_build_query($json) : ''));
			//echo $curl_url;
            $curl = curl_init($curl_url);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, ($method ? $method : 'GET'));
        }
       //	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: '.$contentType, 'Accept: application/json'));
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 3);
        $response = curl_exec($curl);
        if ($response === false) {
            throw new \Exception('No response from curl_exec in '.__METHOD__);
        }
        $headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $responseBody = substr($response, $headerSize);
        $apicaller->setDebug(
            curl_getinfo($curl, CURLINFO_HEADER_OUT),
            curl_getinfo($curl, CURLINFO_HTTP_CODE),
            substr($response, 0, $headerSize)
        );
        curl_close($curl);
        return $responseBody;

    }

     

}