# History

## All

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>customerId + customerCountryCode</code>

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
         "cdin":"7aa802b0c3320d82656ff71a2b4faf3a254a531f",
         "title":"Can't Hold Us (feat. Ray Dalton)",
         "mainArtist":"Macklemore & Ryan Lewis",
         "orderDate":"2013-06-17T14:26:04Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"435a4552becce9f5af2d8cf21afcc625b65f9aab",
         "title":"Live",
         "mainArtist":"Ben Folds Five",
         "orderDate":"2013-06-06T19:42:19Z",
         "orderId":"ABC1234567890",
         "isTrack":false,
         "priceSold":"1099"
      },
      {
         "cdin":"dd54c8a66fef14cf467f69f9bb1bf8f616f3d02c",
         "title":"The Complete Led Zeppelin",
         "mainArtist":"Led Zeppelin",
         "orderDate":"2013-06-05T16:03:04Z",
         "orderId":"ABC1234567890",
         "isTrack":false,
         "priceSold":"9999"
      },
      {
         "cdin":"bc664c78205c9f238f7da761b4084e482ba10ab3",
         "title":"Skyfall (Full Length)",
         "mainArtist":"Adele",
         "orderDate":"2013-05-28T20:26:29Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"571a3e1557f653455944ec98b26544d02c9034f7",
         "title":"I Dreamed A Dream",
         "mainArtist":"Anne Hathaway",
         "orderDate":"2013-05-09T13:48:48Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"a10cf9872f3c74e689b9f4b996a414a296319ce7",
         "title":"Sure Be Cool If You Did",
         "mainArtist":"Blake Shelton",
         "orderDate":"2013-04-24T17:28:14Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"229597ddf762e5f436f5f8465ba2d5fc7ee13648",
         "title":"My Songs Know What You Did In The Dark (Light Em Up)",
         "mainArtist":"Fall Out Boy",
         "orderDate":"2013-04-24T16:10:32Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"eceff67f8373742530512b1ae3121b253e772eda",
         "title":"Suit & Tie featuring JAY Z",
         "mainArtist":"Justin Timberlake",
         "orderDate":"2013-04-24T14:50:20Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"90034c90b783a691fb27d827244f917181b28387",
         "title":"Demons",
         "mainArtist":"Imagine Dragons",
         "orderDate":"2013-04-24T13:31:25Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"fc3b27dfa54878e46be12f05b54aaf9c1a319b9d",
         "title":"Radioactive",
         "mainArtist":"Imagine Dragons",
         "orderDate":"2013-04-24T13:25:18Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"a21836415f241cb138dae5db0aa9304194f99119",
         "title":"The Next Day",
         "mainArtist":"David Bowie",
         "orderDate":"2013-04-22T14:19:51Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"129"
      },
      {
         "cdin":"9f1dc7f268ebf3ed1bc8fe265aa22bf74d4380a7",
         "title":"The Next Day",
         "mainArtist":"David Bowie",
         "orderDate":"2013-04-22T14:16:29Z",
         "orderId":"ABC1234567890",
         "isTrack":false,
         "priceSold":"1199"
      },
      {
         "cdin":"e0aa6405a221543f17e05458320e5117d6f42e4c",
         "title":"Queen Jane Approximately (Live)",
         "mainArtist":"Bob Dylan;The Grateful Dead;Dylan & The Dead",
         "orderDate":"2013-04-18T16:08:03Z",
         "orderId":"ABC1234567890",
         "isTrack":true,
         "priceSold":"99"
      }
   ],
   "ebookPurchases":[
      {
         "cdin":"129679fd12bd33abae983b909aabd198db9eeb10",
         "title":"The Business Wisdom of Steve Jobs",
         "orderDate":"2013-05-03T16:52:16Z",
         "orderId":"ABC1234567890",
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
         "orderId":"ABC1234567890",
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
         "orderId":"ABC1234567890",
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
         "orderId":"ABC1234567890",
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
         "orderId":"ABC1234567890",
         "priceSold":"499"
      },
      {
         "cdin":"8e1017990ba026a420dfaa7f7360a199545e16ef",
         "title":"The Hobbit : An Unexpected Journey",
         "orderDate":"2013-04-19T13:49:59Z",
         "realExpiresDate":"2013-05-19T13:49:59Z",
         "watchNow":"false",
         "orderId":"ABC1234567890",
         "priceSold":"499"
      },
      {
         "cdin":"0f7fc674f43a4318646257f190879ce6374a4d30",
         "title":"Killing Them Softly",
         "orderDate":"2013-04-09T20:09:08Z",
         "realExpiresDate":"2013-04-10T20:10:31Z",
         "watchNow":"false",
         "orderId":"ABC1234567890",
         "priceSold":"399"
      },
      {
         "cdin":"8e1017990ba026a420dfaa7f7360a199545e16ef",
         "title":"The Hobbit : An Unexpected Journey",
         "orderDate":"2013-04-08T14:46:59Z",
         "realExpiresDate":"2013-04-09T14:48:02Z",
         "watchNow":"false",
         "orderId":"ABC1234567890",
         "priceSold":"499"
      }
   ],
   "moviePurchases":[
      {
         "cdin":"53eb2d9782f93ec1334e1b19e0f9940145fba330",
         "title":"Jack the Giant Slayer",
         "orderDate":"2013-07-08T17:42:06Z",
         "orderId":"ABC1234567890",
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
         "orderId":"ABC1234567890",
         "priceSold":"199"
      },
      {
         "cdin":"bd49d7d446c752c081e63b8824a40a9519c1afa5",
         "title":"Modern Family: The Complete Third Season",
         "seriesName":"Modern Family",
         "seasonNumber":"3",
         "episodeNumber":"0",
         "orderDate":"2013-04-10T21:09:35Z",
         "orderId":"ABC1234567890",
         "priceSold":"2999"
      }
   ]
}
```

## Count

The [authentication parameter](/resources/General.md#authentication-parameter) is calculated by <code>customerId + customerCountryCode</code>

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

