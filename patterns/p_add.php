<form method="post" action="add.php">
	<?php foreach($productProperties as $value): ?>
		<label>
			<span><?=$value['ru_name']?>:</span>
			<input type="text" name="<?=$value['name']?>" value="<?php echo !empty($_POST) ? htmlspecialchars($_POST[$value['name']]) : '' ?>">
		</label><br>
	<?php endforeach; ?>
	<input type="submit" name="submit">
</form>