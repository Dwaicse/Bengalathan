
<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href = "css\style.css" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <script src="style.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</header>
<nav class="navbar navbar-default navbar-fixed-top" >
       
             <div class="navbar-header">
                         <div style="align:right;">
			     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				        <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				 </button>
                 <a href="#" class= "navbar-brand"><font size="5px" style="padding: 0px;">আমার সরকার<br></font></div></a>
			 </div>
			 <div  class="collapse navbar-collapse" id="mynavbar">

			 	<ul class="nav navbar-nav">
                                    <li><a href="index.php"><font size="5px"><span class="glyphicon glyphicon-home"></span></font></a></li>
                    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><font size="2px">SCHEMES</font>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>

         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><font size="2px">UPCOMING JOBS</font>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>

             <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><font size="2px">UTILITIES</font>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
                 </ul>
                             <ul class="navbar-nav mr-auto ml-auto">
                     
                    <form class="navbar-form navbar-center" action="/action_page.php">
      <table class="table">
          <tr>
              <td><input type="text" class="form-control" placeholder="Search Schemes"></td>
          <td><button type="submit" class="btn btn-default btn-md btn-block "><span class="glyphicon glyphicon-search"></span></button></td>
      </tr>
      </table>
      
    </form>      
      </ul>  
                             
			       <ul class="nav navbar-nav navbar-right">
                                   <?php
                                   if(isset($_SESSION['userid'])){
                                       ?>
                                   
                                    <table class="table"> 

                                        <td> <li><div class="col-lg-12"><button  type="button" class="btn btn-default btn-block  btn-lg navbar-btn"><font size="3px"><a href="dashboard\index.php"><span class="glyphicon glyphicon-user"></span> Profile  </a></font></button></div></li></td>
                                    

                                  <td> <li><div class="col-lg-12"><button type="button" class="btn btn-default btn-lg navbar-btn"><font size="3px"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></font></button></div></li>
                                  <tr ><div class="l"> Hallo Mr. <?php require 'namefetch.php'  ?>!</div></tr>  
                                    </table>
                                      
                                   
                                   <?php
                                   
                                   }
                                   else{
                                   ?>    
                                  <table class="table"> 

                                      <td> <li><div class="col-lg-12"><button  type="button" class="btn btn-default btn-block  btn-lg navbar-btn"><font size="3px"><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up  </a></font></button></div></li></td>

                                  <td> <li><div class="col-lg-12"><button type="button" class="btn btn-default btn-lg navbar-btn"><font size="3px"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></font></button></div></li></>
				  <tr align="center">Hallo Guest! Welcome to AmarSarkar</tr>     
                                  </table><?php
                                   }
                                   ?>
                               </ul>
                 
             </div>
           
     </nav>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

