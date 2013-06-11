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
      "name": "Romance",
      "count": 42
    },
    {
      "name": "Drama",
      "count": 24
    },
    {
      "name": "Family",
      "count": 18
    },
    {
      "name": "Action",
      "count": 15
    },
    {
      "name": "Adventure",
      "count": 8
    },
    {
      "name": "Independent",
      "count": 7
    },
    {
      "name": "Sport",
      "count": 7
    },
    {
      "name": "Holiday",
      "count": 6
    },
    {
      "name": "Kids",
      "count": 6
    },
    {
      "name": "Childrens",
      "count": 5
    },
    {
      "name": "Horror",
      "count": 3
    },
    {
      "name": "Musical",
      "count": 3
    },
    {
      "name": "Science Fiction",
      "count": 3
    },
    {
      "name": "Black Theme Or Star",
      "count": 2
    },
    {
      "name": "Romantic Comedy",
      "count": 2
    },
    {
      "name": "Black Comedy",
      "count": 1
    },
    {
      "name": "Crime",
      "count": 1
    },
    {
      "name": "Documentary",
      "count": 1
    },
    {
      "name": "Fantasy",
      "count": 1
    },
    {
      "name": "Foreign",
      "count": 1
    },
    {
      "name": "Mystery",
      "count": 1
    },
    {
      "name": "Thriller",
      "count": 1
    },
    {
      "name": "Western",
      "count": 1
    }
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
    {
      "cdin": "6ce34e10b2631917b6c7b1561cd60ed2984e9aa0",
      "title": "27 Dresses",
      "sanitizedTitle": "27 Dresses",
      "actors": [
        "Edward Burns",
        "Malin Åkerman",
        "James Marsden",
        "Judy Greer",
        "Katherine Heigl"
      ],
      "genres": [
        "Romance",
        "Comedy"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/27Dresses.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/27Dresses.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/27Dresses.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/030875.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/030875.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/030875.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/030875.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/030875.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/030875.jpg",
      "originalReleaseYear": "2008",
      "director": "Anne Fletcher",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "f5790f7e3fb7eb1908149ad05823166cb2a4c89b",
          "price": "2215",
          "rights": "buy",
          "definition": "SD"
        },
        {
          "cdin": "9a30616e377ddc60f6576fc6e599f464b8acb684",
          "price": "399",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "e139a76aeb5b5fa37a299c8c7b980133ae93fa81",
      "title": "3 Geezers",
      "sanitizedTitle": "3 Geezers",
      "actors": [
        "J.K. Simmons",
        "Scott Caan",
        "Tim Allen",
        "Randy Couture",
        "Breckin Meyer"
      ],
      "genres": [
        "Action",
        "Independent",
        "Comedy",
        "Drama"
      ],
      "rating": "NR",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000082925.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000082925.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000082925.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000082925.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000082925.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000082925.jpg",
      "originalReleaseYear": "2013",
      "director": "Michelle Schumacher",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "5917fd6dc7ac48f6971e02a6b26ac704b1644c11",
          "price": "399",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "f7a7f3fdd6809f8ccaf8f7e18899febfa8bf046a",
      "title": "3 Times A Charm",
      "sanitizedTitle": "3 Times A Charm",
      "actors": [
        "Noelle Perris",
        "Maxwell Glick",
        "Carlo Marks",
        "Michelle Glavan",
        "Lexi Giovagnoli"
      ],
      "genres": [
        "Childrens",
        "Family",
        "Comedy"
      ],
      "rating": "TV-PG",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_3_TIMES_A_CHARM_16x9_STEREO_TRAILER_E0392172_3494074.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_3_TIMES_A_CHARM_16x9_STEREO_TRAILER_E0392172_3494074.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_3_TIMES_A_CHARM_16x9_STEREO_TRAILER_E0392172_3494074.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000078398.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000078398.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000078398.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000078398.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000078398.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000078398.jpg",
      "originalReleaseYear": "2012",
      "director": "Letia Clouston",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "5c14795e041325d1dd7dfa6d31857a1258df7462",
          "price": "2215",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "b33ddbf80c21d824fe93eadaeb1effc5e31bdeb8",
      "title": "(500) Days of Summer",
      "sanitizedTitle": "(500) Days of Summer",
      "actors": [
        "Joseph Gordon-Levitt",
        "Zooey Deschanel"
      ],
      "genres": [
        "Romance",
        "Comedy"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/030858_500DaysOfSummer_DomesticTrailerA_.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/030858_500DaysOfSummer_DomesticTrailerA_.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/030858_500DaysOfSummer_DomesticTrailerA_.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/030858.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/030858.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/030858.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/030858.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/030858.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/030858.jpg",
      "originalReleaseYear": "2009",
      "director": "Marc Webb",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "160ad1c659aac4af700cb8bcd0864726dbe06cee",
          "price": "399",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        },
        {
          "cdin": "6f307fd8ad7e5925b4351fdb3ecd1cfbb2cd31ce",
          "price": "2215",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "eda0b3e160b4759fa7d7caaa911d7c7a4e54b6c9",
      "title": "9 To 5",
      "sanitizedTitle": "9 To 5",
      "actors": [
        "Dolly Parton",
        "Lily Tomlin",
        "Jane Fonda",
        "Dabney Coleman"
      ],
      "genres": [
        "Comedy"
      ],
      "rating": "PG",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/005418.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/005418.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/005418.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/005418.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/005418.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/005418.jpg",
      "originalReleaseYear": "1980",
      "director": "Colin Hughes",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "b388b3bfba3d20f51eac3bc6efcda2d3b955257d",
          "price": "299",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        },
        {
          "cdin": "2526383f0eec4ae87c9c6abaaf183f825e67d6db",
          "price": "799",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "424048f2414906822ea7dbcaa4028db8f53db718",
      "title": "Ace Ventura: Pet Detective",
      "sanitizedTitle": "Ace Ventura: Pet Detective",
      "actors": [
        "Courteney Cox",
        "Sean Young",
        "Tone Loc",
        "Jim Carrey"
      ],
      "genres": [
        "Comedy"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ACE_VENTURA_PET_DETECTIVE_16x9_MONO_TRAILER_E0007684_3116583.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_ACE_VENTURA_PET_DETECTIVE_16x9_MONO_TRAILER_E0007684_3116583.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ACE_VENTURA_PET_DETECTIVE_16x9_MONO_TRAILER_E0007684_3116583.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000178.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000178.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000178.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000178.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000178.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000178.jpg",
      "originalReleaseYear": "1994",
      "director": "Tom Shadyac",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "d819d977e9c323fdae73c2ba54e2ef832921be4a",
          "price": "299",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        },
        {
          "cdin": "eb789aa6d3af3c36d1f7b526893d31a91ea082ac",
          "price": "999",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "630288d1893369804ba273e4e10ced8c16c0195d",
      "title": "Ace Ventura: When Nature Calls",
      "sanitizedTitle": "Ace Ventura: When Nature Calls",
      "actors": [
        "Ian Mcneice",
        "Maynard Eziashi",
        "Bob Gunton",
        "Simon Callow",
        "Jim Carrey"
      ],
      "genres": [
        "Comedy"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ACE_VENTURA_WHEN_NATURE_CALLS_4x3_MONO_TRAILER_E0007705_3116584.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_ACE_VENTURA_WHEN_NATURE_CALLS_4x3_MONO_TRAILER_E0007705_3116584.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ACE_VENTURA_WHEN_NATURE_CALLS_4x3_MONO_TRAILER_E0007705_3116584.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000238.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000238.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000238.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000238.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000238.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000238.jpg",
      "originalReleaseYear": "1995",
      "director": "Steve Oedekerk",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "99ce299574b9e4c03a1660291920030bc478602e",
          "price": "999",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "99f34018aca1bc6fbc0faafc48dbcb32a4b86e35",
      "title": "Adam",
      "sanitizedTitle": "Adam",
      "actors": [
        "Peter Gallagher",
        "Hugh Dancy",
        "Rose Byrne",
        "Amy Irving",
        "Mark Linn-Baker",
        "Frankie Faison"
      ],
      "genres": [
        "Romance",
        "Comedy",
        "Drama"
      ],
      "rating": "PG-13",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/ADAMTrailer.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/ADAMTrailer.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/ADAMTrailer.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/108435.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/108435.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/108435.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/108435.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/108435.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/108435.jpg",
      "originalReleaseYear": "2009",
      "director": "Max Mayer",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "926ae15eda8ef6e65239e030df18455522079b43",
          "price": "299",
          "rights": "rent",
          "rentalHours": "24",
          "definition": "SD"
        },
        {
          "cdin": "0a132d247c68e46f1460a2ac84ebf60fc3a49fb7",
          "price": "1099",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    },
    {
      "cdin": "fd2904f17a1ebcfb2dfdb70107d396d94601079a",
      "title": "Addicted to Love",
      "sanitizedTitle": "Addicted to Love",
      "actors": [
        "Meg Ryan",
        "Matthew Broderick",
        "Tcheky Karyo",
        "Kelly Preston"
      ],
      "genres": [
        "Romance",
        "Comedy"
      ],
      "rating": "R",
      "httpTrailerUrl": "http://d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ADDICTED_TO_LOVE_16x9_MONO_TRAILER_E0016655_3116650.mp4",
      "rtmpTrailerUrl": "rtmp://s2sacn9d6arc57.cloudfront.net/cfx/st/s/v/Content_Chopper_ADDICTED_TO_LOVE_16x9_MONO_TRAILER_E0016655_3116650.mp4",
      "noSchemeHttpTrailerUrl": "//d3qcb5osaw6g5.cloudfront.net/s/v/Content_Chopper_ADDICTED_TO_LOVE_16x9_MONO_TRAILER_E0016655_3116650.mp4",
      "smallImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000237.jpg",
      "mediumImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000237.jpg",
      "largeImageUrl": "http://d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000237.jpg",
      "noSchemeSmallImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/s/6000000237.jpg",
      "noSchemeMediumImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/m/6000000237.jpg",
      "noSchemeLargeImageUrl": "//d3qcb5osaw6g5.cloudfront.net/i/f/l/6000000237.jpg",
      "originalReleaseYear": "1997",
      "director": "Griffin Dunne",
      "language": "English",
      "available": "false",
      "offerings": [
        {
          "cdin": "e32e92733857a4763172ec0fc77cd13ae23649d6",
          "price": "999",
          "rights": "buy",
          "definition": "SD"
        }
      ]
    }
  ]
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
