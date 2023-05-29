
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

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- celebritylist11:56-->
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

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Theatre</h1>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity list section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
                   
			<div class="col-md-9 col-sm-12 col-xs-12">
                              <?php
                        if(isset($_POST['sub1']))
                        {
                            $la=$_POST['la'];
    $lo=$_POST['lo'];
                        ?>
				 <?php
                 $sel1=mysqli_query($dbcon,"SELECT id, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM cine HAVING distance < 60 ORDER BY distance");
                                                        if(mysqli_num_rows($sel1)>0)
                                                        {
                                                            ?>
				<div class="row">
                                    
                                     <?php
                                      while($r1=mysqli_fetch_row($sel1))
                                                            {
                                     $sel_gal=mysqli_query($dbcon,"select * from cine where id='$r1[0]'");
                                                         $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                               
                                                                ?>
					<div class="blog-item-style-1 blog-item-style-3">
                                            <img style="width: 300px;height: 200px" src="../img6/<?php echo $r_gal[8] ?>" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="show.php?mid=<?php echo $r_gal[6] ?>"><?php echo $r_gal[1] ?></a></h3>
                                <A href="tel:<?php echo $r_gal[2] ?>"> <span class="time"><?php echo $r_gal[2] ?> <span class="fa fa-phone"></span></a>
            			<p><?php echo $r_gal[5] ?></p>
            		</div>
            	</div>
					<?php
                                                            }
                                                            ?>
				</div>
				 <?php
                                                        }
 else {
                                                            echo 'No data Found';
 }
                                                        ?>
                             <?php
                        }
                        else
                        {
                        ?>
                            <div class="form-style-1 user-pro" action="#">
                                    <form method="post"enctype="multipart/form-data" class="user">
						<h4>Search Theatre</h4>
						
                                                
					
                                                <div class="row">
							<div class="col-md-12 form-it">
								<label> Search and double click on the map to get Location Details</label>
								<input id="pac-input"  type="text" placeholder="Search Your Location...">
							</div>
                                                </div>
                                                
                                                <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 300px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
         <br/>
                                                
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Latitude</label>
								<input type="text" required="" name="la"id="lat"placeholder="Double Click on the map" value="">
							</div>
							<div class="col-md-6 form-it">
								<label>Longitude</label>
								<input type="text" required="" name="lo"placeholder="Double Click on the map" id="lng" value="">
							
							</div>
						</div>
                                             
						<div class="row">
							<div class="col-md-2">
								<input class="submit" name="sub1" type="submit" value="search">
							</div>
						</div>	
					</form>
					
				</div>
                            <?php
                        }
                        ?>
			</div>
                   
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
						
					<div class="ads">
						<img src="../temp/images/uploads/ads1.png" alt="">
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of celebrity list section-->

<!-- footer section-->

<!-- end of footer section-->
<script src="../temp/js/jquery.js"></script>
<script src="../temp/js/plugins.js"></script>
<script src="../temp/js/plugins2.js"></script>
<script src="../temp/js/custom.js"></script>
</body>

<!-- celebritylist12:04-->
</html>