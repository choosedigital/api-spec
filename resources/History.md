# History

## All

### URL 
> http://[apidomain]/history/all

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
		<td><code>customerCountryCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> POST http://[apidomain]/history/all
```js
{
   "musicPurchases":[
      {
         "cdin":"c7270eebfc8515550937f6fddac0be83409b3433",
         "title":"My Songs Know What You Did In The Dark (Light Em Up)",
         "mainArtist":"Fall Out Boy",
         "orderDate":"2013-06-21T06:37:22Z",
         "orderId":"CDP-DFO-3175543-8446487",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"ff01c996f22ceb8c606285f60773d03d53616de7",
         "title":"Get Lucky",
         "mainArtist":"Daft Punk feat. Pharrell Williams",
         "orderDate":"2013-06-20T20:40:41Z",
         "orderId":"CDP-DFO-7327726-4678429",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"7aa802b0c3320d82656ff71a2b4faf3a254a531f",
         "title":"Can't Hold Us (feat. Ray Dalton)",
         "mainArtist":"Macklemore & Ryan Lewis",
         "orderDate":"2013-06-17T14:26:04Z",
         "orderId":"CDP-DFO-9320181-6354021",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"435a4552becce9f5af2d8cf21afcc625b65f9aab",
         "title":"Live",
         "mainArtist":"Ben Folds Five",
         "orderDate":"2013-06-06T19:42:19Z",
         "orderId":"CDP-DFO-4094562-7386126",
         "isTrack":false,
         "priceSold":"1099"
      },
      {
         "cdin":"dd54c8a66fef14cf467f69f9bb1bf8f616f3d02c",
         "title":"The Complete Led Zeppelin",
         "mainArtist":"Led Zeppelin",
         "orderDate":"2013-06-05T16:03:04Z",
         "orderId":"CDP-DFO-2260515-0453436",
         "isTrack":false,
         "priceSold":"9999"
      },
      {
         "cdin":"bc664c78205c9f238f7da761b4084e482ba10ab3",
         "title":"Skyfall (Full Length)",
         "mainArtist":"Adele",
         "orderDate":"2013-05-28T20:26:29Z",
         "orderId":"CDP-DFO-2762045-2160787",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"950e70c6f47625340fd503009df9d71354a16aa0",
         "title":"Cruise",
         "mainArtist":"Florida Georgia Line",
         "orderDate":"2013-05-17T18:36:55Z",
         "orderId":"CDP-DFO-1588672-5323005",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"f5d2d27373772b4d0fff80b5abee2287772287ce",
         "title":"The Bishop",
         "mainArtist":"Colm Wilkinson",
         "orderDate":"2013-05-09T14:11:31Z",
         "orderId":"CDP-DFO-3101464-6711809",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"571a3e1557f653455944ec98b26544d02c9034f7",
         "title":"I Dreamed A Dream",
         "mainArtist":"Anne Hathaway",
         "orderDate":"2013-05-09T13:48:48Z",
         "orderId":"CDP-DFO-8092877-4174486",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"fd44e2341578cf7037aafe3f8b8cab0ac204ab3c",
         "title":"At The End Of The Day",
         "mainArtist":"Hugh Jackman",
         "orderDate":"2013-05-09T13:48:37Z",
         "orderId":"CDP-DFO-0251013-9026644",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"7511c20641abbb0d8d0e9fa1b3eefabc5ce3c2c0",
         "title":"Valjean's Soliloquy",
         "mainArtist":"Hugh Jackman",
         "orderDate":"2013-05-09T13:48:27Z",
         "orderId":"CDP-DFO-2936969-0192622",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"ad88eae77ab0ec74c3bf54be23cf1d4496e645f0",
         "title":"The Bishop",
         "mainArtist":"Colm Wilkinson",
         "orderDate":"2013-05-09T13:48:20Z",
         "orderId":"CDP-DFO-6248753-1133642",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"7a029e589c5cf88187637611443bb061bb8cc3de",
         "title":"Look Down",
         "mainArtist":"Hugh Jackman",
         "orderDate":"2013-05-09T13:48:10Z",
         "orderId":"CDP-DFO-6053727-7104845",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"a10cf9872f3c74e689b9f4b996a414a296319ce7",
         "title":"Sure Be Cool If You Did",
         "mainArtist":"Blake Shelton",
         "orderDate":"2013-04-24T17:28:14Z",
         "orderId":"CDP-DFO-9591341-2610961",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"229597ddf762e5f436f5f8465ba2d5fc7ee13648",
         "title":"My Songs Know What You Did In The Dark (Light Em Up)",
         "mainArtist":"Fall Out Boy",
         "orderDate":"2013-04-24T16:10:32Z",
         "orderId":"CDP-DFO-9747347-0411160",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"de349eed783360a8dc752dd187edf7e93374a398",
         "title":"I Want Crazy",
         "mainArtist":"Hunter Hayes",
         "orderDate":"2013-04-24T16:01:32Z",
         "orderId":"CDP-DFO-6123514-0398184",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"59b26957c2b0ca093c7e4c6d5ea49dcd72a30b03",
         "title":"Feel This Moment",
         "mainArtist":"Pitbull feat. Christina Aguilera",
         "orderDate":"2013-04-24T15:11:07Z",
         "orderId":"CDP-DFO-6101998-3194949",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"eceff67f8373742530512b1ae3121b253e772eda",
         "title":"Suit & Tie featuring JAY Z",
         "mainArtist":"Justin Timberlake",
         "orderDate":"2013-04-24T14:50:20Z",
         "orderId":"CDP-DFO-1060137-0044259",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"ac12cc1c1544aa5ae45502c12597236f81184633",
         "title":"Pusher Love Girl",
         "mainArtist":"Justin Timberlake",
         "orderDate":"2013-04-24T14:49:43Z",
         "orderId":"CDP-DFO-5969926-8082014",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"90034c90b783a691fb27d827244f917181b28387",
         "title":"Demons",
         "mainArtist":"Imagine Dragons",
         "orderDate":"2013-04-24T13:31:25Z",
         "orderId":"CDP-DFO-1674074-2946565",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"fc3b27dfa54878e46be12f05b54aaf9c1a319b9d",
         "title":"Radioactive",
         "mainArtist":"Imagine Dragons",
         "orderDate":"2013-04-24T13:25:18Z",
         "orderId":"CDP-DFO-3007770-6273497",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"e85a142f65bbbc0baaded3ff119ec4c838438ac5",
         "title":"Video Games",
         "mainArtist":"Lana Del Rey",
         "orderDate":"2013-04-22T14:25:58Z",
         "orderId":"CDP-DFO-7725437-2774585",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"7948bde6569bb8ba1673b3c50641817504a5feb0",
         "title":"Born To Die - The Paradise Edition",
         "mainArtist":"Lana Del Rey",
         "orderDate":"2013-04-22T14:23:44Z",
         "orderId":"CDP-DFO-4644654-8708496",
         "isTrack":false,
         "priceSold":"1599"
      },
      {
         "cdin":"a21836415f241cb138dae5db0aa9304194f99119",
         "title":"The Next Day",
         "mainArtist":"David Bowie",
         "orderDate":"2013-04-22T14:19:51Z",
         "orderId":"CDP-DFO-9817817-3290442",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"9f1dc7f268ebf3ed1bc8fe265aa22bf74d4380a7",
         "title":"The Next Day",
         "mainArtist":"David Bowie",
         "orderDate":"2013-04-22T14:16:29Z",
         "orderId":"CDP-DFO-2197124-5133036",
         "isTrack":false,
         "priceSold":"1199"
      },
      {
         "cdin":"e0aa6405a221543f17e05458320e5117d6f42e4c",
         "title":"Queen Jane Approximately (Live)",
         "mainArtist":"Bob Dylan;The Grateful Dead;Dylan & The Dead",
         "orderDate":"2013-04-18T16:08:03Z",
         "orderId":"CDP-DFO-0441970-2186406",
         "isTrack":true,
         "priceSold":"99"
      }
   ],
   "ebookPurchases":[
      {
         "cdin":"129679fd12bd33abae983b909aabd198db9eeb10",
         "title":"The Business Wisdom of Steve Jobs",
         "orderDate":"2013-05-03T16:52:16Z",
         "orderId":"CDP-DFO-3136090-5891138",
         "priceSold":"399",
         "creators":[
            "Alan Ken Thomas"
         ],
         "formatType":"Adobe EPUB eBook"
      },
      {
         "cdin":"234a25f4dfc9028777bbc6add64325141e638802",
         "title":"The War of the Worlds",
         "orderDate":"2013-05-03T14:52:19Z",
         "orderId":"CDP-DFO-6620629-0093388",
         "priceSold":"595",
         "creators":[
            "H. G. Wells"
         ],
         "formatType":"Adobe EPUB eBook"
      }
   ],
   "audioBookPurchases":[
      {
         "cdin":"1af1b769f119900b322f48dd3eb224270fba1601",
         "title":"London",
         "orderDate":"2013-05-03T16:52:53Z",
         "orderId":"CDP-DFO-9335393-1885890",
         "priceSold":"200",
         "creators":[
            "Sholeh Johnston",
            "Siân Thomas",
            "©AudioGO Ltd 2011"
         ],
         "formatType":"OverDrive MP3 Audiobook"
      },
      {
         "cdin":"a67807b45f2793c21dac7db0de33c639ed9126f6",
         "title":"Paris",
         "orderDate":"2013-05-03T15:48:22Z",
         "orderId":"CDP-DFO-2419451-9155305",
         "priceSold":"200",
         "creators":[
            "Sholeh Johnston",
            "Stephane Cornicard",
            "©AudioGO Ltd 2011"
         ],
         "formatType":"OverDrive MP3 Audiobook"
      }
   ],
   "movieRentals":[
      {
         "cdin":"0da1bc1cd49c89d5ef401da0cb160ca7d5fc0776",
         "title":"The Last Ride",
         "orderDate":"2013-07-09T13:59:45Z",
         "realExpiresDate":"2013-08-08T13:59:45Z",
         "watchNow":"true",
         "orderId":"CDP-DFO-1273002-4973985",
         "priceSold":"499"
      },
      {
         "cdin":"8e1017990ba026a420dfaa7f7360a199545e16ef",
         "title":"The Hobbit : An Unexpected Journey",
         "orderDate":"2013-04-19T13:49:59Z",
         "realExpiresDate":"2013-05-19T13:49:59Z",
         "watchNow":"false",
         "orderId":"CDP-DFO-9365661-9466182",
         "priceSold":"499"
      },
      {
         "cdin":"0f7fc674f43a4318646257f190879ce6374a4d30",
         "title":"Killing Them Softly",
         "orderDate":"2013-04-09T20:09:08Z",
         "realExpiresDate":"2013-04-10T20:10:31Z",
         "watchNow":"false",
         "orderId":"CDP-DFO-5860009-8317230",
         "priceSold":"399"
      },
      {
         "cdin":"8e1017990ba026a420dfaa7f7360a199545e16ef",
         "title":"The Hobbit : An Unexpected Journey",
         "orderDate":"2013-04-08T14:46:59Z",
         "realExpiresDate":"2013-04-09T14:48:02Z",
         "watchNow":"false",
         "orderId":"CDP-DFO-3305182-8837477",
         "priceSold":"499"
      }
   ],
   "moviePurchases":[
      {
         "cdin":"53eb2d9782f93ec1334e1b19e0f9940145fba330",
         "title":"Jack the Giant Slayer",
         "orderDate":"2013-07-08T17:42:06Z",
         "orderId":"CDP-DFO-5076574-5249991",
         "priceSold":"2215"
      }
   ],
   "televisionPurchases":[
      {
         "cdin":"0ac47868d6430e2360c2a1063772284b8452717a",
         "title":"The Avengers",
         "seriesName":"The OC",
         "seasonNumber":"4",
         "episodeNumber":"1",
         "orderDate":"2013-04-15T14:51:02Z",
         "orderId":"CDP-DFO-3165306-6354930",
         "priceSold":"199"
      },
      {
         "cdin":"bd49d7d446c752c081e63b8824a40a9519c1afa5",
         "title":"Modern Family: The Complete Third Season",
         "seriesName":"Modern Family",
         "seasonNumber":"3",
         "episodeNumber":"0",
         "orderDate":"2013-04-10T21:09:35Z",
         "orderId":"CDP-DFO-1294273-8007126",
         "priceSold":"2999"
      }
   ]
}
```

## Count

### URL 
> http://[apidomain]/history/count

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
		<td><code>customerCountryCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td>valid values: us, ca</td>
	</tr>
	<tr>
		<td><code>authentication</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

### Example

> POST http://[apidomain]/history/count
```js
```

#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.

