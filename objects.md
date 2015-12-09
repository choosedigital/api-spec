# Objects

## Music objects

<ul>
<li><a href="#music">Music</a></li>
<li><a href="#musicchart">MusicChart</a></li>
<li><a href="#musicsearchresult">MusicSearchResult</a></li>
<li><a href="#musicpurchaseinfo">MusicPurchaseInfo</a></li>
<li><a href="#releasetype">ReleaseType</a></li>
<li><a href="#release">Release</a></li>
<li><a href="#downloadinfo">DownloadInfo</a></li>
<li><a href="#container">Container</a></li>
<li><a href="#component">Component</a></li>
</ul>

## Movie objects

<ul>
<li><a href="#movie">Movie</a></li>
<li><a href="#movieoffering">MovieOffering</a></li>
<li><a href="#moviechart">MovieChart</a></li>
<li><a href="#moviesearchresult">MovieSearchResult</a></li>
<li><a href="#movierental">MovieRental</a></li>
<li><a href="#moviepurchase">MoviePurchase</a></li>
<li><a href="#playerinfo">PlayerInfo</a></li>
</ul>

## Television objects

<ul>
<li><a href="#televisioncontainer">TelevisionContainer</a></li>
<li><a href="#televisionresponse">TelevisionResponse</a></li>
<li><a href="#televisionchart">TelevisionChart</a></li>
<li><a href="#televisionsearchresult">TelevisionSearchResult</a></li>
<li><a href="#televisionpurchase">TelevisionPurchase</a></li>
<li><a href="#televisionplayerinfo">TelevisionPlayerInfo</a></li>
</ul>

## Book objects

<ul>
<li><a href="#book">Book</a></li>
<li><a href="#bookchart">BookChart</a></li>
<li><a href="#booksearchresult">BookSearchResult</a></li>
<li><a href="#bookpurchase">BookPurchase</a></li>
</ul>

## General objects

<ul>
<li><a href="#errors">Errors</a></li>
<li><a href="#error">Error</a></li>
<li><a href="#address">Address</a></li>
<li><a href="#addressresponse">AddressResponse</a></li>
<li><a href="#genre">Genre</a></li>
<li><a href="#cancelorder">CancelOrder</a></li>
<li><a href="#updateorder">UpdateOrder</a></li>
<li><a href="#promoitem">PromoItem</a></li>
<li><a href="#dates">Date Formatting</a></li>
</ul>


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
		<td>list of String</td>
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
		<td><code>displayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releases</code></td>
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
		<td><code>errors</code></td>
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
		<td><code>parameter</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>message</code></td>
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
		<td><code>name</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>count</code></td>
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
		<td><code>name</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>count</code></td>
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
		<td><code>numFound</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>searchTerm</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseTypes</code></td>
		<td>list of ReleaseType</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releases</code></td>
		<td>list of Music</td>
		<td></td>
	</tr>
</table>

## MusicPurchaseInfo

### Example MusicPurchaseInfo Object

### MusicPurchaseInfo fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadInfos</code></td>
		<td>List of <a href="#downloadinfo">DownloadInfo</a>s</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRateDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRate</code></td>
		<td>decimal</td>
		<td></td>
	</tr>
	<tr>
		<td><code>container</code></td>
		<td><a href="#container">Container</a></td>
		<td></td>
	</tr>
	<tr>
		<td><code>release</code></td>
		<td><a href="#release">Release</a></td>
		<td></td>
	</tr>
</table>

## Release

### Example Release Object

### Release fields

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
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadsAvailable</code></td>
		<td>string</td>
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
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mainArtist</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>artist</code></td>
		<td>list of strings</td>
		<td></td>
	</tr>
	<tr>
		<td><code>httpPreviewUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeHttpPreviewUrl</code></td>
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
		<td><code>noSchemeSmallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>componentNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>trackNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>price</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>startDate</code></td>
		<td>string</td>
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
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>


## Container

### Example Container Object

### Container fields

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
		<td><code>available</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadsAvailable</code></td>
		<td>string</td>
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
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mainArtist</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>multiArtistCompilation</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>componentNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>trackNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>artist</code></td>
		<td>list of strings</td>
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
		<td><code>noSchemeSmallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>price</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>startDate</code></td>
		<td>string</td>
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
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>components</code></td>
		<td>list of <a href="#component">Component</a>s</td>
		<td></td>
	</tr>
</table>

## Component

### Example Component Object

### Component fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>componentNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>trackReleases</code></td>
		<td>list of <a href="#release">Release</a>s</td>
		<td></td>
	</tr>
</table>


## DownloadInfo

### Example DownloadInfo Object

### DownloadInfo fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>url</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>remaining</code></td>
		<td>string</td>
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
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>sanitizedTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>actors</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>copyrightInfo</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>director</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>runningTime</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>shortSynopsis</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>synopsis</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>originalReleaseYear</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>theatricalReleaseDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>httpTrailerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rtmpTrailerUrl</code></td>
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
		<td><code>available</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>watchNow</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>offerings</code></td>
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
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>price</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rights</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rentalHours</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rentalExpiresDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>currencyCode</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>watchNow</code></td>
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
		<td><code>definition</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## MovieChart

### Example MovieChart Object

### MovieChart fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>displayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>movies</code></td>
		<td>list of Movie</td>
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
		<td><code>numFound</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>searchTerm</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td><code>movies</code></td>
		<td>list of Movie</td>
		<td></td>
	</tr>
</table>

## MovieRental

### Example MovieRental Object

### MovieRental fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>streamLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rentalHours</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRateDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRate</code></td>
		<td>decimal</td>
		<td></td>
	</tr>
	<tr>
		<td><code>movie</code></td>
		<td>movie</td>
		<td></td>
	</tr>
</table>

## MoviePurchase

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadLink</code></td>
		<td>string</td>
		<td>(For special split purchase-delivery apps. Please contact Choose Digital)</td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRateDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRate</code></td>
		<td>decimal</td>
		<td></td>
	</tr>
	<tr>
		<td><code>movie</code></td>
		<td>movie</td>
		<td>data of the buy or rent offering</td>
	</tr>
</table>

## PlayerInfo

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>purchaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rentalExpiresDate</code></td>
		<td>ddate</td>
		<td></td>
	</tr>
	<tr>
		<td><code>videoReferenceId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>ratingReason</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>playerId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>playerKey</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>


## TelevisionResponse

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>displayEpisode</code></td>
		<td>TelevisionContainer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>season</code></td>
		<td>TelevisionContainer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodes</code></td>
		<td>List of TelevisionContainers</td>
		<td></td>
	</tr>
	<tr>
		<td><code>allSeasons</code></td>
		<td>List of TelevisionContainers</td>
		<td></td>
	</tr>
</table>

## TelevisionContainer

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
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
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>synopsis</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>copyrightInfo</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>actors</code></td>
		<td>list of string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>list of string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>runningTime</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>retailPrice</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>format</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>originalBroadcastDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodeNumber</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonCdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonNumber</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonYear</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonRetailPrice</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>salesStartDate</code></td>
		<td>date</td>
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
		<td><code>smallSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mediumSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>largeSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## TelevisionSeason

### Example TelevisionSeason Object

### TelevisionSeason fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>purchaseDate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>synopsis</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonYear</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesBanner</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSeriesBanner</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>copyrightInfo</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>actors</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>retailPrice</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>format</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
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
		<td><code>noSchemeSmallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>smallSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mediumSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>largeSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSmallSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSeriesBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>salesStartDate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodes</code></td>
		<td>List of TelevisionEpisodes</td>
		<td></td>
	</tr>
</table>


## TelevisionEpisode

### Example TelevisionEpisode Object

### TelevisionEpisode fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>purchaseDate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>videoReferenceId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodeName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodeNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>synopsis</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonCdin</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonYear</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>copyrightInfo</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>actors</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genres</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>runningTime</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>retailPrice</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonRetailPrice</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>format</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>popularity</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>originalBroadcastDate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>smallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSmallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>largeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>salesStartDate</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>smallSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>mediumSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>largeSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSmallSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeSeriesLogoUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSeriesBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeSmallImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeMediumImageUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeLargeImageUrl</code></td>
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
</table>


## TelevisionChart

### Example TelevisionChart Object

### TelevisionChart fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>isList</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>listId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>genre</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>country</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rows</code></td>
		<td>integer</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>displayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releases</code></td>
		<td>list of TelevisionContainer</td>
		<td></td>
	</tr>
</table>



## TelevisionSearchResult

### Example TelevisionSearchResult Object

### TelevisionSearchResult fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>numFound</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>searchTerm</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releases</code></td>
		<td>List of TelevisionContainer</td>
		<td></td>
	</tr>
</table>

## TelevisionContainer

### Fields

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
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>runningTime</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>rating</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seriesName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>seasonYear</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodeName</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>episodeNumber</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>releaseType</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>

## TelevisionPurchase

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>streamLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRateDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRate</code></td>
		<td>decimal</td>
		<td></td>
	</tr>
	<tr>
		<td><code>televisionContainer</code></td>
		<td>TelevisionContainer</td>
		<td></td>
	</tr>
</table>

## TelevisionPlayerInfo

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>playerId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>playerKey</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>currentEpisode</code></td>
		<td>TelevisionEpisode</td>
		<td></td>
	</tr>
	<tr>
		<td><code>allEpisodes</code></td>
		<td>list of TelevisionEpisodes</td>
		<td></td>
	</tr>
</table>



## Book

### Fields

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
		<td><code>creators</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>formatType</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>isbn</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>title</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>sanitizedTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>coverImage</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>thumbnailImage</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>shortDescription</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>fullDescription</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>publisher</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>imprint</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>languages</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>series</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>edition</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>subjects</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>fileSize</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>retailPrice</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>availableDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>subtitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>digitalRights</code></td>
		<td>list of String</td>
		<td></td>
	</tr>
	<tr>
		<td><code>contentDuration</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>numberOfParts</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>digitalExcerpt</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>available</code></td>
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
</table>



## BookChart

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>displayTitle</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>books</code></td>
		<td>list of Book</td>
		<td></td>
	</tr>
</table>



## BookPurchase

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>downloadLink</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRateDate</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exchangeRate</code></td>
		<td>decimal</td>
		<td></td>
	</tr>
	<tr>
		<td><code>book</code></td>
		<td>book</td>
		<td></td>
	</tr>
</table>



## BookSearchResult

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>numFound</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>start</code></td>
		<td>long</td>
		<td></td>
	</tr>
	<tr>
		<td><code>searchTerm</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>subjects</code></td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td><code>formatTypes</code></td>
		<td>list of Genre</td>
		<td></td>
	</tr>
	<tr>
		<td><code>books</code></td>
		<td>list of Book</td>
		<td></td>
	</tr>
</table>



## Address

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>street1</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>street2</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>city</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>region</code></td>
		<td>string</td>
		<td>aka, state</td>
	</tr>
	<tr>
		<td><code>postalCode</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>plus4</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>countryCode</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>


## AddressResponse

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>status</code></td>
		<td>string</td>
		<td>"Ok", "Corrected", "CouldNotCorrect", "UnsupportedCountry"</td>
	</tr>
	<tr>
		<td><code>addresses</code></td>
		<td>array of <a href="#address">Address</a></td>
		<td>A <a href="/resources/Address.md">valid address</a> is required for purchasing <a href="/resources/EBook.md#agency-ebooks">agency</a> eBooks.</td>
	</tr>
</table>




## CancelOrder

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cancelOrderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cancelTransactionDateUTC</code></td>
		<td>date</td>
		<td></td>
	</tr>
	<tr>
		<td><code>priceSold</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>cancelTransactionId</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>



## UpdateOrder

### Fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>orderId</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>transactionId</code></td>
		<td>string</td>
		<td></td>
	</tr>
</table>



## PromoItem

### Example UpdateOrder Object

```js
{
	"name": "movie - Cloud Atlas",
	"importance": 40,
	"bannerUrl": "http://d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/cloud_atlas_mo_240x80.jpg",
	"noSchemeBannerUrl": "//d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/cloud_atlas_mo_240x80.jpg",
	"altText": "movie - Cloud Atlas",
	"exclusive": false,
	"linkUrl": "/movie/detail/480e0a5b042e1c8b739ca742252ffc0c4d51ef41",
}
```

### PromoItem fields

<table>
	<tr>
		<th>Field</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td><code>name</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>importance</code></td>
		<td>number</td>
		<td></td>
	</tr>
	<tr>
		<td><code>bannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>noSchemeBannerUrl</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>altText</code></td>
		<td>string</td>
		<td></td>
	</tr>
	<tr>
		<td><code>exclusive</code></td>
		<td>boolean</td>
		<td></td>
	</tr>
	<tr>
		<td><code>linkUrl</code></td>
		<td>string</td>
		<td>specific route for detail page structured as /mediaType/detail/cdin</td>
	</tr>
</table>


## Notes on data formats

### Dates

Dates will be formatted as a **strict** subset of [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601). Dates are parseable by almost any ISO 8601 date parser or merely by parsing from position. All dates will be formatted as follows:

`2012-12-31T13:22:55Z`

where `2012` is the year, `12` represents December, `31` represents the 31st day of the month, `13` represents 1 PM, `22` minutes and `55` seconds past the hour. All times will be expressed in terms of UTC.


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
