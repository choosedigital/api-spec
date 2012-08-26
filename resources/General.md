# General Notes

## Authentication Parameter

For a few methods, an ```authentication``` parameter is required. To calculate this parameter, concat the variables as noted for the method (we'll call that ```data``` for now) and do a HMAC-SHA1 hash with your secret key. Here's a Java sample:

```java
public static String calculateRFC2104HMAC(String data, String secretKey) throws SignatureException {
    String result;
    try {
        // get an hmac_sha1 key from the raw key bytes
        SecretKeySpec signingKey = new SecretKeySpec(secretKey.getBytes(), "HmacSHA1");

        // get an hmac_sha1 Mac instance and initialize with the signing key
        Mac mac = Mac.getInstance(HMAC_SHA1_ALGORITHM);
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

## Tenants

As a Choose Digital client, it is possible to have separate "Tenants" using your API login and Secret Access Key. Tenants are your sub-clients. Contact us if you need to support Tenants.

```
contact@ChooseDigital.com
```


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
