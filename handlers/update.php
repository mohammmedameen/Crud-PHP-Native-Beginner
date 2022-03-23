
<?php
include "../core/database.php";
include "../core/validation.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {










    //-----------------------------------------------------------------------//


    //Checking files sent by post
    /*
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    */

    //-----------------------------------------------------------------------//


    //Store the data sent in variables
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    //-----------------------------------------------------------------------//



    //Save errors in an array
    $err = [];

    //-----------------------------------------------------------------------//


    //Check Name
    if (!required($name)) :

        $err[] = "Name";
        $_SESSION['errorName'] = "Name Is empty";

    elseif (!minVal($name, 5)) :
        $_SESSION['errorName'] = "Name must be greater than 5 characters";
        $err[] = "Name";

    elseif (!maxVal($name, 35)) :
        $_SESSION['errorName'] = "Name must be less than 35 characters";
        $err[] = "Name";

    else :
        $_SESSION['successName'] = 'The name is valid';

    endif;

    //-----------------------------------------------------------------------//


    //Check Email
    if (!required($email)) :

        $err[] = "Email";
        $_SESSION['errorEmail'] = "Email Is empty";

    elseif (!emailVal($email)) :
        $_SESSION['errorEmail'] = "It's Not email";
        $err[] = "Email";

    else :
        $_SESSION['successEmail'] = 'The email is valid';

    endif;

    //-----------------------------------------------------------------------//


    //Check Mobile
    if (!required($mobile)) :

        $err[] = "Mobile";
        $_SESSION['errorMobile'] = "Mobile Is empty";

    elseif (integerVal($mobile)) :
        $_SESSION['errorMobile'] = "Mobile must be an integer";
        $err[] = "Mobile";

    elseif (equalval($mobile, 11)) :
        $_SESSION['errorMobile'] = "Mobile must be 11";
        $err[] = "Mobile";

    elseif (equalval($mobile, 11)) :
        $_SESSION['errorMobile'] = "Mobile must be 11";
        $err[] = "Mobile";

    else :
        $_SESSION['successMobile'] = 'The Mobile is valid';

    endif;

    //-----------------------------------------------------------------------//

    //Check Password
    if (!required($password)) :

        $err[] = "Password";
        $_SESSION['errorPassword'] = "Password Is empty";

    elseif (integerVal($password)) :
        $_SESSION['errorPassword'] = "Password must be an integer";
        $err[] = "Password";


    else :
        $_SESSION['successPassword'] = 'The Password is valid';

    endif;


    //-----------------------------------------------------------------------//


    //Make sure that there are no errors
    // print_r($err);
    // if(empty($err)):
    // echo "No";
    // endif;

    //-----------------------------------------------------------------------//

    //check image
    $errors = [];


    //-----------------------------------------------------------------------//

    //If there are no errors
    if (valuesempty($err)) {

        //UPDATE data into the database
        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' WHERE `id`='$id'";
        $result = mysqli_query($conn, $sql);
        $_SESSION['editedsuccess'] = 'User has been Edited successfully';
    } else {
        $_SESSION['editederror'] = 'Please make sure that the data is correct';
    }


    //-----------------------------------------------------------------------//

    /*
    echo "<pre>";
    print_r($errors);
    echo"</pre>";
    */

    /*
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    */


    
    $id = $_GET["id"];
    $_SESSION['se_id'] = $id;

    // $_SESSION['se_id'];

    header("location:../update.php");
}


















?>
    


