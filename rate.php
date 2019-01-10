<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<span style="color: white;">
	<?php 
		echo $_POST["comment-id"];
		
	?>
	</span>
	<h1 class="titel">Kommentar schreiben</h1>

	<form action="add" method="POST">

			<input type="hidden" name="comment-id "value="<?=  $_POST["comment-id"] ?>">

			<div class="form-field">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" required>
			</div>

			<div class="form-field">
				<label for="message">Nachricht</label>
				<textarea type="text" id="message" name="message" required></textarea>
            </div>


    <input class ="button" type="submit" value="Speichern"><br><br><br><br>






<div class="blog-list">

	<?php foreach ($rating as $rating) {?>
    <div class="blog-rating">
		<?php 
			$rating = preg_replace("/(.{80})/mi","$1\n", $rating);
		?>
		<h2>
			<?= htmlspecialchars($rating['name'] , ENT_QUOTES, 'UTF-8'); ?>
		</h2>
		<div>
			<?= htmlspecialchars($rating['message'], ENT_QUOTES, 'UTF-8'); ?>
		</div>
		<br><br>
		
		<div class="date">
			<?= htmlspecialchars($rating ['date'], ENT_QUOTES, 'UTF-8'); ?>
		</div>
		<br>
		</div>
			<?php } ?>
	</div>




	    </div>
	</form>

</body>
</html>