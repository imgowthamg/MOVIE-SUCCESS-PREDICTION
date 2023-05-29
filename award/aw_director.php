<!DOCTYPE html>
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3']; 
    $sel=  mysqli_query($dbcon,"select * from cast where nme='$t1'");
                          $r=  mysqli_fetch_row($sel);
                          
   $sel1=  mysqli_query($dbcon,"select * from movie where nme='$t2'");
                          $r1=  mysqli_fetch_row($sel1);
   
      $ins1=mysqli_query($dbcon,"insert into aw_cast values('','$t1','$r[0]','$t3','$t2','$r1[0]','Director','$usr','0')");
        if($ins1>0)
        {
                header("location:aw_director.php");
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
					<h1>Director Awards</h1>
					<ul class="breadcumb">
						</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
                            <?php
                            $sel12=  mysqli_query($dbcon,"select * from award_ad where em='$usr'");
                          $r12=  mysqli_fetch_row($sel12);
                            
                            ?>
				<div class="user-information">
					<div class="user-img">
                                            <a  href="#"><img class="img-circle" style="width: 150px;height: 140px" src="../images/overview-of-the-oscar-statue-at-meet-the-oscars-at-the-time-news-photo-1588178852.jpg" alt=""><br></a>
						<a href="#" class="redbtn"><?php echo $r12[1] ?></a>
					</div>
					<div class="user-fav">
						<p>Features</p>
						<ul>
                                                    <li><a href="add_dir.php">Add Movies</a></li>
                                                    <li ><a href="cast.php">Cast& Crew</a></li>
                                                    <li><a href="movie.php"> Search Movies</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							
                                                    <li><a href="../logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
                                    <form method="post"enctype="multipart/form-data" class="user">
						<h4>Assign Director  Award</h4>
						
                                                <div class="row">
                                                <div class="col-md-12 form-it">
								<label>Director</label>
								<input type="text" required=""required="" name="t1" id="stn" placeholder="Select Director" class="form-control"autocomplete="off"  onkeyup="loadstop(this.value)" />	
                                                <br/>
                                                                <div id="stp"></div>
                                                <script>
                                                function loadstop(x){
                                                    if(x.length>0)
                                                    {
                                                        $("#stp").show(1000);
                                                        $("#stp").load("getstop2.php?q="+x);
                                                    }
                                                }
                                                function add_data(x)
                                                {
                                                    document.getElementById("stn").value=x;
                                                    $("#stp").hide(1000);
                                                }
                                                </script>
                                                </div>
                                                    
                                                    <div class="col-md-12 form-it">
								<label>Movie Played in</label>
								<input type="text" required=""required="" name="t2" id="stn1" placeholder="Select Movie" class="form-control"autocomplete="off"  onkeyup="loadstop1(this.value)" />	
                                                <br/>
                                                                <div id="stp1"></div>
                                                <script>
                                                function loadstop1(x){
                                                    if(x.length>0)
                                                    {
                                                        $("#stp1").show(1000);
                                                        $("#stp1").load("getstop.php?q="+x);
                                                    }
                                                }
                                                function add_data1(x)
                                                {
                                                    document.getElementById("stn1").value=x;
                                                    $("#stp1").hide(1000);
                                                }
                                                </script>
                                                </div>
                                                </div>
                                                <div class="row">
							<div class="col-md-12 form-it">
								<label>Award</label>
								<input type="text" required=""required=""name="t3" placeholder="Award Name">
							</div>
							
						</div>
                                               
						
                                                
                                                
                                                
						<div class="row">
							<div class="col-md-2">
								<input class="submit" name="sub1" type="submit" value="save">
							</div>
						</div>	
					</form>
                                
                                </div>
                            
			</div>
		</div>
	</div>
</div>

<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="#"><img class="logo" src="../temp/images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" required="" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="../temp/https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="../temp/js/jquery.js"></script>
<script src="../temp/js/plugins.js"></script>
<script src="../temp/js/plugins2.js"></script>
<script src="../temp/js/custom.js"></script>
</body>

<!-- userprofile14:04-->
</html>