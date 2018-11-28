<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
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
		<a href ="andereblogs.php">zu den anderen Blogs</a>
		<br><h1>Blog Einträge:</h1><br>

		<div class="blog-list">
		<?php foreach ($entries as $entry) {?>
			<div class="blog-entry">
			<?php

				$entry = preg_replace("/(.{80})/mi", "$1\n", $entry);

			?>
                <h3><?= htmlspecialchars($entry['name'] , ENT_QUOTES,  'UTF-8'); ?></h3>
				<p><?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?></p>
				<p><?= htmlspecialchars($entry['date'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
		<?php } ?>
		
		<?php

		?>
	</div>

	</form>

</body>
</html>