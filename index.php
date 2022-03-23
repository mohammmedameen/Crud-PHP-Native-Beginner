<?php
include "./template/header.php";
include "./core/messages.php";
// session_start();

/*
$sql="SELECT * FROM `users`";
$result=mysqli_query($conn,$sql);
*/


/*
if (mysqli_num_rows($result)) :
    while($rows = mysqli_fetch_assoc($result)):
        echo "<pre>";
        print_r($rows);
        echo "</pre>";
    endwhile;
    endif;
    
    die;
    
*/

/*
if (mysqli_num_rows($result)) {
while($rows = mysqli_fetch_assoc($result)){
    echo "<pre>";
    print_r($rows);
    echo "</pre>";
}
}
*/

// echo message("errorsName","successName");
// echo message("errorsEmail","successEmail");
// echo message("errorMobile","successMobile");
// echo message("errorPassword","successPassword");
// echo finalMessage("uploaderror","uploadsuccess");
// echo finalMessage("editedsuccess","editederror");


?>
<!-- mx-auto -->
<div class="col-sm-12 bg-dark p-3 border"><p class="text-white">Add User</p></div>
<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
                <form action="./handlers/insert.php" method="POST" enctype="multipart/form-data">


                <div class="mb-3">
                <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">   
                    <div class="valid "><?=message("errorName","successName");?></div>    
                </div>

                
                <div class="mb-3">
                <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control"> 
                    <div class="valid "><?=message("errorEmail","successEmail");?></div>    
                </div>

                <div class="mb-3">
                <label for="mobile">Mobile:</label>
                    <input type="number" name="mobile" min="1" class="form-control">    
                    <div class="valid "><?=message("errorMobile","successMobile");?></div>    
                </div>


                <div class="mb-3">
                <label for="password">password:</label>
                    <input type="number" name="password" min="1" class="form-control">    
                    <div class="valid "><?=message("errorPassword","successPassword");?></div>    
                </div>



                <div class="valid "><?=finalMessage("uploaderror","uploadsuccess");?></div>    

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