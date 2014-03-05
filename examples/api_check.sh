#!/bin/bash

#Change these 3 variables
ACCESS_KEY_ID=YOUR_ACCESS_KEY_ID
SECRET_KEY=YOUR_SECRET_KEY
REFERENCE_DATE=YOUR_REFERENCE_DATE
#ex format: 2013-10-22T21:00:32.000Z

AUTH_VAL=`echo -n "$REFERENCE_DATE" | openssl dgst -sha1 -hmac "$SECRET_KEY" -binary | base64`

curl -X GET --header "Accept:application/json" --header "cdaccesskeyid:$ACCESS_KEY_ID" --header "x-cd-date:$REFERENCE_DATE" --header "authorization:$AUTH_VAL" http://api-stage.choosedigital.cloudbees.net/music
