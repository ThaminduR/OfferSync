<!-- Requests results -->
<br>
<div class="card mb-4">
    <h3 class="lead text-black mt-1">You have<strong class="text-black"> <?= $count ?></strong> new requests.</h3>
</div>
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
                <img src="/img/header3.jpg" style="width:100%">
                <div class="mt-2">
                    <h3> <?= $row['Sender'] ?> </h3>
                </div>
                <form id="form1" action="/AccountView" method="POST">
                    <button style="padding: 0; border: none; background: none; color:gray;">View Profile</button>
                    <input type="hidden" name="Username" value="<?= $row['Sender'] ?>">
                </form>
                <hr>
                <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                <hr>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Accept(<?= '\'' . $row['OfferId'] . '\'' ?>)">Accept Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Decline(<?= '\'' . $row['OfferId'] . '\'' ?>)">Decline Request
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