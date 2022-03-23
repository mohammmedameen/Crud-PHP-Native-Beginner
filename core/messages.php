<?php
session_start();


function message($error, $succes)
{
    // Show error message
    if (isset($_SESSION[$error])) : ?>
        <span class="text-danger" style="max-width: 150px;"><?= $_SESSION[$error] ?></span>
    <?php unset($_SESSION[$error]);
    endif;
    // Show success message
    if (isset($_SESSION[$succes])) : ?>
        <span class="text-success" style="max-width: 150px;"><?= $_SESSION[$succes] ?></span>
    <?php unset($_SESSION[$succes]);
    endif;
}


function finalMessage($error, $succes)
{
    // Show error message
    if (isset($_SESSION[$error])) : ?>
        <span class="text-danger" style="max-width: 150px;"><?= $_SESSION[$error] ?></span>
    <?php unset($_SESSION[$error]);
    endif;
    // Show success message
    if (isset($_SESSION[$succes])) : ?>
        <span class="text-success" style="max-width: 150px;"><?= $_SESSION[$succes] ?></span>
<?php unset($_SESSION[$succes]);
    endif;
}

// echo message("errorsName","successName");
// echo message("errorsEmail","successEmail");
// echo message("errorMobile","successMobile");
// echo message("errorPassword","successPassword");
// echo finalMessage("uploaderror","uploadsuccess");
// echo finalMessage("editedsuccess","editederror");



?>
<!-- 
    [successName] => The name is valid
    [errorName] => 
                      Name Is empty
                      Name must be greater than 5 characters
                      Name must be less than 35 characters
                   
    [successEmail] => The email is valid
    [errorEmail] =>
                      Please select a quantity
                      It's Not email

    [successMobile] => Mobile Is empty
    [errorMobile] =>
                      Please select a price
                      Mobile must be an integer
                      Mobile must be 11


    [successPassword] => The Password is valid
    [errorPassword] =>
                      Password must be an integer
                      Password Is empty

    [editedsuccess] => User has been added successfully
    [editederror] =>   Please make sure that the data is correct

    [uploadsuccess] => User has been Edited successfully
    [uploaderror] =>   Please make sure that the data is correct





-->