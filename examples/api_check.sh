#!/bin/bash

#Change these 3 variables
ACCESS_KEY_ID=8627E307937657A8F29B0152378DF6C6
SECRET_KEY=6VEcIRl5rq7HGRqTqhEdcxQTJtulcgW3HrVpuQS9oGp7Abjy5SPodymIpczAjnY
REFERENCE_DATE="2014-03-05T18:28:32.000Z"
#UTC timezone, ex format: 2013-10-22T21:0032.000Z

AUTH_VAL=`echo -n "$REFERENCE_DATE" | openssl dgst -sha1 -hmac "$SECRET_KEY" -binary | base64`

curl -X GET --header "Accept:application/json" --header "cdaccesskeyid:$ACCESS_KEY_ID" --header "x-cd-date:$REFERENCE_DATE" --header "authorization:$AUTH_VAL" https://api-stage.choosedigital.com/music
