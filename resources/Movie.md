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

Returns a [MovieChart](/objects.md#moviechart) object

Choose Digital maintains a list of "New and Noteworthy" movie titles.

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
		},
		...
	]
}
```

## Player Info

Returns a [PlayerInfo](/objects.md#playerinfo) object

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

> GET http://[apidomain]/movie
```js
```

## Search

Returns a [MovieSearchResult](/objects.md#moviesearchresult) object

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
		<td><code>genre</code></td>
		<td>Optional</td>
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

> GET http://[apidomain]/movie/search?term=super
```js
{
	"numFound":2,
	"start":0,
	"searchTerm":"super",
	"genres":[{"name":"Action","count":2},{"name":"Animation","count":1}],
	"movies":[
		{
			"cdin":"4124e7ac0b2d0ef17a5ce5ffbaf41b1897ec9471",
			"title":"Superman Returns",
			"sanitizedTitle":"Superman Returns",
			"actors":["Brandon Routh","Kevin Spacey","Kate Bosworth","Parker Posey"],
			"genres":["Action"],
			"rating":"PG-13",
			"httpTrailerUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_SUPERMAN_RETURNS_16x9_STEREO_TRAILER_E0082749_3116465.mp4",
			"rtmpTrailerUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_SUPERMAN_RETURNS_16x9_STEREO_TRAILER_E0082749_3116465.mp4",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000008301.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000008301.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000008301.jpg",
			"originalReleaseYear":"2006",
			"director":"Bryan Singer",
			"language":"English",
			"available":"true"
		},{
			"cdin":"5db77177c7de135f2009f34050bcef03d459e02c",
			"title":"Superman vs. The Elite",
			"sanitizedTitle":"Superman vs. The Elite",
			"actors":[],
			"genres":["Action","Animation"],
			"rating":"PG-13",
			"httpTrailerUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_SUPERMAN_VS_THE_ELITE_16x9_STEREO_TRAILER_E0282070_3352108.mp4",
			"rtmpTrailerUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_SUPERMAN_VS_THE_ELITE_16x9_STEREO_TRAILER_E0282070_3352108.mp4",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000066434.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000066434.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000066434.jpg",
			"originalReleaseYear":"2012",
			"director":"Michael Chang",
			"language":"English",
			"available":"true"
		}
	]
}
```

## Detail

Returns a [Movie](/objects.md#movie) object

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

> GET http://[apidomain]/movie/detail/4124e7ac0b2d0ef17a5ce5ffbaf41b1897ec9471
```js
{
	"watchNow":"false",
	"cdin":"4124e7ac0b2d0ef17a5ce5ffbaf41b1897ec9471",
	"title":"Superman Returns",
	"sanitizedTitle":"Superman Returns",
	"actors":["Brandon Routh","Kevin Spacey","Kate Bosworth","Parker Posey"],
	"copyrightInfo":"SUPERMAN and all related characters and elements are trademarks of and (c) DC Comics. (c) 2006 Warner Bros. Entertainment Inc. All r ights reserved.",
	"genres":["Action"],
	"rating":"PG-13",
	"director":"Bryan Singer",
	"language":"English",
	"runningTime":"2 hours 34 minutes",
	"shortSynopsis":"Following a mysterious absence of several years, the Man of Steel comes back to Earth, a soaring new chapter in the saga of one of the world's most beloved superheroes.",
	"synopsis":"He's back. A hero for our millennium. And not a moment too soon, because during the five years (much longer in movie-fan years!) Superman sought his home planet, things changed on his adopted planet. Nations moved on without him. Lois Lane now has a son, a fiance and a Pulitzer for \"Why the World Doesn't Need Superman.\" And Lex Luthor has a plan that will destroy millions - no, billions - of lives.  Filmmaker Bryan Singer (X-Men) gives the world the Superman it needs, honoring the legend everyone loves while taking it in a powerful new direction. Brandon Routh proves a perfect choice to wear the hero's cape, leading a top cast that includes Kate Bosworth as Lois and Kevin Spacey as Lex. And the thrills - from a sky-grapple with a tumbling jumbo jet to a continent-convulsing showdown - redefine Wow. \"I'm always around,\" Superman tells Lois. You'll be glad he is.",
	"originalReleaseYear":"2006","theatricalReleaseDate":"2006-06-28T00:00:00Z",
	"httpTrailerUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_SUPERMAN_RETURNS_16x9_STEREO_TRAILER_E0082749_3116465.mp4",
	"rtmpTrailerUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_SUPERMAN_RETURNS_16x9_STEREO_TRAILER_E0082749_3116465.mp4",
	"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000008301.jpg",
	"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000008301.jpg",
	"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000008301.jpg",
	"available":"false",
	"offerings":[
		{
			"cdin":"347c3830cc36ed07ba539316f669d5f6f2f32c79",
			"price":"999",
			"rights":"buy",
			"definition":"SD"
		},{
			"cdin":"62d08ab2ec6c41020c906e30b5462a6796d10dae",
			"price":"299",
			"rights":"rent",
			"rentalHours":"24",
			"definition":"SD"
		}
	]
}
```

## Purchase

Returns a [MovieRental](/objects.md#movierental) object or a [MoviePurchase](/objects.md#moviepurchase) 

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>cdin + userId + countryCode + price</code>

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

Returns all genres for currently available movies.

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

## Update

Returns an [UpdateOrder](/objects.md#updateorder) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

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

Returns an [CancelOrder](/objects.md#cancelorder) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

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


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
