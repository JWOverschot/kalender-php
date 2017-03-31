<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
		<input type="date" name="date">
		<input type="text" name="name" placeholder="Naam">
		<input type="text" name="surname" placeholder="Achternaam">
		<textarea name="description" placeholder="Description" maxlength="500"></textarea>
		<input type="submit" value="Toevoegen">
	</form>
</div>