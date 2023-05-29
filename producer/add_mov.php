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
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    $url=$_POST['url'];
    
   $t6=$_POST['t6'];

$t7=$_POST['t7'];

    $t8=$_POST['t8'];
   $msg=$_POST['t9'];
$msg1=  addslashes($msg);
$msg2=  nl2br($msg1);
    $sel=  mysqli_query($dbcon,"select * from cast where nme='$t2'");
                          $r=  mysqli_fetch_row($sel);
   $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    
   
     if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//../img2//$nfn"))
    {
          
    $ins=mysqli_query($dbcon,"insert into movie values('','$t1','$t2','$r[0]','$t3','$t4','$t5','$t7','$t8','$msg2','$nfn','$url','$usr','0')");
    $id=mysqli_insert_id($dbcon);
    foreach($t6 as $d1)
   
      $ins1=mysqli_query($dbcon,"insert into typ values('','$id','$d1','0')");
        if($ins1>0)
        {
                header("location:mov_dt.php?mid=$id");
            }
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
					<h1>ADD MOVIES</h1>
					
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
                            $sel12=  mysqli_query($dbcon,"select * from cast where em='$usr'");
                          $r12=  mysqli_fetch_row($sel12);
                            
                            ?>
				<div class="user-information">
					<div class="user-img">
                                            <a  href="#"><img class="img-circle" style="width: 150px;height: 140px" src="../img1/<?php echo $r12[10] ?>" alt=""><br></a>
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
						<h4>Add My Movies</h4>
						<div class="row">
							<div class="col-md-12 form-it">
								<label>Movie Name</label>
								<input type="text" required=""required=""name="t1" placeholder="edwardkennedy">
							</div>
							
						</div>
                                                <div class="row">
                                                <div class="col-md-12 form-it">
								<label>Director Name</label>
								<input type="text" required=""required="" name="t2" id="stn" placeholder="Select Director" class="form-control"autocomplete="off"  onkeyup="loadstop(this.value)" />	
                                                <br/>
                                                                <div id="stp"></div>
                                                <script>
                                                function loadstop(x){
                                                    if(x.length>0)
                                                    {
                                                        $("#stp").show(1000);
                                                        $("#stp").load("getstop.php?q="+x);
                                                    }
                                                }
                                                function add_data(x)
                                                {
                                                    document.getElementById("stn").value=x;
                                                    $("#stp").hide(1000);
                                                }
                                                </script>
                                                </div>
                                                </div>
                                                <div class="row">
							<div class="col-md-6 form-it">
								<label>Screen Play</label>
								<input type="text" required=""name="t3"required="" placeholder="edwardkennedy">
							</div>
							<div class="col-md-6 form-it">
								<label>Poster</label>
								<input name="myFile" type="file" class="form-control" >
							</div>
						</div>
                                                <div class="row">
							<div class="col-md-12 form-it">
								<label>Trailer</label>
                                                                <input type="url"required=""name="url" placeholder="Copy youtube trailer link here.....">
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Runtime</label>
								<input name="t4" type="text" required=""placeholder="eg:145min">
							</div>
							<div class="col-md-6 form-it">
								<label>Budget</label>
								<input name="t5" type="text" required=""placeholder="$$$">
							</div>
						</div>
                                                <div class="row">
							<div class="col-md-12 form-it">
								<label>Genre</label>
                                                                
                                                        <table style="width: 100%" class=" table-responsive"border="0">
                                                     <tr>
                                                        
                                                         <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Action"><span style="color: whitesmoke">Action</span>
                                                          
                                                         </td>
                                                          <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Drama"><span style="color: whitesmoke">Drama</span>
                                                          
                                                         </td>
                                                         <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Romance"><span style="color: whitesmoke">Romance</span>
                                                          
                                                         </td>
                                                          <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Comedy"><span style="color: whitesmoke">Comedy</span>
                                                          
                                                         </td>
                                                         <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Supernatural"><span style="color: whitesmoke">Supernatural</span>
                                                          
                                                         </td>
                                                        
                                                            
                                                     </tr>
                                                     <br/>
                                                     <tr>
                                                        <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Thriller"><span style="color: whitesmoke">Thriller</span>
                                                          
                                                         </td>
                                                          <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Horror"><span style="color: whitesmoke">Horror</span>
                                                          
                                                         </td>
                                                          <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Fantasy"><span style="color: whitesmoke">Fantasy</span>
                                                          
                                                         </td>
                                                         <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Documentary"><span style="color: whitesmoke">Documentary</span>
                                                          
                                                         </td>
                                                         <td>
                                                             <input type="checkbox" name="t6[]" class="form_control" value="Sci-FI"><span style="color: whitesmoke">Sci-Fi</span>
                                                          
                                                         </td>  
                                                     </tr>
                                                 </table>
                                                        </div>
							
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Release Date</label>
								<input  name="t7" type="Date" placeholder="Edward ">
							</div>
							<div class="col-md-6 form-it">
								<label>Censorship</label>
								<select name="t8">
								  <option value="">--Select Censorship--</option>
								  <option value="U">U</option>
                                                                   <option value="U/A">U/A</option>
                                                                   <option value="A">A</option>
                                                                  
								</select>
							</div>
						</div>
                                                <div class="row">
							<div class="col-md-12 form-it">
								<label>Movie Overview</label>
                                                                <textarea name="t9" cols="6" rows="6" placeholder="" class="form-control"style="background-color: #1c3d5d;border-color: #1c3d5d"></textarea>
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