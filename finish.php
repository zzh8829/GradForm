<?php
	ini_set('display_errors', 'On');

	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$goingto = htmlspecialchars($_POST["goingto"]);
	$program = htmlspecialchars($_POST["program"]);
	$note = htmlspecialchars($_POST["note"]);
	$ruser = 0;
	$rpass = 0;
	$rlast = 0;
	$rfirst = 0;
	$rgoing = 0;
	$rprogram = 0;
	$rnote = 0;

	$error = update();

	function update() {
		global $username,$password,$goingto,$program,$note,$ruser,$rpass,$rlast,$rfirst,$rgoing,$rprogram,$rnote;
		$db = new mysqli("localhost","root","password","grad");
		if($db->connect_errno > 0) {
			return "Unable to connect to databse";
		}
		$smt = $db->prepare("SELECT * FROM students WHERE username = ?");
		$smt->bind_param("s", $username);
		$smt->execute();
		$smt->bind_result($ruser,$rpass,$rlast,$rfirst,$rgoing,$rprogram,$rnote);
		if(!$smt->fetch()) {
			return "Invalid Username";
		}
		if(strcmp($rpass,$password) != 0) {
			echo $rpass."</br>";
			echo $password."</br>";
			echo $rpass == $password;
			return "Invalid Password";
		}
		$smt->close();
		if(!strlen($note))$note=null;
		$smt = $db->prepare("UPDATE students SET goingto = ? , program = ?, note = ? WHERE username = ?");
		$smt->bind_param("ssss",$goingto,$program,$note,$username);
		$smt->execute();
		$smt->close();
		$db->close();
		return 0;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Graduation Profile</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/finish.css" />
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"/>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


</head>
<body>

	<section class="form-dark">
		<div class="form-title">Student Profile</div>
		<form>
		<p style="font-family:Arial;font-size:20px;line-height:200%;margin-top:0px;">

		<?php if(!$error){ ?>
			Congratulations, Your information has been updated. </br>
			First name: <label class="info"><?php echo $rfirst ?></label></br>
			Last name: <label class="info"><?php echo $rlast ?></label></br>
			Going to: <label class="info"><?php echo $goingto ?></label></br>
			Program: <label class="info"><?php echo $program ?></label></br>
			<?php if($note) {?>
				Note: <label class="info"><?php echo $note ?></label></br>
			<?php } ?>
		<?php } else { ?>
			Error: <label class="info"><?php echo $error ?></label></br>
		<?php } ?>
		</p>
		</form style="padding-bottom:40px;">
	</section>

	<div id="bg-img"></div>
	<script src="js/index.js"></script>

	<div style="position:absolute;bottom:0px;right:0px;"><a style="text-decoration:none;color:#000;font-family:Verdana;" href="http://zihao.ca">Z</a></div>


</body>
</html>

