<?php 

if(isset($_POST['contact-submit'])){

 


    require 'config-inc.php';


$name = $_POST['name'];

$p_num = $_POST['p_num'];

$message = $_POST['message'];

$subject = $_POST['subject'];

if(empty($name)|| empty($p_num)|| empty($message)|| empty($subject)){
      
  header("Location:../contact_page.php?error=emptyfields");
  exit();

} else {
  
    $sql="INSERT INTO mail (name, p_num, subject,message) VALUE (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../contact_page.php?error=sqlerror");
        exit();
    }
        else{
            
            mysqli_stmt_bind_param($stmt,"siss", $name, $p_num,$subject,$message);
            mysqli_stmt_execute($stmt);
            header("Location:../contact_page.php?contact=messagesaved");
            exit();


          }


}
}


?>