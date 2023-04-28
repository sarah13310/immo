<?php

use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class SMSTwilio
{
    protected $sid;
    protected $token;
    protected $client;
    protected $twilioPurchasedNumber;

    public function __construct()
    {
        $this->sid= getenv('TWILIO_ACCOUNT_SID');
        $this->token = getenv('TWILIO_AUTH_TOKEN');
        $this->twilioPurchasedNumber = "+XXXXXXXXXX";

        $this->client = new Client($this->sid, $this->token);
    }
    
    public function sendMessage($phoneNumber, $message){
        try{
            $response = $this->client->messages->create(
                $phoneNumber,
                [
                    'from' => $this->twilioPurchasedNumber,
                    'body' => $message
                ]
            );
            print("Message envoyé avec succès avec sid = " . $response->sid ."\n\n");            
        }
        catch(TwilioException   $ex){
            echo "Une erreur s'est produite: " . $ex->getMessage();  
        }
        
    }
}


// exemple 

// SMSTwilio twilio=new  SMSTwilio();
// twilio->sendMessage("+3365555555", "mon message sms de test");