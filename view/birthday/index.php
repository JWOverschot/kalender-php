    <h1 class="center-align"><b>Kalender</b></h1>
<?php
    setlocale(LC_TIME, 'Dutch_Netherlands', 'Dutch', 'nl_NL', 'nl', 'nl_NL.ISO8859-1', 'nl_NL.UTF-8', 'nld_nld', 'nld', 'nld_NLD', 'NL_nl');
    $currentMonth = null;
    $currentDay = null;
    foreach ($birthdays as $birthday) {
        $monthNum  = $birthday['birthday_month'];
        $monthName = strftime("%B", mktime(0, 0, 0, $monthNum, 10));
?>
    <div class="container">
        <div class="divider"></div>
            <h2>
                <?php if ($currentMonth != $monthName) {
                    echo $monthName;
                    $currentMonth = $monthName;
                }
                ?>
            </h2>
            <h4>
                <?php if ($currentDay != $birthday['birthday_day']) {
                    echo $birthday['birthday_day'];
                    $currentDay = $birthday['birthday_day'];
                }
                ?>
            </h4>
            <div class="row">
                <div class="col s12 m3">
                    <div class="card">
                        <div class="card-content">
                            <p>
                                <a href="<?= URL ?>birthday/edit/<?= $birthday['birthday_id'] ?>"><?= $birthday['birthday_name']; ?> <?= $birthday['birthday_surname']; ?> (<?= $birthday['birthday_year']; ?>)
                                </a>
                            </p>
                            <p><?= $birthday['birthday_description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php } ?>
    <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large waves-effect waves-light orange" href="<?= URL ?>birthday/create"><i class="material-icons">add</i></a>
    </div>