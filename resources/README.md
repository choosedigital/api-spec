# Resources

The ChooseDigital API is a JSON API.

##[Music](/choosedigital/api-spec/blob/master/resources/Music.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/music/artist/[artist]/[country]/[albumOnly]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#retrieve-artist-detail">Retrieve Artist Detail</a></td>
        </tr>
	    <tr>
            <td>/music/list/[listId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#">List</a></td>
        </tr>
	    <tr>
            <td>/music/download/[cdin]/[hashedCustomerId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#download">Download</a></td>
        </tr>
	    <tr>
            <td>/music/genres</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#list-all-genres">List All Genres</a></td>
        </tr>
	    <tr>
            <td>/music/curatedcharts/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#curated-charts">Curated Charts</a></td>
        </tr>
	    <tr>
            <td>/music/search</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#search">Search</a></td>
        </tr>
	    <tr>
            <td>/music/detail/[cdin]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#detail">Detail</a></td>
        </tr>
	    <tr>
            <td>/music/resetdownload</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#reset-download">Reset Download</a></td>
        </tr>
	    <tr>
            <td>/music/purchase</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#purchase">Purchase</a></td>
        </tr>
	    <tr>
            <td>/music/update</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#update">Update</a></td>
        </tr>
	    <tr>
            <td>/music/cancel</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#cancel">Cancel</a></td>
        </tr>
	    <tr>
            <td>/music</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Music.md#service-check">Service Check</a></td>
        </tr>
    </tbody>
</table>

##[Movie](/choosedigital/api-spec/blob/master/resources/Movie.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/movie/list/[listId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#list">List</a></td>
        </tr>
	    <tr>
            <td>/movie/playerinfo/[cdin]/[hashedCustomerId]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#player-info">Player Info</a></td>
        </tr>
	    <tr>
            <td>/movie/search</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#search">Search</a></td>
        </tr>
	    <tr>
            <td>/movie/detail/[cdin]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#detail">Detail</a></td>
        </tr>
	    <tr>
            <td>/movie/purchase</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#purchase">Purchase</a></td>
        </tr>
	    <tr>
            <td>/movie/genres</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#genres">Genres</a></td>
        </tr>
	    <tr>
            <td>/movie/curatedcharts/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#curated-charts">Curated Charts</a></td>
        </tr>
	    <tr>
            <td>/movie/update</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#update">Update</a></td>
        </tr>
	    <tr>
            <td>/movie/cancel</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#cancel">Cancel</a></td>
        </tr>
	    <tr>
            <td>/movie</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/Movie.md#service-check">Service Check</a></td>
        </tr>
    </tbody>
</table>

##[EBook](/choosedigital/api-spec/blob/master/resources/EBook.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/ebook/list/[listId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#list">List</a></td>
        </tr>
	    <tr>
            <td>/ebook/download/[cdin]/[hashedCustomerId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#download">Download</a></td>
        </tr>
	    <tr>
            <td>/ebook/search</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#search">Search</a></td>
        </tr>
	    <tr>
            <td>/ebook/detail/[cdin]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#detail">Detail</a></td>
        </tr>
	    <tr>
            <td>/ebook/curatedcharts/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#curated-charts">Curated Charts</a></td>
        </tr>
	    <tr>
            <td>/ebook/purchase</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#purchase">Purchase</a></td>
        </tr>
	    <tr>
            <td>/ebook/update</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#update">Update</a></td>
        </tr>
	    <tr>
            <td>/ebook/cancel</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#cancel">Cancel</a></td>
        </tr>
	    <tr>
            <td>/ebook</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/EBook.md#service-check">Service Check</a></td>
        </tr>
    </tbody>
</table>

##[AudioBook](/choosedigital/api-spec/blob/master/resources/AudioBook.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/audiobook/list/[listId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#list">List</a></td>
        </tr>
	    <tr>
            <td>/audiobook/download/[cdin]/[hashedCustomerId]/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#download">Download</a></td>
        </tr>
	    <tr>
            <td>/audiobook/search</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#search">Search</a></td>
        </tr>
	    <tr>
            <td>/audiobook/detail/[cdin]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#detail">Detail</a></td>
        </tr>
	    <tr>
            <td>/audiobook/curatedcharts/[country]</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#curated-charts">Curated Charts</a></td>
        </tr>
	    <tr>
            <td>/audiobook/purchase</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#purchase">Purchase</a></td>
        </tr>
	    <tr>
            <td>/audiobook/update</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#update">Update</a></td>
        </tr>
	    <tr>
            <td>/audiobook/cancel</td>
            <td>PUT</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#cancel">Cancel</a></td>
        </tr>
	    <tr>
            <td>/ebook</td>
            <td>GET</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/AudioBook.md#service-check">Service Check</a></td>
        </tr>
    </tbody>
</table>

##[History](/choosedigital/api-spec/blob/master/resources/History.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/history/all</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/History.md#all">All</a></td>
        </tr>
	    <tr>
            <td>/history/count</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/History.md#count">Count</a></td>
        </tr>
    </tbody>
</table>

##[VideoPlayer](/choosedigital/api-spec/blob/master/resources/VideoPlayer.md)
<table>
    <thead>
        <tr>
            <th>Path</th>
            <th>HTTP Method</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
	    <tr>
            <td>/videoplayer/start</td>
            <td>POST</td>
            <td><a href="/choosedigital/api-spec/blob/master/resources/VideoPlayer.md#start">Start</a></td>
        </tr>
    </tbody>
</table>

##[Television](/choosedigital/api-spec/blob/master/resources/Television.md) -- coming soon


#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
