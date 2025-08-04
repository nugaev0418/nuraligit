<?php

namespace controllers;

use vendor\frame\Controller;

class CurlController extends Controller
{
   public function test(){
     $lat =  39.68601859720232;
     $lon = 66.94157148616215;
     $token = '9f6cf0ff763ff495a3c4c921865bcf56';

       $url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$token}&lang=en-US&units=metric";

       $curl = curl_init();

       curl_setopt($curl, CURLOPT_URL, $url);

       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

       $data = curl_exec($curl);

       curl_close($curl);


       $data = (json_decode($data, true));

       $this->render('curl/test', ['data' => $data], 'Weather Test');


   }
}