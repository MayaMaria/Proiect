<?php
include 'calculateRating.php';
require 'database_con.php';

$vote = $_REQUEST['vote'];
$suggestion=$_REQUEST['number'];

$sql = "SELECT  * FROM ratings WHERE id_suggestion='".$suggestion."'";
		$result_2 = mysqli_query($conn,$sql);
			
			while($row = mysqli_fetch_assoc($result_2)) {
				$rating1=$row["rating1"];
				$rating2=$row["rating2"];
				$rating3=$row["rating3"];
				$rating4=$row["rating4"];
				$rating5=$row["rating5"];
			}
			
	if($vote == 1)
	{	$rating1=$rating1+1;
		$sql1 = "UPDATE ratings SET rating1=".$rating1." WHERE id_suggestion='".$suggestion."'";
		mysqli_query($conn, $sql1);
	}
	if($vote == 2)
	{	$rating2=$rating2+1;
		$sql1 = "UPDATE ratings SET rating2=".$rating2." WHERE id_suggestion='".$suggestion."'";
		mysqli_query($conn, $sql1);
	}
	if($vote == 3)
	{	$rating3=$rating3+1;
		$sql1 = "UPDATE ratings SET rating3=".$rating3." WHERE id_suggestion='".$suggestion."'";
		mysqli_query($conn, $sql1);
	}
	if($vote == 4)
	{	$rating4=$rating4+1;
		$sql1 = "UPDATE ratings SET rating4=".$rating4." WHERE id_suggestion='".$suggestion."'";
		mysqli_query($conn, $sql1);
	}
	if($vote == 5)
	{	$rating5=$rating5+1;
		$sql1 = "UPDATE ratings SET rating5=".$rating5." WHERE id_suggestion='".$suggestion."'";
		mysqli_query($conn, $sql1);
	}
	$ratings_number=$rating1+$rating2+$rating3+$rating4+$rating5;
	$vote_1 = 100*round($rating1/($ratings_number),2);
	$vote_2 = 100*round($rating2/($ratings_number),2);
	$vote_3 = 100*round($rating3/($ratings_number),2);
	$vote_4 = 100*round($rating4/($ratings_number),2);
	$vote_5 = 100*round($rating5/($ratings_number),2);
?>

	<p>Your vote was <?php echo $vote;?> stars !</p>
	<div class="row">
            <div class="side">
              <div>5 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-5"<?php echo "style='width:".$vote_5."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
				echo $rating5;
				?>
			  </div>
            </div>
            <div class="side">
              <div>4<span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-4" <?php echo "style='width:".$vote_4."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			 
			 echo $rating4;
			?>
			  </div>
            </div>
            <div class="side">
              <div>3 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-3" <?php echo "style='width:".$vote_3."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			 
			 echo $rating3;
			?>
			  </div>
            </div>
            <div class="side">
              <div>2 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-2" <?php echo "style='width:".$vote_2."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			   <?php
			 
			 echo $rating2;
			?>
			  </div>
            </div>
            <div class="side">
              <div>1 <span class="fa fa-star checked"></span></div>
            </div>
            <div class="middle">
              <div class="bar-container">
                <div class="bar-1" <?php echo "style='width:".$vote_1."%';" ?>></div>
              </div>
            </div>
            <div class="side right">
              <div>
			  <?php
		
			 echo $rating1;
			?>
			  </div>
            </div>
          </div>
		  <p>
            <span><b>User Rating &emsp;&emsp;</b></span>
            <?php 
				calculateRating($rating1,$rating2,$rating3,$rating4,$rating5);
			?>
          </p>
        </div>