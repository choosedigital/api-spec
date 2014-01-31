# EBook

## Service Check

This is a simple sanity check to make sure your header authentication is working properly. Can also be used to check that the service is up.

### URL 
> http://[apidomain]/ebook if Using tenantId http://[apidomain]/ebook?tenantId=myTenantId

### Parameters

<table>
    <tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook
```js
{
	"ping":"pong"
}
```
## List All Subjects

This is a simple way to get all the valid ebook subjects

### URL
>http://[apidomain]/ebook/subjects

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/subjects
```js
{
"subjects":["Nonfiction","Fiction","Romance","Business","History","Science","Religion & Spirituality","Literature","Classic Literature","Education","Sociology","Technology","Politics","Medical","Juvenile Nonfiction","Computer Technology","Biography & Autobiography","Juvenile Fiction","Historical Fiction","Finance","Reference","Philosophy","Erotic Literature","Mystery","Psychology","Health & Fitness","Self-Improvement","Literary Criticism","Fantasy","Suspense","Sports & Recreations","Engineering","Study Aids & Workbooks","Language Arts","Law","Mathematics","Cooking & Food","Family & Relationships","Travel","Careers","Nature","Young Adult Fiction","New Age","Chemistry","Short Stories","Military","Thriller","Performing Arts","Science Fiction","Management","Crafts","Art","Science Fiction & Fantasy","Music","Poetry","Drama","Young Adult Nonfiction","Horror","Children","Scholarly","Humor (Nonfiction)","Entertainment","Pets","Humor (Fiction)","Comic and Graphic Books","Media Studies","Juvenile Literature","Research","Architecture","Western","Photography","Essays","Geography","Ethics","Transportation","Foreign Language Study","Games","True Crime","Professional","Current Events","Report","Physics","Home Design & Décor","Antiques","Gardening","Women's Studies","Folklore","Multi-Cultural","Psychiatry & Psychology","Grammar & Language Usage","Crime","Non-English Nonfiction","Non-English Fiction","Mythology","Text Book","Literary Anthologies","Psychiatry","Outdoor Recreation","Gender Studies","Young Adult Literature"]
}
```

## List All Languages

This is a simple way to get all the valid ebook languages

### URL
>http://[apidomain]/ebook/languages

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/languages
```js
{
"languages":["English","Spanish","French","Chinese","Swedish","German","Afrikaans","Russian","Indonesian","Italian","Portuguese","Irish","Dutch","Arabic","Catalan","Ukrainian","Polish","Japanese","Korean","Hungarian","Serbian","Albanian","Armenian","Romanian","Slovak","Czech","Swahili","Icelandic","Esperanto","Finnish","Hebrew","Serbo-Croatian","Latin","Norwegian","Faeroese","Lithuanian","Danish","Greek","Nauru","Rhaeto-Romance","Welsh","Zulu"]
}
```

## List

### URL 
> http://[apidomain]/ebook/list/[listId]/[country]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>listId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>subject</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>valid values: 1 to 100. Default is 10.</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/list/top/us
```js
{
	"displayTitle":"Top eBooks (all)",
	"books":[
		{
			"cdin":"e508cae4104e650e66102c2e8fd1992b1b885f95",
			"available":"true",
			"formatType":"Adobe EPUB eBook",
			"subjects":["Cooking & Food","Nonfiction"],
			"title":"The Intolerant Gourmet",
			"sanitizedTitle":"The Intolerant Gourmet",
			"creators":["Barbara Kafka"],
			"thumbnailImage":"http://images.contentreserve.com/ImageType-200/1953-1/{1E6949DF-08EC-466D-91DB-3A0650DA7475}Img200.jpg",
			"coverImage":"http://images.contentreserve.com/ImageType-100/1953-1/{1E6949DF-08EC-466D-91DB-3A0650DA7475}Img100.jpg",
			"availableDate":"2011-12-20T00:00:00Z",
			"retailPrice":"123"
		},{
			"cdin":"5857e518412e4c426d7b091ce9f517f411ff44bc",
			"available":"true",
			"formatType":"Adobe PDF eBook",
			"subjects":["Science","Nonfiction"],
			"title":"The Illustrated Theory of Everything",
			"sanitizedTitle":"The Illustrated Theory of Everything",
			"creators":["Stephen W. Hawking"],
			"thumbnailImage":"http://images.contentreserve.com/ImageType-200/1314-1/{5B577FDB-AE6B-4E26-A108-AE1C18F6E807}Img200.jpg",
			"coverImage":"http://images.contentreserve.com/ImageType-100/1314-1/{5B577FDB-AE6B-4E26-A108-AE1C18F6E807}Img100.jpg",
			"availableDate":"2011-12-20T00:00:00Z",
			"retailPrice":"123"
		},
		...
}
```


## Download

Returns a [bookpurchase](/objects.md#bookpurchase) object

### URL 
> http://[apidomain]/ebook/download/[cdin]/[hashedCustomerId]/[country]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Required</td>
		<td>string</td>
		<td><a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/download/[cdin]/[hashedCustomerId]/[country]

Remember: this response will include a redemption link which expires in minutes and must not be sent via email. [Redemption Link handling](/README.md#redemption-links-download-or-streaming)



## Search

### URL 
> http://[apidomain]/audiobook/search

### Parameters

<table>
    <tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>term</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>searches all fields</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>valid values: 1 to 100. Default is 10.</td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>creator</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>subject</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>keyword</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>isbn</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>language</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
		<td><code>sort</code></td>
		<td>Optional</td>
		<td>string</td>
    	<td>title, releasedate, price (append :a or :d for ascending or descending)</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/search?title=Lincoln&country=us&sort=title:a



## Detail

### URL 
> http://[apidomain]/ebook/detail/[cdin]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td><a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>address</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>[Many eBooks require a validated physical address]()</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/detail/[cdin]



## Curated Charts

### URL 
> http://[apidomain]/ebook/curatedcharts/[country]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/curatedcharts/us



## Purchase

Returns a [BookPurchase](/objects.md#bookpurchase) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>cdin + customerId + customerCountryCode + priceSold</code>

### URL 
> http://[apidomain]/ebook/purchase

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>Required</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>taxAmount</code></td>
		<td>Required</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>externalMemberId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerEmail</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerFirstName</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerLastName</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerStreetAddress1</code></td>
		<td>Optional (Required for [agency eBooks](#agency-ebooks))</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerStreetAddress2</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerCity</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerRegionCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerPostalCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerPlus4</code></td>
		<td>Optional  (Required for [agency eBooks](#agency-ebooks))</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerCountryCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>errorUrl</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>promoCode</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
	<tr>
		<td><code>transactionId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>segment</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>tier</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> POST http://[apidomain]/ebook/purchase




## Update

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL 
> http://[apidomain]/ebook/update

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
	<tr>
		<td><code>transactionId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/update
```js
{
	"orderId":"WL3-3359944-6701838",
	"transactionId":"123456"
}
```


## Cancel

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL 
> http://[apidomain]/ebook/cancel

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
	<tr>
		<td><code>cancelTransactionId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> GET http://[apidomain]/ebook/cancel
```js
{
	"orderId":"WL3-3359944-6701838",
	"cancelOrderId":"WL3-2873051-1679841",
	"cancelTransactionDateUTC":"2012-08-15T00:00:00Z",
	"priceSold":"135",
	"cancelTransactionId":""
}
```

## Agency eBooks

A large portion of the eBooks available are under what’s referred to as the “agency” model. The price for agency books may vary based on the customer's physical location, therefore a validated address is required to purchase. Use the [address validation](/resources/Address.md#validate) service to get a valid address prior to making a purchase call.  


<br><br>
<hr>

#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
