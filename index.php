<?php
include 'connection.php';
ob_start();
?>
<?php
                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
   
    
    $up=$_FILES['myFile']['name'];
    $chk=mysqli_query($dbcon,"select * from user_data");
    $count=mysqli_num_rows($chk);
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img4//$nfn"))
    {
     
         
         $up1=$_FILES['myFile1']['name'];
    $chk1=mysqli_query($dbcon,"select * from user_data");
    $count1=mysqli_num_rows($chk1);
    $nfn1=$count1."".substr($up1,strrpos($up1,"."));
   
    
   
     if(move_uploaded_file($_FILES['myFile1']['tmp_name'],getcwd()."//qrcode//$nfn1"))
    {
         
    $ins=mysqli_query($dbcon,"insert into user_data values('','$t1','$t2','$t3','$nfn','$nfn1')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t2','$t3','user','0')");
        if($ins1>0)
        {
                header("location:index.php?suss=1");
            }
    }
        }
 }
 }
        ?>
 <?php

session_start();
if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['uid']=$t1;
    header("location:./admin/home.php");
    
}
if($r[3]=="2")
{
    $_SESSION['uid']=$t1;
    header("location:./producer/home.php");
}
if($r[3]=="3")
{
    $_SESSION['uid']=$t1;
    header("location:./director/home.php");
}
if($r[3]=="user")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
if($r[3]=="award")
{
    $_SESSION['uid']=$t1;
    header("location:./award/home.php");
}
if($r[3]=="cine")
{
    $_SESSION['uid']=$t1;
    header("location:./theatre/home.php");
}
}
else
{
    echo"invalid username or password";
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
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading-->
<!--<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>-->
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" required="" name="t1" id="username" placeholder="Hugh Jackman"  required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="t2" id="password" placeholder="******" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		
            	</div>
            </div>
           <div class="row">
           	 <button name="b1" type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        
            
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post"enctype="multipart/form-data">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" required="" name="t1" id="username-2" placeholder="Hugh Jackman"  required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="email" name="t2" id="email-2" placeholder=""  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="t3" id="password-2" placeholder=""  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="email-2">
                    your Photo:
                    <input name="myFile" type="file" class="form-control" >
                </label>
            </div>
            <div class="row">
                <label for="email-2">
                    upload your paytm, Google pay qrcode:
                    <input name="myFile1" type="file" class="form-control" >
                </label>
            </div>
           <div class="row">
             <button name="sub1" type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left"></ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						                
						
						
						<li class="signupLink"><a href="#">sign up</a></li>
                                                <li class="btn loginLink"><a href="#">LOG In</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    
	</div>
</header>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
	    		<?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from movie order by id desc limit 8");
                                                       while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
                    
                    
                    <div class="movie-item">
	    			<div class="mv-img">
                                    <a href="#"><img src="img2/<?php echo $r_gal[10] ?>" style="width: 285px;height: 437px" alt="" ></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
                                            
                                             <?php
                                                                                    
                                                                                    $typ=mysqli_query($dbcon,"select * from typ where mid='$r_gal[0]'");
                                                                                      while($typ1=mysqli_fetch_row($typ))
                                                            {
                                                                                    
                                                                                    ?>
	    					<span class="blue"><a href="#"><?php echo $typ1[2] ?></a></span>
                                                <?php
                                                            }
                                                            ?>
	    				</div>
                                    <h6><a href="#"><?php echo $r_gal[1] ?></a></h6>
	    				
	    			</div>
	    		</div>
                    
			<?php
                                                            }
                                                            ?>
	    	</div>
	    </div>
	</div>
</div>


<!-- latest new v1 section-->

<!--end of latest new v1 section-->
<!-- footer section-->

<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>


</html>
