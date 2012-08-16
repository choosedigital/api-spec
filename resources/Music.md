# Music

## Service Check

This is a simple sanity check to make sure your header authentication is working properly. Can also be used to check that the service is up.

### URL 
> http://apistg.choosedigital.net/music

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

> GET http://apistg.choosedigital.net/music
```js
{
	"ping":"pong"
}
```

## List All Genres

This is a simple way to get all the valid music genres

### URL
>http://apistg.choosedigital.net/music/genres

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

> GET http://apistg.choosedigital.net/music/genres
```js
{
	"genres":["Classical","Pop","Rock","Jazz","Country","Latin","Christian","R & B","Hip Hop","Opera","Metal","Alternative","Blues","Folk","Reggae","World","Soundtrack","Dance","Hip Hop\/Rap","Latin \/ Regional Mexican","Holiday","R&B","New Age","Electronic","Gospel","Spoken Word","Bluegrass","Vocal","Comedy","Children","Gospel\/Christian","Singer\/Songwriter","Easy Listening","French Pop","Latin \/ Urban","Rap","Children's Music","URBAN\/R AND B","Soundtracks","Latin \/ Pop","Devotional","Punk","Inspirational","Ghazal","Musique Francophone","ROCK-TRADITIONAL AND CLASSIC","Reggaeton","Soul","Flamenco","Instrumental","CLASSICAL(VOCAL,EARLY,CHAMBER)","Musical","Children's","German Pop","ALTERNATIVE","Metal\/Hard Rock","Classical(Vocal,Early,Chamber)","Broadway","DANCE\/ELECTRONIC","LATIN POP INTERNATIONAL","Latin \/ Tropical","Latin Pop","TV\/Film","Country\/Sertanejo","VOCALS","Disco","J-Pop","MPB","Boleros\/Baladas","Classical - Hindustani","POP ALTERNATIVE","Funk","Regional Mexican","LATIN REGIONAL MEXICAN","TRADITIONAL JAZZ","Variété française","Dance\/Electronic","Latin Rock","Schlager\/Volksmusik","Latin Urban \/ Reggaeton","Pop\/Rock","Samba\/Carnaval","CONTEMPORARY CHRISTIAN","RAP","World Music","Soundtrack (Bollywood)","Latin Pop International","Tamil","Rancheras","Hip-Hop\/Rap","Urban","Other","Indian Classical","Latin Regional Mexican","Fado","Tropical","Latin Urban","Brasil Soul","Schlager"]
}
```


## Retrieve Artist Detail

Returns a [MusicSearchResult](/choosedigital/api-spec/blob/master/objects.md#musicsearchresult) object

### URL
> http://apistg.choosedigital.net/music/artist/[artist]/[country]/[albumOnly]

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

> http://apistg.choosedigital.net/music/artist/u2/us/true?rows=2
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
			"cdin":"64110f2323ef53aed7c82083e64c7b6c81f1c8c8",
			"icpn":"00602527882246",
			"albumOnly":"false",
			"available":"true",
			"downloadsAvailable":"1",
			"genre":"Rock",
			"displayTitle":"Achtung Baby",
			"sanitizedDisplayTitle":"Achtung Baby",
			"albumDisplayTitle":"",
			"sanitizedAlbumDisplayTitle":"",
			"label":"U2 \/Island Catalog",
			"copyright":"(C) 2011 Universal-Island Records Limited under exclusive licence to Mercury Records Limited in the UK, Interscope Records in the US and Universal Music Group for the rest of the world",
			"duration":"",
			"explicit":"false",
			"albumIcpn":"",
			"albumCdin":"",
			"artist":[],
			"mainArtist":"U2",
			"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m//",
			"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m//",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527882246.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527882246.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527882246.jpg",
			"componentNumber":"0",
			"trackNumber":"0",
			"price":"1699","startDate":"2011-10-31T00:00:00Z",
			"bitrate":"",
			"releaseType":"Album","originalReleaseDate":"2011-11-01T00:00:00Z",
			"popularity":"0"
		}
	]
}
```

## List

Returns a [MusicChart](/choosedigital/api-spec/blob/master/objects.md#musichart) object

### URL
> http://apistg.choosedigital.net/music/list/[listId]/[country]

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
		<td>valid values: "latest", "upcoming" and curated listIds</td>
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
		<td>releaseType=album</td>
	</tr>
	<tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example

> GET http://apistg.choosedigital.net/music/list/top/us?rows=3
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
			"cdin":"ffac0f248d418aac317aba905287180d8375ab17",
			"available":"true",
			"downloadsAvailable":"1",
			"albumOnly":"false",
			"releaseType":"Album",
			"genre":"Hip Hop",
			"displayTitle":"Life Is Good (Explicit Version)",
			"sanitizedDisplayTitle":"Life Is Good (Explicit Version)",
			"label":"Def Jam Records",
			"copyright":"(C) 2012 The Island Def Jam Music Group",
			"duration":"58:17",
			"explicit":"true",
			"icpn":"00602537077472",
			"mainArtist":"Nas",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602537077472.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602537077472.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602537077472.jpg",
			"price":"1199",
			"startDate":"2012-07-16T00:00:00Z",
			"originalReleaseDate":"2012-07-17T00:00:00Z",
			"popularity":"0"
		},{
			"cdin":"40bfcf9d8fa8ee3efb4e73f1e30beb24ab04f0c8",
			"available":"true",
			"downloadsAvailable":"1",
			"albumOnly":"false",
			"releaseType":"Album",
			"genre":"Alternative",
			"displayTitle":"Magic",
			"sanitizedDisplayTitle":"Magic",
			"label":"429 Records",
			"copyright":"(C) 2012 SLG, LLC",
			"duration":"3:00",
			"explicit":"false",
			"icpn":"00795041790668",
			"mainArtist":"Smash Mouth",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00795041790668.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00795041790668.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00795041790668.jpg",
			"price":"99",
			"startDate":"2012-07-23T00:00:00Z",
			"originalReleaseDate":"2012-07-24T00:00:00Z",
			"popularity":"0"
		}
	]
}
```

## Download

### URL
> http://apistg.choosedigital.net/music/download/[cdin]/[hashedCustomerId]/[country]

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

> POST http://apistg.choosedigital.net/music/download/[cdin]/[hashedCustomerId]/[country]
```js
```

## Curated Charts

### URL
> None

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

> None
```js
```

## Search

### URL
> http://apistg.choosedigital.net/music/search

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
		<td>Query keyword(s)</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Optional</td>
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
		<td><code>sortedBy</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>Sort by any field in the Release (add :a or :d Ascending/Descending)</td>
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
</table>

### Example

> http://apistg.choosedigital.net/music/search?term=u2&rows=3
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
			"cdin":"7c03df584d234a83648981bf7e5192565275cee8",
			"icpn":"",
			"albumOnly":"false",
			"available":"true",
			"downloadsAvailable":"1",
			"genre":"Pop",
			"displayTitle":"Mysterious Ways",
			"sanitizedDisplayTitle":"Mysterious Ways",
			"albumDisplayTitle":"Achtung Baby",
			"sanitizedAlbumDisplayTitle":"Achtung Baby",
			"label":"Island\/Interscope\/UMe",
			"copyright":"(P) 2011 Universal-Island Records Ltd.",
			"duration":"4:04",
			"explicit":"false",
			"albumIcpn":"00602527882048",
			"albumCdin":"7efeae23302636bbac85fb5a9acfa9dc91f8c406",
			"artist":[],
			"mainArtist":"U2",
			"httpPreviewUrl":"http://d3qcb5osaw6g5.cloudfront.net/s/m/00602527882048/UMG_audclp_00602527882048_01_008_164.mp3",
			"streamPreviewUrl":"rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/m/00602527882048/UMG_audclp_00602527882048_01_008_164.mp3",
			"smallImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/s/00602527882048.jpg",
			"mediumImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/m/00602527882048.jpg",
			"largeImageUrl":"http://d3qcb5osaw6g5.cloudfront.net/i/m/l/00602527882048.jpg",
			"componentNumber":"1",
			"trackNumber":"8",
			"price":"129","startDate":"2011-11-01T00:00:00Z",
			"bitrate":"",
			"releaseType":"TrackRelease","originalReleaseDate":"2011-11-01T00:00:00Z",
			"popularity":"0"
		}
	]
}
```

## Detail

### URL
> http://apistg.choosedigital.net/music/detail/[cdin]

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
		<td>ChooseDigital id</td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>valid values: us, ca. Default value = us</td>
	</tr>
	<tr>
		<td><code>hashedCustomerId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
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

> GET http://apistg.choosedigital.net/music/detail/7de9747835d903c57a765c43d79eb09b6f6a1eb2
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

### URL
> http://apistg.choosedigital.net/music/resetdownload

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

> PUT http://apistg.choosedigital.net/music/resetdownload
```js
```

## Purchase

### URL
> POST http://apistg.choosedigital.net/music/purchase

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
		<td>ChooseDigital id</td>
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

> POST http://apistg.choosedigital.net/music/purchase
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

## Update

### URL
> http://apistg.choosedigital.net/music/update

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

> PUT http://apistg.choosedigital.net/music/update
```js
{
	"orderId":"WL3-3359944-6701838",
	"transactionId":"123456"
}
```

## Cancel

### URL
> http://apistg.choosedigital.net/music/cancel

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

> PUT http://apistg.choosedigital.net/music/cancel
```js
{
	"orderId":"WL3-3359944-6701838",
	"cancelOrderId":"WL3-2873051-1679841",
	"cancelTransactionDateUTC":"2012-08-15T00:00:00Z",
	"priceSold":"135",
	"cancelTransactionId":""
}
```