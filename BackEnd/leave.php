<?php
    $starDate=$endDate=$reason=$description=$d1=$d2=$empid="";
    $starDateerr=$endDateerr=$empiderr=$reasonerr= "";
    function testInput($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }	  
    if($_SERVER['REQUEST_METHOD']=="POST"){
    //name
    if(empty($_POST["empid"])){
        $empiderr = "*please set emp id";
        }
        else{
        $empid = testInput($_POST["empid"]);
        
        }
    if(empty($_POST["starDate"])){
    $starDateerr = "*please set start date";
    }
    else{
    $starDate = testInput($_POST["starDate"]);
    
    }
    if(empty($_POST["endDate"])){
        $endDateerr = "*please set end date";
    }
    else{ 
        $endDate = testInput($_POST["endDate"]);
        $d1=strtotime($starDate);
        $d2=strtotime($endDate);
    $d2=ceil(($d2-$d1)/60/60/24);
    if($d2<1){
        $endDateerr="the difference day must greater than 0";
    }
    
    }
    if(empty($_POST["reason"])){
        $reasonerr = "*please set reason";
    }
    else{
        $reason = testInput($_POST["reason"]);
    
    }
    if(empty($_POST["description"])){
        $reasonerr = "*please set description";
    }
    else{
        $description = testInput($_POST["description"]);
    
    }
    }
    if(strlen($endDateerr)==0){
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
        echo "database connected successfully.";
    }
    
    //prepared statment.
    $statement=$conn->prepare("insert into LeaveRequest(Empid,StartDate,EndDate,Reason,Description) values(?,?,?,?,?)");
    $statement->bind_param("sssss",$empid,$starDate,$endDate,$reason,$description);

    //excution.
    $statement->execute();
    header("Location: http://localhost/Project/FrontEnd/main.html");
    exit; // Ensure no further code execution after redirection
}
else{
    header("Location: http://localhost/Project/FrontEnd/leave.html");
    exit; // Ensure no further code execution after redirection
}
?>