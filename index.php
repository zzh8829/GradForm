<!DOCTYPE html>
<html lang="en">
<head>
	<title>Graduation Profile</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/index.css" />
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"/>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

</head>
<body>

	<section class="form-dark">
		<div class="form-title">Student Profile</div>

		<form action="finish.php" method="post">
		
			<div class="form-group">
				<label for="username">Username</label>
				<input id="username" type="text" required title="Username required" placeholder="Username"  name="username">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" type="password" required title="Password required" placeholder="Password" name="password">
			</div>

			<div class="form-group-radio">

				<label>Going to</label>
				<div id="goingto" style="width:80%;float:right;">
					<input type="radio" id="radio1" name="goingto" value="University" checked>
					<label for="radio1">University</label>

					<input type="radio" id="radio2" name="goingto" value="College">
					<label for="radio2">College</label>

					<input type="radio" id="radio3" name="goingto" value="Returning">
					<label for="radio3">Returning Back</label> 

					<input type="radio" id="radio4" name="goingto" value="Other">
					<label for="radio4">Other(please specify)</label>
				</div>
			</div>

			<div class="form-group">
				<label for="program">Program</label>
				<input id="program" type="text" required title="Program Required" placeholder="e.g. University of Windsor, Computer Science" name="program">
			</div>

			<div class="form-group">
				<label for="note">Note</label>
				<input id="note" type="text" placeholder="Note" name="note">
			</div>
			
			<div style="padding-bottom:10px;text-align:center;">
				if your password doesn't work, try use differnt combination of <span style="font-family:Lucida Console;">1,L,l,I,i</span>.
			</div>

			<div style="padding-bottom:10px;text-align:center;">
				if you forgot your password please email padmakala.mohan@gmail.com
			</div>

			<div style="padding-bottom:10px;text-align:center;">
				if you want your first name to be called in a certain way during graduation cermony please fill in note section. 
			</div>

			<input type="submit" class="form-button" value="Submit">
		</form>
	</section>

	<div id="bg-img"></div>
	<script src="js/index.js"></script>

	<div style="position:absolute;bottom:0px;right:0px;"><a style="text-decoration:none;color:#000;font-family:Verdana;" href="http://zihao.ca">Z</a></div>

</body>
</html>

