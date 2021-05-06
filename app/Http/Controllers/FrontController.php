<?php

namespace App\Http\Controllers;

use anlutro\BulkSms\BulkSmsService;
use App\ContactUs;
use App\News;
use App\NewsTranslation;
use Carbon\Carbon;
use Illuminate\Http\Request;
require('SMS-Voice-PHPSDK/Unifonic/Autoload.php');

use Unifonic\API\Client;


class FrontController extends Controller
{
    public function index(){
        $news=News::all();
        $new=NewsTranslation::all();
        $date=Carbon::now();
        return view('front.index',compact('news','new','date'));
    }

    public function store(Request $request){


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => 'required|min:1',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'message' => 'required',
        ]);


// Your PHP installation needs cUrl support, which not all PHP installations
// include by default.
// To run under docker:
// docker run -v $PWD:/code php:7.3.2-alpine php /code/code_sample.php

//        $username = 'abde54';
//        $password = '12345678Aa';
//        $baseurl = 'https://www.bulksms.com/';
//        //"http://bulksms.vsms.net:5567"
//
//        $bulkSms = new BulkSmsService($username, $password, $baseurl);
//        $bulkSms->sendMessage($request->phone, 'thank you for message'.$request->name);

//        $client = new Client();
//        $response = $client->Messages->Send($request->phone,'Hello','Uconf'); // send regular massaged
//        dd($response);
$username = 'abde54';
$password = '12345678Aa';
$messages = array(
    array('to'=>$request->phone, 'body'=>'Hello World!')
);




        $post_body=['to'=>$request->phone, 'body'=>'Hello World!'];
        $url = 'https://www.bulksms.com/';

        function send_message ( $post_body, $url, $username, $password) {
            $ch = curl_init( );
            $headers = array(
                'Content-Type:application/json',
                'Authorization:Basic '. base64_encode("$username:$password")
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt ( $ch, CURLOPT_URL, $url );
            curl_setopt ( $ch, CURLOPT_POST, 1 );
            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
            // Allow cUrl functions 20 seconds to execute
            curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
            // Wait 10 seconds while trying to connect
            curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
            $output = array();
            $output['server_response'] = curl_exec( $ch );
            $curl_info = curl_getinfo( $ch );
            $output['http_status'] = $curl_info[ 'http_code' ];
            $output['error'] = curl_error($ch);
            curl_close( $ch );
            return $output;
        }
        $result = send_message( json_encode($messages), 'https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', $username, $password );

        if ($result['http_status'] != 201) {
            print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
        } else {
            print "Response " . $result['server_response'];
            // Use json_decode($result['server_response']) to work with the response further
        }
        return $result;

        ContactUs::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('front.index');
    }


}//end of controller



//
//$basic  = new \Vonage\Client\Credentials\Basic('b81d96ed', 'askOIylcByn260HS');
//$client = new \Vonage\Client($basic);
//
//$message = $client->message()->send([
//    'to' => '201069066107',
//    'from' => 'Vonage APIs',
//    'text' => 'Hello from Vonage SMS API'
//]);
