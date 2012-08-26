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

Any data or execution errors returned from the API will be found in an object named &quot;errors&quot;. 

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

#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.
