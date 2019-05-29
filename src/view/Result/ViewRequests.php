<!-- Requests results -->

<h3 class="lead text-white">You have<strong class="text-white"> <?= $count ?> </strong>new requests.</h3>
</hgroup>
<section class="col-xs-12 col-sm-6 col-md-12">

    <?php
    $count = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count == 0) : ?>
            <div class="card-deck">

            <?php endif;
        $count += 1; ?>
            <div class="card">
                <img src="/img/header.jpg" style="width:100%">
                <form id="form1" action="/AccountView" method="POST">
                    <a href="javascript:submitform()">
                        <h3> <?= $row['Sender'] ?> </h3>
                    </a>
                    <a class="btn sm black-text">View Profile</a>
                    <input type="hidden" name="Username" value="<?= $row['Sender'] ?>">
                </form>
                <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Accept(<?= '\'' . $row['Sender'] . '\'' ?>)">Accept Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Decline('<?= '\'' . $row['Sender'] . '\'' ?>')">Decline Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>
            </div>
            <br>

            <?php
            if ($count == 3) :
                $count = 0; ?>
            </div>
            <br>
        <?php endif;
endwhile ?>