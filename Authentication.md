# Signing and Authenticating REST Requests

## Overview

There are 5 required headers to add to every request. This process is very similar to how Amazon does their authentication for their platform. For more information, look at 
[Amazon’s documentation](http://docs.amazonwebservices.com/AmazonS3/latest/dev/RESTAuthentication.html)

## Required Authentication Headers

The 5 required headers are:

* <code>cdaccesskeyid</code> - provided by Choose Digital
* <code>x-cd-date</code> - time of request in one of the following formats
    * ISO8601 + timezone - yyyy-MM-dd'T'HH:mm:ss'Z'
    * ISO8601 - yyyy-MM-dd'T'HH:mm:ss
* <code>authorization</code> - HMAC-SHA1 hash of x-cd-date and your secret (Example code: [Java](https://github.com/choosedigital/api-spec/blob/master/resources/General.md#authentication-parameter))
* <code>Content-type:application/json</code>
* <code>Accept:application/json</code>

Optionally, you can also include a gzip/deflate header

* <code>Accept-Encoding:gzip,deflate,sdch</code>

### x-cd-date: Time Stamp Requirement

A valid time stamp, using ```x-cd-date``` header, is mandatory for all authenticated requests. Furthermore, the client time-stamp included with an authenticated request must be within 15 minutes of the Choose Digital system time when the request is received. If not, the request will fail with the ```validation.invalid.outofrange``` error status code. The intention of these restrictions is to limit the possibility that intercepted requests could be replayed.

The value of the ```x-cd-date``` header must be in one of the RFC 2616 formats ( http://www.ietf.org/rfc/rfc2616.txt ).


##Authentication Parameter

For a few methods (like purchases), an ```authentication``` parameter is required. To calculate this parameter, concat the variables as noted for the method (we'll call that ```data``` for now) and do a HMAC-SHA1 hash with your secret key. Here's a Java sample:

## HMAC-SHA1 hash with Secret Key

Java example:

```java
public static String calculateRFC2104HMAC(String data, String secretKey) throws SignatureException {
    String result;
    try {
        // get an hmac_sha1 key from the raw key bytes
        SecretKeySpec signingKey = new SecretKeySpec(secretKey.getBytes(), "HmacSHA1");

        // get an hmac_sha1 Mac instance and initialize with the signing key
        Mac mac = Mac.getInstance("HmacSHA1");
        mac.init(signingKey);

        // compute the hmac on input data bytes
        byte[] rawHmac = mac.doFinal(data.getBytes());

        // base64-encode the hmac
        result = Codec.encodeBASE64(rawHmac);
    } catch (Exception e) {
        throw new SignatureException("Failed to generate HMAC : " + e.getMessage());
    }
    return result;
}
```



#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
