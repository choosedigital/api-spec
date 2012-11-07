# Custom Delivery Handling

By default, if there are any problems with delivering content to a consumer, we will render a generic error page. However, you can build you own custom delivery error page and we will redirect to that page with the error code so you can render an error page with your look and feel.

If you would like to do this, please give ChooseDigital the URL that you would like to use at any point during your account setup. 

For example, if you specify

````
http://www.mydomain.com/deliveryError/
````

and the error code is music.001, then the URL we will redirect to will be

````
http://www.mydomain.com/deliveryError/music.001
````

Then, you can map the error code (music.001 in this example), to render the message you want to your end user.

Below are the error codes and their related descriptions.

### Music

<table>
	<tr>
		<th>Code</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>music.001</td>
		<td>invalid signature</td>
	</tr>
	<tr>
		<td>music.002</td>
		<td>expired link based on time</td>
	</tr>
	<tr>
		<td>music.003</td>
		<td>exceeded maximum downloads</td>
	</tr>
	<tr>
		<td>music.004</td>
		<td>purchase not found</td>
	</tr>
	<tr>
		<td>music.020</td>
		<td>unable to retrieve content</td>
	</tr>
	<tr>
		<td>music.021</td>
		<td>content not found</td>
	</tr>
	<tr>
		<td>music.005</td>
		<td>unable to retrieve download location</td>
	</tr>
	<tr>
		<td>music.006</td>
		<td>download location not found</td>
	</tr>
	<tr>
		<td>music.007</td>
		<td>content not found</td>
	</tr>	
	<tr>
		<td>music.008</td>
		<td>content not found</td>
	</tr>	
	<tr>
		<td>music.009</td>
		<td>content not found</td>
	</tr>	
	<tr>
		<td>music.010</td>
		<td>content not found</td>
	</tr>	
	<tr>
		<td>music.500</td>
		<td>invalid user</td>
	</tr>
	<tr>
		<td>music.501</td>
		<td>music download not allowed</td>
	</tr>
</table>

### Books

<table>
	<tr>
		<th>Code</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>book.001</td>
		<td>invalid signature</td>
	</tr>
	<tr>
		<td>book.002</td>
		<td>expired link based on time</td>
	</tr>
	<tr>
		<td>book.004</td>
		<td>purchase not found</td>
	</tr>
	<tr>
		<td>book.007</td>
		<td>unable to retrieve content</td>
	</tr>
	<tr>
		<td>book.008</td>
		<td>unable to retrieve content</td>
	</tr>
</table>



#### CONFIDENTIALITY

This document is the sole and confidential property of Choose Digital, and is being shared with the partner for the purposes of collaboration, or for evaluating a possible collaboration, to provide users of the partner website(s) with access to a Digital Media Music Store, as provided by Choose Digital. 

The partner agrees to treat any and all information contained or referenced in this document as confidential, to use it solely for the purpose of the evaluation and definition of a collaboration, to make it accessible only to such employees who have a need to know, not to disclose it to any third party, and not to make it publicly available or accessible in any way, except with the prior written consent of Choose Digital.

All information contained or referenced in this document shall remain the exclusive property of Choose Digital as well as all patent, copyright, trade secret, trademark and other intellectual property rights therein. No license or conveyance of any such rights to the partner is granted or implied under this agreement.