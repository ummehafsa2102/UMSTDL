<?php include 'link.php'; ?>
<?php include 'includes/config-inc.php'; ?>


   <html>
    <head>
        <title>This is record of database</title>
    </head>
    <body>
      
        <div class="container">
        <div class="row">
            <h2 class="col">Registration list</h2>
            <h2 class="col ">
                <a href="contact_list.php" class="btn btn-primary">Inquiries List</a>
            </h2>
            <h2 class="col ">
                <a href="index.php" class="btn btn-primary">umsdtl.com</a>
                </h2>
</div>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Village</th>
                <th>Police Station</th>
                <th>District</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Occupation</th>
                <th>Education Qualification</th>
                <th>Reference</th>
            <tr>
            <?php
              


  $sql = "SELECT * FROM users";
  $records = $conn->query($sql);
  
  
            while($row = $records->fetch_assoc()){
            echo "<tr>";
             
           echo "<td>".$row['id']."</td>";
           echo "<td>".$row['fullname']."</td>";
           echo "<td>".$row['f_name']."</td>";
           echo "<td>".$row['m_name']."</td>";
           echo "<td>".$row['village']."</td>";
           echo "<td>".$row['thana']."</td>";
           echo "<td>".$row['district']."</td>";
           echo "<td>".$row['p_num']."</td>";
           echo "<td>".$row['email']."</td>";
           echo "<td>".$row['occupation']."</td>";
           echo "<td>".$row['edu_qua']."</td>";
           echo "<td>".$row['refer']."</td>";
             
            echo "</tr>";
            }
        ?>
        </table>
        </div>
        <footer> <div class="footer-lineend"></div> 
      <div class="footer-rights">
      <p class="text-center p-3 mb-0" style="color:#000; font-weight: 600; font-size: 20px;">Web Amex All rights reserved.</p>
      </div></footer>
       