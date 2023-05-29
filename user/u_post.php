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
<html lang="en" class="no-js">

<!-- bloglist12:18-->
<head>
	<!-- Basic need -->
	<title>Movie Review</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="../temp/#">

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
        <a href="../temp/#" class="close">x</a>
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
            		<a href="../temp/#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="../temp/#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="../temp/#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="../temp/#" class="close">x</a>
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

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> My Post</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog list section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-12 col-xs-12">
                            
                            
                            <?php
                        
                                                        $sel_gal1=mysqli_query($dbcon,"select * from u_post where uid='$usr' order by id desc");
                                                       while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                       {
                                                        $sel_gal=mysqli_query($dbcon,"select * from user_data where em='$r_gal1[6]'");
                                                     $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                        ?>
                            
                            
				<div class="blog-item-style-1 blog-item-style-3">
                                    <img style="width: 450px;height: 250px" src="../img9/<?php echo $r_gal1[3] ?>" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="post_dt.php?mid=<?php echo $r_gal1[0] ?>"><?php echo $r_gal1[1] ?></a></h3>
                                <h5 style="color: white"><span class="fa fa-user"></span>: <?php echo $r_gal[1] ?></h5>
                                <br/>
            			<span class="time"><?php echo $r_gal1[5] ?></span>
            			<p><?php echo substr($r_gal1[2],0,200)?>.....</p>
            		</div>
            	</div>
            	
            	<?php
                                                       }
                                                       ?>
			
		</div>
	</div>
</div>
<!--end of blog list section-->
<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="../temp/index-2.html"><img class="logo" src="../temp/images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="../temp/#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="../temp/#">About</a></li> 
					<li><a href="../temp/#">Blockbuster</a></li>
					<li><a href="../temp/#">Contact Us</a></li>
					<li><a href="../temp/#">Forums</a></li>
					<li><a href="../temp/#">Blog</a></li>
					<li><a href="../temp/#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="../temp/#">Terms of Use</a></li> 
					<li><a href="../temp/#">Privacy Policy</a></li>	
					<li><a href="../temp/#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="../temp/#">My Account</a></li> 
					<li><a href="../temp/#">Watchlist</a></li>	
					<li><a href="../temp/#">Collections</a></li>
					<li><a href="../temp/#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" required="" placeholder="Enter your email...">
				</form>
				<a href="../temp/#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="../temp/https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="../temp/#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="../temp/js/jquery.js"></script>
<script src="../temp/js/plugins.js"></script>
<script src="../temp/js/plugins2.js"></script>
<script src="../temp/js/custom.js"></script>
</body>

<!-- bloglist12:22-->
</html>