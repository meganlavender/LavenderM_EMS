<!DOCTYPE html>
<html>
	<head> 
		<title>Admin Page</title>
		
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
	<h2 align="center"> ADMIN </h2>

	<ul>
		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('1')" class="drp">View Students</a>
			<div id="popup1" class="white_content">
				<p align=center><br><br>
				<center>
				<h1 align="center"> All Students </h1>
				<br>
				<?php
				$sql_product = "SELECT * FROM student_tab";
					$result_product=$connect->query($sql_product);
					
					while($row_product = $result_product->fetch_assoc()){
						echo $row_product["stu_name"]."<br>";
						?>
						<h5>
						<?php
						echo $row_product["stu_major"]."<br>";
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

		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('5')" class="drp">Add Student</a>
			<div id="popup5" class="white_content">
				<p align=center><br><br>
				<center>
				<h1 align="center"> All Students </h1>
				<br>
				<form method="post">

				Enter the Student ID: 
				<input type="text" name="stu_id" id="stu_id"/><br><br>
				Enter the Student Name: 
				<input type="text" name="stu_name" id="stu_name"/><br><br>
				Enter the Student Year of Enrollment: 
				<input type="text" name="stu_year_of_enrollment" id="stu_year_of_enrollment"/><br><br>
				Enter the Student Major: 
				<input type="text" name="stu_major" id="stu_major"/><br><br>
				Enter the Cumulitive GPA: 
				<input type="text" name="CGPA" id="CGPA"/><br><br>
				Enter the Student's Year of Graduation: 
				<input type="text" name="year_of_graduation" id="year_of_graduation"/><br><br>
				<button type="submit" name="addStudent" class=linktext> Add Student </button>
				</form>
				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addStudent"])){
					$studentID = $_POST['stu_id'];
					$studentName = $_POST['stu_name'];
					$studentEnrollment = $_POST['stu_year_of_enrollment'];
					$studentMajor = $_POST['stu_major'];
					$CGPA = $_POST['CGPA'];
					$studentGraduation = $_POST['year_of_graduation'];
					$sql = "INSERT INTO student_tab(stu_id, stu_name, stu_year_of_enrollment, stu_major, CGPA, year_of_graduation) VALUES('$studentID', '$studentName', '$studentEnrollment', '$studentMajor', '$CGPA', '$studentGraduation')";
					$connect -> query($sql);
				}
				?>
				<br><br>
				<a href = "javascript:void(0)" onclick = "popupclose('5')" class=linktext>close window</a>
				</p>
				</center>
			</div>
		</li>
		
		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('2')" class="drp">View Faculty</a>	
			<div id="popup2" class="white_content">
				<p align=center><br><br>
				<center>
				<h1 align="center"> All Faculty </h1>
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
				<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>close window</a>
				</p>
			</div>
		</li>

		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('6')" class="drp">Add Faculty</a>	
			<div id="popup6" class="white_content">
				<p align=center><br><br>
				<center>
				<h1 align="center"> Add Faculty </h1>
				<form method="post">

				Enter the Faculty ID: 
				<input type="text" name="fac_id" id="fac_id"/><br><br>
				Enter the Faculty Name: 
				<input type="text" name="fac_name" id="fac_name"/><br><br>
				Enter the Faculty Date of Joining: 
				<input type="text" name="fac_doj" id="fac_doj"/><br><br>
				Enter the Faculty Qualification: 
				<input type="text" name="qualification" id="qualification"/><br><br>
				Enter the Faculty Department: 
				<input type="text" name="department" id="department"/><br><br>
				<button type="submit" name="addFaculty" class=linktext> Add Faculty </button>
				</form>
				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addFaculty"])){
					$facultyID = $_POST['fac_id'];
					$facultyName = $_POST['fac_name'];
					$facultyDOJ = $_POST['fac_doj'];
					$facultyQual = $_POST['qualification'];
					$facultyDep = $_POST['department'];
					$sql = "INSERT INTO faculty_tab(fac_id, fac_name, fac_doj, qualification, department) VALUES('$facultyID', '$facultyName', '$facultyDOJ', '$facultyQual', '$facultyDep')";
					$connect -> query($sql);
				}
				?>
				<br><br>
				<a href = "javascript:void(0)" onclick = "popupclose('6')" class=linktext>close window</a>
				</p>
			</div>
		</li>

		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('3')" class="drp">Departments</a>	
				<div id="popup3" class="white_content">
				<p align=center><br><br>
				<center>
				<h1 align="center"> Departments </h1>
				<br>
					<?php
					$sql_product = "SELECT * FROM department_tab";
						$result_product=$connect->query($sql_product);
						
						while($row_product = $result_product->fetch_assoc()){
							echo $row_product["dept_name"]."<br>";
							echo "<br><hr><br>";	
						}
					?>
				<br><br>
					<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>close window</a>
					</p>
				</div>		
		</li>

		<li class="menu-item"><a href="javascript:void(0)" onclick = "popupfunction('4')" class="drp">Courses</a>	
			<div id="popup4" class="white_content">
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
				<a href = "javascript:void(0)" onclick = "popupclose('4')" class=linktext>close window</a>
				</p>
			</div>
		</li>
	</ul>


	</body>
</html>