<?php 
      $empid=$reason=$startDate=$endDate=[];
      $servername="localhost";
      $username="root";
      $Password="";
      $dbname="EMS";
      //create connection
      $conn=new mysqli($servername,$username,$Password,$dbname);
      //check connection
      if($conn->connect_error){
          die("connection failed: ".$conn->connect_error);
      }
      else{
          //echo "database connected successfully.";
      } 
      $index=0;
      $sql="select * from LeaveRequest";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $empid[$index]=$row['Empid'];
            $reason[$index]=$row['Reason'];
            $startDate[$index]=$row['StartDate'];
            $endDate[$index]=$row['EndDate'];
            $index=$index+1;
          }
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="requests.css"> <!-- Import the CSS file -->
  <title>Leave Requests</title>
</head>
<body>
<script src="requests.js"></script>
  <section class="sect1">
    <a href="ceo.html">Return</a>
</section>
  
  <h1>Leave Requests</h1>
  <table>
    <tr>
      <th>Employee Name</th>
      <th>Type</th>
      <th>Date</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    
    
    
    <?php
for($i=0;$i<count($empid);$i++){
    echo "<tr>
        <td>$empid[$i]</td>
        <td>$reason[$i]</td>
        <td>$startDate[$i] to $endDate[$i]</td>
        <td>Pending</td>
        <td><button onclick=\"approveRequest(this)\">Approve</button><button onclick=\"disapproveRequest(this)\">Disapprove</button></td>
    </tr>";
}
?>
    <!-- More rows can be added here -->
  </table>
  <footer>
    &copy; 2024 Alpha. All rights reserved.
  </footer>
  
  
</body>
</html>
