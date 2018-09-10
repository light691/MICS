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
			<!-- currently training start-->
			<legend><span style="font-weight: bold;">IV. Technical/Vocational and Other Training</span></legend>
				Currently on training? 
				<input type="checkbox" name="currently_training" value="yes">Yes
				<input type="checkbox" name="currently_training" value="no">No
			<!-- currently training ends -->
			<!-- training start -->
				<table>
					<tr>
						<th>Training</th>
						<th>Duration of Course</th>
						<th>Training Institution</th>
						<th>Certificate Received</th>
						<th>Completed</th>
					</tr>
					<!-- technical vocational input 1 start -->
					<tr>
						<td><input type="text" name="training_input1" maxlength="30" required placeholder="Training"></td>
						<td><input type="text" name="duration_of_course_input1" maxlength="30" required placeholder="(mm/dd/yyyy to mm/dd/yyyy"></td>
						<td><input type="text" name="trainig_institution_input1" maxlength="30" required placeholder="Training Institution"></td>
						<td><input type="text" name="certificate_received_input1" maxlength="30" required placeholder="Certificate Received"></td>
						<td><input type="checkbox" name="completed_training1" value="yes"> Yes <input type="checkbox" name="completed_training1" value="no"> No</td>
					</tr>
					<!-- technical vocational input 1 ends -->
					<!-- technical vocational input 2 start -->
					<tr>
						<td><input type="text" name="training_input2" maxlength="30" required placeholder="Training"></td>
						<td><input type="text" name="duration_of_course_input2" maxlength="30" required placeholder="(mm/dd/yyyy to mm/dd/yyyy"></td>
						<td><input type="text" name="trainig_institution_input2" maxlength="30" required placeholder="Training Institution"></td>
						<td><input type="text" name="certificate_received_input2" maxlength="30" required placeholder="Certificate Received"></td>
						<td><input type="checkbox" name="completed_training2 value="yes"> Yes <input type="checkbox" name="completed_training2" value="no"> No</td>
					</tr>
					<!-- technical vocational input 2 ends -->
					<!-- technical vocational input 3 start -->
					<tr>
						<td><input type="text" name="training_input3" maxlength="30" required placeholder="Training"></td>
						<td><input type="text" name="duration_of_course_input3" maxlength="30" required placeholder="(mm/dd/yyyy to mm/dd/yyyy"></td>
						<td><input type="text" name="trainig_institution_input3" maxlength="30" required placeholder="Training Institution"></td>
						<td><input type="text" name="certificate_received_input3" maxlength="30" required placeholder="Certificate Received"></td>
						<td><input type="checkbox" name="completed_training3 value="yes"> Yes <input type="checkbox" name="completed_training3" value="no"> No</td>
					</tr>
					<!-- technical vocational input 3 ends -->
				</table>
			<!-- training ends -->
			<!-- elegibility area starts -->
			<legend><span style="font-weight: bold;">V. Elegibility</span></legend>
				<table>
					<tr>
						<th>Career Service/Board/Bar</th>
						<th>License Number</th>
						<th>Expiry Date</th>
					</tr>	
					<tr>
						<td><input type="text" name="career_service_input1" maxlength="25" required placeholder="Career Service/Board/Bar"></td>
						<td><input type="text" name="license_number_input1" maxlength="25" required placeholder="License Number"></td>
						<td><input type="text" name="expiry_date_input1" maxlength="25" required placeholder="Expiry Date"></td>
					</tr>
					<tr>
						<td><input type="text" name="career_service_input2" maxlength="25" required placeholder="Career Service/Board/Bar"></td>
						<td><input type="text" name="license_number_input2" maxlength="25" required placeholder="License Number"></td>
						<td><input type="text" name="expiry_date_input2" maxlength="25" required placeholder="Expiry Date"></td>
					</tr>
				</table>
				Language Proficiency Certification<br>
				<input type="checkbox" name="language_proficiency_certification" value="IELTS"> International English Language Testing System<br>
				<input type="checkbox" name="language_proficiency_certification" value="TOEFL"> Test of English as a Foreign Language<br>
				<input type="checkbox" name="language_proficiency_certification" value="TOCFL"> Test of Chinese as a Foreign Language<br>
				<input type="checkbox" name="language_proficiency_certification" value="JPLT"> Japanese Language Proficiency Test<br>
				<input type="checkbox" name="language_proficiency_certification" value="TOPIC"> Test of Proficiency in Korean<br>
				<input type="checkbox" name="language_proficiency_certification" value="None"> None<br>
				<input type="checkbox" name="language_proficiency_certification_others" onclick="check(this.form)" > Others: Please Specify <input type="text" name="language_proficiency_certification_box" disabled="disabled" >
				<br>
				Validity Date : <input type="Date" name="validity_date"><br>
				Dialects Spoken :<br>
				<input type="checkbox" name="dialect_spoken" value="Tagalog"> Tagalog<br>
				<input type="checkbox" name="dialect_spoken" value="Ilocano"> Ilocano<br>
				<input type="checkbox" name="dialect_spoken" value="Ilonggo"> Ilonggo<br>
				<input type="checkbox" name="dialect_spoken" value="Bikol"> Bikol<br>
				<input type="checkbox" id= dialect_spoken_others name="dialect_spoken" onclick="check1(this.form)" > Others: <input type="text" id="dialect_spoken_box"name="dialect_spoken" disabled="disabled" >
				
			<!-- elegibility area ends -->
<hr>
				<!-- work experience area starts here -->
				<legend><span style="font-weight: bold;">VI. Work Experience</span> (Limit the occupation for the last 10 years. Start with the most recent employment)</legend>

				<table>
					<tr>
						<th>Name of Office/Company</th>
						<th>Address</th>
						<th>Position Held</th>
						<th>Inclusive Dates<br>(mm/yyyy to mm/yyyy)</th>
						<th>Status to Appointment</th>
					</tr>
					<tr>
						<td><input type="text" name="name_company1" required></td>
						<td><input type="text" name="company_address1" required></td>
						<td><input type="text" name="position_held1" required></td>
						<td><input type="month" name="first_date1"> to <br> <input type="month" name="second_date"></td>
						<td><input type="text" name="status_appointment1"required></td>
					</tr>
					<tr>
						<td><input type="text" name="name_company2" required></td>
						<td><input type="text" name="company_address2" required></td>
						<td><input type="text" name="position_held2" required></td>
						<td><input type="month" name="first_date2"> to <br> <input type="month" name="second_date"></td>
						<td><input type="text" name="status_appointment2" required></td>
					</tr>
					<tr>
						<td><input type="text" name="name_company3" required></td>
						<td><input type="text" name="company_address3"required></td>
						<td><input type="text" name="position_held3"required></td>
						<td><input type="month" name="first_date3"> to <br> <input type="month" name="second_date"></td>
						<td><input type="text" name="status_appointment3" required></td>
					</tr>
					<tr>
						<td><input type="text" name="name_company4" required></td>
						<td><input type="text" name="company_address4" required></td>
						<td><input type="text" name="position_held4" required></td>
						<td><input type="month" name="first_date4"> to <br> <input type="month" name="second_date"></td>
						<td><input type="text" name="status_appointment4" required></td>
					</tr>
				</table>
				<!-- work experience area ends here  -->
			</fieldset>
		</form>

			<a href="enroll2.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-left"></a>
			<a href="enroll4.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-right" ></a>


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
		if(f.language_proficiency_certification_others.checked == true)
		{
			f.language_proficiency_certification_box.disabled=false;
			f.language_proficiency_certification_box.value=language_proficiency_certification_others.value;
			
		}
		else
		{
			f.language_proficiency_certification_box.disabled=true;
			f.language_proficiency_certification_box.value !=language_proficiency_certification_others.value;
			
		}
	}
</script>

	<script type="text/javascript">
	function check1(f)
	{
		if(f.dialect_spoken_others.checked == true)
		{
			f.dialect_spoken_box.disabled=false;
			
		}
		else
		{
			f.dialect_spoken_box.disabled=true;
		
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