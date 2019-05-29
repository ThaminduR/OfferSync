<!-- Requests results -->
<br>
<div class="card mb-4">
    <?php if ($case == 1) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You have no new requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1">You have<strong class="text-black"> <?= $count ?></strong> new request/s.</h3>
        <?php } ?>
    <?php } elseif ($case == 2) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You have no accepted requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1"><strong class="text-black"> <?= $count ?></strong>of your request/s have been accepted.</h3>
        <?php } ?>
    <?php } else { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You don't have any requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1">You have accpeted<strong class="text-black"> <?= $count ?></strong> request/s.</h3>
        <?php } ?>
    <?php } ?>
</div>
</hgroup>
<section class="col-xs-12 col-sm-6 col-md-12">

    <?php
    $count1 = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count1 == 0) : ?>
            <div class="card-deck">

            <?php endif;
        $count1 += 1; ?>
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
                <p class="date"><i class="fas fa-fingerprint"></i><span class="ml-2">Offer Id : <?= $row["OfferId"] ?></p>
                <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                <hr>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Accept(<?= '\'' . $row['OfferId'] . '\'' ?>)">Accept Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>
                <p><a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Decline(<?= '\'' . $row['OfferId'] . '\'' ?>)">Decline Request
                        <i class="far fa-paper-plane ml-2"></i></a></p>
            </div>
            <br>

            <?php
            if ($count1 == 3) :
                $count1 = 0; ?>
            </div>
            <br>
        <?php endif;
endwhile ?>