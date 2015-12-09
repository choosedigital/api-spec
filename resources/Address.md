## validate

Some eBook prices require a tax calculation based on a user's physical address. A validated address is required to [request a taxValue](/resources/EBook.md#tax-calculation). 

Returns an [AddressResponse](/objects.md#addressresponse)

### URL 
> POST http://[apidomain]/ebook/addressvalidation

### Parameters

<table>
    <tr>
    	<th>Name</th>
		<th>Required</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
    <tr>
		<td><code>street1</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
    	<td><code>street2</code></td>
		<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
        <td><code>city</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
        <td><code>region</code></td>
		<td>Required</td>
		<td>string</td>
		<td>for U.S., the state</td>
	</tr>
    <tr>
        <td><code>postalCode</code></td>
		<td>Required</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
        <td><code>plus4</code></td>
    	<td>Optional</td>
		<td>string</td>
		<td></td>
	</tr>
    <tr>
        <td><code>country</code></td>
    	<td>Required</td>
		<td>string</td>
		<td>"us" only</td>
	</tr>
    <tr>
		<td><code>tenantId</code></td>
		<td>Optional</td>
		<td>string</td>
		<td>The tenant id</td>
	</tr>
</table>

### Example
```js
{
    "status":"OK",
    "addresses":[
        {
        "street1":"1915 Matthews Township Pkwy",
        "street2":"",
        "city":"Matthews",
        "region":"NC",
        "postalCode":"28105",
        "plus4":"5049",
        "countryCode":"US"
        }
     ]
}
```
