# AudioBook

## Service Check

This is a simple sanity check to make sure your header authentication is working properly. Can also be used to check that the service is up.

### URL
> http://[apidomain]/audiobook if Using tenantId http://[apidomain]/audiobook?tenantId=myTenantId

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

> GET http://[apidomain]/audiobook
```js
[
	"ping":"pong"
]
```

## List All Subjects

This is a simple way to get all the valid audiobook subjects

### URL
>http://[apidomain]/audiobook/subjects

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

> GET http://[apidomain]/audiobook/subjects
```js
{
"subjects":["Fiction","Nonfiction","Mystery","Classic Literature","Literature","Juvenile Fiction","Religion & Spirituality","Self-Improvement","Biography & Autobiography","Business","History","Humor (Fiction)","Drama","Science Fiction","Historical Fiction","Romance","Fantasy","Suspense","Thriller","Young Adult Fiction","Short Stories","Western","Humor (Nonfiction)","Science Fiction & Fantasy","Music","Foreign Language Study","Politics","New Age","Juvenile Literature","Juvenile Nonfiction","Health & Fitness","Poetry","Family & Relationships","Erotic Literature","Horror","Travel","Science","Philosophy","Finance","Children","Sports & Recreations","Current Events","Military","Education","Psychology","Careers","Folklore","Non-English Fiction","Entertainment","Sociology","Language Arts","Reference","Grammar & Language Usage","Management","Performing Arts","Medical","True Crime","Nature","Young Adult Literature","Non-English Nonfiction","Art","Literary Criticism","Study Aids & Workbooks","Law","Mythology","Essays","Young Adult Nonfiction","Geography","Pets","Cooking & Food","Women's Studies","Technology","Ethics","Travel Literature","Computer Technology","Literary Anthologies","Journalism","Multi-Cultural","Foreign Language Study - Spanish","Scholarly","Games","Mathematics","Psychiatry & Psychology","Professional","Recovery","Crime","Human Rights","Outdoor Recreation","Physics","Psychiatry","Comic and Graphic Books","Gay/Lesbian","Home Design & Décor","Judaica","Media Studies","Analysis","Antiquarian","Architecture","Crafts","Feminist"]
}
```

## List All Languages

This is a simple way to get all the valid audiobook languages

### URL
>http://[apidomain]/audiobook/languages

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

> GET http://[apidomain]/audiobook/languages
```js
{
"languages":["English","Spanish","French","Chinese","Swedish","German","Afrikaans","Russian","Indonesian","Italian","Portuguese","Irish","Dutch","Arabic","Catalan","Ukrainian","Polish","Japanese","Korean","Hungarian","Serbian","Albanian","Armenian","Romanian","Slovak","Czech","Swahili","Icelandic","Esperanto","Finnish","Hebrew","Serbo-Croatian","Latin","Norwegian","Faeroese","Lithuanian","Danish","Greek","Nauru","Rhaeto-Romance","Welsh","Zulu"]
}
```


## List

### URL
> http://[apidomain]/audiobook/list/[listId]/[country]

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
		<td>valid values: thisweek, top, popular (agency books only), and the subjects listed below</td>
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
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

The following subjects have corresponding curated audiobook lists:
  - Biography & Autobiography (subject=Biography%20%26%20Autobiography)
  - Fiction (subject=Fiction)
  - Nonfiction (subject=Nonfiction)
  - Science Fiction (subject=Science%20Fiction)

### Example

> GET http://[apidomain]/audiobook/list/top/us
```js
{
    "displayTitle": "Top Audiobooks",
    "books": [{
        "cdin": "1bdba06733999983f1cdfbb95219247abd072400",
        "available": "true",
        "formatType": "OverDrive MP3 Audiobook",
        "subjects": ["Science Fiction", "Thriller", "Young Adult Fiction"],
        "title": "Mockingjay",
        "sanitizedTitle": "Mockingjay",
        "creators": ["Suzanne Collins", "Carolyn McCormick"],
        "thumbnailImage": "http://images.contentreserve.com/ImageType-200/1837-1/{19358B67-49CF-47BC-960F-2807A164053D}Img200.jpg",
        "coverImage": "http://images.contentreserve.com/ImageType-100/1837-1/{19358B67-49CF-47BC-960F-2807A164053D}Img100.jpg",
        "availableDate": "2010-08-24T00:00:00Z",
        "retailPrice": "123"
},
...
```



## Download

Returns a [bookpurchase](/objects.md#bookpurchase) object

### URL
> http://[apidomain]/audiobook/download/[cdin]/[hashedCustomerId]/[country]

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

> GET http://[apidomain]/audiobook/download/[cdin]/[hashedCustomerId]/[country]

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

> GET http://[apidomain]/audiobook/search?title=dogs&country=us&sort=title:a




## Detail

### URL
> http://[apidomain]/audiobook/detail/[cdin]

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
		<td<a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>


### Example

> Get http://[apidomain]/audiobook/detail/b4d6c46e3d2cdba3986778d757ba197bcc7c5143/us

RESPONSE:

```js
{
    "cdin": "b4d6c46e3d2cdba3986778d757ba197bcc7c5143",
    "creators": ["Douglas Adams"],
    "formatType": "OverDrive MP3 Audiobook",
    "isbn": "9781607473077",
    "title": "The Hitchhiker's Guide to the Galaxy",
    "sanitizedTitle": "The Hitchhiker's Guide to the Galaxy",
    "coverImage": "http://d3hg0uhxi21mja.cloudfront.net/ImageType-100/1314-1/{6334C547-0672-4082-84F3-9484CDBCE57D}Img100.jpg",
    "noSchemeCoverImage": "//d3hg0uhxi21mja.cloudfront.net/ImageType-100/1314-1/{6334C547-0672-4082-84F3-9484CDBCE57D}Img100.jpg",
    "thumbnailImage": "http://d3hg0uhxi21mja.cloudfront.net/ImageType-200/1314-1/{6334C547-0672-4082-84F3-9484CDBCE57D}Img200.jpg",
    "noSchemeThumbnailImage": "//d3hg0uhxi21mja.cloudfront.net/ImageType-200/1314-1/{6334C547-0672-4082-84F3-9484CDBCE57D}Img200.jpg",
    "shortDescription": "<p>On a hot night in August 1995 Douglas Adams gave a barnstorming performance to an invited audience at the Almeida Theatre in London. This compact disc is a record of that remarkable event. Douglas gives dramatic solo performances of episodes and passages from The Hitchhiker's Guide to the Galaxy, The Restaurant at the End of the Universe, and Life, the Universe and Everything. Including: How to Fly! Arthur and the Irrational Sofa and much, much...more.",
    "fullDescription": "<p>On a hot night in August 1995 Douglas Adams gave a barnstorming performance to an invited audience at the Almeida Theatre in London. This compact disc is a record of that remarkable event. Douglas gives dramatic solo performances of episodes and passages from The Hitchhiker's Guide to the Galaxy, The Restaurant at the End of the Universe, and Life, the Universe and Everything. Including: How to Fly! Arthur and the Irrational Sofa and much, much...more.",
    "publisher": "Phoenix Books, Inc.",
    "imprint": "",
    "languages": ["English"],
    "series": "The Hitchhiker's Guide to the Galaxy",
    "edition": "Unabridged",
    "subjects": ["Fiction", "Science Fiction", "Humor (Fiction)"],
    "fileSize": "34 MB",
    "retailPrice": "1295",
    "availableDate": "2010-01-25T00:00:00Z",
    "subtitle": "Douglas Adams Live in Concert",
    "digitalRights": ["Transfer to Device: Permitted; Unlimited Devices", "Public Performance: Not Permitted", "Burn to Disk: Permitted"],
    "contentDuration": "01:14:16",
    "numberOfParts": "1",
    "digitalExcerpt": "http://excerpts.contentreserve.com/FormatType-425/1314-1/308605-TheHitchhikersGuideToTheGalaxy.mp3",
    "available": "true"
}
```


## Curated Charts

### URL
> http://[apidomain]/audiobook/curatedcharts/[country]

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

> GET http://[apidomain]/audiobook/curatedcharts/us




## Purchase

Returns a [BookPurchase](/objects.md#bookpurchase) object

A required [authentication parameter](/Authentication.md#authentication-parameter) is calculated with <code>cdin + customerId + customerCountryCode + priceSold</code>

### URL
> http://[apidomain]/audiobook/purchase

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
		<td>Optional *</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>customerStreetAddress2</code></td>
		<td>Optional *</td>
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
		<td>Optional *</td>
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

> POST http://[apidomain]/audiobook/purchase




## Update

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL
> http://[apidomain]/audiobook/update

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

> GET http://[apidomain]/audiobook/update
```js
{
	"orderId":"WL3-3359944-6701838",
	"transactionId":"123456"
}
```


## Cancel

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL
> http://[apidomain]/audiobook/cancel

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

> GET http://[apidomain]/audiobook/cancel
```js
{
	"orderId":"WL3-3359944-6701838",
	"cancelOrderId":"WL3-2873051-1679841",
	"cancelTransactionDateUTC":"2012-08-15T00:00:00Z",
	"priceSold":"135",
	"cancelTransactionId":""
}
```

#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital.

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
