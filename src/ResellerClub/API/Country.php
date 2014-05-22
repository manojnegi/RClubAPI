<?php

namespace ResellerClub\API;


class Country {

  public static $con;

    public static function getCountry(array $country) {
      
        foreach ($country as $key => $value) {
	# code...
        switch($value) {

            case 'India':       Self::$con="in";
                                return Self::$con;
                                break;

            case 'US':          Self::$con="us";
                                return Self::$con;
                                break;

            case 'UK':          Self::$con="uk";
                                return Self::$con;
                                break;

            case 'Hong Kong':   Self::$con="hk";
                                return Self::$con;
                                break;

            case 'Turkey':      Self::$con="tr";
                                return Self::$con;
                                break;
                                                  
            }
         }

    }
}