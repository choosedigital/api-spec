# Television

## Service Check

### URL 
> http://[apidomain]/tv

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

> GET http://[apidomain]/tv
```js
{
	"ping":"pong"
}
```

## List

Returns a [TelevisionChart](/objects.md#televisionchart) object

Choose Digital maintains a list of "New and Noteworthy" television seasons.

### URL 
> http://[apidomain]/tv/list/top/[country]

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
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>genre</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>valid values: 1 to 100</td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>valid values: season, episode</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/tv/list/top/us
```js
{
    "displayTitle": "New and Noteworthy TV",
    "listId": "top",
    "genre": "all",
    "releaseType": "SEASON",
    "releases": [{
        "cdin": "abcdefghij1234567890",
        "releaseType": "SEASON",
        "title": "Homeland: The Complete First Season",
        "synopsis": "Months after the dramatic events that prompted Carrie to undergo Electroconvulsive Therapy, the former CIA case officer has found a modicum of peace in her family\u2019s suburban embrace. But the strides she\u2019s made towards mental health are threatened when an asset from her former life comes in from the cold. Meanwhile, freshman Congressman Nick Brody discovers that Abu Nazir may not be content with his nonviolent approach to affecting change in American foreign policy.",
        "seasonNumber": 1,
        "seasonYear": 1,
        "seriesName": "Homeland",
        "copyrightInfo": "",
        "actors": ["Diego Klattenhoff", "Morena Baccarin", "Mandy Patinkin", "Claire Danes", "David Harewood", "Damian Lewis"],
        "genres": ["Drama"],
        "rating": "",
        "retailPrice": 2199,
        "format": "SD",
        "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/s/1WAH79.jpg",
        "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/m/1WAH79.jpg",
        "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/l/1WAH79.jpg",
        "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/s/1WAH79.jpg",
        "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/m/1WAH79.jpg",
        "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/l/1WAH79.jpg",
        "available": "",
        "salesStartDate": "2013-01-01T05:00:00Z"
}
```

## Player Info

Returns a [TelevisionPlayerInfo](/objects.md#televisionplayerinfo) object

### URL 
> http://[apidomain]/tv/playerinfo/[cdin]/[hashedCustomerId]

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
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/tv/playerinfo/[cdin]/[hashedCustomerId]
```js
{
	todo...
}
```

## Search

Returns a [TelevisionSearchResult](/objects.md#televisionsearchresult) object

### URL 
> http://[apidomain]/tv/search

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
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>valid values: 1 to 100</td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>valid values: 0 to 2000000</td>
	</tr>
	<tr>
		<td><code>sort</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>definition</code></td>
		<td>Optional</td>
		<td>valid values: hd, sd</td>
		<td></td>
	</tr>
	<tr>
		<td><code>broadcastNetwork</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genre</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>valid values: season, episode</td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td><a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>postalCode</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>birthDate</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>ipaddress</code></td>
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
</table>

### Example

> GET http://[apidomain]/tv/search?term=super&country=us
```js
{
	todo...
}
```

## Detail

Returns a [TelevisionDetail](/objects.md#televisiondetail) object

### URL 
> http://[apidomain]/tv/detail/[cdin]/[country]?tenantId=[tenantId]

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

> GET http://[apidomain]/tv/detail/c74e88c70d239004f9b1d544f02e85713efc2453/us
```js
{
"displayEpisode": {
    "cdin": "df95bf70f8041964ef62c77f6a2b41afa6980629",
    "releaseType": "EPISODE",
    "title": "Seed",
    "episodeNumber": 1,
    "synopsis": "After several months on the road, the group finds the prison, fights off walkers to get inside, and tries to make the prison into a safe fortress. Lori, thinking Rick hates her and fearful for her unborn child, confides in Hershel. Elsewhere, Michonne tends to a feverish Andrea as they seek safer refuge. Rick's group gets separated inside the prison. Hershel searches for Glenn and Maggie and gets bitten on the lower leg by a walker. In the prison cafeteria, Rick amputates the leg at the knee. Five prison survivors, trapped in the cafeteria and surviving on pantry food, hear the commotion and come to their location.",
    "copyrightInfo": "",
    "runningTime": "43 minutes",
    "retailPrice": 199,
    "format": "SD",
    "available": "true",
    "salesStartDate": "2012-10-15T04:00:00Z",
    "originalBroadcastDate": "2012-10-14T00:00:00Z",
    "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg",
    "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg"
},
"season": {
    "cdin": "c74e88c70d239004f9b1d544f02e85713efc2453",
    "releaseType": "SEASON",
    "title": "Walking Dead: The Complete Third Season",
    "synopsis": "AMC's \"The Walking Dead,\" the most watched drama in basic cable history, explores a desolate world in which Rick and his band of survivors must fight the dead to survive.",
    "copyrightInfo": "",
    "actors": ["Sarah Wayne Callies", "Steven Yeun", "Andrew Lincoln", "Chandler Riggs", "Laurie Holden"],
    "genres": ["Science Fiction", "Action", "Horror", "Drama"],
    "rating": "",
    "retailPrice": 2899,
    "format": "SD",
    "seasonNumber": 3,
    "seasonYear": 2012,
    "seriesName": "Walking Dead",
    "available": true,
    "salesStartDate": "2012-10-15T04:00:00Z",
    "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg",
    "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg"
},
"episodes": [{
    "cdin": "df95bf70f8041964ef62c77f6a2b41afa6980629",
    "title": "Seed",
    "episodeNumber": 1,
    "releaseType": "EPISODE",
    "originalBroadcastDate": "2012-10-14T00:00:00Z",
    "synopsis": "After several months on the road, the group finds the prison, fights off walkers to get inside, and tries to make the prison into a safe fortress. Lori, thinking Rick hates her and fearful for her unborn child, confides in Hershel. Elsewhere, Michonne tends to a feverish Andrea as they seek safer refuge. Rick's group gets separated inside the prison. Hershel searches for Glenn and Maggie and gets bitten on the lower leg by a walker. In the prison cafeteria, Rick amputates the leg at the knee. Five prison survivors, trapped in the cafeteria and surviving on pantry food, hear the commotion and come to their location.",
    "copyrightInfo": "",
    "runningTime": "43 minutes",
    "retailPrice": 199,
    "format": "SD",
    "available": "true",
    "salesStartDate": "2012-10-15T04:00:00Z",
    "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg",
    "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/s/WALKINGDEAD_EP_03_01sea.jpg",
    "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/m/WALKINGDEAD_EP_03_01sea.jpg",
    "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/t/l/WALKINGDEAD_EP_03_01sea.jpg"
}, {
	"cdin": "94a961847d637375823674f269a5798c68f920ac",
	"title": "Sick",
	"episodeNumber": 2,
    ...
}
```

## Purchase

Returns a [TelevisionPurchase](/objects.md#televisionpurchase) 

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>cdin + customerId + customerCountryCode + priceSold</code>

### URL 
> http://[apidomain]/tv/purchase

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
		<td><code>customerPostalCode</code></td>
		<td>Required</td>
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

> POST http://[apidomain]/tv/purchase
```js
{
	todo...
}
```

## Genres

Returns all genres for currently available television seasons.

### URL 
> http://[apidomain]/tv/genres

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

> GET http://[apidomain]/tv/genres
```js
{
	"genres":["Action","Adventure","Animation","Comedy","Crime","Documentary","Drama","Family","Fantasy Adventure","Foreign","Horror","Independent","Music","Musical","Mystery","Romance","Romantic Comedy","Science Fiction","Sport","Suspense","Thriller","War","Western"]
}
```


## Update

Returns an [UpdateOrder](/objects.md#updateorder) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + customerId</code>

### URL 
> http://[apidomain]/tv/update

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
		<td><code>adminId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> PUT http://[apidomain]/tv/update
```js
{
	"orderId":"ABC1234567890",
	"transactionId":"123456"
}
```

## Cancel

Returns an [CancelOrder](/objects.md#cancelorder) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + customerId</code>

### URL 
> http://[apidomain]/tv/cancel

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
		<td><code>adminId</code></td>
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

> PUT http://[apidomain]/tv/cancel
```js
{
	todo...
}
```



#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
