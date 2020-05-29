
<?php include 'link.php'; ?>

<?php include 'header.php'; ?>



<div class="container mt-5 p-4">

    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
   
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

                <?php 
            if(isset($_GET['error'])){
                if($_GET['error']=="emptyfields"){
                    echo'<p class="alert alert-danger h6">Fill in all fields</p>';
                }
                
            
                else if($_GET['error']=="sqlerror"){
                    echo'<p class="alert alert-danger h6">Error in Creating account</p>';
                }
                
            
            }	else if(isset($_GET['contact'])){
                        if(($_GET['contact']=="messagesaved")){
                    echo'<p class="alert alert-success h6">Your message successfully sent </p>';
                }
                
                    elseif(($_GET['contact']=="emailsent")){
                echo'<p class="alert alert-success h6">Your message successfully sent </p>';
                }
                
                    elseif(($_GET['contact']=="emailsent")&&($_GET['contact']=="messagesaved")){
                echo'<p class="alert alert-success h6">Your message successfully sent and saved </p>';
                }
            }
        ?>

    <div class="row">

        <div class="col-md-7 mb-5 mt-4">

            <form id="contact-form" name="contact-form" action="includes/mail.php" method="POST">

               
                <div class="row mt-3">

               
                    <div class="col-md-6">
                         <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                    </div>
                  
                    <div class="col-md-6">
                             <label for="email" class="">Phone Number</label>
                            <input type="text" id="p_num" name="p_num" class="form-control">
                    </div>
                    

                </div>
               
                <div class="row mt-3">

                    <div class="col-md-12">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                    </div>

                </div>
               
                <div class="row mt-3">

                  
                    <div class="col-md-12">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                    </div>

                </div>
                
                
                <div class="text-center text-md-left mt-5 ">
                    <input type="submit" name="contact-submit" class="btn btn-dark mt-2">
                 </div>

            </form>

        </div>
        
        <div class="col-md-5 text-center mb-4 p-4" style="background-color:#d9d9d9">
            <ul class="list-unstyled ">
                <li><i class="fas fa-map-marker-alt fa-2x  mt-4 "></i>
                    <p>House # 30 , Block-A , Ward # 53 <br>  Diabari , Turag ,Dhaka</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 872-167498 <br> + 01 829-077648</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>umsdtl@gmail.com</p>
                </li>
            </ul>
        </div>
    

    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116750.88717200003!2d90.3074849626817!3d23.87311641709061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c3f69bf12d85%3A0xe4f6ea90ef13bd22!2sBangladesh%20Road%20Transport%20Authority!5e0!3m2!1sen!2sbd!4v1582386353235!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


</div>


            
          
     
              

<?php include 'footer.php'; ?>