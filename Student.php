<?php
session_start();
if(($_SESSION['role'] !="student"))
{
	echo "You are trying to access a BAD Page.";
	session_destroy();
	}else
	{
	?>
	<!DOCTYPE html>
	<html>
		<head> 
			<title>Student Page</title>
			
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
		<h2 align="center"> STUDENT </h2>

		<ul>
			<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('1')" class="drp">Faculty</a>
				<div id="popup1" class="white_content">
					<p align=center><br><br>
					<center>
					<h1 align="center"> Faculty </h1>
					<br>
					<?php
					$sql_product = "SELECT * FROM faculty_tab";
						$result_product=$connect->query($sql_product);
						
						while($row_product = $result_product->fetch_assoc()){
							echo $row_product["fac_name"]."<br>";
							?>
							<h5>
							<?php
							echo $row_product["department"]."<br>";
							echo "<br><hr>";
							?>
							</h5>
							<?php	
						}
					?>
					<br><br>
					<a href = "javascript:void(0)" onclick = "popupclose('1')" class=linktext>close window</a>
					</p>
					</center>
				</div>
			</li>
			
			<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('2')" class="drp">Courses</a>	
				<div id="popup2" class="white_content">
					<p align=center><br><br>
					<center>
					<h1 align="center"> Courses </h1>
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

						$sql_product = "SELECT * FROM student_tab";
						$result_product=$connect->query($sql_product);
						while($row_product = $result_product->fetch_assoc()){
							if($id == $row_product["stu_id"]){
								echo "Student ID: ";
								echo $row_product["stu_id"]."<br>";
								echo "Student Name: ";
								echo $row_product["stu_name"]."<br>";
								echo "Year of Enrollment: ";
								echo $row_product["stu_year_of_enrollment"]."<br>";
								echo "Student Major: ";
								echo $row_product["stu_major"]."<br>";
								echo "Cumulitive GPA: ";
								echo $row_product["CGPA"]."<br>";
								echo "Year of Graduation: ";
								echo $row_product["year_of_graduation"]."<br>";
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


