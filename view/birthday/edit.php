<div class="container">
    <?php
    $year = $birthday['birthday_year'];
    $month = $birthday['birthday_month'];
    $day = $birthday['birthday_day'];

    if (strlen($year) == 1) {
        $year = '000' . $year;
    }
    elseif (strlen($year) == 2) {
        $year = '00' . $year;
    }
    elseif (strlen($year) == 3) {
        $year = '0' . $year;
    }
    if (strlen($month) == 1) {
        $month = '0' . $month;
    }
    if (strlen($day) == 1) {
        $day = '0' . $day;
    }

    $date = $year . '-' . $month . '-' . $day;
    ?>
	<form action="<?= URL ?>birthday/editSave" method="post">
        <input type="date" name="date" value="<?= $date ?>">
        <input type="text" name="name" value="<?= $birthday['birthday_name']; ?>" placeholder="Naam">
        <input type="text" name="surname" value="<?= $birthday['birthday_surname']; ?>" placeholder="Achternaam">
        <textarea name="description" placeholder="Description" maxlength="500"><?= $birthday['birthday_description']; ?></textarea>
        <input type="hidden" name="id" value="<?= $birthday['birthday_id']; ?>">
        <input type="submit" value="Bijwerken">
    </form>
</div>  