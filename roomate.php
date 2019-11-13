<!DOCTYPE html>
<html>
<head>
	<title>RentWith</title>
	<style type="text/css">
		body{
			background-color: white;
			margin: 0px;
			padding: 0px;
			font-family: verdana,sans-serif;
			font-weight: normal;
			overflow-x: hidden;

		}
		.navbar{
			
			margin: 0px;
			overflow-x: hidden;
			
		}
	/*.nav:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #000;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
.nav:hover:after { 
  width: 100%; 
  left: 0; 
}*/
		.navbar ul{
			list-style-type: none;
			overflow: hidden;
			margin: 0px;
			padding: 0px;
			display: inline-block;
			float: right;
			margin-right: 3vw;
			
		}	
		.navbar li{
			float: left;	
		}
		.navbar li a{
			display: inline-block;
			text-align: center;
			color: black;
			padding: 10px 16px;
			margin-top: 6vh;
			text-decoration: none;
			font-size: 1.15em;
			
		}
		.navbar li a:after {
		  content: '';
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  width: 0%;
		  border-bottom: 2px solid #3366FF;
		  transition: 0.4s;
		}
		.navbar li a:hover:after {
		  width: 100%;
		}
		
		#active{
			transition-duration: 0.75s;
			font-weight:  bold;
		}
		
		input[type=text] {
		  width: 4vw;
		  margin-top: 1vh;
		  margin-right: 2vw;
		  box-sizing: border-box;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  }
		  .image{
		  	margin-top: 4vh;
		  	margin-left: 0vw;
		  	
		  }
		  .user{
		  	width: 22vw;
		  	float :left;
		  	height: 30vh;
		  	overflow-y: hidden;
		  	overflow-x: hidden;
		  	margin-bottom: 1vh; 
		  }
		  .tint{
		  	background-image: linear-gradient(to bottom,rgba(0,0,0,0), rgba(0,0,0,1));
		  	height: 7vh;
		  	float: left;
		  	margin-left: 0vw;
		  	width: 22vw;
		  	z-index: 2;
		  	margin-top:23vh;
		  	position: absolute;	
		  }
		  .foot li{
		  	padding: 0.8vh;
		  	text-decoration: none;
		  	color: white;
		  	font-size: 0.8em;
		  }
		  .foot li a{
		  	text-decoration: none;
		  	color: white;
		  	font-size: 1.1em;
		  }
	</style>

</head>
<body>
	<?php

	include 'session.php';

	?>
		<div style="width: 100vw;margin: 0px;padding: 0px" class="navbar">
			<img src="RentWith logo.png " style="width: 14.5vw ; margin-top:1.5vh;margin-left: 3vw; " class="group">
			<ul class="list">
				<li><a href="home.html" class="nav">HOME</a></li>
				<li><a href="roommate.html" class="nav" id="active">ROOMMATE</a></li>
				<li><a href="place.html" class="nav">PLACE</a></li>
				<li><a href="owner.html" class="nav">OWNER</a></li>
				<li><a href="username.html"class="nav">USERNAME</a></li>
			</ul>
		</div>
		<div style="margin-top: 4vw">
		<!--Filter-->
			<div class="filter" style="width:27vw">
				<h2 style="margin-left: 2vw">Filters</h2>
				<div style="background-color: black ; width:70% ; height:2px;margin-top:-2vh;margin-left: 2vw"></div>
				<form style="margin-left: 3vw" action="" method="POST">
					
					<h3 style="margin-top: 4vh">Location</h3>
					<input type="text" name="location" style="width: 60%">
					<div style="background-color: black ; width:75% ; height:1px;margin-left: -1vw;margin-top: 2vw"></div>

					<h3 style="margin-top: 4vh">Budget</h3>
					<input type="range" min="0" max="50000" name="budget" style="width:60%" id="myRange">
					<p>Value: Rs.<span id="demo"></span></p>
					<div style="background-color: black ; width:75% ; height:0.5px;margin-left: -1vw;margin-top: 2vw"></div>
					
					<h3 style="margin-top: 4vh">Gender</h3>
					<input type="checkbox" name="gender" value="male">Male  
					<input type="checkbox" name="gender" value="tarnsgender" style="margin-left: 5vw">Transgender <br>
					<input type="checkbox" name="gender" value="female" style="margin-top: 2vh" >Female
					<div style="background-color: black ; width:75% ; height:0.5px;margin-left: -1vw;margin-top: 2vw"></div>

					<h3 style="margin-top: 4vh">Age</h3>
					Min 
					<input type="text" name="min-age">
					Max 
					<input type="text" name="max-age" >
					<div style="background-color: black ; width:75% ; height:1px;margin-left: -1vw;margin-top: 2vw"></div>

					<!--<h3 style="margin-top: 4vh">Radius</h3>
					<input type="range" min="0" max="50" name="budget" style="width:60%" id="myRange1">
					<p>Value: <span id="demo1"></span>km</p>
					<div style="background-color: black ; width:75% ; height:1px;margin-left: -1vw;margin-top: 2vw"></div>-->

					<h3 style="margin-top: 4vh">Occupation</h3>
					<input type="checkbox" name="occupation" value="job">Job  
					<input type="checkbox" name="occupation" value="business" style="margin-left: 5vw">Business <br>
					<input type="checkbox" name="occupation" value="studying" style="margin-top: 2vh" >Studying
					<div style="background-color: black ; width:75% ; height:1px;margin-left: -1vw;margin-top: 2vw"></div>

					<h3 style="margin-top: 4vh">Marital Status</h3>
					<input type="checkbox" name="maritalstatus" value="married">Married  
					<input type="checkbox" name="maritalstatus" value="un-married" style="margin-left: 5vw">Un-married
					

					<button style="background-color: #00ff00;width: 73%;height: 4.5vh;font-weight: bold;font-size: 1.3em; margin: 10vh -1vw 0vh;border-style: none">Search</button>
					<?php
					if(isset($_SESSION['login_user'])){
						echo"<button style='background-color: #00ff00;width: 73%;height: 4.5vh;font-weight: bold;font-size: 1.3em; margin: 10vh -1vw 0vh;border-style: none'><a href='logout.php'>logout</a></button>";
					}
					?>
				</form>
			</div>
			<div style="width: 0.2vw;height: 150vh; background-color: #00ff00;margin-left: 23vw;margin-top: -130vh" ></div>
			<div style="margin-top: -153vh; margin-left: 26vw">
				<h1>Search Results</h1>
				<form style="margin-top: -9vh;float: right;margin-right: 1vw;">
					
				</form>
			<?php

				if(isset($_SESSION['login_user'])){
				include 'config.php';
			$loc=$_POST['location'];
			$bud=$_POST['budget'];
			$gen=$_POST['gender'];
			$ag=$_POST['max-age'];
			$marital=$_POST['maritalstatus'];
			$occ=$_POST['occupation'];
				$sql=$db->query("SELECT * from user Where location='$loc' AND gender='$gen' AND  maritalstatus='$marital' AND occupation='$occ'");

//$sql=$db->query("SELECT * from user Where location='$loc'");
				if($sql-> num_rows > 0){
            while($row = $sql->fetch_assoc()){
           $fname=$row["firstname"];
           $lname=$row["lastname"];
           $agee=$row["age"];
           $o=$row["occupation"];
           $id=$row["id"];

           $query1 = $db->query("SELECT file_name FROM images WHERE id='$id'");
           $row_i = $query1->fetch_assoc();
 $imageURL = 'uploads/'. $row_i["file_name"];
              
                //echo"<img height='285px' width='100%' src='$imageURL' />";
           echo"<div style='width: 96%;height: 0.2vw; background-color: #00ff00;margin-top:-1vh; ' ></div>";
				

				echo"<div class='detail' style='width:20vw;float: left'>";
					echo"<div class='image'>";
						echo"<div class='user'>";
							echo"<img src='$imageURL' style='height:100%;z-index: 1'>";
						echo"</div>";
						echo"<div class='tint'>";
							echo"<h5  style='color: white;font-size: 0.8em;margin-left: 0.8vw;margin-top: 2.5vh;'><span style='font-size:1.7em'>" .$fname. "</span>".$lname." ".$agee."<span style='float: right;margin-top: 1.2vh;margin-right: 0.75vw'>4/5</span></h5>";
						echo"</div>";
					echo"</div>";
					echo"<p style='margin-left: 0vw;'>".$o."</p>";
					echo"<p style='margin-left: 0vw;margin-top: -1.3vh'><span style='color:#00ff00;'>Roommate</span> | Bhuleshwar, Mumbai</p>";
					echo"<img src='$imageURL' style='width: 3.5vh;float: right;margin-top: -7vh;margin-right: -1.75vw'>";
				echo"</div>";


            }
       }

				}
				?>
				<!--<div style="width: 96%;height: 0.2vw; background-color: #00ff00;margin-top:-1vh; " ></div>
				

				<div class="detail" style="width:20vw;float: left">
					<div class="image">
						<div class="user">
							<img src="https://qph.fs.quoracdn.net/main-raw-133532646-cuvvxaqssfswoftefsrernglbshzowfp.jpeg" style="height:100%;z-index: 1">
						</div>	
						<div class="tint">
							<h5  style="color: white;font-size: 0.8em;margin-left: 0.8vw;margin-top: 2.5vh;"><span style="font-size: 1.7em">Vandit </span>Popat.25<span style="float: right;margin-top: 1.2vh;margin-right: 0.75vw">4/5</span></h5>
						</div>
					</div>
					<p style="margin-left: 0vw;">Studying Engineering</p>
					<p style="margin-left: 0vw;margin-top: -1.3vh"><span style="color:#00ff00;">Roommate</span> | Bhuleshwar, Mumbai</p>
					<img src="C:\Users\Shubham Sadani\Downloads\plus.png" style="width: 3.5vh;float: right;margin-top: -7vh;margin-right: -1.75vw">
				</div>

				<div class="detail" style="width:20vw;float: left;margin-left: 4vw;">
					<div class="image">
						<div class="user">
							<img src="https://images.askmen.com/1080x540/2016/01/25-021526-facebook_profile_picture_affects_chances_of_getting_hired.jpg" style="height:100%;z-index: 1">
						</div>	
						<div class="tint">
							<h5  style="color: white;font-size: 0.8em;margin-left: 0.8vw;margin-top: 2.5vh;"><span style="font-size: 1.7em">Vandit </span>Popat.25<span style="float: right;margin-top: 1.2vh;margin-right: 0.75vw">4/5</span></h5>
						</div>
					</div>
					<p style="margin-left: 0vw;">Studying Engineering</p>
					<p style="margin-left: 0vw;margin-top: -1.3vh"><span style="color:#00ff00;">Roommate</span> | Bhuleshwar, Mumbai</p>
					<img src="C:\Users\Shubham Sadani\Downloads\plus.png" style="width: 3.5vh;float: right;margin-top: -7vh;margin-right: -1.75vw">
				</div>
				
				<div class="detail" style="width:20vw;float: left;margin-left: 4vw;">
					<div class="image">
						<div class="user">
							<img src="https://images.askmen.com/1080x540/2016/01/25-021526-facebook_profile_picture_affects_chances_of_getting_hired.jpg" style="height:100%;z-index: 1">
						</div>	
						<div class="tint">
							<h5  style="color: white;font-size: 0.8em;margin-left: 0.8vw;margin-top: 2.5vh;"><span style="font-size: 1.7em">Vandit </span>Popat.25<span style="float: right;margin-top: 1.2vh;margin-right: 0.75vw">4/5</span></h5>
						</div>
					</div>
					<p style="margin-left: 0vw;">Studying Engineering</p>
					<p style="margin-left: 0vw;margin-top: -1.3vh"><span style="color:#00ff00;">Roommate</span> | Bhuleshwar, Mumbai</p>
					<img src="C:\Users\Shubham Sadani\Downloads\done.png" style="width: 3.5vh;float: right;margin-top: -7vh;margin-right: -1.75vw">
				</div>
			
		</div>-->
	
		<div style="background-color: #263343;width: 100%;height: 30vh;position: absolute;margin-top: 150vh;z-index: 3;color: white">
			<ul style="margin-left: 5vw;margin-top: 5vh;list-style-type: none" class="foot">
				<h4>Contact</h4>
				
				<li>Vandit : +91-999-999-9999</li>
				<li>Shubham : +91-999-999-9999</li>
				<li>Jay : +91-999-999-9999</li>
				<li>Rohan : +91-999-999-9999</li>
			</ul>

			<ul  style="margin-left: 75vw;margin-top: -19vh;list-style-type: none" class="foot">
				<li><a href="home.html" class="nav">Home</a></li>
				<li><a href="roommate.html" class="nav" >Roommate</a></li>
				<li><a href="place.html" class="nav">Place</a></li>
				<li><a href="owner.html" class="nav">Owner</a></li>
			</ul>
		</div>

		<script type="text/javascipt" src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
		<script type="text/javascript">
			var slider = document.getElementById("myRange");
			var output = document.getElementById("demo");
			output.innerHTML = slider.value;
			var slider1 = document.getElementById("myRange1");
			var output1 = document.getElementById("demo1");
			output1.innerHTML = slider1.value;

			slider.oninput = function() {
			  output.innerHTML = this.value;
			}
			slider1.oninput = function() {
			  output1.innerHTML = this.value;
			}
		</script>
		<iframe width="200" height="250" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/692bad5f-a87d-49bd-8e17-8bc426849578"></iframe>
</body>
</html>