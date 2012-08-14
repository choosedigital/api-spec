# Music

## Service Check

This is a simple sanity check to make sure your header authentication is working properly. Can also be used to check that the service is up.

### URL 
> http://apistg.choosedigital.net/music

### Parameters

None

### Example

> GET http://apistg.choosedigital.net/music
```js
{
	"ping":"pong"
}
```

## Genres

This is a simple way to get all the valid genres

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
		<td></td>
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
		<td>One of "us" or "ca"</td>
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
		<td>One of "us" or "ca"</td>
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

> GET http://apistg.choosedigital.net/music/search?term=dart
```js
{
    "numFound": 19,
    "start": 0,
    "searchTerm": "dart",
    "genres": [{
        "name": "Classical",
        "count": 11
    }, {
        "name": "Opera",
        "count": 3
    }, {
        "name": "Latin",
        "count": 2
    }, {
        "name": "Children's Music",
        "count": 1
    }, {
        "name": "Rock",
        "count": 1
    }, {
        "name": "Singer/Songwriter",
        "count": 1
    }],
    "releaseTypes": [{
        "name": "TrackRelease",
        "count": 19
    }],
    "releases": [{
        "cdin": "92497814d8f420254dd469e34d1441e9fcd0fa62",
        "albumOnly": "false",
        "available": "true",
        "genre": "Children's Music",
        "displayTitle": "Dartacan Y Los Tres Mosqueperros",
        "sanitizedDisplayTitle": "Dartacan Y Los Tres Mosqueperros",
        "albumDisplayTitle": "Baby Deli Series Infantiles",
        "sanitizedAlbumDisplayTitle": "Baby Deli Series Infantiles",
        "label": "EMI Spain",
        "copyright": "(P) 2009 The copyright in this sound recording is owned by Baby Del Music / EMI Music Spain, S.A.",
        "duration": "3:59",
        "explicit": "false",
        "albumIcpn": "5099960916259",
        "albumCdin": "2b2157dffc57679e9a3a1f16b136a330d7392276",
        "artist": [],
        "mainArtist": "Baby Deli Music",
        "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/5099960916259/5099960916259_T-20067_SoundRecording_01-002.mp3",
        "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/5099960916259/5099960916259_T-20067_SoundRecording_01-002.ogg",
        "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/5099960916259.jpg",
        "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/5099960916259.jpg",
        "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/5099960916259.jpg",
        "componentNumber": "1",
        "trackNumber": "2",
        "price": "129",
        "startDate": "2011-11-15T00:00:00Z",
        "bitrate": "",
        "releaseType": "TrackRelease",
        "popularity": "0"
    }, {
        "cdin": "39465c1869d7161cda71587bb8378f0c64edfdee",
        "albumOnly": "false",
        "available": "true",
        "genre": "Classical",
        "displayTitle": "III.     Darthulas Grabesesang: M�dchen von Kola, du schl�fst! (Ossian, trans. Herder)",
        "sanitizedDisplayTitle": "Iii.     Darthulas Grabesesang: M�dchen Von Kola, Du Schl�fst! (ossian, Trans. Herder)",
        "albumDisplayTitle": "Great Secular Choral Works",
        "sanitizedAlbumDisplayTitle": "Great Secular Choral Works",
        "label": "Virgin Classics",
        "copyright": "(P) 1995 The copyright in this sound recording is owned by EMI Records Ltd./Virgin Classics",
        "duration": "4:33",
        "explicit": "false",
        "albumIcpn": "5099952211256",
        "albumCdin": "988940694a7c896536ce2c313edcdf2420f77092",
        "artist": [],
        "mainArtist": "Choeur Accentus",
        "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/5099952211256/5099952211256_T-20067_SoundRecording_01-008.mp3",
        "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/5099952211256/5099952211256_T-20067_SoundRecording_01-008.ogg",
        "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/5099952211256.jpg",
        "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/5099952211256.jpg",
        "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/5099952211256.jpg",
        "componentNumber": "1",
        "trackNumber": "8",
        "price": "129",
        "startDate": "2008-09-02T00:00:00Z",
        "bitrate": "",
        "releaseType": "TrackRelease",
        "popularity": "0"
    }, {
        "cdin": "91d19b58668c6abf34fd1af7c86127d2c4081842",
        "albumOnly": "false",
        "available": "true",
        "genre": "Classical",
        "displayTitle": "III.     Darthulas Grabesesang: M�dchen von Kola, du schl�fst! (Ossian, trans. Herder)",
        "sanitizedDisplayTitle": "Iii.     Darthulas Grabesesang: M�dchen Von Kola, Du Schl�fst! (ossian, Trans. Herder)",
        "albumDisplayTitle": "Brahms-Schumann A Capella Choruses",
        "sanitizedAlbumDisplayTitle": "Brahms-schumann A Capella Choruses",
        "label": "Virgin Classics",
        "copyright": "(P) 1995 The copyright in this sound recording is owned by EMI Records Ltd./Virgin Classics",
        "duration": "4:31",
        "explicit": "false",
        "albumIcpn": "0094636327952",
        "albumCdin": "8bfb909980213fbe61fdf1954b682f3d70af0b08",
        "artist": [],
        "mainArtist": "Choeur Accentus",
        "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/0094636327952/0094636327952_T-20067_SoundRecording_01-003.mp3",
        "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/0094636327952/0094636327952_T-20067_SoundRecording_01-003.ogg",
        "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/0094636327952.jpg",
        "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/0094636327952.jpg",
        "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/0094636327952.jpg",
        "componentNumber": "1",
        "trackNumber": "3",
        "price": "129",
        "startDate": "2006-09-12T00:00:00Z",
        "bitrate": "",
        "releaseType": "TrackRelease",
        "popularity": "0"
    },{
        "cdin": "b464f4a45b39927c4cab60cf2961b93cd2741d2e",
        "albumOnly": "false",
        "available": "true",
        "genre": "Latin",
        "displayTitle": "Ya No Puedo Darte M�s",
        "sanitizedDisplayTitle": "Ya No Puedo Darte M�s",
        "albumDisplayTitle": "Original Masters",
        "sanitizedAlbumDisplayTitle": "Original Masters",
        "label": "Capitol Latin",
        "copyright": "(P) 1983 The Copyright in this sound recording is owned by EMI Music Spain, S.A.",
        "duration": "3:20",
        "explicit": "false",
        "albumIcpn": "0724357688451",
        "albumCdin": "2acd2c5992b9a316b7831c41878dcefb48a520ff",
        "artist": [],
        "mainArtist": "Dyango",
        "mp3PreviewUrl": "http://cdn.choosedigital.net/s/m/0724357688451/0724357688451_T-20067_SoundRecording_01-008.mp3",
        "oggPreviewUrl": "http://cdn.choosedigital.net/s/m/0724357688451/0724357688451_T-20067_SoundRecording_01-008.ogg",
        "smallImageUrl": "http://cdn.choosedigital.net/i/m/s/0724357688451.jpg",
        "mediumImageUrl": "http://cdn.choosedigital.net/i/m/m/0724357688451.jpg",
        "largeImageUrl": "http://cdn.choosedigital.net/i/m/l/0724357688451.jpg",
        "componentNumber": "1",
        "trackNumber": "8",
        "price": "129",
        "startDate": "2004-03-09T00:00:00Z",
        "bitrate": "",
        "releaseType": "TrackRelease",
        "popularity": "0"
    }]
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
		<td>One of "us" or "ca"</td>
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

> None
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

> None
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

> None
```js
```

## Cancel

### URL
> None

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

> None
```js
```