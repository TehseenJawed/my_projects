<!DOCTYPE html>
<html>

<head>

<style>
input[type=submit] {
    background-color: #6495ED;
    color: white;
    
}

#t1 {
    -moz-tab-size: 4; /* Firefox */
    -o-tab-size: 4; /* Opera 10.6-12.1 */
    tab-size: 4;
}

</style>


</head>
<body>

<h1>
	Add Opening Balance to Subsidiary Account
</h1>
<form action="/action_page.php">
 
	<pre id="t1">Select Client:             <input type="text" name="Select" placeholder="Client ID">  <input type="submit" value="Select Client"></pre>  
      <pre id="t1">Client Name:               <input type="text" name="Client" value="Customer Name""></pre>
        <pre id="t1">Father/Husband Name        <input type="text" name="Father" value="Father/Husband Name""></pre>
         <pre id="t1">Email:                     <input type="text" name="Email" value="E-mail""></pre>
         <pre id="t1">Subject:                   <input type="text" name="Subject" value="""></pre>
           <pre id="t1">Message:                   <textarea rows="4" cols="50" name="View" placeholder="Enter Message"></textarea>
  <br><br>
  <input type="submit" value="Send Email">
</form> 



</body>
</html>
