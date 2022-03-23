<?php

include "./template/header.php";
include "./core/messages.php";

// session_start();
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

// Important note:
// In the case of sending the data and returning again to the update page, there is no id for the search here
// Therefore, when sending data, the id must be saved in the session to be used again to avoid the occurrence of an error

if (isset($_GET["id"])) :
    $id = $_GET["id"];
elseif (isset($id)) :
else :
    $id = $_SESSION['se_id'];
endif;

$sql_pro = "SELECT * FROM `users` WHERE `id`='$id'";
$result_pro = mysqli_query($conn, $sql_pro);
$pro = mysqli_fetch_assoc($result_pro);

/*
echo "<pre>";
print_r($pro);
echo "<pre>";
die;
*/

?>


<!-- mx-auto -->
<div class="col-sm-12 bg-dark p-3 border">
    <p class="text-white">product modification</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
            <form action="./handlers/update.php?id=<?= $pro['id'] ?>" method="POST">

            
                <div class="mb-3">
                    <label for="name">name:</label>
                    <input type="text" value="<?= $pro['name'] ?>" name="name" class="form-control">
                    <div class="valid "><?= message("errorName", "successName"); ?></div>
                </div>

                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?= $pro['email'] ?>" class="form-control">
                    <div class="valid "><?= message("errorEmail", "successEmail"); ?></div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile:</label>
                    <input type="number" name="mobile" value="<?= $pro['mobile'] ?>" class="form-control">
                    <div class="valid "><?= message("errorMobile", "successMobile"); ?></div>
                </div>


                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="number" name="password" value="<?= $pro['password'] ?>" class="form-control">
                    <div class="valid "><?= message("errorPassword", "successPassword"); ?></div>
                </div>



                <div class="valid "><?= finalMessage("editederror", "editedsuccess"); ?></div>

                <div class="mb-3">
                    <input type="submit" name="submit" class="form-control btn btn-primary btn-lg" value="send">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "./template/footer.php";
?>