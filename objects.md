# Objects

## Music

### Example Music Object

### Music fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>albumOnly</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadsAvailable</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genre</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>displayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>sanitizedDisplayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>icpn</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>albumIcpn</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>albumCdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>albumDisplayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>sanitizedAlbumDisplayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>label</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>copyright</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>duration</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>explicit</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mainArtist</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>artist</code></td>
		<td>list fo String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>httpPreviewUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>streamPreviewUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>smallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>largeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>componentNumber</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>trackNumber</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>price</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>preOrderDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>startDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>bitrate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>originalReleaseDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>multiArtistCompilation</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>currencyCode</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>purchaseDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>

	<tr>
		<td><code>remainingDownloads</code></td>
		<td>integer</td>
		<td></td>
	</tr>
</table>

## MusicChart

### Example MusicChart Object

### MusicChart fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>displayTitle</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>releases</td>
		<td>list of Music</td>
		<td></td>
	</tr>
</table>
		
		
## Errors

### Example Errors Object

### Errors fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>errors</td>
		<td>list of Error</td>
		<td></td>
	</tr>
</table>

## Error

### Example Error Object

### Error fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>parameter</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>message</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## Genre

### Example Genre Object

### Genre fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>name</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>count</td>
		<td>long</td>
		<td></td>
	</tr>
</table>

## ReleaseType

### Example ReleaseType Object

### ReleaseType fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>name</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>count</td>
		<td>long</td>
		<td></td>
	</tr>
</table>


## MusicSearchResult

### Example MusicSearchResult Object

### MusicSearchResult fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>numFound</td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td>start</td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td>searchTerm</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>genres</td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td>releaseTypes</td>
		<td>list of ReleaseType</td>
		<td></td>
	</tr>
	<tr>
		<td>releases</td>
		<td>list of Music</td>
		<td></td>
	</tr>
</table>

## Movie

### Example Movie Object

### Movie fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>cdin</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>title</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>sanitizedTitle</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>actors</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>copyrightInfo</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>genres</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>rating</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>director</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>runningTime</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>shortSynopsis</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>synopsis</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>originalReleaseYear</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>theatricalReleaseDate</td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td>httpTrailerUrl</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>rtmpTrailerUrl</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>smallImageUrl</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>mediumImageUrl</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>largeImageUrl</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>available</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>watchNow</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>offerings</td>
		<td>list of MovieOffering</td>
		<td></td>
	</tr>
</table>

## MovieOffering

### Example MovieOffering Object

### MovieOffering fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>cdin</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>price</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>rights</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>rentalHours</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>rentalExpiresDate</td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td>currencyCode</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>watchNow</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>purchaseDate</td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td>orderId</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>definition</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## MovieSearchResult

### Example MovieSearchResult Object

### MovieSearchResult fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>numFound</td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td>start</td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td>searchTerm</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>genres</td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td>movies</td>
		<td>list of Movie</td>
		<td></td>
	</tr>
</table>

## Book

### Example Book Object

### Book fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>cdin</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>creators</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>formatType</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>isbn</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>title</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>sanitizedTitle</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>coverImage</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>thumbnailImage</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>shortDescription</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>fullDescription</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>publisher</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>imprint</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>languages</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>series</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>edition</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>subjects</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>fileSize</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>retailPrice</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>availableDate</td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td>subtitle</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>digitalRights</td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td>contentDuration</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>numberOfParts</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>digitalExcerpt</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>available</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>purchaseDate</td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td>orderId</td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## BookChart

### Example BookChart Object

### BookChart fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>displayTitle</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>books</td>
		<td>list of Book</td>
		<td></td>
	</tr>
</table>

## BookPurchase

### Example BookPurchase Object

### BookPurchase fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>orderId</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>downloadLink</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>priceSold</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>book</td>
		<td>book</td>
		<td></td>
	</tr>
</table>

## BookSearchResult

### Example BookSearchResult Object

### BookSearchResult fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>numFound</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td>start</td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td>searchTerm</td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td>subjects</td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td>formatTypes</td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td>books</td>
		<td>list of Book</td>
		<td></td>
	</tr>
</table>

## Notes on data formats

### Dates

Dates will be formatted as a **strict** subset of [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601). Dates are parseable by almost any ISO 8601 date parser or merely by parsing from position. All dates will be formatted as follows:

`2012-12-31T13:22:55Z`

where `2012` is the year, `12` represents December, `31` represents the 31st day of the month, `13` represents 1 PM, `22` minutes and `55` seconds past the hour. All times will be expressed in terms of UTC.