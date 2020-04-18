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
	        <br>
	      <h3><span class="glyphicon glyphicon-user"></span>  Sign Up </h3>
		   <hr>
		   <div class="row">
		      <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
			 <div class="panel panel-primary">
			   <div class="panel-heading">
			   Fill Up
			   </div>
                             <form method="post" action="user_registration_script.php" >

			  <div class="panel-body">
			  
			  <div class="form-group">
		    <label for="firstname">First Name</label> <input type="text" class="form-control" name="firstname" id="firstname" required="">
			</div>
			
			<div class="form-group">
			<label for="lastname">Last Name</label>  <input type="text" class="form-control" name="lastname" required="">
			</div>
			
			<div class="form-group">
		<label for="email">	Email-Id </label>  <input type= "email" class="form-control"  name= "email">
			</div>
			
			<div class="form-group">
		<label for="Phone">Contact No</label> <input type= "text" class="form-control" name = "Phone">
			</div>
			
			<div class="form-group">
			<label for="birthdate">Birth Date</label> <input type="date" class="form-control" name = "birthdate">
			</div>
			
			
			<div class="form-group">
			    <label for="Gender">Gender</label>
			   <div class="radio">
			    <label>
			          <input type= "radio"  name="r1" value = "m">MALE
			        </label>
			       <label><input type= "radio"  name="r1" value = "f">FEMALE </label> 
                   <label><input type= "radio"  name="r1" value = "O">OTHERS </label> 			
                       
			    </div>
			</div>
		 
		 
		   
			 
			
                              
                              <div class="form-group">
		<label for="Userid">	Userid</label>   <input type= "text" class="form-control" name = "userid">
			</div>
			
			<div class="form-group">
		<label for="password">	Password</label>   <input type= "password" class="form-control" name= "password">
			</div>
			
		<div class="panel-footer"><a href="#">	<input type="submit" value="Sign Up" class="btn btn-primary btn-block"></a></div>
			</div>
			    </form>
				</div>
			    </div>
				</div>
				</div>

  
			
	 


