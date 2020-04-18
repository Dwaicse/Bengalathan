<header><?php require 'include\common.php'; 
 if(isset($_SESSION['userid']))
 {
     
     header("location:dashboard\index.php");
 }
 ?>
    
</header>
