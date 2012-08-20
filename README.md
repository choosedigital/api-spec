# Choose Digital API Spec

Choose Digital’s capabilities are unique to the marketplace with patent pending approaches to Digital Media delivery, security, system and solution interoperability.

The Choose Digital API will allow for quick and effective implementation of an All-Digital Market Place. It provides full interaction with the Choose Digital catalog from browsing and search, to complete product data, to transactions and order history. This capability can be put in place with relatively basic API calls to Choose Digital servers. 

Any reference in this document to "points" is interchangeable with "credits", "miles", etc.

Follow these guidelines to ensure that you're following our best practices for application development so that you can best grow and scale along with the API and avoid future problems.
	
1. Always parse response data without assuming the number or order of elements in the response. For example, if a new field were to be added to the object your code should gracefully handle a change in the total number of elements, or a change where the element you are interested is now 5th instead of 4th.
1. Always use hostnames in your code and let the DNS servers resolve the IP - don't pre-resolve the name in order to try and save time at runtime, as the IP will not always be the same.

## Table of Content

* [Object definitions](/Choose Digital/api-spec/blob/master/objects.md)
* [Resource definitions](/Choose Digital/api-spec/blob/master/resources/README.md)
* [Signing and Authenticating REST Requests](/Choose Digital/api-spec/blob/master/Authentication.md)

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

### General info

#### UTF-8 encoding 

The API supports and expects UTF-8 encoding.

#### Date formats

Dates are in short format: 
```
2012-02-14T14:17:59.440-05:00
```