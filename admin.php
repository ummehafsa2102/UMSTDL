<?php include 'link.php'; ?>
<?php include 'includes/config-inc.php';    ?>

    <div class="container mt-5 " style="width:400px;">

    <?php
            if(isset($_GET['error'])){
                if($_GET['error']=="emptyfields"){
                    echo'<p class="alert alert-danger h6">Fill in all fields</p>';
                }
                
            
                else if($_GET['error']=="wrongpassword"){
                    echo'<p class="alert alert-danger h6">Wrong Password</p>';
                }
                else if($_GET['error']=="wronguser"){
                    echo'<p class="alert alert-danger h6">Wrong User</p>';
                }
            }
            ?>

        <form id="access-form" name="access-form" action="access_file.php" method="POST">


         
                <label for="user" class="">User</label>
                    <input type="text" id="user" name="user" class="form-control">
         
        
            
                    <label for="password" class="">Password</label>
                    <input type="text" id="pass" name="pass" class="form-control">
         

                <div class="text-center text-md-left mt-5 ">
                        <input type="submit" name="access-submit" class="btn btn-dark mt-2">
                </div>

        </form>
        </div>

      