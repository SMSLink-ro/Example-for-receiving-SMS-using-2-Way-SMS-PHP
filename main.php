<?php

/*

  Receiving SMS using 2-Way SMS & PHP

  This example illustrates receiving a SMS MO (Mobile Originated) sent by a mobile subscriber to a shortcode using SMSLink - 2-Way SMS - https://www.smslink.ro/two-way/

  This script should be availabile to a public URL using HTTP/HTTPS protocol and must accept HTTP(S) requests from SMSLink. In case the HTTP(S) request sent by SMSLink cannot be completed (1) due to a connection error (ie. Connection Timeout etc.) or (2) due to a returned HTTP Status Code between 400 and 599 (id. 404 Not Found, 500 Internal Server Error samd.), SMSLink will retry resenting the HTTP(S) request for 2 times within the following 2 hours.

*/

if ((isset($_GET["sender"])) and 
    (isset($_GET["receiver"])) and 
    (isset($_GET["message"])) and 
    (isset($_GET["timestamp"])) and 
    (isset($_GET["network_id"])) and 
    (isset($_GET["network_name"]))
  )
{
  /*

    The Sender of the SMS (ie. 07xyzzzzzz)

  */
  $sender = $_GET["sender"];  

  /*

    The Shortcode on which the SMS was sent (ie. 17xy, 18xy, 37xy, 38xy etc.)

  */
  $receiver = $_GET["receiver"];

  /*

    The Message sent by the Sender to the Shortcode

  */
  $message = $_GET["message"];

  /*

    The Timestamp in which the Message was received on the Shortcode, in UNIX Timestamp format.

  */
  $timestamp = $_GET["timestamp"]; 

  /*

    The Network ID in which the Sender is located, with the following possible values:
    
    1 for Vodafone Romania
    2 for Orange Romania
    3 for Telekom Romania Mobile / Telekom Romania
    5 for Digimobil (RCS-RDS)

  */
  $network_id = $_GET["network_id"]; 

  /*

    The Network Name corresponding to the Network ID

  */
  $network_name = $_GET["network_name"]; 

  $handler = fopen("sms-mobile-originated-".date("d-m-Y", $timestamp)."txt", "a+");

  fwrite($handler, 
            "SMS Received: From ".$sender.", ".
            "Receiver ".$receiver.", ".
            "Network ID: ".$network_id.", ".
            "Network Name: ".$network_name.", ".
            "Date / Time: ".date("d-m-Y H:i", $timestamp).", ".
            "Message: ".$message.
            "\r\n"
    );

  fclose($handler);

}
    
?> 