# Executing an API Call

### Overview points
* The API returns JSON data (UTF-8)
* All calls to the API are stateless
* All interaction is client-server
* As of this writing, the API only includes music, movie, ebook, and audiobook media

### Every request consists of the same basic parts:

* The URL - This is the URL you'll be making a request against (often referred to as a resource).
* The Verb - search, detail, buy, etc.
* The Params - The parameters included in the call.
* The Response Body - The actual response body the API returns.
* The Response Status Code - The HTTP status code from the response.
* Other Response Info - We'll also have some other interesting info in the response.

You'll need to set the following header in order to receive responses:

```
Accept: application/json
```


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
