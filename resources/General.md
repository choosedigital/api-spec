# General Notes

## Hashed Customer Id

For a few methods, we require a hashed customer id. To calculate this parameter, do a SHA-256 of the customer id that you previously sent over in the purchases that you made. Here's a Java sample:

```java
public String generateHashedCustomerId(String customerId) {
    return DigestUtils.sha256Hex(customerId);
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
