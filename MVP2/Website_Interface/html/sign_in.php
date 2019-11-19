<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sign In Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)"
		href="../css/small_device.css">
	<link rel="stylesheet" type="text/css" media="only screen and (min-device-width: 481px)"
		href="../css/large_device.css">
</head>

<body>
	<header>
		<table>
			<tr>
				<td>
					<a href="https://www.uregina.ca"><img src="../../Website_Sketches/logo.png" class="logo"
							alt="UofR"></a>
				</td>

				<td>
					<nav class="short-nav">
						<ul>
							<li><a href="../main.php" id="first">Main Page</a></li>
							<li>|</li>
							<li><a href="professors.php">Professors</a></li>
							<li>|</li>
							<li><a href="https://github.com/Jacobchapman99/ENSE-374-Group07-Project.git">GitHub</a></li>
							<li>|</li>
							<li><a href="group_member.php">Group Members</a></li>
							<li>|</li>
							<li><a href="highest.php">High Scores</a></li>
						</ul>
					</nav>
				</td>
			</tr>
		</table>
	</header>

	<section class="sign-in-up">
		<form id="SignUp" method="post">
			<table>

				<tr>
					<td></td>
					<td><label id="uname_msg" class="err_msg"></label></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td> <input type="text" name="uname" size="30" /></td>
				</tr>

				<tr>
					<td></td>
					<td><label id="pswd_msg" class="err_msg"></label></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td> <input type="password" name="password" size="30" /></td>
				</tr>

			</table><br />
			<input type="submit" value="Sign in" />
			<input type="reset" value="Reset" />
			<p>
				Don't have an account yet? <a href="sign_up.php">Sign Up</a><br>
			</p>
		</form>
		<script type="text/javascript" src="../js/SignUp.js"></script>
	</section>

	<footer>
		<p>
			© 2019 ENSE 374 Group_7 All rights reserved.
			<a class="linkText"
				href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww2.cs.uregina.ca%2F~li787%2F">Validate HTML5</a>
		</p>
	</footer>
</body>

</html>
