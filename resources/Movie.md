# Movie

## Service Check

### URL 
> http://[apidomain]/movie if Using tenantId http://[apidomain]/movie?tenantId=myTenantId

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

## Browse

Returns a [MovieSearchResult](/objects.md#moviesearchresult) object

### URL 
> http://[apidomain]/movie/browse/[country]?genre=[genre]

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
		<td><code>genre</code></td>
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
		<td><code>sort</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
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
</table>

### Example

> GET http://[apidomain]/movie/browse/us?genre=comedy
```js
{
  "numFound": 144,
  "start": 0,
  "searchTerm": "",
  "genres": [
    {
      "name": "Comedy",
      "count": 144
    },
    {
      "name": "Drama",
      "count": 24
    },
    ...
  ],
  "movies": [
    {
      "cdin": "fe93714c2ecf302d50b09120cbbf895b8db1c242",
      "title": "17 Again",
      "sanitizedTitle": "17 Again",
      "actors": [
        "Michelle Trachtenberg",
        "Zac Efron",
        "Melora Hardin",
        "Thomas Lennon",
        "Matthew Perry",
        "Leslie Mann",
        "Sterling Knight"
      ],
      "genres": [
        "Family",
        "Comedy"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_17_AGAIN_16x9_STEREO_TRAILER_E0296270_3198663.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_17_AGAIN_16x9_STEREO_TRAILER_E0296270_3198663.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_17_AGAIN_16x9_STEREO_TRAILER_E0296270_3198663.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000051261.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000051261.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000051261.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000051261.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000051261.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000051261.jpg",
      "originalReleaseYear": "2009",
      "director": "Burr Steers",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "bddf06db6c86899161cc3d7e43f3090de0980c5f",
          "price": "999",
          "rights": "buy",
          "definition": "SD"
        },
        {
          "cdin": "4a91e739f8d64586e2344bdf888106bbb9be2f3e",
          "price": "299",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        }
      ]
    },
    ...
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

> GET http://[apidomain]/movie/list/top/us
```js
{
	"displayTitle":"New and Noteworthy",
	"movies":[
		{
			"cdin":"6663d278ba376da116783a1f6c954ddf0ac046fb",
			"title":"Sherlock Holmes: A Game of Shadows",
			"sanitizedTitle":"Sherlock Holmes: A Game of Shadows",
			"actors":["Robert Downey Jr.","Jude Law","Noomi Rapace","Jared Harris","Eddie Marsan","Rachel McAdams"],
			"genres":["Action","Adventure","Suspense","Thriller","Mystery","Crime"],
			"rating":"PG-13",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000068672.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000068672.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000068672.jpg",
            "originalReleaseYear":"2011",
            "salesStartDate":"2012-06-12T00:00:00Z",
            "theatricalReleaseDate":"2011-12-16T00:00:00Z",
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
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
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
		<td>title, releasedate, price (append :a or :d for ascending or descending)</td>
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
		}
        ...
	]
}
```

## Test video playback support

Some devices (most notably older Android) do not support our video DRM. You can let users try out a sample video to see if their browser works by using this videoReferenceId in your normal player.

Returns a string

### URL 
> GET http://[apidomain]/movie/videotest


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
		<td>Required</td>
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

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>cdin + customerId + customerCountryCode + priceSold</code>

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

**Please note that movie rentals require implementation of [VideoPlayer Start](/resources/VideoPlayer.md#start)**

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
	"orderId":"ABC-0123456789",
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
	"orderId":"ABC-0123456789",
	"cancelOrderId":"XYZ-9876543210",
	"cancelTransactionDateUTC":"2012-08-15T00:00:00Z",
	"priceSold":"135",
	"cancelTransactionId":""
}
```


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
