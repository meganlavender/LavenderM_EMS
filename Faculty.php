<?php
session_start();
if(($_SESSION['role'] !="faculty"))
{
	echo "You are trying to access a BAD Page.";
	session_destroy();
	}else
	{
	?>
	<!DOCTYPE html>
	<html>
		<head> 
			<title>Faculty Page</title>
			
			<link rel="stylesheet" href="css/mystyles1.css" />
			<script type="text/javascript" src="js/myjs1.js"></script>
		</head>


		<body bgcolor="#fff">
		<?php include ("dbpractice.php"); ?>
			<br><br><br>
		<center>
			<img src = "images/jbu.png" width = "5%" />
		</center>

		
		<h1 align="center"> Education Management System </h1>
		<h2 align="center"> FACULTY </h2>

		<ul>	
			<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('2')" class="drp">Courses</a>	
				<div id="popup2" class="white_content">
					<p align=center><br><br>
					<center>
					<h1 align="center"> Courses Taught By Faculty </h1>
					<br>
					<?php
					$sql_product = "SELECT * FROM courses_tab";
						$result_product=$connect->query($sql_product);
						
						while($row_product = $result_product->fetch_assoc()){
							echo $row_product["course_name"]."<br>";
							echo "<br><hr><br>";	
						}
					?>
					<br><br>
					<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>close window</a>
					</p>
				</div>
			</li>

			<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('3')" class="drp">Personal Details</a>	
					<div id="popup3" class="white_content">
						<p align=center><br><br>
						<h1 align="center"> Personal Details </h1>
						<center>
						<?php
						$id = $_SESSION['id'];

						$sql_product = "SELECT * FROM faculty_tab";
						$result_product=$connect->query($sql_product);
						while($row_product = $result_product->fetch_assoc()){
							if($id == $row_product["fac_id"]){
								echo "Faculty ID: ";
								echo $row_product["fac_id"]."<br>";
								echo "Faculty Name: ";
								echo $row_product["fac_name"]."<br>";
								echo "Date of Joining: ";
								echo $row_product["fac_doj"]."<br>";
								echo "Qualification: ";
								echo $row_product["qualification"]."<br>";
								echo "Department: ";
								echo $row_product["department"]."<br>";
								echo "<br>";
								?>
								<?php	
							}
						}
						?>
						<br><br>
						<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>close window</a>
						</center>
						</p>
					</div>		
			</li>
		</ul>


		</body>
	</html>
<?php
	}
?>