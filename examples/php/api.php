<?php
   include( "core.php" );
   
   $url        =  cdPath();
   $opts       =  array(   'http'=>array( 'method'=>"GET", 'header'=>
                                                           "authorization: " .cdShaDate()  .  "\r\n".
                                                           "x-cd-date: "     .cdDate()     .  "\r\n".
                                                           "cdaccesskeyid: " .KEY          .  "\r\n".
                                                           "Accept: "        ."application/json"
                                        )
                       );
   $cnt        =  file_get_contents( $url, false, stream_context_create($opts) );
   $json       =  json_decode( $cnt, true );
   echo $cnt;
?>