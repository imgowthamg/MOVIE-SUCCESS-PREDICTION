<?php
include '../connection.php';
$q=$_GET['q'];
                            $sel_gal=mysqli_query($dbcon,"select * from movie where nme like '%$q%'");                           
                            $i=0;
                            while($r_gal=mysqli_fetch_array($sel_gal))
                            {
                            
                            
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
    $i++;
                        if($i>2)
                        {
                            echo "</tr>";
                            $i=0;
                        }
                        }
    ?>