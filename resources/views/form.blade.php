<!DOCTYPE html>
<head>
	<title>Form SanberBook</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
		<p>First name:</p>
		<input type="text" name="fname">
		<br>
		<p>Last name:</p>
		<input type="text" name="lname">
		<br>
		<p>Gender:</p>
		<input type="radio" name="gender">
		<label>Male</label><br>
		<input type="radio" name="gender">
		<label>Female</label><br>
		<input type="radio" name="gender">
		<label>Other</label>
		<br>
		<p>Nationality:</p>
		<select name="nationality">
			<option value="Indonesian">Indonesian</option>
			<option value="Singaporean">Singaporean</option>
			<option value="Malaysian">Malaysian</option>
		</select>
		<p>Languange Spoken:</p>
		<input type="checkbox" name="languange-spoken">
		<label>Bahasa Indonesia</label><br>
		<input type="checkbox" name="languange-spoken">
		<label>English</label><br>
		<input type="checkbox" name="languange-spoken">
		<label>Other</label>
		<p>Bio:</p>
		<textarea rows="10" cols="30" name="bio"></textarea><br>
		<input type="submit" value="Sign Up">
	</form>
</body>
</html>