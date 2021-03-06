<?php
require 'mandrill_api/src/Mandrill.php';


// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("soccerfreak24@gmail.com","My subject",$msg);
echo "sent";

try 
{



  $mandrill = new Mandrill('MIKaXLOxFA_J-UbzBZTpnA');
  
  $message = array(
          'text' => 'Example text content',
          'subject' => 'example subject',
          'from_email' => 'soccerfreak24@gmail.com',
          'from_name' => 'Example Name',
          'to' => array(
              array(
                  'email' => 'soccerfreak24@gmail.com',
                  'name' => 'Recipient Name',
                  'type' => 'to'
              )
          ),
      );

    $async = false;
    $ip_pool = 'Main Pool';
    $send_at = 'example send_at';
    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
    print_r($result);
    echo $result;
    echo "I think I sent...";
    
} 
catch(Mandrill_Error $e) 
{
    // Mandrill errors are thrown as exceptions
    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
    // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
    throw $e;
}

echo 'Sent an email!';


?>
