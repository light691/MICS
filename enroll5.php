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
				<!-- training program area start   -->
				<legend><span style="font-weight: bold;">Training Program Offered</span></legend>
				


				Choose Training Program Months 
				<select id="months_choosen" onchange="monthValue()">
					<option disabled selected>Choose Months</option>
					<option  value="3 Months">3 Months</option>
					<option  value="4 Months">4 Months</option>
				</select><br>
				Training Program Courses
				<select id="courseList">
					<option disabled selected>Choose Courses</option>
				</select>
				<br>
				<select style="display: none" id="secondary_courseList">
					<option disabled selected>Choose Courses</option>
				</select>
				Time Session
				<select>
					<option disabled="disabled" selected>Choose Time Session</option>
					<option>Morning Session 8:00 A.M - 12:00 N.N</option>
					<option>Afternoon Session 1:00 P.M - 5:00 P.M</option>
					<option>Evening Session 5:00 P.M - 9:00 P.M</option>

				</select>

				<!-- training program area ends -->
				
			</fieldset>
		</form>

			<a href="enroll4.php" style="font-size: 2em; text-decoration: none" class="	glyphicon glyphicon-circle-arrow-left"></a>
			<br>
			<input type="button" name="register" style="width: 100%" id= "registerButton" value="Register">
		

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
		<script>

			var timeframe = document.getElementById('months_choosen');
			var array1 =  ["Automotive Servicing","Consumer Electronics Servicing","Computer System Servicing","Electrical Maintenance"];
			var array2 = ["Beauty Care" , "Upholstery" , "Garments","Bartending"];




	function monthValue(){

					switch(timeframe.value)
					{

						case '3 Months' :
						var selectList = document.getElementById("courseList");
						$(("#courseList")).empty();
						for (var i=0;i<array2.length;i++){
							var option = document.createElement("option");
							option.value=array2[i];
							option.text = array2[i];
							selectList.appendChild(option);
							console.log('3 months selected');
					}
						break;
						case '4 Months' :
						var selectList = document.getElementById("courseList");
						$(("#courseList")).empty();
						for (var i=0;i<array1.length;i++){
							var option = document.createElement("option");
							option.value=array1[i];
							option.text = array1[i];
							selectList.appendChild(option);
							console.log('4 months selected ');
					}
						break;


	}
					timeframe.addEventListener('change',monthvalue,false);
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