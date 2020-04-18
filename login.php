

<html>
      <head>
    <?php require 'include\common.php'?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href = "css\style.css" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="style.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
আমার সরকার

</title>

</head>
<body>
	<div class="loader">
		<img src="GIF\Gear-5s-200px.gif" alt="Loading...">
	</div>
  <script type="text/javascript">
  	   window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
  	   });
  </script>
<?php require 'navbar.php';?>
  
   <div class="container">
	        <br><br><br>
	      <h3><span class="glyphicon glyphicon-log-in"></span>  Login </h3>
		   <hr>
		   <div class="row">
		      <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
			 <div class="panel panel-primary">
			   <div class="panel-heading">
			   Login
			   </div>
                             <form method="post" action="loginscript.php" >

			  <div class="panel-body">
			  

	<div class="form-group">
		<label for="Userid">	Userid</label>   <input type= "text" class="form-control" name = "userid">
			</div>
			
			<div class="form-group">
		<label for="password">	Password</label>   <input type= "password" class="form-control" name= "password">
			</div>
			
		<div class="panel-footer"><a href="#">	<input type="submit" value="Login" class="btn btn-primary btn-block"></a>
                    
                    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<br><span style='color:red;' >$error</span>";
                        session_destroy();
                    }
                ?>  
                    <hr>New User<br>
                    <a class="btn btn-primary" href="Signup.php" role="button">Signup</a>
                    	<br><br> <div> Forgot Password </div>
                        </div>
			</div>
                   
			    </form>
				</div>
			    </div>
				</div>
				</div>

  
			
	 




