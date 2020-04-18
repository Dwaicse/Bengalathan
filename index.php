
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'include\common.php';?>
<!DOCTYPE html>
<html>
   <head>
    
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
    <?php require 'navbar.php';?>
	<div class="loader">
		<img src="GIF\Gear-5s-200px.gif" alt="Loading...">
	</div>
  <script type="text/javascript">
  	   window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
  	   });
  </script>
<div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner">
      <div class="item active">
        <img src="img\bootstrap-social.png" alt="BOOT" style="width:100%;height: =30%;">
      </div>

      <div class="item">
        <img src="img\php-spread-operator-arrays.png" alt="PHP" style="width:100%;height: =30%; ">
      </div>
    
      <div class="item">
        <img src="img\html.png" alt="html" style="width:100%;height: =30%;">
      </div>
    </div>

 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

   
   

  </div>

  <div class="container">
  	 <div class="jumbotron">
		      <div class="text-center"><h1>SCHEMES</h1></div>
			  <p><hr></p>

		  </div>
  </div>
    </div>







</body>
</html>