# Music

## Service Check

This is a simple sanity check to make sure your header authentication is working properly. 

Can also be used to check that the service is up.

### URL 
> http://[apidomain]/music if Using tenantId http://[apidomain]/music?tenantId=myTenantId

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

> GET http://[apidomain]/music
```js
{
	"ping":"pong"
}
```

## Retrieve Artist Detail

Returns a [MusicSearchResult](/objects.md#musicsearchresult) object

### URL
> http://[apidomain]/music/artist/[artist]/[country]/[albumOnly]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>artist</code></td>
		<td>Required</td>
		<td>string</td>
		<td>Artist name</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>albumOnly</code></td>
		<td>Required</td>
		<td>boolean</td>
		<td>valid values: true, false</td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>sort</code></td>
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

> http://[apidomain]/music/artist/U2/us/true?rows=2
```js
{
	"numFound":31,
	"start":0,
	"searchTerm":"",
	"genres":[],
	"releaseTypes":[],
	"releases":[
		{
			"cdin":"7efeae23302636bbac85fb5a9acfa9dc91f8c406",
			"icpn":"00602527882048",
			"albumOnly":"false",
			"available":"true",
			"downloadsAvailable":"1",
			"genre":"Rock",
			"displayTitle":"Achtung Baby",
			"sanitizedDisplayTitle":"Achtung Baby",
			"albumDisplayTitle":"",
			"sanitizedAlbumDisplayTitle":"",
			"label":"Island\/Interscope\/UMe",
			"copyright":"(C) 2011 Universal-Island Records Limited under exclusive licence to Mercury Records Limited in the UK, Interscope Records in the US and Universal Music Group for the rest of the world",
			"duration":"55:26",
			"explicit":"false",
			"albumIcpn":"",
			"albumCdin":"",
			"artist":[],
			"mainArtist":"U2",
			"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m//",
			"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m//",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527882048.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527882048.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527882048.jpg",
			"componentNumber":"0",
			"trackNumber":"0",
			"price":"999","startDate":"2011-11-01T00:00:00Z",
			"bitrate":"",
			"releaseType":"Album","originalReleaseDate":"2011-11-01T00:00:00Z",
			"popularity":"0"
		},{
			...
		}
	]
}
```

## List

For both curated "top" lists of popular titles (updated weekly) and non-curated "latest" by sales date. 

Returns a [MusicChart](/objects.md#musichart) object

### URL
> http://[apidomain]/music/list/[listId]/[country]

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
		<td>valid values: "latest", "top"</td>
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
		<td>Number of rows to return</td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>"album" (default) or "trackrelease" ("top" listId with genre specified only works with albums)</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Curated "top" lists

Choose Digital curates lists of top tiles both for overall music and for several genres. See the [List of Curated Genres](#list-of-curated-genres) below for genres available. 

Example of a top list request, _no genre_ specified:

> GET http://[apidomain]/music/list/top/us?rows=3
```js
{
	"displayTitle":"Top Albums",
	"releases":[
		{
			"cdin":"b522785f2d4cbe56a680695d10e70dfab5d9e09d",
			"available":"true",
			"downloadsAvailable":"1",
			"albumOnly":"false",
			"releaseType":"Album",
			"genre":"Hip Hop",
			"displayTitle":"The Hits Collection Volume One (Explicit Version)",
			"sanitizedDisplayTitle":"The Hits Collection Volume One (Explicit Version)",
			"label":"Roc Nation \/ IDJ",
			"copyright":"(C) 2010 The Island Def Jam Music Group",
			"duration":"56:13",
			"explicit":"true",
			"icpn":"00602527231600",
			"mainArtist":"JAY-Z",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527231600.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527231600.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527231600.jpg",
			"price":"999",
			"startDate":"2010-11-22T00:00:00Z",
			"originalReleaseDate":"2010-11-22T00:00:00Z",
			"popularity":"0"
		},{
			...
		},{
			...
		}
	]
}
```

Example of a top list request _with_ specified genre:

> GET http://[apidomain]/music/list/top/us?genre=rock
```js
{
	"displayTitle":"Top Rock Albums",
	"releases":[{
	"cdin":"fd01b6fe1a335ddf96a9cc5568ffb75cd264bb14",
	"available":"true",
	"downloadsAvailable":"1",
	"albumOnly":"false",
	"releaseType":"Album",
	"genre":"Alternative",
	"displayTitle":"Strangeland (Deluxe Version)",
	"sanitizedDisplayTitle":"Strangeland (Deluxe Version)",
	"label":"Interscope",
	"copyright":"(C) 2012 Universal Island Records, a division of Universal Music Operations Limited under exclusive license to Interscope Records in the U.S.A.",
	"duration":"",
	"explicit":"false",
	"icpn":"00602527947969",
	"mainArtist":"Keane",
	"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527947969.jpg",
	"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527947969.jpg",
	"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527947969.jpg",
	"price":"1399","startDate":"2012-05-07T00:00:00Z","originalReleaseDate":"2012-05-08T00:00:00Z",
	"popularity":"0"},{
	"cdin":"81e444ce8bb2af68aa706f557a034384047d9c98",
	"available":"true",
	"downloadsAvailable":"1",
	"albumOnly":"false",
	"releaseType":"Album",
	"genre":"Metal",
	"displayTitle":"American Capitalist",
	"sanitizedDisplayTitle":"American Capitalist",
	"label":"Prospect Park",
	"copyright":"(C) 2011 Prospect Park",
	"duration":"55:42",
	"explicit":"true",
	"icpn":"0813985010625",
	"mainArtist":"Five Finger Death Punch",
	"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/0813985010625.jpg",
	"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/0813985010625.jpg",
	"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/0813985010625.jpg",
	"price":"1399","startDate":"2011-10-10T00:00:00Z","originalReleaseDate":"2011-10-11T00:00:00Z",
	"popularity":"0"
},
...
```


## List of Curated Genres

This is a simple way to get all the valid genres associated with curated lists

### URL
>http://[apidomain]/music/curatedgenres

### Parameters

No optional or required parameters

### Example

> GET http://[apidomain]/music/curatedgenres
```js
{
    "genres":["all","alternative","christian","classical","country","electronic","hip hop","jazz","latin","pop","r&b","rock","soundtrack"]
}
```



## Download

### URL
> http://[apidomain]/music/download/[cdin]/[hashedCustomerId]/[country]

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

> GET http://[apidomain]/music/download/[cdin]/[hashedCustomerId]/[country]

Remember: this response will include a redemption link which expires in minutes and must not be sent via email. [Redemption Link handling](/README.md#redemption-links-download-or-streaming)


## Search

Returns a [MusicSearchResult](/objects.md#musicsearchresult) object

### URL
> http://[apidomain]/music/search

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
		<td>Query keyword(s). An error is returned for wildcards and the empty string.</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca. Default value: us</td>
	</tr>
	<tr>
		<td><code>artist</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>Artist name</td>
	</tr>
	<tr>
		<td><code>genre</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>Genre</td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>Number of rows to return</td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>Where to start in the results (for pagination)</td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>Show Albums or Tracks (trackrelease, album)</td>
	</tr>
	<tr>
		<td><code>includeFutureReleases</code></td>
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
		<td><code>sort</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>title, releasedate, mainArtist, price (append :a or :d for scending or descending, i.e. sort=releasedate:a)</td>
	</tr>
	<tr>
		<td><code>priceLow</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>filter for pricing</td>
	</tr>
	<tr>
		<td><code>priceHigh</code></td>
		<td>Optional</td>
		<td>integer</td>
		<td>filter for pricing</td>
	</tr>
</table>

### Example

> http://[apidomain]/music/search?term=u2&country=us&rows=3
```js
{
	"numFound":418,
	"start":0,
	"searchTerm":"u2",
	"genres":[
		{
			"name":"Rock","count":381
		},{
			"name":"Pop","count":56
		},{
			"name":"Blues","count":4
		},{
			"name":"Country","count":4
		},{
			"name":"Comedy","count":1
		},{
			"name":"Dance","count":1
		},{
			"name":"Holiday","count":1
		},{
			"name":"R & B","count":1
		}
	],
	"releaseTypes":[
		{
			"name":"TrackRelease","count":418
		},{
			"name":"Album","count":31
		}
	],
	"releases":[
		{
			"cdin":"d0a45f9836c6c45aae6057005fb958c77b14a515",
			"icpn":"",
			"albumOnly":"true",
			"available":"true",
			"downloadsAvailable":"1",
			"genre":"Comedy",
			"displayTitle":"The U2 Spy Incident; Castro; de Gaulle; Nixon; The AMA; Socialized Medicine And More",
			"sanitizedDisplayTitle":"The U2 Spy Incident; Castro; de Gaulle; Nixon; The AMA; Socialized Medicine And More",
			"albumDisplayTitle":"At The Hungry I",
			"sanitizedAlbumDisplayTitle":"At The Hungry I",
			"label":"VERVE",
			"copyright":"(P) 1960 The Verve Music Group, a Division of UMG Recordings, Inc.",
			"duration":"18:06",
			"explicit":"false",
			"albumIcpn":"00602527910598",
			"albumCdin":"9edc123998a4ffc8bf9c3d5fa967229a2d9c068b",
			"artist":[],
			"mainArtist":"Mort Sahl",
			"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/00602527910598/UMG_audclp_00602527910598_01_002_164.mp3",
			"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/00602527910598/UMG_audclp_00602527910598_01_002_164.mp3",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527910598.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527910598.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527910598.jpg",
			"componentNumber":"1",
			"trackNumber":"2",
			"price":"129","startDate":"2011-12-05T00:00:00Z",
			"bitrate":"",
			"releaseType":"TrackRelease","originalReleaseDate":"2011-12-06T00:00:00Z",
			"popularity":"0"
		},{
			"cdin":"effbbdb217fdbe065fc3c1a05ab59df11883d7ac",
			"icpn":"",
			"albumOnly":"false",
			"available":"true",
			"downloadsAvailable":"1",
			"genre":"Pop",
			"displayTitle":"The Fly",
			"sanitizedDisplayTitle":"The Fly",
			"albumDisplayTitle":"Achtung Baby",
			"sanitizedAlbumDisplayTitle":"Achtung Baby",
			"label":"Island\/Interscope\/UMe",
			"copyright":"(P) 2011 Universal-Island Records Ltd.",
			"duration":"4:29",
			"explicit":"false",
			"albumIcpn":"00602527882048",
			"albumCdin":"7efeae23302636bbac85fb5a9acfa9dc91f8c406",
			"artist":[],
			"mainArtist":"U2",
			"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/00602527882048/UMG_audclp_00602527882048_01_007_164.mp3",
			"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/00602527882048/UMG_audclp_00602527882048_01_007_164.mp3",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527882048.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527882048.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527882048.jpg",
			"componentNumber":"1",
			"trackNumber":"7",
			"price":"129","startDate":"2011-11-01T00:00:00Z",
			"bitrate":"",
			"releaseType":"TrackRelease","originalReleaseDate":"2011-11-01T00:00:00Z",
			"popularity":"0"
		},{
			...
		}
	]
}
```

## Detail

Returns a [Music](/objects.md#music) object

### URL
> http://[apidomain]/music/detail/[cdin]

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
		<td>Choose Digital id</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca. Default value = us</td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td><a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>includeFutureReleases</code></td>
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

> GET http://[apidomain]/music/detail/7de9747835d903c57a765c43d79eb09b6f6a1eb2
```js
{
    "cdin": "7de9747835d903c57a765c43d79eb09b6f6a1eb2",
    "albumOnly": "false",
    "available": "true",
    "genre": "Rock",
    "displayTitle": "The Scientist",
    "sanitizedDisplayTitle": "The Scientist",
    "icpn": "",
    "albumIcpn": "0724355164056",
    "albumCdin": "4d1a3b274d1ef98e85962aa8b95357de468574a0",
    "albumDisplayTitle": "The Scientist",
    "sanitizedAlbumDisplayTitle": "The Scientist",
    "label": "Parlophone",
    "copyright": "(P) 2002 The copyright in this sound recording is owned by EMI Records Ltd",
    "duration": "5:09",
    "explicit": "false",
    "mainArtist": "Coldplay",
    "artist": [],
    "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/0724355164056/0724355164056_T-20067_SoundRecording_01-001.mp3",
    "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/0724355164056/0724355164056_T-20067_SoundRecording_01-001.ogg",
    "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/0724355164056.jpg",
    "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/0724355164056.jpg",
    "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/0724355164056.jpg",
    "componentNumber": "1",
    "trackNumber": "1",
    "price": "129",
    "startDate": "2010-04-06T00:00:00Z",
    "bitrate": "",
    "releaseType": "TrackRelease",
    "popularity": "0"
}
```

## Detail by ISRC

Returns a [Music](/objects.md#music) object

### URL
> http://[apidomain]/music/isrc/[isrc]/[country]

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>isrc</code></td>
		<td>Required</td>
		<td>string</td>
		<td>ISRC</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td><a href="/resources/General.md#hashed-customer-id">hashedCustomerId definition</a></td>
	</tr>
	<tr>
		<td><code>includeFutureReleases</code></td>
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

> GET http://[apidomain]/music/isrc/GBAYE0200772/us
```js
{
    "cdin": "7de9747835d903c57a765c43d79eb09b6f6a1eb2",
    "albumOnly": "false",
    "available": "true",
    "genre": "Rock",
    "displayTitle": "The Scientist",
    "sanitizedDisplayTitle": "The Scientist",
    "icpn": "",
    "albumIcpn": "0724355164056",
    "albumCdin": "4d1a3b274d1ef98e85962aa8b95357de468574a0",
    "albumDisplayTitle": "The Scientist",
    "sanitizedAlbumDisplayTitle": "The Scientist",
    "label": "Parlophone",
    "copyright": "(P) 2002 The copyright in this sound recording is owned by EMI Records Ltd",
    "duration": "5:09",
    "explicit": "false",
    "mainArtist": "Coldplay",
    "artist": [],
    "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/0724355164056/0724355164056_T-20067_SoundRecording_01-001.mp3",
    "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/0724355164056/0724355164056_T-20067_SoundRecording_01-001.ogg",
    "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/0724355164056.jpg",
    "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/0724355164056.jpg",
    "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/0724355164056.jpg",
    "componentNumber": "1",
    "trackNumber": "1",
    "price": "129",
    "startDate": "2010-04-06T00:00:00Z",
    "bitrate": "",
    "releaseType": "TrackRelease",
    "popularity": "0"
}
```

## Reset Download

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>userId + orderId</code>

### URL
> http://[apidomain]/music/resetdownload

### Parameters

<table>
	<tr>
		<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>customerId</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>orderId</code></td>
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
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> PUT http://[apidomain]/music/resetdownload
```js
```

## Purchase

Returns a [MusicPurchaseInfo](/objects.md#musicpurchaseinfo) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>cdin + customerId + customerCountryCode + priceSold</code>

### URL
> POST http://[apidomain]/music/purchase

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
		<td>Choose Digital id</td>
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
		<td>Tax amount charged</td>
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
		<td></td>
	</tr>
	<tr>
		<td><code>promoCode</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>Promo code</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
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

> POST http://[apidomain]/music/purchase

For a track purchase:

```js
{
	"orderId":"WL2-3821126-2848539",
	"downloadLink":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/146596fd82d990083609bf75c3fa4122102068af6627696113a5733c81870690/2b1220c86b1b2cb153cc54db17b7c24c07a5833b/1337626959558/c96a4e8c509e03ab8955218963f71d03b1e5cf3ec78f553ebbb2ac2a325e3e35",
	"priceSold":"100",    
	"release": {        
			"cdin":"2b1220c86b1b2cb153cc54db17b7c24c07a5833b",        
			"albumOnly":"false",
			"available":"",
			"genre":"Rock",
			"displayTitle":"Just",
			"sanitizedDisplayTitle":"Just",
			"icpn":"",
			"albumIcpn":"5099969361456",
			"albumCdin":"be73350559df9e2f71f1ab823d0de5b817c8aa74",
			"albumDisplayTitle":"The Bends (Collectors Edition)",
			"sanitizedAlbumDisplayTitle":"The Bends (collectors Edition)",
			"label":"EMI Catalogue",
			"copyright":"(P) 1995 The copyright in this sound recording is owned by EMI Records Ltd",
			"duration":"3:52",
			"explicit":"false",
			"mainArtist":"Radiohead",
			"artist":[],
			"mp3PreviewUrl":"http://cdn.choosedigital.net/s/m/5099969361456/5099969361456_T-20067_SoundRecording_01-007.mp3",
			"oggPreviewUrl":"http://cdn.choosedigital.net/s/m/5099969361456/5099969361456_T-20067_SoundRecording_01-007.ogg",
			"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/5099969361456.jpg",
			"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/5099969361456.jpg",
			"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/5099969361456.jpg",
			"componentNumber":"1",
			"trackNumber":"7",
			"price":"129",
			"startDate":"2009-04-28T00:00:00Z",
			"bitrate":"",
			"releaseType":"TrackRelease",
			"popularity":"0"
	}
}
```

For an album purchase:

```js
{
	"orderId":"WL2-9611663-2809909",
	"transactionDate":"2014-02-11T16:11:04Z",
	"downloadInfos":[
		{
			"url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/379abae1e2f1dd57e995277355eb6344060caa55/1393989746697/12cc24c7c6d1d4dea5bca4d6d7805fbff078fe50f80d846a39c988376514bfd0/cdp/CPB",
			"title":"Brave",
			"remaining":"0"
 		},{
 			"url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/6b86f488f7e71403d54b0cb35e6815c333918ffc/1393989746709/350060f06d8537bc1ffd6b6fab7926b98ba83d4742f73790933f602a5e7bc659/cdp/CPB",
			"title":"Chasing The Sun",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/b8c6a3238b888313f6df0bdfbbe1697b7c045203/1393989746720/f5f438c8d00581a400145164d3f771c1e15c94d2b9859d4d09931d059b52428b/cdp/CPB",
			"title":"Hercules",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/3506bb08dcc46a1c6a840e42205510f3f37ece7a/1393989746731/de5026efaa691c30a587b39cb41d43d1570cef1105f531c24e92c3dac08968d5/cdp/CPB",
			"title":"Manhattan",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/2aaf33a5e766bbb552ffebc0362b26ab4bb7c0a3/1393989746741/42176920a6b0e0ec2f386e32fd1d45de2e93e87dc0a9c7f10846f571db7c5ec8/cdp/CPB",
			"title":"Satellite Call",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/230a58eeb04e4219beb01b9be744ecd8aecc7369/1393989746751/248aa69c316c50b8f078e4d5222b80383fc67e787d5362d1d1bf3437a6358007/cdp/CPB",
			"title":"Little Black Dress",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/454a56068f7569ab4c84e2b9542fe1352838f2f2/1393989746762/f73edfbcbd8f6a49c3673aa1c1d58fd44a5d9f025e869ff1d8bc78c75e68b9a0/cdp/CPB",
			"title":"Cassiopeia",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/ee194788570c46f0eab0295f91e9fb88adda174f/1393989746774/6ac0d2b75ada1ec0092680c0c1a492632f0903ccd13d3b6e20b348a8055ff29e/cdp/CPB",
			"title":"1000 Times",
			"remaining":"0"
		 },{
		 	"url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/df688d83d160e27d57d3b7ad454f9ea0aa03b68f/1393989746784/f6aa5ae99809466e909229da6b7007db7973344424ca1b09f95b4cf35bc297ae/cdp/CPB",
			"title":"I Choose You",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/fcfd18f4c7cf37d8819e0740086fa56d31689b06/1393989746794/9f4dfb417127971cd8613e7933e9ba0f303aa8e29b28296d029e9c7cc7ce6697/cdp/CPB",
			"title":"Eden",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/dd2fd8dc3f0376f6c5b410f908d87b0e95cd51dd/1393989746805/5d17f4b03b39bc38e70152cbcbd602a6e486b48183c9fd92a63040a5b7ed729e/cdp/CPB",
			"title":"Islands",
			"remaining":"0"
		 },{
			 "url":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/ef0adcde74549a1f4d5ef268b769f357f8531316b13899e622fe39a18aa10eba/de1622837443641b6226d0eabaf9047704ae5788/94783d2bef7156b7a0ca2503b2663b6c56105be1/1393989746815/8a38b86a92d8c17f939dc504c5f5833ff3f28c4ab3aa1a6d2a5154d6e02cfd84/cdp/CPB",
			"title":"December",
			"remaining":"0"
		 }],
	"priceSold":"1099",
	"exchangeRate":0.0000,
	"container": {
		"cdin":"de1622837443641b6226d0eabaf9047704ae5788",
		"available":"true",
		"downloadsAvailable":"1",
		"genre":"Pop",
		"displayTitle":"The Blessed Unrest",
		"sanitizedDisplayTitle":"The Blessed Unrest",
		"icpn":"886443982444",
		"albumIcpn":"",
		"albumDisplayTitle":"",
		"sanitizedAlbumDisplayTitle":"",
		"label":"Epic",
		"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
		"duration":"",
		"explicit":"false",
		"mainArtist":"Sara Bareilles",
		"multiArtistCompilation":"false",
		"componentNumber":"0",
		"trackNumber":"0",
		"artist":[],
		"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
		"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
		"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
		"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
		"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
		"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
		"price":"1099",
		 
		 "startDate":"2013-07-16T00:00:00Z",
		"bitrate":"",
		"releaseType":"Album",
		 "originalReleaseDate":"2013-07-16T00:00:00Z",
		"popularity":"0",
		"components":[
			 {
			"componentNumber":"1",
			"trackReleases":[
			 {
				"cdin":"379abae1e2f1dd57e995277355eb6344060caa55",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Brave",
				"sanitizedDisplayTitle":"Brave",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"3:39",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187342-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187342-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187342-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"1",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"6b86f488f7e71403d54b0cb35e6815c333918ffc",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Chasing The Sun",
				"sanitizedDisplayTitle":"Chasing The Sun",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:28",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187343-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187343-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187343-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"2",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"b8c6a3238b888313f6df0bdfbbe1697b7c045203",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Hercules",
				"sanitizedDisplayTitle":"Hercules",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:21",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187344-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187344-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187344-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"3",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"3506bb08dcc46a1c6a840e42205510f3f37ece7a",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Manhattan",
				"sanitizedDisplayTitle":"Manhattan",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:38",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187345-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187345-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187345-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"4",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"2aaf33a5e766bbb552ffebc0362b26ab4bb7c0a3",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Satellite Call",
				"sanitizedDisplayTitle":"Satellite Call",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:50",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187346-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187346-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187346-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"5",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"230a58eeb04e4219beb01b9be744ecd8aecc7369",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Little Black Dress",
				"sanitizedDisplayTitle":"Little Black Dress",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"3:32",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187347-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187347-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187347-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"6",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"454a56068f7569ab4c84e2b9542fe1352838f2f2",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Cassiopeia",
				"sanitizedDisplayTitle":"Cassiopeia",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"3:33",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187348-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187348-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187348-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"7",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"ee194788570c46f0eab0295f91e9fb88adda174f",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"1000 Times",
				"sanitizedDisplayTitle":"1000 Times",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:30",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187349-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187349-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187349-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"8",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"df688d83d160e27d57d3b7ad454f9ea0aa03b68f",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"I Choose You",
				"sanitizedDisplayTitle":"I Choose You",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"3:38",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187350-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187350-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187350-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"9",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"fcfd18f4c7cf37d8819e0740086fa56d31689b06",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Eden",
				"sanitizedDisplayTitle":"Eden",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:05",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187351-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187351-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187351-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"10",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"dd2fd8dc3f0376f6c5b410f908d87b0e95cd51dd",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"Islands",
				"sanitizedDisplayTitle":"Islands",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"4:20",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187352-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187352-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187352-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"11",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 },
			 {
				"cdin":"94783d2bef7156b7a0ca2503b2663b6c56105be1",
				"albumOnly":"false",
				"available":"true",
				"downloadsAvailable":"1",
				"genre":"Pop",
				"displayTitle":"December",
				"sanitizedDisplayTitle":"December",
				"albumDisplayTitle":"The Blessed Unrest",
				"sanitizedAlbumDisplayTitle":"The Blessed Unrest",
				"label":"Epic",
				"copyright":"(P) 2013 Epic Records, a division of Sony Music Entertainment",
				"duration":"5:02",
				"explicit":"false",
				"albumIcpn":"886443982444",
				"artist":[],
				"mainArtist":"Sara Bareilles",
				"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187353-192K_44S_2C_clipped.mp3",
				"noSchemeHttpPreviewUrl":"//d3qcb5osaw6g5.cloudfront.net/s/m/886443982444/00000000000028187353-192K_44S_2C_clipped.mp3",
				"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/886443982444/00000000000028187353-192K_44S_2C_clipped.mp3",
				"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"noSchemeSmallImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/s/886443982444.jpg",
				"noSchemeMediumImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/m/886443982444.jpg",
				"noSchemeLargeImageUrl":"//d3qcb5osaw6g5.cloudfront.net/i/m/l/886443982444.jpg",
				"price":"129",
				"componentNumber":"1",
				"trackNumber":"12",
				 
				 "startDate":"2013-07-16T00:00:00Z",
				"bitrate":"",
				"releaseType":"TrackRelease",
				"popularity":"0"
			 }
			 ]
		 }
		 ]
	 }
}
```

## Update

Returns an [UpdateOrder](/objects.md#updateorder) object

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>orderId + userId</code>

### URL
> http://[apidomain]/music/update

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

> PUT http://[apidomain]/music/update
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
> http://[apidomain]/music/cancel

### Parameters

<table>
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Required</th>
		<th>Example</th>
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

> PUT http://[apidomain]/music/cancel
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
