## Error Handling

Connection errors are returned as standard HTTP error codes

<table>
	<tr>
		<th>Error Code</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>400</td>
		<td>Bad input parameter</td>
	</tr>
	<tr>
		<td>401</td>
		<td>Bad or expired token. Must be re-authenticated.</td>
	</tr>
	<tr>
		<td>403</td>
		<td>No permission to access</td>
	</tr>
	<tr>
		<td>404</td>
		<td>File or folder not found</td>
	</tr>
	<tr>
		<td>500</td>
		<td>Server Error</td>
	</tr>
</table>

Any data or execution errors returned from the API will be found in an object named "errors". 

For example:

```js
{
    "errors":[ 
        {
			"parameter":"cdaccesskeyid",
			"message":"Required"
		},{
			"parameter":"x-cd-date",
			"message":"Required"
		},{
			"parameter":"authorization",
			"message":"Required"
		} 
	]
}
```

