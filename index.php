<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
	<title>HomeWork12</title>
</head>
<body>
	
	<h2>Для регистрации введите следующие данные</h2>
	<form method="post" action="file.php" id="form">
		<div style="background-color: rgb(73, 139, 161); width: 330px">
			<table > 
				<tr>
					<td>First Name: </td>
					<td><input id="frsName" type="text" name="frsName"></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input id="lstName" type="text" name="lstName"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input id="usPasw" type="password" name="usPasw"></td>
				</tr>
				<tr>
					<td>Your Birth Date: </td>
					<td ><input id="mnt" type="month" name="mnt" style="width: 180px"></td>
				</tr>
				<tr>
					<td>Your Gender: </td>
					<td>
						<input class="gender" type="radio" name="gender" value="male">Male
						<input class="gender" type="radio" name="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<td>Phone Number: </td>
					<td><input id="phNumb" type="tel" name="phNumb"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input id="eMail" type="email" name="eMail"></td>
				</tr>
				<tr> 	
					<td>Secure Question:</td>
					<td>
						<select name="secquest" style="width: 185px">
							<option value="false">--none--</option>
							<option value="x1">What is the first name of the person you first kissed?</option>
							<option value="x2">What is the last name of the teacher who gave you your first failing grade?</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Your Answer: </td>
					<td><input type="textarea" name="txtar"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" value="Set"></td>
				</tr>
			</table>
			<input type="checkbox" name="chkb[]" value="true">something!!! <br><hr>
			<input type="submit" value="Submit" name="submit"><br>
		</div>
  </form><br>
  <div id="info"></div>
</body>
</html>