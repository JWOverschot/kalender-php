<?php
$januari = false;
$februari = false;
$maart = false;
$april = false;
$mei = false;
$juni = false;
$juli = false;
$augustus = false;
$september = false;
$oktober = false;
$november = false;
$december = false;

foreach ($birthdays as $birthday) {

    if($birthday['month'] == 1){ 
        $januari = true;
    }
    if($birthday['month'] == 2){ 
        $februari = true;
    }
    if($birthday['month'] == 3){ 
        $maart = true;
    }
    if($birthday['month'] == 4){ 
        $april = true;
    }
    if($birthday['month'] == 5){ 
        $mei = true;
    }
    if($birthday['month'] == 6){ 
        $juni = true;
    }
    if($birthday['month'] == 7){ 
        $juli = true;
    }
    if($birthday['month'] == 8){ 
        $augustus = true;
    }
    if($birthday['month'] == 9){ 
        $september = true;
    }
    if($birthday['month'] == 10){ 
        $oktober = true;
    }
    if($birthday['month'] == 11){ 
        $november = true;
    }
    if($birthday['month'] == 12){ 
        $december = true;
    }
}

    if($januari == ture){ 
        echo "<h1>januari</h1>";
    }
     if($februari == ture){ 
        echo "<h1>februari</h1>";
    }
     if($maart == ture){ 
        echo "<h1>maart</h1>";
    }
     if($april == ture){ 
        echo "<h1>april</h1>";
    }
     if($mei == ture){ 
        echo "<h1>mei</h1>";
    }
     if($juni == ture){ 
        echo "<h1>juni</h1>";
    }
     if($juli == ture){ 
        echo "<h1>juli</h1>";
    }
     if($augustus == ture){ 
        echo "<h1>augustus</h1>";
    }
     if($september == ture){ 
        echo "<h1>september</h1>";
    }
     if($oktober == ture){ 
        echo "<h1>oktober</h1>";
    }
     if($november == ture){ 
        echo "<h1>november</h1>";
    }
     if($december == ture){ 
        echo "<h1>december</h1>";
    } ?>




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

<p><a href="create.php">+ Toevoegen</a></p>