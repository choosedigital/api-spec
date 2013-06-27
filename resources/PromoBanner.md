# Promo Banners

Choose Digital provides collections of promotional images in two sizes: 240x80, and 720x240 (in pixels). These lists are updated weekly. Individual promo banners may be changed at any time.


## List Available Promo Banner Ids

A simple way to get back a list of available promo banner lists Ids.

### URL 
> http://[apidomain]/promo/lists/ids/[country]

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
        <td><code>tenantId</code></td>
        <td>Optional</td>
        <td>string</td>
        <td>The tenant id</td>
    </tr>
</table>

### Example

> GET http://[apidomain]/promo/lists/ids/[country]
```js
{
    "promoListIds":["general-240x80","movies-240x80","general-720x240"...
}
```

## Promo Collection by ID
Returns a [PromoItem](/objects.md#promoitem) object

### URL 
> http://[apidomain]/promo/lists/[promoCollectionName]/[country]/[rows]

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
        <td><code>promoCollectionName</code></td>
        <td>Required</td>
        <td>string</td>
        <td>example: tv-720x240</td>
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

> GET http://[apidomain]/promo/lists/movies-240x80/us
```js
{
	"promoItems": [
		{
			"name": "movie - Cloud Atlas",
			"promoText": "",
			"importance": 40,
			"bannerUrl": "//d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/cloud_atlas_mo_240x80.jpg",
			"noSchemeBannerUrl": "//d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/cloud_atlas_mo_240x80.jpg",
			"altText": "movie - Cloud Atlas",
			"thumbnailUrl": "",
			"noSchemeThumbnailUrl": "",
			"exclusive": false,
			"linkUrl": "/movie/detail/480e0a5b042e1c8b739ca742252ffc0c4d51ef41"
		},
		{
			"name": "movie - The Last Ride",
			"promoText": "",
			"importance": 20,
			"bannerUrl": "http://d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/last_ride_mo_240x80.jpg",
			"noSchemeBannerUrl": "//d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/last_ride_mo_240x80.jpg",
			"altText": "movie - The Last Ride",
			"thumbnailUrl": "",
			"noSchemeThumbnailUrl": "",
			"exclusive": false,
			"linkUrl": "/movie/detail/81f5f8e720c0d2927fb644d2dbebd61664de3cb9"
		},
		{
			"name": "movie - A Good Day to Die Hard",
			"promoText": "",
			"importance": 10,
			"bannerUrl": "http://d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/good_day_to_die_hard_mo_240x80.jpg",
			"noSchemeBannerUrl": "//d3qcb5osaw6g5.cloudfront.net/a/wl/img/pro/good_day_to_die_hard_mo_240x80.jpg",
			"altText": "movie - A Good Day to Die Hard",
			"thumbnailUrl": "",
			"noSchemeThumbnailUrl": "",
			"exclusive": false,
			"linkUrl": "/movie/detail/45452aadb4d3a80126d7c859fda8d29b21ef13df"
		}
	]
}
```
