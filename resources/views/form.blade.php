<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buat Account Baru</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h4>Sign Up Form</h4>

	<form action="<?= url('/welcome') ?>" method="post">
		@csrf
		<p>First name:</p>
		<input type="text" name="first_name">
		<p>Last name:</p>
		<input type="text" name="last_name">
		<p>Gender:</p>
		<input type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>  <br>
		<input type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>  <br>
		<input type="radio" name="gender" id="gender_other" value="other"> <label for="gender_other">Other</label>  <br>
		<p>Nationality</p>
		<select name="nationality">
			<option value="indonesian">Indonesian</option>
			<option value="singaporan">Singaporan</option>
			<option value="malaysian">Malaysian</option>
			<option value="american">American</option>
		</select>
		<p>Language Spoken:</p>
		<input type="checkbox" name="language_spoken[]" id="bahasa_indonesia" value="bahasa_indonesia"> <label for="bahasa_indonesia">Bahasa Indonesia</label> <br>
		<input type="checkbox" name="language_spoken[]" id="english" value="english"> <label for="english">English</label> <br>
		<input type="checkbox" name="language_spoken[]" id="lang_other" value="other"> <label for="lang_other">Other</label> <br>
		<p>Bio:</p>
		<textarea name="bio" cols="30" rows="10"></textarea><br>
		<button name="submit">Sign Up</button>
	</form>

</body>
</html>