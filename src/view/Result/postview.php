<br>
<div class="card mb-3">
    <h3 class="lead text-black mt-2"><strong class="text-black"> <?= $count ?> </strong> Offers were posted </h3>
</div>
<br>
<section class="col-xs-12 col-sm-6 col-md-12">

    <?php
    $count = 0;
    while ($row = mysqli_fetch_array($result)) :
        if ($count == 0) : ?>
            <div class="card-deck">

            <?php endif;
        $count += 1; ?>
            <div class="card">
                <img src="/img/myoffer.jpg" style="width:100%">
                <p class="mt-2"><i class="fas fa-utensils mr-2 mt-2"></i><?= $row["Offer"] ?></p>
                <hr>
                <p class="city"><i class="fas fa-map-marker-alt"></i> <span class="ml-2"><?= $row["City"] ?></span></p>
                <hr>
                <p><i class="fas fa-building mr-2"></i><?= $row["Restaurant"] ?></p>
                <hr>
                <p><i class="fas fa-hand-holding-usd mr-2"></i>Rs. <?= $row["Price"] ?></p>
                <a class="btn btn-outline-red" onclick="DeleteOffer(<?= '\'' . $row['OfferID'] . '\'' ?>)"> Delete </a>
            </div>
            <br>

            <?php
            if ($count == 3) :
                $count = 0; ?>
            </div>
            <br>
        <?php endif;
endwhile ?>