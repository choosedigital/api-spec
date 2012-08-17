# Movie

## Service Check

### URL 
> http://[apidomain]/movie

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

> GET http://[apidomain]/movie
```js
{
	"ping":"pong"
}
```

## List

Returns a [MovieChart](/choosedigital/api-spec/blob/master/objects.md#moviechart) object

### URL 
> http://[apidomain]/movie/list/[listId]/[country]

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
		<td><code>rights</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>valid values: buy, rent</td>
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
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://[apidomain]/movie/list/top/us
```js
{
	"displayTitle":"New and Noteworthy",
	"movies":[
		{
			"cdin":"b98801fa5b6372b088dfbd922a7c7544a270d184",
			"title":"Project X",
			"sanitizedTitle":"Project X",
			"actors":["Thomas Mann","Jonathan Daniel Brown","Oliver Cooper","Dax Flame","Kirby Bliss Blanton","Alexis Knapp","Miles Teller"],
			"genres":["Comedy"],
			"rating":"R",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000068608.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000068608.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000068608.jpg","originalReleaseYear":"2012","salesStartDate":"2012-06-19T00:00:00Z","theatricalReleaseDate":"2012-03-02T00:00:00Z",
			"available":""
		},{
			"cdin":"0e0022de5d5ff8cb7a9e4496227076d584a662ea",
			"title":"Joyful Noise",
			"sanitizedTitle":"Joyful Noise",
			"actors":["Queen Latifah, Dolly Parton, Keke Palmer, Jeremy Jordan"],
			"genres":["Comedy","Romance","Musical"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000071848.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000071848.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000071848.jpg","originalReleaseYear":"2011","salesStartDate":"2012-05-01T00:00:00Z","theatricalReleaseDate":"2011-07-29T00:00:00Z",
			"available":""
		},{
			"cdin":"6663d278ba376da116783a1f6c954ddf0ac046fb",
			"title":"Sherlock Holmes: A Game of Shadows",
			"sanitizedTitle":"Sherlock Holmes: A Game of Shadows",
			"actors":["Robert Downey Jr.","Jude Law","Noomi Rapace","Jared Harris","Eddie Marsan","Rachel McAdams"],
			"genres":["Action","Adventure","Suspense","Thriller","Mystery","Crime"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000068672.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000068672.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000068672.jpg","originalReleaseYear":"2011","salesStartDate":"2012-06-12T00:00:00Z","theatricalReleaseDate":"2011-12-16T00:00:00Z",
			"available":""
		},{
			"cdin":"de0f830518421a3ca6a6712b0619b89e863819f8",
			"title":"Wrath of the Titans",
			"sanitizedTitle":"Wrath of the Titans",
			"actors":["Sam Worthington","Rosamund Pike","Bill Nighy","Edgar Ramirez","Toby Kebbell","Danny Huston","Ralph Fiennes","Liam Neeson"],
			"genres":["Action","Fantasy Adventure"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000071579.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000071579.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000071579.jpg","originalReleaseYear":"2012","salesStartDate":"2012-06-26T00:00:00Z","theatricalReleaseDate":"2012-03-30T00:00:00Z",
			"available":""
		},{
			"cdin":"f6cc0edf4b6ed58e0ac2511e1953250bfd33945a",
			"title":"Drunkboat",
			"sanitizedTitle":"Drunkboat",
			"actors":["John Malkovich","John Goodman","Dana Delaney"],
			"genres":["Drama","Independent"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000077166.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000077166.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000077166.jpg","originalReleaseYear":"2012","salesStartDate":"2012-07-17T00:00:00Z","theatricalReleaseDate":"2012-07-17T00:00:00Z",
			"available":""
		},{
			"cdin":"f0775e4ea16fc890ad36a72654feed8e38f3af52",
			"title":"Journey 2: The Mysterious Island",
			"sanitizedTitle":"Journey 2: The Mysterious Island",
			"actors":["Dwayne Johnson","Michael Caine","Josh Hutcherson","Vanessa Hudgens","Luis Guzm‡n","Kristin Davis"],
			"genres":["Family","Action"],
			"rating":"PG",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000064147.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000064147.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000064147.jpg","originalReleaseYear":"2011","salesStartDate":"2012-06-05T00:00:00Z","theatricalReleaseDate":"2011-07-29T00:00:00Z",
			"available":""
		},{
			"cdin":"cad61e10c0366f3c1dd26abfc89c4d1eeb59a381",
			"title":"New Year's Eve",
			"sanitizedTitle":"New Year's Eve",
			"actors":["Halle Berry","Jessica Biel","Jon Bon Jovi","Abigail Breslin","Chris \"Ludacris\" Bridges","Robert De Niro","Josh Duhamel","Zac Efron","Hector Elizondo","Katherine Heigl","Ashton Kutche","Seth Meyers","Lea Michele","Sarah Jessica Parker","Michelle Pfeiffer","Til Schweiger","Hilary Swank","Sofia Vergara"],
			"genres":["Romance","Drama","Comedy"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000070256.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000070256.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000070256.jpg","originalReleaseYear":"2011","salesStartDate":"2012-05-01T00:00:00Z","theatricalReleaseDate":"2011-12-09T00:00:00Z",
			"available":""
		},{
			"cdin":"af3bbc862afc4c313984b660f9225a37f40a9aee",
			"title":"Philly Kid",
			"sanitizedTitle":"Philly Kid",
			"actors":["Wes Chatham","Devon Sawa","Neal Mcdonough","Sarah Butler","Chris Browning"],
			"genres":["Action","Drama"],
			"rating":"R",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000065668.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000065668.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000065668.jpg","originalReleaseYear":"2012","salesStartDate":"2012-05-11T00:00:00Z","theatricalReleaseDate":"2012-05-11T00:00:00Z",
			"available":""
		},{
			"cdin":"697799e42b037cae3f433955d25a371e4f3a4fff",
			"title":"First Love",
			"sanitizedTitle":"First Love",
			"actors":[],
			"genres":["Documentary","Independent","Sport"],
			"rating":"NR",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000076743.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000076743.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000076743.jpg","originalReleaseYear":"2012","salesStartDate":"2012-06-12T00:00:00Z","theatricalReleaseDate":"2012-06-12T00:00:00Z",
			"available":""
		},{
			"cdin":"d7cf53197be88d7d7fd73bc4e2a6465b4afec7bd",
			"title":"Pray For Japan",
			"sanitizedTitle":"Pray For Japan",
			"actors":[],
			"genres":["Documentary","Foreign","Independent"],
			"rating":"TV-PG",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000077395.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000077395.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000077395.jpg","originalReleaseYear":"2012","salesStartDate":"2012-07-24T00:00:00Z","theatricalReleaseDate":"2012-07-24T00:00:00Z",
			"available":""
		}
	]
}
```

## Player Info

Returns a [PlayerInfo](/choosedigital/api-spec/blob/master/objects.md#playerinfo) object

### URL 
> http://[apidomain]/movie/playerinfo/[cdin]/[hashedCustomerId]

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

> GET http://[apidomain]/movie
```js
```

## Search

Returns a [MovieSearchResult](/choosedigital/api-spec/blob/master/objects.md#moviesearchresult) object

### URL 
> http://[apidomain]/movie/search

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
		<td>Optional</td>
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
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
	<tr>
		<td><code>sort</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> GET http://[apidomain]/movie/search
```js
```

## Detail

Returns a [Movie](/choosedigital/api-spec/blob/master/objects.md#movie) object

### URL 
> http://[apidomain]/movie/detail/[cdin]

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
		<td>Optional</td>
		<td>string</td>
		<td>valid values: us, ca. Default value: us</td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
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

> GET http://[apidomain]/movie/detail
```js
```

## Purchase

Returns a [MovieRental](/choosedigital/api-spec/blob/master/objects.md#movierental) object or a [MoviePurchase](/choosedigital/api-spec/blob/master/objects.md#moviepurchase) 

The [authentication parameter](/choosedigital/api-spec/blob/master/resources/General.md#authentication-parameter) is calculated by <code>cdin + userId + countryCode + price</code>

### URL 
> http://[apidomain]/movie/purchase

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

> POST http://[apidomain]/movie/purchase
```js
```

## Genres

### URL 
> http://[apidomain]/movie/genres

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

> GET http://[apidomain]/movie/genres
```js
{
	"genres":["Action","Adventure","Animation","Comedy","Crime","Documentary","Drama","Family","Fantasy Adventure","Foreign","Horror","Independent","Music","Musical","Mystery","Romance","Romantic Comedy","Science Fiction","Sport","Suspense","Thriller","War","Western"]
}
```

## Curated Charts

### URL 
> http://[apidomain]/movie/curatedcharts/[country]

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

> GET http://[apidomain]/movie/curatedcharts/us
```js
```

## Update

Returns an [UpdateOrder](/choosedigital/api-spec/blob/master/objects.md#updateorder) object

The [authentication parameter](/choosedigital/api-spec/blob/master/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL 
> http://[apidomain]/movie/update

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

> PUT http://[apidomain]/movie/update
```js
{
	"orderId":"WL3-3359944-6701838",
	"transactionId":"123456"
}
```

## Cancel

Returns an [CancelOrder](/choosedigital/api-spec/blob/master/objects.md#cancelorder) object

The [authentication parameter](/choosedigital/api-spec/blob/master/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL 
> http://[apidomain]/movie/cancel

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

> PUT http://[apidomain]/movie/cancel
```js
{
	"orderId":"WL3-3359944-6701838",
	"cancelOrderId":"WL3-2873051-1679841",
	"cancelTransactionDateUTC":"2012-08-15T00:00:00Z",
	"priceSold":"135",
	"cancelTransactionId":""
}
```