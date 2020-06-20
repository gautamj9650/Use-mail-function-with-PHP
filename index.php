<html>
<script type="text/javascript">
	function check() {
    		var val ;
    		val = document.getElementById('checkbox').checked;
    		if (val== false)
    		{
    			alert("You have not accept out terms and conditions!");
    			return false
    		}
    		return true 
		} 

</script>
	<style type="text/css">
		.logo{
			height: 70px;
			width: 70px;
			text-align: center;
		}

	</style>
</style>
<head>
	<title>
	Contact Details Form
    </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="text-center" style="background-color:Grey;"> 
	<?php
	    if(isset($_POST['submit'])) {
	    	if(mail($_POST['email'], 'Greetings From LocalHost (Php)!', 'Thanks for Showing Interest...We will reach you shortly!')) {
	    		echo "Mail Send";
	    	}else{
	    		echo "Failed To send";
	    	}
	    }
	?>
	<form action="index.php" method="post" onsubmit="return check(this);">
		<h1><u><i>FAQ Form</i></u></h1>
		<h2>Name*</h2>
		<input type="text" name="name">
		<br>
		<h2>Email*</h2>
		<input type="email" name="email">
		<br>
		<h2>Query</h2>
		<input type="query" name="query">
		<br>
		<br>
		<h5><input type="checkbox" id="checkbox"> By click you agree with our terms and condition</h5><br>
					<input type="submit" name="submit" value="Submit">
		<br>
		<br>
	</form>
       <?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "customer_info";
		$con = mysqli_connect($server,$username,$password,$db);

		if (!$con)
  		{
  			  die('Could not connect: ' . mysqli_error());
		}
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$query=$_POST['query'];
			
			
			$sql="INSERT INTO customer_info (name, email, query) VALUES
			('$name','$email','$query')";
			if (!mysqli_query($con,$sql))
			{
			  die('Error: ' . mysqli_error($con));
			}
		}
		mysqli_close($con)
		?>
	
</body>
</html>