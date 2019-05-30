<div class="card mb-4">
    <hr>
    <h3 class="lead black-text mt-1"><strong class="text-black"> <?= $count ?> </strong> results found for the search<strong class="text-black"> <?= $search ?> </strong></h3>
    <hr>
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
                <img src="/img/header2.jpg" style="width:100%">
                <div class="mt-2">
                    <h3><i class="far fa-user-circle"></i> <?= $row['Username'] ?> </h3>
                </div>
                <button style="padding: 0; border: none; background: none; color:gray;" data-toggle="modal" data-target="#modalAvatar" onclick="ViewAcc(<?= '\'' . $row['Username'] . '\'' ?>)">View Profile</button>
                <hr>
                <p><i class="fas fa-map-marker-alt mr-2"></i> <span><?= $row["City"] ?></span></p>
                <p><i class="fas fa-building mr-2"></i><?= $row["Restaurant"] ?></p>
                <p><i class="fas fa-utensils mr-2"></i><?= $row["Offer"] ?></p>
                <p><i class="fas fa-hand-holding-usd mr-2"></i>Rs. <?= $row["Price"] ?></p>
                <hr>

                <p><a class="btn btn-outline-black " style="cursor: pointer;" onclick="SendRequest(<?= '\'' . $row['Username'] . '\'' ?>,<?= '\'' . $row['OfferID'] . '\'' ?>)">Send Request
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