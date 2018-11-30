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
				<input type="text" id="name" name="name" required>
			</div>

			<div class="form-field">
				<label for="title">Titel</label>
				<input type="text" id="title" name="title" required>
			</div>

			<div class="form-field">
				<label for="message">Nachricht</label>
				<textarea type="text" id="message" name="message" required></textarea>
			</div>

			<div class="form-field">
				<label for="message">Link zu einem Bild</label>
				<textarea type="text" id="link" name="link"></textarea>
			</div>

			<input type="submit" value="Speichern">
			<button type="button" onclick="window.location.href='andereblogs.php'">Zu den anderen Blogs
			</button>
		</form>
			
		<br>
		<h1>Blog Einträge:</h1><br>

	<div class="blog-list">
		<?php foreach ($entries as $entry): ?>
			<div class="blog-entry">
				<?php 
					$entry = preg_replace("/(.{80})/mi","$1\n", $entry);
				?>
				<h2>
					<?= htmlspecialchars($entry['name'] , ENT_QUOTES, 'UTF-8'); ?>
				</h2>
				<h3>
					<?= htmlspecialchars($entry['title'] , ENT_QUOTES, 'UTF-8'); ?>
				</h3>
				<div>
					<?= htmlspecialchars($entry['message'], ENT_QUOTES, 'UTF-8'); ?>
				</div>
				<br>
				<br>
				<?php if(htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8") !== ''): ?>
					<img class= "images" src= <?=htmlspecialchars($entry['image'], ENT_QUOTES, "UTF-8");?> alt="Bild ist zu Gross">
				<?php endif; ?>	
				<br>
				<br>
				<button type="button" name="like" value="submit">
					<img class ="thumbup" src="bilder/pfeil_oben.png">
				</button>
				<button type="button" name="dislike" value="submit">
					<img class ="thumbdown" src="bilder/pfeil_unten.png">
				</button>
				<div class="comment">
					<form action="rate.php" method="post">
						<button>Kommentar abgeben</button><br><br>
						<input type="hidden" name="comment-id" value="<?= $entry["id"] ?>"/>
					</form>
				</div>
				<div class="date">
					<?= htmlspecialchars($entry['date'], ENT_QUOTES, 'UTF-8'); ?>
				</div>
				<br>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>