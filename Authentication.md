# Signing and Authenticating REST Requests

## Overview

This process is very similar to how Amazon does their authentication for their platform. For more information, look at 
http://docs.amazonwebservices.com/AmazonS3/latest/dev/RESTAuthentication.html

## The Authentication Header

There are 3 required headers to add to every request:

* <code>cdaccesskeyid</code> - your ChooseDigital client id
* <code>x-cd-date</code> - time of request in one of the following formats
    * ISO8601 + timezone - yyyy-MM-dd'T'HH:mm:ss'Z'
    * ISO8601 - yyyy-MM-dd'T'HH:mm:ss
* <code>authorization</code> - HMAC-SHA1 hash of x-cd-date and your secret

## Time Stamp Requirement

A valid time stamp, using ```x-cd-date``` header, is mandatory for all authenticated requests. Furthermore, the client time-stamp included with an authenticated request must be within 15 minutes of the ChooseDigital system time when the request is received. If not, the request will fail with the ```validation.invalid.outofrange``` error status code. The intention of these restrictions is to limit the possibility that intercepted requests could be replayed.

The value of the ```x-cd-date``` header must be in one of the RFC 2616 formats ( http://www.ietf.org/rfc/rfc2616.txt ).