
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="EMS";
    $EmpId=$Password="";
    function testInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(empty($_POST['username'])){

        }
        else{
            $EmpId=testInput($_POST['username']);
    
        }
        if(empty($_POST['password'])){

        }
        else{
            $Password=htmlspecialchars($_POST['password']);
        }
    }
    
    //create connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }
    else{
        //echo "database connected successfully.";
    }

    //sql query for fetching empid and password from db.
    $sql="select EmpId,Password from Registration";
    $result=$conn->query($sql);
    $flag=0;
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            if(($row['EmpId']==$EmpId) && ($row['Password']==$Password)){
                $flag=1;
                break; // Exit the loop once the credentials are found
            }
        }
    }
    if($flag==1){
        header("Location: http://localhost/Project/FrontEnd/ceo.html");
        exit; // Ensure no further code execution after redirection
    }
    else{
        header("Location:http://localhost/Project/FrontEnd/loginceo.html");
        exit; // Ensure no further code execution after redirection
    }
?>
