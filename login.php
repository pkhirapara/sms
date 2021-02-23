<!DOCTYPE html>
<html>
	<head>
	<title>Admin Login</title>
	</head>
	<body>

		<h1 align="center">Admin Login</h1>
		<form method="post" action="login.php">

			<table align="center">
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="pass" required></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
		
		</form>

	</body>
</html>