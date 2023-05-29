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
$sel=  mysqli_query($dbcon,"select * from movie where id='$mid'");
                          $r=  mysqli_fetch_row($sel);
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

<!-- moviesingle07:38-->
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

<div class="hero mv-single-hero">
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
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="../img2/<?php echo $r[10] ?>" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="<?php echo $r[11] ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?php echo $r[1] ?> <span></span></h1>
					<div class="social-btn">
						<a   href="#"  data-toggle="modal" data-target="#basicModal1" class="parent-btn"><i class="ion-ios-star"></i> View Review</a>
							
					</div>
					<div class="modal fade" id="basicModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal1" aria-hidden="true">
  <div class="modal-dialog">
  
  <?php
  
  
  
  $go=  mysqli_query($dbcon,"select * from review where mid='$mid' and st='1'");
  $go1=  mysqli_num_rows($go);
  $nu=  mysqli_query($dbcon,"select * from review where mid='$mid' and st='2'");
  $nu1=  mysqli_num_rows($nu);
  $ba=  mysqli_query($dbcon,"select * from review where mid='$mid' and st='3'");
  $ba1=  mysqli_num_rows($ba);
  ?>
  
  
  <script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "<?php echo $r[1] ?> Audiance Review"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: <?php echo $go1 ?>, label: "Good Review"},
			{y: <?php echo $nu1 ?>, label: "Neutral Review"},
			{y: <?php echo $ba1 ?>, label: "Bad Review"}
			
		]
	}]
});
chart.render();

}
</script>
  
      
      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  
  
  </div>
</div>
					
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li> 
								<li><a href="#moviesrelated"> Related Movies</a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?php echo $r[9] ?></p>
						            		<div class="title-hd-sm">
												<h4>Photos</h4>
												<a href="add_gal.php?mid=<?php echo $r[0] ?>" class="time">Add Movie Images <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
                                                                                            <?php
                        $mid=$_GET['mid'];
                                                        $sel_gal=mysqli_query($dbcon,"select * from gal where mid='$mid' order by rand() limit 4");
                                                       while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
                                                                                            <a class="img-lightbox"  data-fancybox-group="gallery" href="../img3/<?php echo $r_gal[2] ?>" ><img style="width: 100px;height: 100px" src="../img3/<?php echo $r_gal[2] ?>" alt=""></a>
												<?php
                                                            }
                                                            ?>
                                                                                                
                                                                                                
											</div>
                                                                        
											<div class="title-hd-sm">
												<h4>cast</h4>
												<a href="add_cast.php?mid=<?php echo $r[0] ?>" class="time">Add Cast & Crew  <i class="ion-ios-arrow-right"></i></a>
											</div>
                                                                         <?php
                        $mid=$_GET['mid'];
                                                        $cast=mysqli_query($dbcon,"select * from as_cast where mid='$mid' limit 4");
                                                        if(mysqli_num_rows($cast)>0)
                                                        {
                                                        ?>
											<!-- movie cast -->
											<div class="mvcast-item">
                                                                                            
                                                                                             <?php
                                                                                      while($cast1=mysqli_fetch_row($cast))
                                                            {
                                                                                           $sel_cast=  mysqli_query($dbcon,"select * from cast where id='$cast1[3]'");
                          $r_cast=  mysqli_fetch_row($sel_cast);
                                                               
                                                                ?>
                                                                                            
												<div class="cast-it">
													<div class="cast-left">
														<img style="width: 35px;height: 35px" src="../img1/<?php echo $r_cast[10] ?>" alt="">
														<a href="cast_dt.php?mid=<?php echo $cast1[3] ?> "><?php echo $cast1[2] ?></a>
													</div>
													<p>...  <?php echo $cast1[4] ?></p>
												</div>
                                                                                            
                                                                                            <?php
                                                            }
                                                            ?>
                                                                                            
                                                                                            
												
											</div>
                                                                                        
                                                                                        
                                                                                        <?php
                                                        }
                                                        ?>
											<div class="title-hd-sm">
												<h4>User reviews</h4>
												<a href="#" class="time">See All 56 Reviews <i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie user review -->
											<?php
                        $mid=$_GET['mid'];
                                                        $rev=mysqli_query($dbcon,"select * from review where mid='$mid' order by id desc limit 1");
                                                        while($rev1=mysqli_fetch_row($rev))
                                                            {
                                                                                           $ms=  mysqli_query($dbcon,"select * from user_data where em='$rev1[4]'");
                          $ms1=  mysqli_fetch_row($ms);
                                                               
                                                        ?>
                                                               
						            	
										<div class="mv-user-review-item">
											<div class="user-infor">
                                                                                            <img style="width: 60px;height: 55px" src="../img4/<?php echo $ms1[4] ?>" alt="">
												<div>
													<h3><?php echo $rev1[2] ?></h3>
													
													<p class="time">
														<?php echo $rev1[5] ?> by <a href="#"> <?php echo $ms1[1] ?></a>
													</p>
												</div>
											</div>
											<p><?php echo $rev1[3] ?></p>
										</div>
                                                               <?php
                                                            }
                                                            ?>
								
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
						            			<p><a href="#"><?php echo $r[2]  ?></a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Screenplay: </h6>
						            			<p><a href="#"><?php echo $r[4]  ?></a> </p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Stars: </h6>
                                                                                <p>
                                                                                    <?php
                                                                                    
                                                                                    $cast=mysqli_query($dbcon,"select * from as_cast where mid='$mid' limit 3");
                                                                                      while($cast1=mysqli_fetch_row($cast))
                                                            {
                                                                                    
                                                                                    ?>
                                                                                    <a href="#"><?php echo $cast1[2] ?>,</a>
                                                                                <?php
                                                            }
                                                            ?>
                                                                             
                                                                                </p>
						            		</div>
						            		
                                                                    <div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p class="tags">
                                                                                     <?php
                                                                                    
                                                                                    $typ=mysqli_query($dbcon,"select * from typ where mid='$mid'");
                                                                                      while($typ1=mysqli_fetch_row($typ))
                                                            {
                                                                                    
                                                                                    ?>
						            				<span class="time"><a href="#"><?php echo $typ1[2] ?></a></span>
											<?php
                                                            }
                                                            ?>
													
						            			</p>
						            		</div>
                                                                    <div class="sb-it">
						            			<h6>Budget:</h6>
						            			<p><?php echo $r[6] ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p><?php echo $r[7] ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p><?php echo $r[5] ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Censorship:</h6>
						            			<p><?php echo $r[8] ?></p>
						            		</div>
						            		
						            		<div class="ads">
												<img src="../temp/images/uploads/ads1.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="reviews" class="tab review">
						           <div class="row">
						            	<div class="rv-hd">
						            		<div class="div">
							            		<h3>Related Movies To</h3>
						       	 				<h2><?php echo $r[1] ?></h2>
							            	</div>
							            	
						            	</div>
						            	
										<?php
                        $mid=$_GET['mid'];
                                                        $rev=mysqli_query($dbcon,"select * from review where mid='$mid' order by id desc");
                                                        while($rev1=mysqli_fetch_row($rev))
                                                            {
                                                                                           $ms=  mysqli_query($dbcon,"select * from user_data where em='$rev1[4]'");
                          $ms1=  mysqli_fetch_row($ms);
                                                               
                                                        ?>
                                                               
						            	
										<div class="mv-user-review-item">
											<div class="user-infor">
                                                                                            <img style="width: 60px;height: 55px" src="../img4/<?php echo $ms1[4] ?>" alt="">
												<div>
													<h3><?php echo $rev1[2] ?></h3>
													
													<p class="time">
														<?php echo $rev1[5] ?> by <a href="#"> <?php echo $ms1[1] ?></a>
													</p>
												</div>
											</div>
											<p><?php echo $rev1[3] ?></p>
										</div>
                                                               <?php
                                                            }
                                                            ?>
								
										
						            </div>
						        </div>
						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2><?php echo $r[1] ?></h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors & Producer</h4>
										</div>
										<div class="mvcast-item">											
											<div class="cast-it">
												<div class="cast-left">
                                                                                                    
                                                                                                    <?php
                                                                                                    $dir=  mysqli_query($dbcon,"select * from cast where id='$r[3]'");
                                                                                                      $dir1=  mysqli_fetch_row($dir);
                                                                                                    ?>
                                                                                                    <img style="width: 40px;height: 38px" src="../img1/<?php echo $dir1[10] ?>">
													<a href="#"><?php echo $dir1[1] ?></a>
												</div>
												<p>...  Director</p>
											</div>
                                                                                    
                                                                                    
                                                                                    <div class="cast-it">
												<div class="cast-left">
                                                                                                    
                                                                                                    <?php
                                                                                                    $pro=  mysqli_query($dbcon,"select * from cast where em='$r[12]'");
                                                                                                      $pro1=  mysqli_fetch_row($pro);
                                                                                                    ?>
                                                                                                    <img style="width: 40px;height: 38px" src="../img1/<?php echo $pro1[10] ?>">
													<a href="#"><?php echo $pro1[1] ?></a>
												</div>
												<p>...  Producer</p>
											</div>
										</div>
										<!-- //== -->
										
										 <?php
                        $mid=$_GET['mid'];
                                                        $cast=mysqli_query($dbcon,"select * from as_cast where mid='$mid'");
                                                        if(mysqli_num_rows($cast)>0)
                                                        {
                                                        ?>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										<div class="mvcast-item">
                                                                                    
                                                                                    
                                                                                     <?php
                                                                                      while($cast1=mysqli_fetch_row($cast))
                                                            {
                                                                                           $sel_cast=  mysqli_query($dbcon,"select * from cast where id='$cast1[3]'");
                          $r_cast=  mysqli_fetch_row($sel_cast);
                                                               
                                                                ?>
											<div class="cast-it">
												<div class="cast-left">
													<img style="width: 40px;height: 40px" src="../img1/<?php echo $r_cast[10] ?>" alt="">
													<a href="cast_dt.php?mid=<?php echo $cast1[3] ?> "><?php echo $cast1[2] ?></a>
												</div>
												<p>...  <?php echo $cast1[4] ?></p>
											</div>
											
                                                                                    <?php
                                                            }
                                                            ?>
                                                                                    
                                                                                    
                                                                                    
										</div>
                                                                                <?php
                                                        }
                                                        ?>
										<!-- //== -->
										
						            </div>
					       	 	</div>
					       	 	<div id="media" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Photos of</h3>
					       	 					<h2><?php echo $r[1] ?></h2>
						            		</div>
						            	</div>
						            	
										<div class="title-hd-sm">
											<h4>Photos <span></span></h4>
										</div>
                                    <?php
                        $mid=$_GET['mid'];
                                                        $sel_gal=mysqli_query($dbcon,"select * from gal where mid='$mid'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
										<div class="mvsingle-item">
                                                                                    <?php
                                                                                      while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $i++;
                                                                ?>
                                                                                    <a class="img-lightbox"  data-fancybox-group="gallery" href="../img3/<?php echo $r_gal[2] ?>" ><img style="width: 100px;height: 100px" src="../img3/<?php echo $r_gal[2] ?>" alt=""></a>
											
                                                                                        <?php
                                                            }
                                                            ?>
                                                                                </div>
                                    
                                    <?php
                                                        }
                                                        ?>
						        	</div>
					       	 	</div>
					       	 	<div id="moviesrelated" class="tab">
					       	 		<div class="row">
					       	 			<h3>Related Movies To</h3>
					       	 			<h2><?php echo $r[1] ?></h2>
					       	 			
                                                                        <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from movie where uid='$r[12]' and id!='$mid'");
                                                       while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                        ?>
                                                                        
										<div class="movie-item-style-2">
                                            <img style="width:180px;height: 240px" src="../img2/<?php echo $r_gal[10] ?>" alt="">
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
						    </div>
						</div>
					</div>
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

<!-- moviesingle11:03-->
</html>