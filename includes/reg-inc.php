<?php 

if(isset($_POST['register'])){

    require 'config-inc.php';

    $fullname=$_POST['fullname'];
    $f_name=$_POST['f_name'];
    $m_name=$_POST['m_name'];
    $village=$_POST['village'];
    $thana=$_POST['thana'];
    $district=$_POST['district'];
    $p_num=$_POST['p_num'];
    $email=$_POST['email'];
    $occupation=$_POST['occupation'];
    $edu_qua=$_POST['edu_qua'];
    $refer=$_POST['refer'];

    if(empty($fullname)|| empty($f_name)|| empty($m_name)|| empty($village)|| empty($thana)|| empty($district)|| empty($p_num)||  empty($occupation)|| empty($edu_qua) || empty($refer)){
      
        header("Location:../registration_page.php?error=emptyfields");
        exit();
    }
   
      else{
                        $sql="INSERT INTO users (fullname, f_name, m_name,village,thana,district,p_num,email,occupation,edu_qua,refer) VALUE (?,?,?,?,?,?,?,?,?,?,?)";
                        $stmt = mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            header("Location:../registration_page.php?error=sqlerror");
                            exit();
                        }
                            else{
                                
                                mysqli_stmt_bind_param($stmt,"ssssssissss", $fullname, $f_name, $m_name,$village,$thana,$district,$p_num,$email,$occupation,$edu_qua,$refer);
                                mysqli_stmt_execute($stmt);
                                header("Location:../registration_page.php?register=success");
                                exit();
                            }
                    } 
                
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

                }
else{
    header("Location:../registration_page.php");
    exit();
}