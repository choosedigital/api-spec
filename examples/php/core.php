<?php

   header('Content-type: application/json;charset=iso-8001');

   define( "BASE_URL",  "https://api-stage.choosedigital.com"                    );
   define( "KEY",       "YOUR_CD_ACCESSKEY_ID"                                );
   define( "SECRET",    "YOUR_SECRET" );

   function cdPath()    { return BASE_URL.$_GET["path"]."?".$_SERVER['QUERY_STRING'];     }
   function cdDate()    { return date("Y-m-d\TH:i:s.BP");                                 }
   function cdShaDate() { return sha( cdDate(), SECRET );                                 }

   function sha( $d, $s )
   {
      $bytes = hash_hmac("sha1", $d, $s, true);
      return base64_encode($bytes);
   }
?>
