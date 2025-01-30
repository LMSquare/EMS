<?php
    $fname=$empid=$password=$confirmpassword=$email=$position="";
    $fnameerr=$lnameerr=$empiderr=$passworderr=$Confirmpassworderr=$emailerr=$positionerr= "";
    if($_SERVER['REQUEST_METHOD']=="POST"){
      function testInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
   //name
      if(empty($_POST["fname"])){
      $fnameerr = "*firstName is Required";
    }
    else{
      $fname = testInput($_POST["fname"]);
      if(!preg_match("/^[a-zA-z-]*$/",$fname)){
        $fnameerr = "*Invalid name.";
      }
    }
    //username validat end
  
     //empid id validate start
    if(empty($_POST["empid"])){
      $empiderr = "employee id is Required";
      
    }
    else{
      $empid = testInput($_POST["empid"]);
      
    }
    //empid validation end
  
    //password validatat start
    if(empty($_POST["password"])){
      $passworderr = "password is Required";
    }
    else{
      if(empty($_POST["confirmpassword"])){
          $passworderr = "please confirm the password";
      }
      else if($_POST["password"]!==$_POST["confirmpassword"]){
          $passworderr = "password unmatch!";
          $confirmpassworderr="confirm right password";
      }
      else{
        $password = testInput($_POST["password"]);
        $confirmpassword= testInput($_POST["confirmpassword"]);
      } 
    }
    //password validate end
  
    //email validate start
    if(empty($_POST["email"])){
      $emailerr = "*email is Required";
    }
    else{
      $email = testInput($_POST["email"]);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailerr = "*Invalid emial";
      }
  
    }
    //email validate end
   
    if(empty($_POST["position"])){
      $positionerr = "employee id is Required";
    }
    else{
      $position = testInput($_POST["position"]);
    }
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
    
    //inserting data using prepared statement.
    if(strlen($fname)==0 || strlen($empid)==0 || strlen($position)==0 || strlen($email)==0 || strlen($password)==0){
        header("Location: http://localhost/Project/FrontEnd/register.html");
        exit();
    }
    
    else{
        $flag=0;
        $sql="select EmpId from Registration";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            if($row['EmpId']==$empid){
                $flag=1;
                break; // Exit the loop once the credentials are found
            }
          }
       }
       if($flag==0){
        $statement=$conn->prepare("insert into Registration(FullName,EmpId,Position,Email,Password) values(?,?,?,?,?)");
        $statement->bind_param("sssss",$fname,$empid,$position,$email,$password);

        //excution.
        $statement->execute();
        //$conn->close();
        header("Location: http://localhost/Project/FrontEnd/login.html");
        exit;
       }
       else{
        header("Location: http://localhost/Project/FrontEnd/register.html");
         exit;
       }
    } 
  }  
    //echo "<br>New records created successfully";

