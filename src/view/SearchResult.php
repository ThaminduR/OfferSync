<h3 class="lead text-white"><strong class="text-white"> <?= $count ?> </strong> results were found for the search for
    <strong class="text-white"> <?= $search ?> </strong></h3>
</hgroup>
<section class="col-xs-12 col-sm-6 col-md-12">
    <?php while ($row = mysqli_fetch_array($result)) : ?>
        <article class="row">

            <div class="col-4 offerdetails">
                <ul>
                    <form id="form1" action="/AccountView" method="POST">


                        <button class="unstyled-button">
                            <li><i class="fas fa-user-circle"></i><span class="ml-2"><?= $row["Username"] ?></span></li>
                        </button>

                        <input type="hidden" name="Username" value="<?= $row[" Username"] ?>">

                    </form>
                    <li class="mb-2 mt-2"><i class="fas fa-map-marker-alt"></i> <span class="ml-2"><?= $row["City"] ?></span></li>
                    <li><i class="fas fa-building"></i><span class="ml-2"><?= $row["Date"] ?></span></li>

                </ul>
            </div>

            <div class="verticalLine"></div>


            <div class="col-4 ml-3 mr-3 offerd2">
                <p><i class="fas fa-map-marker-alt mr-2"></i><?= $row["Restaurant"] ?></p>
                <p><i class="fas fa-utensils mr-2"></i><?= $row["Offer"] ?></p>
                <p><i class="fas fa-hand-holding-usd mr-2"></i>Rs. <?= $row["Price"] ?></p>
            </div>

            <div class="verticalLine"></div>

            <div class="col-4 ml-5  reqbtn">
                <a class="btn btn-outline-black like" style="cursor: pointer;" onclick="SendRequest(<?= '\''.$row['Username'].'\''?>)">Send Request
                    <i class="far fa-paper-plane ml-2"></i></a>
            </div>
        </article>
        <br>
    <?php endwhile ?>