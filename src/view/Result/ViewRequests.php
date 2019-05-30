<!-- Requests results -->
<br>
<div class="card mb-4">
    <?php if ($case == 1) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You have no new requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1">You have <strong class="text-black"> <?= $count ?></strong> new request/s.</h3>
        <?php } ?>
    <?php } elseif ($case == 3) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You have no accepted requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1"><strong class="text-black"> <?= $count ?></strong> of your request/s have been accepted.</h3>
        <?php } ?>
    <?php } elseif ($case == 2) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You don't have any requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1">You have accpeted <strong class="text-black"> <?= $count ?></strong> request/s.</h3>
        <?php } ?>
    <?php } elseif ($case == 4) { ?>
        <?php if ($count == 0) { ?>
            <h3 class="lead text-black mt-1">You haven't sent any requests.</h3>
        <?php } else { ?>
            <h3 class="lead text-black mt-1">You have sent <strong class="text-black"> <?= $count ?></strong> request/s.</h3>
        <?php } ?>
    <?php } ?>
</div>
</hgroup>


<section class="col-xs-12 col-sm-6 col-md-12">
    <?php if ($case == 1) {
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
                    <button style="padding: 0; border: none; background: none; color:gray;" data-toggle="modal" data-target="#modalAvatar" onclick="ViewAcc(<?= '\'' . $row['Sender'] . '\'' ?>)">
                        View Profile</button>
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

    <?php } elseif ($case == 2) {
    $count1 = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count1 == 0) : ?>
                <div class="card-deck">

                <?php endif;
            $count1 += 1; ?>
                <div class="card">
                    <img src="/img/header3.jpg" style="width:100%">
                    <div class="mt-2">
                        <h3>Sent by : <?= $row['Sender'] ?> </h3>
                    </div>
                    <button style="padding: 0; border: none; background: none; color:gray;" data-toggle="modal" data-target="#modalAvatar" onclick="ViewAcc(<?= '\'' . $row['Sender'] . '\'' ?>)">
                        View Profile</button>
                    <hr>
                    <button style="padding: 0; border: none; background: none; color:black;" data-toggle="modal" data-target="#modalAvatar" onclick="Contact(<?= '\'' . $row['Sender'] . '\'' ?>)">
                        <i class="fas fa-phone mr-2"></i>Contact</button>
                    <hr>
                    <p class="date"><i class="fas fa-fingerprint"></i><span class="ml-2">Offer Id : <?= $row["OfferId"] ?></p>
                    <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                </div>
                <br>

                <?php
                if ($count1 == 3) :
                    $count1 = 0; ?>
                </div>
                <br>
            <?php endif;
    endwhile ?>
    <?php } elseif ($case == 3) {
    $count1 = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count1 == 0) : ?>
                <div class="card-deck">

                <?php endif;
            $count1 += 1; ?>
                <div class="card">
                    <img src="/img/header3.jpg" style="width:100%">
                    <div class="mt-2">
                        <h3>Sent to : <?= $row['Receiver'] ?> </h3>
                    </div>
                    <button style="padding: 0; border: none; background: none; color:gray;" data-toggle="modal" data-target="#modalAvatar" onclick="ViewAcc(<?= '\'' . $row['Receiver'] . '\'' ?>)">
                        View Profile</button>
                    <hr>
                    <button style="padding: 0; border: none; background: none; color:black;" data-toggle="modal" data-target="#modalAvatar" onclick="Contact(<?= '\'' . $row['Receiver'] . '\'' ?>)">
                        <i class="fas fa-phone mr-2"></i>Contact</button>
                    <hr>
                    <p class="date"><i class="fas fa-fingerprint"></i><span class="ml-2">Offer Id : <?= $row["OfferId"] ?></p>
                    <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                </div>
                <br>

                <?php
                if ($count1 == 3) :
                    $count1 = 0; ?>
                </div>
                <br>
            <?php endif;
    endwhile ?>
    <?php } elseif ($case == 4) {
    $count1 = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count1 == 0) : ?>
                <div class="card-deck">

                <?php endif;
            $count1 += 1; ?>
                <div class="card">
                    <img src="/img/header3.jpg" style="width:100%">
                    <div class="mt-2">
                        <h3>Sent to : <?= $row['Receiver'] ?> </h3>
                    </div>
                    <button style="padding: 0; border: none; background: none; color:gray;" data-toggle="modal" data-target="#modalAvatar" onclick="ViewAcc(<?= '\'' . $row['Receiver'] . '\'' ?>)">
                        View Profile</button>
                    <hr>
                    <p class="date"><i class="fas fa-fingerprint"></i><span class="ml-2">Offer Id : <?= $row["OfferId"] ?></p>
                    <p class="date"><i class="fas fa-calendar-alt mr-1"></i><span class="ml-2"><?= $row["Date"] ?></p>
                </div>
                <br>

                <?php
                if ($count1 == 3) :
                    $count1 = 0; ?>
                </div>
                <br>
            <?php endif;
    endwhile ?>
    <?PHP } ?>