# General Notes

## Authentication Parameter

For a few methods, an ```authentication``` parameter is required. To calculate this parameter, concat the variables as noted for the method (we'll call that ```data``` for now) and do a HMAC-SHA1 hash with your secret key. Here's a Java sample:

```
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

## Using a Tenant Id