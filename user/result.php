<!DOCTYPE html>
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];
$aid=$_GET['aid'];
$sel=  mysqli_query($dbcon,"select * from a_bit where id='$aid'");
                          $r=  mysqli_fetch_row($sel);
?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>

<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
  $log=mysqli_query($dbcon,"select * from chk where mid='$mid'");
if(mysqli_num_rows($log)>0)
{

         $ins1=mysqli_query($dbcon,"insert into a_bit values('','$t1','$mid','0')");
        if($ins1>0)
        {
            header("location:bit.php?mid=$mid");
        }   
            
    
}
 else {
    

   $ins=mysqli_query($dbcon,"insert into chk values('','$mid','0')");
        if($ins>0)
        {
      $ins1=mysqli_query($dbcon,"insert into a_bit values('','$t1','$mid','0')");
        if($ins1>0)
        {
                header("location:bit.php?mid=$mid");
            }
    }
        
 }
 }
        ?>

<?php
                            if(isset($_GET['del']))
{
                                $mid=$_GET['mid'];
    $del1=mysqli_query($dbcon,"delete from a_bit where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
       header("location:bit.php?mid=$mid");
}
}
  


?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- userprofile14:04-->
<head>
	<!-- Basic need -->
	<title>Movie Review</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="../temp/css/plugins.css">
	<link rel="stylesheet" href="../temp/css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="../temp/images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" required="" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" required="" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<?php 
                                
                                include 'menu.php';
                                ?>
<!-- END | Header -->

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>ADD MOVIE RESULT & AWARD</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
		
			
                    
                    <div class="col-md-12 col-sm-12 col-xs-12" >
                        <div class="form-style-1 user-pro" action="#">
                            
                            
                            
                            <?php
                
            $sel_p=mysqli_query($dbcon,"select * from m_bet where mid='$mid' and rev='$r[1]'");
            if(mysqli_num_rows($sel_p)>0)
            {
                ?>
                            <table class="table table-bordered" >
            <tr>
                
                 <td style="color: white">Place</td>
                  <td style="color: white">Name</td>
                  <td style="color: white">Photo</td>
                   <td style="color: white">Email</td>
                 <td style="color: white">Result</td>
                
                
            </tr>
            <?php
            $i=0;
            while($r_p=mysqli_fetch_row($sel_p))
            {
                $sel1=  mysqli_query($dbcon,"select * from user_data where em='$r_p[3]'");
                          $r1=  mysqli_fetch_row($sel1);
                $i++;
                ?>
            <tr>
                
                
                <td style="color: white"><?php echo $i ?></td>
                <td style="color: white"><?php echo $r1[1] ?></td>
                <td><img class="img img-thummbnail" style="width: 75px;height: 75px" src="../img4/<?php echo $r1[4] ?>"</td>
                <td style="color: white"><?php echo $r1[2] ?></td>
                 <td style="color: white"><?php echo $r_p[1] ?></td>
                 </tr>
            <?php
            }
            ?>
        </table>
                        <?php
            }
            ?>
                
                        </div>
			</div>
		</div>
	</div>
</div>
<!-- footer section-->

<!-- end of footer section-->

<script src="../temp/js/jquery.js"></script>
<script src="../temp/js/plugins.js"></script>
<script src="../temp/js/plugins2.js"></script>
<script src="../temp/js/custom.js"></script>
</body>

<!-- userprofile14:04-->
</html>