<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Enroll</title>
		<link href="images/icon.png" rel="icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Cebu City</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="enroll.php">Enroll</a>
						<a href="login.html">Login</a>
						<a href="about.html">About</a>	
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h3>Republic of the Philippines</h3>
						<p style="color: black">Department of Labor and Employment<br>NATIONAL SKILLS REGISTRATION PROGRAM </p>
						<p style="font-size: 1.5em;color:skyblue"><ins>REGISTRATION FORM</ins></p>
					</header>
					<p style="margin:auto; color: black">INSTRUCTIONS:</p>
					<p style="color: black">Please fill up those fields do not leave it empty. Please input <span><ins>N/A</ins></span> if its not applicable. Every fields are required.</p>
					<!-- start of the forms -->
		
		<!-- second form			 -->
		<form name="myForm" style="color: black">
			<fieldset>
		<!-- job preferences starts		 -->
				<legend><span style="font-weight: bold;">II.Job Preference</span></legend>

				<table>
					<td style="font-weight: bold;">Preffered Occupation and Industry</td>
					<th>Occupation<br>(e.g. clerk, call center agent, saleslady)<br><input type="text" name="preffered_occupation"placeholder="1." style="hih" required ><input type="text" name="preffered_occupation" placeholder="2." required><input type="text" name="preffered_occupation" placeholder="3." required></th>
					<th>Industry<br>(e.g. IT-SPM, Construction,Manufacturing)<br><input type="text" name="preffered_industry" placeholder="1." required> <input type="text" name="preffered_industry"placeholder="2."  required><input type="text" name="preffered_industry" placeholder="3." required></th>	
				</table>
				<table>
					<td ><span style="font-weight: bold;">Preffered Work Location</span><br><span style="font-size: 75%">Please Check the Specific Box</span></td>
					<th><input type="checkbox" name="preffered_location_check" onclick="Identify(this.form)"> Local, specify cities/municipalities:<br><input type="text" name="preffered_occupation"placeholder="1." id="first_location" required disabled="disabled" maxlength="20"><input type="text" name="preffered_location" placeholder="2." id="second_location" required disabled="disabled" maxlength="20"><input type="text" name="preffered_location" placeholder="3." id="third_location" required disabled="disabled" maxlength="20"></th>



					<th><input type="checkbox" name="preffered_location_check1	" onclick="Identify1(this.form)"> Overseas, specify countries:<br><input type="text" name="preffered_occupation"placeholder="1." id="first_location_overseas" required disabled="disabled" maxlength="20" ><input type="text" name="preffered_location" placeholder="2." id="second_location_overseas" required disabled="disabled"maxlength="20"><input type="text" name="preffered_location" placeholder="3." id="third_location_overseas" required disabled="disabled" maxlength="20"></th>
				</table>
				Salary Expected (PHP)<input type="number" name="expected_salary" maxlength="10" style="max-width: 25%">
	<!-- job preferences ends				 -->
				<hr><br>
	
	<!-- educational background area start -->
				<span style="font-weight: bold;">III.Educational Background</span><br>
				
				<ins>Currently in school?</ins><br>
				 <input type="checkbox" name="currently_school" value="yes"> Yes 
				 <input type="checkbox" name="currently_school" value="no"> No
				
				<br><ins>Highest Educational Level:</ins><br> 
				
					<input type="checkbox" name="educational_level" value="No Formal Education"> No Formal Education
					<input type="checkbox" name="educational_level" value="Elementary Level"> Elementary Level
					<input type="checkbox" name="educational_level" value="Elementary Graduate"> Elementary Graduate <br>
					<input type="checkbox" name="educational_level" value="High School Level"> High School Level
					<input type="checkbox" name="educational_level" value="High School Graduate"> High School Graduate
					<input type="checkbox" name="educational_level" value="College Level"> College Level<br>
					<input type="checkbox" name="educational_level" value="College Graduate"> College Graduate
					<input type="checkbox" name="educational_level" value="Technical-Vocational Graduate"> Technical-Vocational Graduate
					<input type="checkbox" name="educational_level" value="Post Graduate"> Post Graduate
				<br>
				<ins>Year Graduated/Last Attended (month/year)</ins> <br><input type="month" name="year_attended" required><br>
				<ins>School/University:</ins> <input type="text" name="school_university" maxlength="50" required placeholder="School/University">
				<ins>Course/Program:</ins> <input type="text" name="course_program" maxlength="50"required placeholder="Course/Program">
				<ins>Awards/Honors Received:</ins> <input type="text" name="awards_honors_recieved" maxlength="20" placeholder="Awards/Honors Recieved">
	<!-- educational background ends -->
				<br>

				
			</fieldset>
		</form>

			<a href="enroll.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-left"></a>
			<a href="enroll3.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-right" ></a>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; All Rights Reserved <a href="index.html">Cebu City 2018</a>
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
		<script type="text/javascript">
	function Identify(f)
	{
		if(f.preffered_location_check.checked == true)
		{
			f.first_location.disabled=false;
			f.second_location.disabled=false;
			f.third_location.disabled=false;
		}
		else
		{
			f.first_location.disabled=true;
			f.second_location.disabled= true;
			f.third_location.disabled=true;
		}
	}
</script>

	<script type="text/javascript">
	function Identify1(f)
	{
		if(f.preffered_location_check1.checked == true)
		{
			f.first_location_overseas.disabled=false;
			f.second_location_overseas.disabled=false;
			f.third_location_overseas.disabled=false;
		}
		else
		{
			f.first_location_overseas.disabled=true;
			f.second_location_overseas.disabled= true;
			f.third_location_overseas.disabled=true;
		}
	}
</script>

		<script type="text/javascript">
			function Fillpermanent(f) 
			{
  				if(f.permanenttoo.checked == true) 
  				{
    				f.permanent_address.value = f.present_address.value;
    				f.permanent_houseno.value = f.present_houseno.value;
    				f.permanent_barangay.value = f.present_barangay.value;
    				f.permanent_municipality.value = f.present_municipality.value;
    				f.permanent_province.value = f.present_province.value;
    				
  				}
  				if(f.permanenttoo.checked == false) 
  				{
    				f.permanent_address.value="";
    				f.permanent_houseno.value = "";
    				f.permanent_barangay.value = "";
    				f.permanent_municipality.value = "";
    				f.permanent_province.value = "";    				
  				}
  				
			}
		</script>
		<script type="text/javascript">
							function myFunction1()
							{
								//get the checkbox
								var checkbox= document.getElementById("looking_action_yes");
								//get the text
								var text =document.getElementById("howlong")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>
		<script type="text/javascript">
							function myFunction2()
							{
								//get the checkbox
								var checkbox= document.getElementById("immediate_action_no");
								//get the text
								var text =document.getElementById("when")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>				
		<script type="text/javascript">
							function myFunction3()
							{
								//get the checkbox
								var checkbox= document.getElementById("benificiary_action_yes");
								//get the text
								var text =document.getElementById("HouseId")

								if(checkbox.checked== true)
								{
									text.style.display= "block";
								}
								else
								{
									text.style.display= "none"
								}
							}
		</script>				
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>