<?php include("connectdb.php") ;  ?>
<?php
$email= $_POST['email'] ;
$password= $_POST['password'] ;

if($conn->connect_error){
   die("failed to connect with database :". $conn->connect_error) ; 
}else{
    $statment=$conn->prepare("select * from response where email =   ?") ;
    $statment->bind_param("s",$email) ;
    $statment->execute() ;
    $statment_result =$statment->get_result() ;
    if($statment_result->num_rows > 0){
        $data = $statment_result->fetch_assoc();
        if($data['password'] === $password){
            echo"<h1>login sucessful<h1>" ;
        }
         else{
            // echo $data['password'] ;
            echo" <h1>invalid email or password<h1> " ;
         }
    }
    else{
        echo"invalid email or password " ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- login sucessfulll!!!!! -->
</body>
</html>
