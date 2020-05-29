<?php include 'link.php'; ?>

<?php include 'header.php'; ?>

<div class="container" style="width:500px" >

<h1 class="text-center">Registration<h2>
<?php 
	if(isset($_GET['error'])){
		if($_GET['error']=="emptyfields"){
			echo'<p class="alert alert-danger h6">Fill in all fields</p>';
		}
		else if($_GET['error']=="invalidmail&user"){
			echo'<p class="alert alert-danger h6">Invalid Email</p>';
		}
	
		else if($_GET['error']=="sqlerror"){
			echo'<p class="alert alert-danger h6">Error in Creating account</p>';
		}
		else if($_GET['error']=="emailtaken"){
			echo'<p class="alert alert-danger h6">Email Taken</p>';
		}
	
	}	else if(isset($_GET['register'])){
				if(($_GET['register']=="success")){
			echo'<p class="alert alert-success h6">Registration done successfully</p>';
		}
	}
?>


		

		<form action="includes/reg-inc.php" class="form-group" method="post">


		<div class="form-group "> 
				<input type="text" name="fullname" placeholder="Full name" class="form-control">
			</div>

			<div class="form-group "> 
				<input type="text" name="f_name" placeholder="Father Name " class="form-control">
			</div>

			<div class="form-group "> <input type="text" name="m_name" placeholder="Mother name" class="form-control">
			</div>


			<div class="form-group "> <input type="text" name="village" placeholder="Village" class="form-control"></div>

			<div class="form-group "> <input type="text" name="thana" placeholder="Police Station" class="form-control"></div>

			<div class="form-group "> <input type="text" name="district" placeholder="District" class="form-control"></div>


			<div class="form-group "> <input type="text" name="p_num" placeholder="Phone Number" class="form-control"></div>

			<div class="form-group "> <input type="text" name="email" placeholder="E-mail (Optional)" class="form-control">
			</div>


			<div class="form-group "> <input type="text" name="occupation" placeholder="Occupation" class="form-control"></div>

			<div class="form-group "> <input type="text" name="edu_qua" placeholder="Educational Qualification" class="form-control"></div>

			<div class="form-group "> <input type="text" name="refer" placeholder="Reference" class="form-control"></div>

			<button class= "btn btn-dark " name="register" style="color:#fff">Sign up </button>

	</form>
	

				

		
		</div>


<?php include 'footer.php'; ?>