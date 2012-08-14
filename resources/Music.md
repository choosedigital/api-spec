# Music API

## Music

Contents


### Ping

This is a simple sanity check to make sure your authentication is working properly. Can also be used to check that the service is up.

Request URL: 
> http://apistg.choosedigital.net/music

Request Method: GET

Response (always the same)

```js
{"ping":"pong"}
```

### Genre

This is a simple way to get all the Vailid Genres 

Request URL: http://apistg.choosedigital.net/music/genres

Request Method: GET

Response (always the same)

```js
{
genres:["Pop","Classical","Rock","Christian","Metal","Dance","Gospel","World","Alternative","Jazz","Country","R&B","Children's Music","Electronic","Latin","New Age","Hip Hop/Rap","German Pop","Soundtrack","Folk","Singer/Songwriter","Comedy"]
}
```

### Search

<table>
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Required</th>
		<th>Example</th>
	</tr>
	<tr>
		<td>term</td>
		<td>Query keyword(s)</td>
		<td>Yes</td>
		<td>term=love</td>
	</tr>
	<tr>
		<td>country</td>
		<td>One of "us" or "ca"</td>
		<td>No</td>
		<td>country=us (default is "us")</td>
	</tr>
	<tr>
		<td>artist</td>
		<td>Artist name</td>
		<td>No</td>
		<td>artist=metallica</td>
	</tr>
	<tr>
		<td>genre</td>
		<td>Genre</td>
		<td>No</td>
		<td>genre=metal</td>
	</tr>
	<tr>
		<td>releaseType</td>
		<td>Show Albums or Tracks (trackrelease, album)</td>
		<td>No</td>
		<td>releaseType=album (default is trackrelease)</td>
	</tr>
	<tr>
		<td>sortedBy</td>
		<td>Sort by any field in the Release (add :a or :d Ascending/Descending)</td>
		<td>No</td>
		<td>sortedBy=displayTitle:a</td>
	</tr>
	<tr>
		<td>rows</td>
		<td>Number of rows to return</td>
		<td>No</td>
		<td>rows=30</td>
	</tr>
	<tr>
		<td>start</td>
		<td>Where to start in the results (for pagination)</td>
		<td>No</td>
		<td>start=20</td>
	</tr>
</table>

Request URL:

```
http://apistg.choosedigital.net/music/search
```

Sample URLs: 

* http://apistg.choosedigital.net/music/search?term=dart
* http://apistg.choosedigital.net/music/search?term=dart&country=us

Request Method: GET

Response

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
        "displayTitle": "III.     Darthulas Grabesesang: Mädchen von Kola, du schläfst! (Ossian, trans. Herder)",
        "sanitizedDisplayTitle": "Iii.     Darthulas Grabesesang: Mädchen Von Kola, Du Schläfst! (ossian, Trans. Herder)",
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
        "displayTitle": "III.     Darthulas Grabesesang: Mädchen von Kola, du schläfst! (Ossian, trans. Herder)",
        "sanitizedDisplayTitle": "Iii.     Darthulas Grabesesang: Mädchen Von Kola, Du Schläfst! (ossian, Trans. Herder)",
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
        "displayTitle": "Ya No Puedo Darte Más",
        "sanitizedDisplayTitle": "Ya No Puedo Darte Más",
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
Note: Sanitized fields will contain asterisks as a mask


### Detail

<table>
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Required</th>
		<th>Example</th>
	</tr>
	<tr>
		<td>cdin</td>
		<td>ChooseDigital id</td>
		<td>Yes</td>
		<td>cdin=89b4d797f3c34fd12699a3dc81259da756b1123e</td>
	</tr>
	<tr>
		<td>country</td>
		<td>One of "us" or "ca"</td>
		<td>No</td>
		<td>country=us (default is "us")</td>
	</tr>
</table>
		
		
Request URL:

```
http://apistg.choosedigital.net/music/detail/{cdin}/{country}
```		
	
Sample URLs: 

* http://apistg.choosedigital.net/music/detail/7de9747835d903c57a765c43d79eb09b6f6a1eb2/us
* http://apistg.choosedigital.net/music/detail/7de9747835d903c57a765c43d79eb09b6f6a1eb2


Request Method: GET

Response

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

### Purchase

<table>
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Required</th>
		<th>Example</th>
	</tr>
	<tr>
		<td>cdin</td>
		<td>ChooseDigital id</td>
		<td>Yes</td>
		<td>cdin=89b4d797f3c34fd12699a3dc81259da756b1123e</td>
	</tr>
	<tr>
		<td>customerId</td>
		<td>consumer id</td>
		<td>Yes</td>
		<td>consumerId=ABCDEF</td>
	</tr>
	<tr>
		<td>customerCountryCode</td>
		<td>One of "us" or "ca"</td>
		<td>Yes</td>
		<td>customerCountryCode=us</td>
	</tr>
	<tr>
		<td>priceSold</td>
		<td>price media was sold for</td>
		<td>Yes</td>
		<td>priceSold=208</td>
	</tr>
	<tr>
		<td>customerPostalCode</td>
		<td>Postal code</td>
		<td>Yes</td>
		<td>customerPostalCode=30155</td>
	</tr>
	<tr>
		<td>taxAmount</td>
		<td>Tax amount charged</td>
		<td>Yes</td>
		<td>taxAmount=7</td>
	</tr>
	<tr>
		<td>authentication</td>
		<td>Authentication</td>
		<td>Yes</td>
		<td>authentication=dkfjlweiFeie</td>
	</tr>
	<tr>
		<td>customerEmail</td>
		<td>customer Email</td>
		<td>No</td>
		<td>customerEmail=bob@Bob.com</td>
	</tr>
	<tr>
		<td>promoCode</td>
		<td>Promo code</td>
		<td>No</td>
		<td>promoCode=friday</td>
	</tr>
	<tr>
		<td>tenantId</td>
		<td>Tenant id</td>
		<td>No</td>
		<td>tenantId=partner1</td>
	</tr>
	<tr>
		<td>transactionId</td>
		<td>Partner transaction id</td>
		<td>No</td>
		<td>transactionId=123456</td>
	</tr>
</table>		


Request URL: 

```
http://apistg.choosedigital.net/music/purchase
```

Request Method: POST  (Must be signed)

In addition to the signig of The request an additonal signing is requiered:
authentication parameter - is a HMAC-SHA1 hash of concatenation of cdin , customerId , customerCountryCode , priceSold  and your secret, i.e 

    authentication = hashOf(cdin+customerId+customerCountryCode+priceSold, secret).

Sample program of a Music/purchase call can be found at: (read the ReadMe file first)
http://bit.ly/JL4Pby

Response

```js
{
"orderId":"WL2-3821126-2848539",
"downloadLink":"http://delivery-stage.choosedigital.cloudbees.net/user/music/download/146596fd82d990083609bf75c3fa4122102068af6627696113a5733c81870690/2b1220c86b1b2cb153cc54db17b7c24c07a5833b/1337626959558/c96a4e8c509e03ab8955218963f71d03b1e5cf3ec78f553ebbb2ac2a325e3e35",
"priceSold":"100",    
"release":
{        
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
"mp3PreviewUrl":"http://cdn.choosedigital.net/s/m/5099969361456/5099969361456_T-20067_SoundRecording_01-007.mp3","oggPreviewUrl":"http://cdn.choosedigital.net/s/m/5099969361456/5099969361456_T-20067_SoundRecording_01-007.ogg",
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

Note:  

* tenantId: allows our partners to assign and pass a corresponding  partner or client ID that pertains to a specific CD transaction.
8 transactionId: allows our partners to pass an assigned TransactionID from their system to be included within the CD transaction.

### Charts

<table>
	<tr>
		<th>Parameter</th>
		<th>Description</th>
		<th>Required</th>
		<th>Example</th>
	</tr>
	<tr>
		<td>listId</td>
		<td>The list id</td>
		<td>Yes</td>
		<td>listId=staffpicks</td>
	</tr>
	<tr>
		<td>genre</td>
		<td>Genre</td>
		<td>No</td>
		<td>genre=staffpicks</td>
	</tr>
	<tr>
		<td>country</td>
		<td>One of "us" or "ca"</td>
		<td>No</td>
		<td>country=us</td>
	</tr>
	<tr>
		<td>rows</td>
		<td>Number of rows to return</td>
		<td>No</td>
		<td>rows=20</td>
	</tr>
	<tr>
		<td>releaseType</td>
		<td>Type of release</td>
		<td>No</td>
		<td>releaseType=album</td>
	</tr>
</table>

Valid listIds:

* staffpicks
* latest
* top
* upcoming

Valid country codes:

* us
* ca

Valid release types:

* album
* trackrelease

Request URL: 

```
http://apistg.choosedigital.net/music/list/staffpicks/staffpicks
```

Request Method: GET

Response
```js
{
"displayTitle":"Staff Picks - Albums",
"releases":[
{
"cdin":"895a24ac65b9ce5f3702d8b6bd464602a8ed3fdc",
"available":"true",
"genre":"New Age",
"displayTitle":"Wine Country Dreams",
"label":"Green Hill Productions",
"copyright":"(C) 2012 Green Hill Productions",
"duration":"54:55",
"explicit":"false",
"icpn":"0792755582756",
"mainArtist":"Jack Jezzro",
"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/0792755582756_T-1372_Image.jpg",
"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/0792755582756_T-1372_Image.jpg",
"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/0792755582756_T-1372_Image.jpg",
"price":"999",
"preOrderDate":"2012-01-17T00:00:00Z","startDate":"2012-02-07T00:00:00Z","popularity":"0"
},
{
"cdin":"d2dcd37c6cdc649432df2b2ffa252b018d7c8d45",
"available":"false",
"genre":"Pop",
"displayTitle":"BBC Sessions (Saturday Club Recorded 1966)",
"label":"EMI Catalogue",
"copyright":"(C) 2012 EMI Records LtdThis label copy information is the subject of copyright protection. All rights reserved.(C) 2012 EMI Records Ltd",
"duration":"10:44",
"explicit":"false",
"icpn":"5099909190351",
"mainArtist":"Manfred Mann",
"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/5099909190351_T-1372_Image.jpg",
"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/5099909190351_T-1372_Image.jpg",
"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/5099909190351_T-1372_Image.jpg",
"price":"0",
"startDate":"2012-02-14T00:00:00Z","popularity":"0"
},
{
"cdin":"84142096ddf2bc7061acab30dfd03cdbbef3d8f3",
"available":"true",
"genre":"Pop",
"displayTitle":"La Historia Completa De Carlos Gardel - Volumen 1",
"label":"EMI Argentina",
"copyright":"(C) 2001 EMI Odeon SAIC This Labelcopy information is the subject of Copyright Protection. All rights reserved. (C) 2001 EMI Odeon SAIC",
"duration":"48:46",
"explicit":"false",
"icpn":"0094635615050",
"mainArtist":"Carlos Gardel",
"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/0094635615050_T-1372_Image.jpg",
"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/0094635615050_T-1372_Image.jpg",
"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/0094635615050_T-1372_Image.jpg",
"price":"1199",
"startDate":"2012-02-07T00:00:00Z","popularity":"0"
},
{
"cdin":"6298b5f47bc5b980bd7e4c5e8855198faffd1949",
"available":"true",
"genre":"Pop",
"displayTitle":"Les Souvenirs Sous Ma Frange",
"label":"Source etc",
"copyright":"(C) 2009 Source etc",
"duration":"1:00:20",
"explicit":"false",
"icpn":"5099945629556",
"mainArtist":"Rose",
"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/5099945629556_T-1372_Image.jpg",
"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/5099945629556_T-1372_Image.jpg",
"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/5099945629556_T-1372_Image.jpg",
"price":"999",
"startDate":"2012-02-07T00:00:00Z","popularity":"0"
},
{
"cdin":"1f337c53c7f6a947cf1adb4ef4e2ab99597bd6d6",
"available":"true",
"genre":"Pop",
"displayTitle":"Rose",
"label":"Source etc",
"copyright":"(C) 2006 SOURCE ETC",
"duration":"47:19",
"explicit":"false",
"icpn":"0094636965857",
"mainArtist":"Rose",
"smallImageUrl":"http://cdn.choosedigital.net/i/m/s/0094636965857_T-1372_Image.jpg",
"mediumImageUrl":"http://cdn.choosedigital.net/i/m/m/0094636965857_T-1372_Image.jpg",
"largeImageUrl":"http://cdn.choosedigital.net/i/m/l/0094636965857_T-1372_Image.jpg",
"price":"999",
"startDate":"2012-02-07T00:00:00Z","popularity":"0"
}
]
}
```
