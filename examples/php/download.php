<?php
   
   include( "core.php" );
   
   $cdin       =  $_GET["cdin"];
   $customerId =  $_GET["customerId"];
   $country    =  "us";
   
   $shaCustID  =  hash( "sha256", $customerId, false );
   $url        =  BASE_URL."/music/download/".$cdin."/".$shaCustID."/".$country;
   
   $date       =  cdDate();
   $sign       =  hash_hmac("sha1", $date, SECRET, true);
   $signature  =  base64_encode($sign);
   $opts       =  array( 'http'=>array( 'method'=>"GET", 'header'=>
                                                               "authorization: " .$signature          .  "\r\n".
                                                               "x-cd-date: "     .$date               .  "\r\n".
                                                               "cdaccesskeyid: " .KEY                 .  "\r\n".
                                                               "Accept: "        ."application/json"
                                        )
                       );
   $ctx        = stream_context_create($opts);
   $cnt        = file_get_contents($url, false, $ctx);
   $json       = json_decode( $cnt, true );
   echo $cnt;
?>