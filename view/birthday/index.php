<?php
    setlocale(LC_TIME, 'Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1', 'nl_NL.UTF-8', 'nld_nld', 'nld', 'nld_NLD', 'NL_nl');
    foreach ($birthdays as $birthday) {
    $monthNum  = $birthday['birthday_month'];
    $monthName = strftime("%B", mktime(0, 0, 0, $monthNum));
?>
    <h1><?= $monthName ?></h1>
    <h2><?= $birthday['birthday_day']; ?></h2>
    <p><?= $birthday['birthday_person']; ?></p>
    <p>(<?= $birthday['birthday_year']; ?>)</p>
<?php } ?>

<div style="background-color: green;">
<br>
<h1>februari</h1>
<h2>22</h2>
<p>
    <a href="edit.php?id=4">
        Anoushka (1981)</a>

    <a href="delete.php?id=4">x</a>
</p>
<p>
    <a href="edit.php?id=10">
        Mila (1993)</a>

    <a href="delete.php?id=10">x</a>
</p>
<h1>maart</h1>
<h2>7</h2>
<p>
    <a href="edit.php?id=12">
        Brana (1967)</a>

    <a href="delete.php?id=12">x</a>
</p>
<h2>18</h2>
<p>
    <a href="edit.php?id=9">
        Vlad (1975)</a>

    <a href="delete.php?id=9">x</a>
</p>
<h1>april</h1>
<h2>19</h2>
<p>
    <a href="edit.php?id=16">
        Boris (2001)</a>

    <a href="delete.php?id=16">x</a>
</p>
<h2>28</h2>
<p>
    <a href="edit.php?id=6">
        Anna (1989)</a>

    <a href="delete.php?id=6">x</a>
</p>
<h1>mei</h1>
<h2>5</h2>
<p>
    <a href="edit.php?id=17">
        Ludmila (1969)</a>

    <a href="delete.php?id=17">x</a>
</p>
<h2>14</h2>
<p>
    <a href="edit.php?id=8">
        Vesela (1992)</a>

    <a href="delete.php?id=8">x</a>
</p>
<p>
    <a href="edit.php?id=2">
        Nadia (1996)</a>

    <a href="delete.php?id=2">x</a>
</p>
<p>
    <a href="edit.php?id=18">
        Stanibor (1999)</a>

    <a href="delete.php?id=18">x</a>
</p>
<h2>21</h2>
<p>
    <a href="edit.php?id=5">
        Dimitri (2001)</a>

    <a href="delete.php?id=5">x</a>
</p>
<h1>juni</h1>
<h2>4</h2>
<p>
    <a href="edit.php?id=13">
        Darko (1973)</a>

    <a href="delete.php?id=13">x</a>
</p>
<h2>13</h2>
<p>
    <a href="edit.php?id=14">
        Dragoslav (1982)</a>

    <a href="delete.php?id=14">x</a>
</p>
<h1>juli</h1>
<h2>17</h2>
<p>
    <a href="edit.php?id=7">
        Miroslav (2010)</a>

    <a href="delete.php?id=7">x</a>
</p>
<h1>augustus</h1>
<h2>5</h2>
<p>
    <a href="edit.php?id=1">
        Vera (1963)</a>

    <a href="delete.php?id=1">x</a>
</p>
<h1>september</h1>
<h2>9</h2>
<p>
    <a href="edit.php?id=15">
        Godemir (1984)</a>

    <a href="delete.php?id=15">x</a>
</p>
<h1>december</h1>
<h2>7</h2>
<p>
    <a href="edit.php?id=3">
        Petrov (1985)</a>

    <a href="delete.php?id=3">x</a>
</p>
<h2>19</h2>
<p>
    <a href="edit.php?id=11">
        Goran (2006)</a>

    <a href="delete.php?id=11">x</a>
</p>

<p><a href="create.php">+ Toevoegen</a></p></div>