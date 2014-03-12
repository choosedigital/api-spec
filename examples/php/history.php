<?php
   
   include( "core.php" );
   
   $customerId       =  $_GET["customerId"];
   
   $url              =  BASE_URL."/history/all";
   $date             =  cdDate();
   $authorization    =  sha( $date, SECRET );
   
   $country          =  "us";
   $data             =  $customerId.$country;
   $authentication   =  sha( $data, SECRET );
   
   $head       =  "";
   $head      .=  "authorization: " .$authorization      .  "\r\n";
   $head      .=  "cdaccesskeyid: " .KEY                 .  "\r\n";
   $head      .=  "x-cd-date: "     .$date               .  "\r\n";
   $head      .=  "Accept: "        ."application/json"  .  "\r\n";
   $head      .=  "Content-Type: "  ."application/x-www-form-urlencoded";
   
   $data = array( 'customerCountryCode'   => $country,
                  'customerId'            => $customerId,
                  'authentication'        => $authentication );

   $options = array(
       'http' => array(
           'header'  => $head,
           'method'  => 'POST',
           'content' => http_build_query($data),
            ),
      );
   
   $context  = stream_context_create($options);
   $result = file_get_contents($url, false, $context);
   echo $result;
?>