<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Kingstagram - Sign up, Log in, Connect </title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1 style="color: white;">Welcome to Kingstagram</h1>
			<h2 style="color: white;">Log in</h2>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="password" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>