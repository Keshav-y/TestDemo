<html>
<head>
	<title>Form Application</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		function validate()
		{
			var a="Form Successfully submitted";
			alert(a);
		}
	</script>
</head>
<body>
  <div class="container">
  <form onsubmit=validate() method="POST">
      <div class="form-group"><br><br>
      <label for="email">Enter Text:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Text" name="text"><br>
      <div class="g-recaptcha" data-sitekey=6Lev2q4UAAAAAI-sRxrKXF9YgjM6RpYrUdMn81gR></div>
    </div>
    <div>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php
$serverName="tcp:applicationtest.database.windows.net"
$connectionOptions = array(  
    "Database" => "ApplicationTest",  
    "UID" => "DemoTest",  
    "PWD" => "Test");
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    } 
?>
<body>
</html>
