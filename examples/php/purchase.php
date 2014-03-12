<?php
   
   include( "core.php" );
   
   $cdin             =  $_GET["cdin"];
   $customerId       =  $_GET["customerId"];
   $postalCode       =  $_GET["postalCode"];
   $priceSold        =  $_GET["priceSold"];
   
   $country          =  "us";
   $url              =  BASE_URL."/music/purchase";
   $date             =  cdDate();
   $authorization    =  sha( $date, SECRET );
   $authentication   =  sha( $cdin.$customerId.$country.$priceSold, SECRET );
   
   $data = array( 'cdin'                  => $cdin,
                  'customerId'            => $customerId,
                  'customerPostalCode'    => $postalCode,
                  'customerCountryCode'   => $country,
                  'priceSold'             => $priceSold,
                  'authentication'        => $authentication,
                  'taxAmount'             => "0" );
   
   $head       =  "";
   $head      .=  "authorization: " .$authorization      .  "\r\n";
   $head      .=  "x-cd-date: "     .$date               .  "\r\n";
   $head      .=  "cdaccesskeyid: " .KEY                 .  "\r\n";
   $head      .=  "Accept: "        ."application/json"  .  "\r\n";
   $head      .=  "Content-Type: application/x-www-form-urlencoded";
   
   $options = array(
       'http' => array(
           'header'  => $head,
           'content' => http_build_query($data),
           'method'  => 'POST'  ) );
   
   $context  = stream_context_create($options);
   $result   = file_get_contents($url, false, $context);
   echo $result;
?>