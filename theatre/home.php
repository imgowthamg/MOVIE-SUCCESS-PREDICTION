<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$sel12=  mysqli_query($dbcon,"select * from cine where em='$usr'");
                          $r12=  mysqli_fetch_row($sel12);
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


<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- userfavoritelist13:49-->
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
					<h1>Welcome Theatre</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single userfav_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
                            <?php
                            $sel12=  mysqli_query($dbcon,"select * from cine where em='$usr'");
                          $r12=  mysqli_fetch_row($sel12);
                            
                            ?>
				<div class="user-information">
					<div class="user-img">
                                            <a  href="#"><img class="img-circle" style="width: 150px;height: 140px" src="../img6/<?php echo $r12[8] ?>" alt=""><br></a>
                                            <a href="#"><b style="color: white"><?php echo $r12[1] ?></b></a>
					</div>
					<div class="user-fav">
						<p>Features</p>
						<ul>
                                                    
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
                    <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from movie order by id desc");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
			<div class="col-md-9 col-sm-12 col-xs-12">
				
				<div class="flex-wrap-movielist user-fav-list">
                                     <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
					<div class="movie-item-style-2">
                                            <img style="width:220px;height: 280px" src="../img2/<?php echo $r_gal[10] ?>" alt="">
						<div class="mv-item-infor">
                                                    <h6><a href="mov_dt.php?mid=<?php echo $r_gal[0] ?>"><?php echo $r_gal[1] ?><span></span></a></h6>
							
							<p class="describe"><?php echo $r_gal[9] ?></p>
							<p class="run-time"> Run Time: <?php echo $r_gal[5] ?>’    .     <span>MMPA: <?php echo $r_gal[8] ?> </span>    .     <span>Release: <?php echo $r_gal[7] ?></span></p>
							<p>Director: <a href="#"><?php echo $r_gal[2] ?></a></p>
							<p>Stars: 
                                                        
                                                         <?php
                                                                                    
                                                                                    $cast=mysqli_query($dbcon,"select * from as_cast where mid='$r_gal[0]' limit 3");
                                                                                      while($cast1=mysqli_fetch_row($cast))
                                                            {
                                                                                    
                                                                                    ?>
                                                                                    <a href="#"><?php echo $cast1[2] ?>,</a>
                                                                                <?php
                                                            }
                                                            ?>
                                                        
                                                        </p>
						</div>
					</div>
                                    <?php
                                                            }
                                                            ?>
					
				</div>		
				
			</div>
                    <?php
                                                        }
                                                        ?>
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

<!-- userfavoritelist14:04-->
</html>