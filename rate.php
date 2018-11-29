<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<h1 class="titel">Bewertung zu einem Blog schreiben</h1>

	<form action="add" method="POST">

		
			<div class="form-field">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="form-field">
				<label for="message">Nachricht</label>
				<textarea type="text" id="message" name="message" required></textarea>
            </div>


    <input class ="button" type="submit" value="Speichern">

	    </div>
	</form>

</body>
</html>