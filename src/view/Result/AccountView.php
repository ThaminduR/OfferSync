<!--Header-->
<div class="modal-header">
    <img src="data:image/jpeg;base64,<?php echo base64_encode($user['photo']);?>" alt="avatar" class="rounded-circle img-responsive">


</div>
<!--Body-->
<div class="modal-body text-center mb-1">

    <h3 class="mt-1 mb-2 black-text"><?= $user["username"] ?> </h3>
    <hr>
    <p class="black-text">Gender :<?= $user["gender"] ?></p>
    <p class="mt-1 black-text">City : <?= $user["city"] ?> </p>

</div>