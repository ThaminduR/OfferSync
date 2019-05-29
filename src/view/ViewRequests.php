<article class="row">

    <div class="col-4 offerdetails">
        <ul>
            <form id="form1" action="/AccountView" method="POST">

                <a href="javascript:submitform()">
                    <li><i class="fas fa-user-circle"></i><span class="ml-2"><?= $row['Sender'] ?></span></li>
                </a>
                <input type="hidden" name="Username" value="<?= $row['Sender'] ?>">

            </form>
            <li><i class="fas fa-map-marker-alt"></i> <span class="ml-2"><?= $row["Date"] ?></span></li>
        </ul>
    </div>
    <div class="verticalLine"></div>

    <div class="col-4 ml-5  reqbtn">
        <a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Accept(<?= '\'' . $row['Sender'] . '\'' ?>)">Accept Request
            <i class="far fa-paper-plane ml-2"></i></a>
        <a class="btn btn-outline-black like" style="cursor: pointer;" onclick="Decline('<?= '\'' . $row['Sender'] . '\'' ?>')">Decline Request
            <i class="far fa-paper-plane ml-2"></i></a>
    </div>
</article>
<br>