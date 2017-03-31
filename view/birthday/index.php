<?php
    setlocale(LC_TIME, 'Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1', 'nl_NL.UTF-8', 'nld_nld', 'nld', 'nld_NLD', 'NL_nl');
    foreach ($birthdays as $birthday) {
    $monthNum  = $birthday['birthday_month'];
    $monthName = strftime("%B", mktime(0, 0, 0, $monthNum, 10));
?>
    <h1><?= $monthName ?></h1>
    <h2><?= $birthday['birthday_day']; ?></h2>
    <p>
        <a href="<?= URL ?>birthday/edit/<?= $birthday['birthday_id'] ?>"><?= $birthday['birthday_name']; ?> <?= $birthday['birthday_surname']; ?> (<?= $birthday['birthday_year']; ?>)</a>
        <a href="<?= URL ?>birthday/delete/<?= $birthday['birthday_id'] ?>">x</a>
    </p>
    <p><small><?= $birthday['birthday_description'] ?></small></p>
<?php } ?>
<p><a href="<?= URL ?>birthday/create">+ Toevoegen</a></p></div>