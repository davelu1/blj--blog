<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>

	<h1 class="titel">Dave's Blog</h1>

	<form action="add" method="POST">

		<h4>Neuen Eintrag erstellen</h4>
		
		<div class="form-field">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
		</div>
		<div class="form-field">
			<label for="message">Nachricht</label>
			<textarea type="text" id="message" name="message"></textarea>
		</div>

		<input type="submit" value="Speichern">
		<br><h1>Blog Einträge:</h1>
	<div class="guestbook-list">
		<?php foreach ($entries as $entry) {?>
			<div class="guestbook-entry">
                <h1 class = "nameausgabe"><?= htmlspecialchars($entry['name'] , ENT_QUOTES,  'UTF-8'); ?></h1>
                <p class = "kommentar"><?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?></p> <br>
            </div>
        <?php } ?>
	</div>

	</form>


</body>
</html>