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
$mid=$_GET['mid'];
$sel1=  mysqli_query($dbcon,"select * from cast where id='$mid'");
                          $r1=  mysqli_fetch_row($sel1);
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

<!-- celebritysingle12:04-->
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

<div class="hero hero3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
                                    <img style="width: 100%;height: 450px" src="../temp/../img1/<?php echo $r1[10] ?>" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd"><?php echo $r1[1] ?></h1>
                                        <p class="ceb-single">
                                            
                                            
                                            <?php
                                            if($r1[2]=="1")
                                            {
                                                echo"Actor";
                                            }
                                            ?>
                                             <?php
                                            if($r1[2]=="2")
                                            {
                                                echo"Producer";
                                            }
                                            ?>
                                             <?php
                                            if($r1[2]=="3")
                                            {
                                                echo"Director";
                                            }
                                            ?>
                                             <?php
                                            if($r1[2]=="4")
                                            {
                                                echo"Music Director";
                                            }
                                            ?>
                                        </p>
					<div class="social-link cebsingle-socail">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-twitter"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-linkedin"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<li><a href="#mediaceb"> Media</a></li> 
								<li><a href="#filmography">filmography</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?php echo $r1[6] ?></p>
											
											<!-- movie cast -->
											
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Fullname:  </h6>
						            			<p><a href="#"><?php echo $r1[1] ?></a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Date of Birth: </h6>
						            			<p><?php echo $r1[3] ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Country:  </h6>
						            			<p><?php echo $r1[4] ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>First Appearance:</h6>
						            			<p><?php echo $r1[5] ?></p>
						            		</div>
						            		
						            		<div class="ads">
												<img src="../temp/images/uploads/ads1.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2><?php echo $r1[1] ?></h2>
											</div>							            						
						            	</div>
						            	<p><?php echo $r1[7] ?></p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		
						            	</div>
						            	
										
										<div class="title-hd-sm">
                                                                                    <a href="add_gal.php?mid=<?php echo $r1[0] ?>"><h4> Add Photos <span></span></h4></a>
										</div>
										<?php
                        $mid=$_GET['mid'];
                                                        $sel_gal=mysqli_query($dbcon,"select * from c_gal where mid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
										<div class="mvsingle-item">
                                                                                    <?php
                                                                                      while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="../img5/<?php echo $r_gal[2] ?>" ><img style="width: 100px;height: 100px" src="../img5/<?php echo $r_gal[2] ?>" alt=""></a>
											
                                                                                        <?php
                                                            }
                                                            ?>
                                                                                </div>
                                    
                                    <?php
                                                        }
                                                        ?>
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Filmography of</h3>
					       	 					<h2><?php echo $r1[1] ?></h2>
						            		</div>
										
						            	</div>
						            	
										<!-- movie cast -->
										<div class="mvcast-item">
                                                                                    <?php
                        $mid=$_GET['mid'];
                                                        $mov=mysqli_query($dbcon,"select * from movie where dir_id='$mid'");
                                                       while($mov1=mysqli_fetch_row($mov))
                                                            {
                                                           
                                                       
                                                        ?>
                                                                                    
                                                                                    
                                                                                    
											<div class="cast-it">
												<div class="cast-left cebleb-film">
                                                                                                    <img style="width: 70px;height: 100px" src="../img2/<?php echo $mov1[10] ?>" alt="">
													<div>
                                                                                                            <a href="mov_dt.php?mid=<?php echo $mov1[0] ?>"><?php echo $mov1[1] ?> </a>
														<p>Director</p>
													</div>
													
												</div>
												<p>...  <?php echo date("Y",strtotime ($mov1[7]))?></p>
											</div>
                                                                                    
                                                                                    <?php
                                                            }
                                                            ?>
											
										</div>
						            </div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->

<!-- footer section-->

<!-- end of footer section-->

<script src="../temp/js/jquery.js"></script>
<script src="../temp/js/plugins.js"></script>
<script src="../temp/js/plugins2.js"></script>
<script src="../temp/js/custom.js"></script>
</body>

<!-- celebritysingle12:18-->
</html>