# Executing an API Call

### Overview points
* The API returns JSON data (UTF-8)
* All calls to the API are stateless
* All interaction is client-server
* As of this writing, the API only includes music and video media

### Every request consists of the same basic parts:

* The URL – This is the URL you’ll be making a request against (often referred to as a resource).
* The Verb – search, detail, buy… etc.
* The Params – The parameters included in the call.
* The Response Body – The actual response body the API returns.
* The Response Status Code – The HTTP status code from the response.
* Other Response Info – We’ll also have some other interesting info in the response.

You'll need to set the following header in order to receive responses:

```
Accept: application/json
```