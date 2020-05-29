<?php include 'link.php'; ?>

<?php include 'header.php'; ?>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="103877671204563">
      </div>

    <! Main Slider !>
 
  

            <div class="banner owl-carousel m-0 d-none d-lg-block">

          <div class="banner-item" style="   background-image:url('images/0-7.jpg');">
            <div class="banner-data">
              <div class="banner-para">  
                <p>আমরা দিব ফুল গাইডলাইন এবং অভিজ্ঞ শিক্ষক দ্বারা সার্বক্ষণিক অনলাইন সাপোর্</p>
              </div>
              <a href="registration_page.php" class="btn btn-hire">এখনই নিবন্ধন করুন</a>
            </div>
          </div>


          <div class="banner-item" style="   background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
    url('images/0-1.jpg');">
            <div class="banner-data">
              <p>অভিজ্ঞ শিক্ষক দ্বারা ক্লাস পরিচালিত করা হয় এবং আছে টিউটর এর ব্যবস্থা।</p>
              <a href="registration_page.php" class="btn btn-hire">এখনই নিবন্ধন করুন</a>
            </div>
          
          </div>

          <div class="banner-item" style="   background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
    url('images/0-4.jpg');">
            <div class="banner-data">
              <p>আমাদের আছে সুসজ্জিত ক্লাস রুম এবং আধুনিক কম্পিউটার ল্যাব।</p>
              <a href="registration_page.php" class="btn btn-hire">এখনই নিবন্ধন করুন</a>
            </div>
         
          </div>


          </div>
   

         <! End of Main Slider !>  
    
         <! About us area !> 

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-8 col-md-8 ">
    <div class="about-text ">
               <h1>About<span class="about-heading"> Us</span></h1>
               <div class="border"></div>
             <h3>
             United Multimedia Skill Development Technology Ltd is a professional outsourcing training and freelancing and IT training company in Bangladesh. For developing your skill and making your career path bright  join us as we provide affiliate marketing, Web design and development, CPA marketing, digital marketing, YouTube marketing, Facebook marketing, graphics design, autocade, computer office applications and computer hardware.
             </h3>
          
             <a href="contact_page.php" class="btn btn-hire">Contact us</a>
           </div>
    </div>
  </div>
</div>

          <! Services area  !>

         

          <div class="service mt-5 "  style="background-color:#f2f2f2">

          <div class="heading"> 
              <div class="text-center pt-4 mb-4 " style=" color:#262626;"> Our Services
            </div>
              
         </div>

          <div class="container service-area pb-2 " style="">
 

            <div class="row mt-5">
            
                <div class=" col-lg-4 col-md-12 col-sm-12 servicebox p-5 " style=" background-color:#ccebff; ">
                  <div class="text-center">
                  <i class="fas fa-chalkboard-teacher service-icon "></i>
                  </div>
                    <h4 class="text-center ">Skillled Trainer</h4>
                  </div>

                    <div class=" col-lg-4 col-md-12 col-sm-12 servicebox p-5  " style="background-color: #99d6ff
;  ">
                  <div class="text-center">
                  <i class="far fa-building service-icon"></i>
                  </div>
                    <h4 class="text-center">Best Infrastructure </h4>
                  </div>

                    <div class=" col-lg-4 col-md-12 col-sm-12 servicebox p-5 " style=" background-color:#66c2ff;">
                    <div class="text-center">
                    <i class="fas fa-laptop service-icon"></i>
                    </div>
                        <h4 class="text-center">Well Equiped Lab </h4>
                      </div>

                 </div>



            <div class="row mb-5">
            
                <div class=" col-lg-4 col-md-12 col-sm-12 servicebox p-5 " style="background-color:#ccebff; ">
                      <div class="text-center">
                      <i class="far fa-comments service-icon"></i>
                      </div>
                      <h4 class="text-center">Online Course </h4>
                  </div>

                  <div class=" col-lg-4 col-md-12 col-sm-12 servicebox p-5 " style=" background-color: #99d6ff
; ">
                      <div class="text-center">
                      <i class="fas fa-book-reader service-icon"></i>
                      </div>
                      <h4 class="text-center">Quality Library </h4>
                </div>

                <div class=" col-lg-4 col-md-12 col-sm-12 servicebox  p-5" style=" background-color:#66c2ff;">
                      <div class="text-center">
                      <i class="fas fa-wifi service-icon"></i>
                      </div>
                      <h4 class="text-center">Modern classroom</h4>
                  </div>

                   </div>
 
          </div>
          </div>
          
          <! End of service area   !>


          <! testimonial area  !>

       <!--
          <div class="testimonial-area overflow  p-4" id="testimonial" >

<div class="heading"> 
    <div class="col text-center p-3 m-3 " style="">Testimonial</div>
  </div>

          <div class="testimonial owl-carousel">

    <div class="container">
    <div class="testimonial-box ">
          <div class="row ">
                <div class="col-lg-4 col-sm-6 col-md-6 ">
                    <img src="images/9.jpg" alt="" >
                </div>
                <div class="col-lg-8 col-sm-6 col-md-6 mt-5 pt-5 ">
                      <i class="fas fa-quote-left testimonial-text"></i>
                      <p class="testimonial-text p-3"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, odio beatae! Tempora quas omnis officia eaque autem tempore exercitationem odio.</p>
              </div>
          </div>
        </div>
    </div>


    <div class="container">
    <div class="testimonial-box ">
          <div class="row ">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <img src="images/9.jpg" alt="">
                </div>
                <div class="col-lg-8 col-sm-6 col-md-6 mt-5 pt-5">
                      <i class="fas fa-quote-left testimonial-text"></i>
                      <p class="testimonial-text p-3"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, odio beatae! Tempora quas omnis officia eaque autem tempore exercitationem odio.</p>
              </div>
          </div>
        </div>
    </div>

     <div class="container">
    <div class="testimonial-box ">
          <div class="row ">
                <div class="col-lg-4 col-sm-6 col-md-6  ">
                    <img src="images/9.jpg" alt="">
                </div>
                <div class="col-lg-8 col-sm-6 col-md-6 mt-5 pt-5 ">
                      <i class="fas fa-quote-left testimonial-text"></i>
                      <p class="testimonial-text p-3"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, odio beatae! Tempora quas omnis officia eaque autem tempore exercitationem odio.</p>
              </div>
          </div>
        </div>
    </div>

    <div class="container">
    <div class="testimonial-box ">
          <div class="row ">
                <div class="col-lg-4 col-sm-6 col-md-6  ">
                    <img src="images/9.jpg" alt="">
                </div>
                <div class="col-lg-8  col-sm-6 col-md-6 mt-5 pt-5  ">
                      <i class="fas fa-quote-left testimonial-text"></i>
                      <p class="testimonial-text p-3"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis, odio beatae! Tempora quas omnis officia eaque autem tempore exercitationem odio.</p>
              </div>
          </div>
        </div>
    </div>
       

       </div>

       
 
</div>  

    --> 
<! end of testimonial area  !>

          <! Courses area  !>

<div class="course-area pb-4" style="background-color:#f2f2f2">

<div class="heading"> 
    
         
    <div class="col text-center p-3  " style=""> Our Courses</div>
   
</div>



<div class="container mt-3">

<div class="row mt-5">

<div class="col-lg-4 col-sm-12 col-md-12" >
<div class="card "> 
<a href="courses/affliateMarketing.php"> <img src="images/a_m.png" alt="" class="card-img course-img"></a>
</div>
<div class="card-body">
    <a href="courses/affliateMarketing.php" class="course-title"> Affliate Marketing</a>
</div>
</div>

<div class="col-lg-4 col-sm-12 col-md-12col-4" >
<div class="card"> 
<a href="courses/webDesign.php">  <img src="images/web.jpg" alt=""  class="card-img course-img"></a>
</div>
<div class="card-body">
         <a href="courses/webDesign.php" class="course-title">Web Design & Development</a>
</div>
</div>

<div class="col-lg-4 col-sm-12 col-md-12" >
<div class="card"> 
<a href="courses/cpaDesign.php"> <img src="images/cpa.png" alt=""  class="card-img course-img"></a>
</div>
<div class="card-body">
         <a href="courses/cpaDesign.php" class="course-title">CPA Marketing</a>
</div>
</div>


</div>



<div class="row mt-5">

<div class="col-lg-4 col-sm-12 col-md-12" >
<div class="card"> 
 <a href="courses/digitalMarketing.php"><img src="images/d_m.jpg" alt="" class="card-img course-img"></a>
</div>
<div class="card-body">
         <a href="courses/digitalMarketing.php" class="course-title">Digital Marketing</a>
</div>
</div>

<div class="col-lg-4 col-sm-12 col-md-12" >
<div class="card"> 
<a href="courses/youtubeMarketing.php">  <img src="images/2.jpg" alt=""  class="card-img course-img"></a>
</div>
<div class="card-body">
         <a href="courses/youtubeMarketing.php" class="course-title">Youtube Marketing</a>
</div>
</div>

<div class="col-lg-4 col-sm-12 col-md-12" >
<div class="card"> 
<a href="courses/facebookMarketing.php">  <img src="images/f_m.jpg" alt=""  class="card-img course-img"></a>
</div>
<div class="card-body">
         <a href="courses/facebookMarketing.php" class="course-title">Facebook Marketing</a>
</div>
</div>


</div>


</div>

<div class="col-12 text-center m-4">
      <a href="course_page.php" class="btn btn-hire">Show More Courses</a>
</div>

</div>


    <! End of course  area  !>


    
        <! gallery area  !>

        <div class="gallery-area pb-4" style="background-color:#f2f2f2">

        <div class="heading"> 
            
                
            <div class="col text-center p-3  " style=""> Gallery</div>
          
        </div>

        <div class="container mt-3">
        <div class="gallery owl-carousel">





        <div class="card p-2 m-2 "> 
        <img src="images/0-1.jpg" alt="" class="card-img">
        </div>



        <div class="card p-2 m-2 "> 
        <img src="images/0-2.jpg" alt="" class="card-img">
        </div>



        <div class="card p-2 m-2 "> 
        <img src="images/0-3.jpg" alt="" class="card-img">
        </div>









        <div class="card p-2 m-2"> 
        <img src="images/0-4.jpg" alt="" class="card-img">
        </div>



        <div class="card p-2 m-2"> 
        <img src="images/0-6.jpg" alt="" class="card-img">
        </div>







        </div>
        </div>

        <div class="col-12 text-center m-4">
      <a href="gallery_page.php" class="btn btn-hire">View More</a>
          </div>
        </div>


            <! End of gallery  area  !>

    
          <?php include 'footer.php'; ?>
     
 
     
  



