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
  "status": "MultipleMatches",
  "addresses": [
    {
      "street1": "1133 W 9th St",
      "street2": "",
      "city": "Cleveland",
      "region": "OH",
      "postalCode": "44113",
      "plus4": "1002",
      "countryCode": "US"
    },
    {
      "street1": "1133 E 9th St",
      "street2": "",
      "city": "Cleveland",
      "region": "OH",
      "postalCode": "44114",
      "plus4": "1016",
      "countryCode": "US"
    }
}
```

### Note

In the case of receiving a multiple matches response, you will need to allow your customer to select the correct address. 
