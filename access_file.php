<?php include 'link.php'; ?>
<?php include 'includes/config-inc.php'; ?>


 

<?php 

$userid=umsdtl;
$passid=umsdtl1234;


if(isset($_POST['access-submit'])){
  
    $user = $_POST['user'];
    $pass=$_POST['pass'];

   

    if(empty($user)|| empty($pass)){
        header("Location:admin.php?error=emptyfields");
        exit();
    }
   
         else if($pass!= $passid){
                  header("Location:admin.php?error=wrongpassword");
                    exit();
                            }
                        
                            else if($user != $userid){
                                header("Location:admin.php?error=wronguser");
                                exit();
                            }
                
                            else{
                                header("Location:registration_list.php?");
                                exit();
                            }
}
else{
    header("Location:../index.php?error");
    exit();
}