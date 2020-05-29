<?php include '../link.php'; ?>
<?php include '../includes/config-inc.php'; ?>


   <html>
    <head>
        <title>This is record of database</title>
    </head>
    <body>
      
        <div class="container">
        <h2 class="m-4 p-4">Inquiries list</h2>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Message</th>
               
            <tr>
            <?php
              


  $sql = "SELECT * FROM mail";
  $records = $conn->query($sql);
  
  
            while($row = $records->fetch_assoc()){
            echo "<tr>";
             
           echo "<td>".$row['contact_id']."</td>";
           echo "<td>".$row['name']."</td>";
           echo "<td>".$row['p_num']."</td>";
           echo "<td>".$row['subject']."</td>";
           echo "<td>".$row['message']."</td>";
             
            echo "</tr>";
            }
        ?>
        </table>
        </div>
    </body>
</html>