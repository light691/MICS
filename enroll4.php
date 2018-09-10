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
		
			
		<form name="myForm" style="color: black">
			<fieldset>
				<legend><span style="font-weight: bold;">VII. 21<sup>st</sup> Century Skills- Check five (5) you possess</span> (self-attainment)</legend>

				<table>
					<tr>
						<td>
							<input type="checkbox" name="century_skill_attained" value="Innovation"> Innovation<br>
							<input type="checkbox" name="century_skill_attained" value="Teamwork"> Teamwork<br>
							<input type="checkbox" name="century_skill_attained" value="Multitasking"> Multitasking<br>
							<input type="checkbox" name="century_skill_attained" value="Work Ethics"> Work Ethics<br>
							<input type="checkbox" name="century_skill_attained" value="Self Motivation"> Self Motivation<br>

						</td>
						<td>
							<input type="checkbox" name="century_skill_attained" value="Creative Problem Solving"> Creative Problem Solving<br>
							<input type="checkbox" name="century_skill_attained" value="Problem Solving"> Problem Solving<br>
							<input type="checkbox" name="century_skill_attained" value="Critical Thinking"> Critical Thinking<br>
							<input type="checkbox" name="century_skill_attained" value="Decision Making"> Decision Making<br>
							<input type="checkbox" name="century_skill_attained" value="Stress Tolerance"> Stress Tolerance<br>
						</td>
						<td>
							<input type="checkbox" name="century_skill_attained" value="Planning and Organinizing"> Planning and Organinizing<br>
							<input type="checkbox" name="century_skill_attained" value="Social Perceptiveness"> Social Perceptiveness<br>
							<input type="checkbox" name="century_skill_attained" value="English Functional Skills"> English Functional Skills<br>
							<input type="checkbox" name="century_skill_attained" value="English Comprehension"> English Comprehension<br>
							<input type="checkbox" name="century_skill_attained" value="Math Functional Skill"> Math Functional Skill<br>
						</td>
					</tr>
				</table>
				<legend><span style="font-weight: bold;">VIII. Technical Skill Acquired Without Formal Training</span></legend>				
				<table>
					<tr>
						<td>
						<input type="checkbox" name="technical_skill_attained" value=""> Carpentry<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Mason<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Welding<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Auto Mechanic<br>
						</td>
					
			
						<td>
						<input type="checkbox" name="technical_skill_attained" value=""> Plumbing<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Driving<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Gardening<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Tailoring<br>
						</td>
					
					
						<td>
						<input type="checkbox" name="technical_skill_attained" value=""> Photography<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Hairdressing<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Cooking<br>
						<input type="checkbox" name="technical_skill_attained" value=""> Baking<br>
						</td>
						<td><input type="checkbox" name="technical_skill_attained" id="others" onclick="check(this.form)" value=""> Others:<br> <input type="text" name="technical_skill_attained" id="others_textbox"  maxlength="20" disabled required></td>
					</tr>
				</table>

				<hr>
				
			</fieldset>
		</form>

			<a href="enroll3.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-left"></a>
			<a href="enroll5.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-right" ></a>


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
	function check(f)
	{
		if(f.others.checked==true)
		{
			f.others_textbox.disabled=false;
			f.others.value=others_textbox.value;
		}
		else
		{
			others_textbox.disabled= true;
			f.others.value!=others_textbox.value;
		}
	}
</script>

	<script type="text/javascript">
	function check1(f)
	{
		if(f.dialect_spoken_others.checked == true)
		{
			f.dialect_spoken_box.disabled=false;
			f.dialect_spoken_box.value=dialect_spoken_others.value;
			
		}
		else
		{
			f.dialect_spoken_box.disabled=true;
			f.dialect_spoken_box.value=dialect_spoken_others.value;	
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