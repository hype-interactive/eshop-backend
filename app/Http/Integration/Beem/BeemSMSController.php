<?php

namespace App\Http\Integration\Beem;
use App\Http\Integration\Beem\Constants;

use App\Traits\ReportTrait;

class BeemSMSController
{


    static function send($phone, $message, $client_id,$report_id)
    {
       
        $api_key=Constants::API_KEY;
        $secret_key=Constants::SECRET_KEY;

        $postData = array(
            'source_addr' => Constants::SENDER_ID,
            'encoding' => 0,
            'schedule_time' => '',
            'message' => $message,
            'recipients' => [array('recipient_id' => $client_id, 'dest_addr' => $phone)]
        );

        $Url = Constants::BASE_URL;

        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));

        $response = curl_exec($ch);
        return $response;
    }

    // static function sendToMany($message,$phone_array){
    //     if(count($phone_array) == 0){
    //         return;
    //     }
    //     foreach($phone_array as $item){
    //         try {
    //             BeemSMSController::send($item,$message,$item);
    //         } catch (\Throwable $th) {
    //             Log::error($th);
    //         }
    //     }
    // }


    
}
