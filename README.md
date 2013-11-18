# Choose Digital API Spec

Choose Digital’s capabilities are unique to the marketplace with patent pending approaches to Digital Media delivery, security, system and solution interoperability.

The Choose Digital API will allow for quick and effective implementation of an All-Digital Market Place. It provides full interaction with the Choose Digital catalog from browsing and search, to complete product data, to transactions and order history. This capability can be put in place with relatively basic API calls to Choose Digital servers. 

Any reference in this document to "points" is interchangeable with "credits", "miles", etc.

Follow these guidelines to ensure that you're following our best practices for application development so that you can best grow and scale along with the API and avoid future problems.
	
1. Always parse response data without assuming the number or order of elements in the response. For example, if a new field were to be added to the object your code should gracefully handle a change in the total number of elements, or a change where the element you are interested is now 5th instead of 4th.
1. Always use hostnames in your code and let the DNS servers resolve the IP - don't pre-resolve the name in order to try and save time at runtime, as the IP will not always be the same.

## Attention: Changes coming soon

## On February 24th 2014, the Choose Digital API will be SSL only. 

Today SSl traffic is sent in the clear, meaning anyone with the ability to sniff network traffic could potentially see the information flowing to/from our API and the REST endpoint accessing the APIs. As we need new customer information for certain books to combat this, SSL support has been 
added to Choose Digital API. Here are the steps taken to add SSL support from the beginning.

Also anyone looking to use our new book options (being added soon) will have to use the new SSL API endpoints 

On February 24th 2014, the Choose Digital API will also require country to be passed on all call they require a country /[country]

Please be sure to give us your feedback if you think you needed more time. 

## Table of Content

* [Object definitions](/master/objects.md)
* [Resource definitions](/resources/README.md)
* [Signing and Authenticating REST Requests](/Authentication.md)
* [Custom Delivery Handling](/Custom-Delivery-Handling.md)

## To Developers

This document is a reference for development of a rewards e-commerce website, or other type of site or application, that interacts with the Choose Digital API.

The API provides a mechanism for developers to query and purchase digital content. The API will allow for direct integration between client software, web-based applications, 3rd party software and the Choose Digital Gateway.
 
### Developer Support

If you have any problems, please open a ticket with the Choose Digital API help desk by sending an email to 

```
api@ChooseDigital.zendesk.com
```

Please speak with your account representative for your API login information.

### Authentication

Every request to the API must contain authentication information to establish the identity of the principal making the request. In REST, this is done by first putting the headers in a canonical format, then signing the headers using your Choose Digital Secret Access Key.

Refer to the Authentication chapter for more information and examples.

### <span id="redemption-links"></span>Redemption Links (download or streaming)

When an api request is made for a purchase, the response will include a redemption link.
All redemption links expire in just a few minutes. 
If a link expires without being used, a new one can be requested (using the [Download](/resources/Music.md#download) method for Music, for example). Once a link is used, a new link will no longer be returned.
Just as a user must be logged in to make a purchase, they must also be logged in to request a new redemption link. See further documentation under specific media types.

__*Don't*__ save redemption links to be used later

__*Don't*__ send redemption links via email or any other transmission 

__*Do*__ provide redemption links only to logged-in users 


### General info

#### UTF-8 encoding 

The API supports and expects UTF-8 encoding.

#### Date formats

Dates are in short format: 
```
2012-02-14T14:17:59.440-05:00
```
#### Wiki
Choose Digital API Support Wiki
https://github.com/choosedigital/api-spec/wiki


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
