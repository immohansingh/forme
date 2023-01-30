<?php include("connectdb.php") ;  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
            font-family: 'Roboto', sans-serif;

        }

        body {
            background-color: grey;
        }
        .main{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            margin-bottom: 5px;
            padding-bottom: 25px;   
            display :flex ;
            flex-direction:row ;
            background-color: white;
        }
        .forimg{
            display:flex;
            flex-direction:column ;
            margin-top : 95px ;
            height: 225px;
        }

        .container1 {
            display: flex;
            flex-direction: column;
            position: relative;
            
           
           
        }

        .container2 {
            display: flex;
            flex-direction: column;
             justify-content: center;
        }


        .item1,
        .item2,
        .item3,
        .item4,
        .item8,
        .item5,
        .btn
         {

            margin: 23px 0px 0px 0px ;
            width: 93%;
            align-self: flex-start;
            height: 50px;
            font-size: medium;
            padding-left: 5px;
        }
        .item8{
            margin-left: 32px;
        }
        .item-4{
            margin: 10px 33px 10px 0px  ;
            width: 373px    ;
            /* align-self: flex-start; */
            height: 50px;
            font-size: medium;
            padding-left: 5px;


        }
        .item-5{
            margin: 10px 10px 10px 0px  ;
            width: 373px;
            /* align-self: flex-start; */
            height: 50px;
            font-size: medium;
            padding-left: 5px;
        }

        .img1{
            width: 30px;
            height: 49px;
            border: 1px solid grey;
            margin: 7px 0px 0px 10px;
        }
        .img2{
            width: 30px;
            height: 49px;
            border: 1px solid grey;
            margin: 25px 0px 0px 10px;
        }
        .img3{
            width: 30px;
            height: 49px;
            border: 1px solid grey;
            margin: 23px 0px 0px 10px;
        }

        .img4 {
            width: 30px;
            height: 49px;
            border: 1px solid grey;
            margin: 10px 0px 0px 0px ;


        }

        .FLName {
            display: flex;
            justify-content: center;
            width: 1125px;
            margin-top: 18px;
            width: fit-content;
        }

        .item6,
        .item7 {
            margin: 5px 5px 5px 10px;
        }

        .item6 {
            align-self: flex-start;
        }

        .item7 {
            align-self: flex-end;
        }

        .heading {
            align-self: center;
            margin: 20px;
            text-align: center ;
        }
        .gender{
            margin:10px 5px 10px 27px;

        }

        .terms {
            display: flex;
            flex-direction: column;
            margin: 10px;
            width: fit-content;
        }

        .country {
            color: gray;
        }

        .terms-item {
            margin: 5px;
        }

        .btn {
            background-color: rgb(247, 160, 0);
            padding: 10px;
            font-size: large;
            align-self: center;
            border: none;
        }
        @media screen and (max-width : 1408px) {
            body{
                background-color:white;
            }
            .item1 , .item2 , .item3{
                width: 80vw;
            }
            .main{
                height:100vh ;
            }
            .forimg{
                margin-top: 134px;
                visibility: hidden;
            }
            .item-4,.item-5{
               width: 40vw;
            }
            .container{
                justify-content:center ;
                align-items:center ;
            }
            .FLName{
                position: relative;
                justify-content: flex-start;
                left: -28px;
                width: 85vw;
            }
            .gender{
                display:flex;
                flex-direction: row ;
                width: fit-content;
                /* justify-content:center ; */
            }
            .item8{
                width:100vw; 
                left: -36px;
                 position: relative;
                 width: 80vw;
              }   
            
            .btn{
                   /* text-align:center ; */
                   position:relative;
                   width:52vw ;
                   left: -57px;
            }
            
        }
            @media screen and (min-width : 1409px){
                body{
                background-color:white;
            }
            .item1 , .item2 , .item3{
                width: 90vw;
            }
            .main{
                height:95vh ;
                width: fit-content ;
                height:fit-content ; 
            }
            .item-4,.item-5{
               width: 40vw;
            }
            .FLName{
                position: relative;
                justify-content: flex-start;
                left: -28px;
            }
            .btn{
                width: 55vw;    
            }
            
        }
            

            
        
    </style>
    <title>Registration Form</title>


</head>

<body>
    <div class="main">
<div class="forimg">
    <img src="mail.jpg  " class="img1"> 
    <img src="lock.jpg  " class="img2">
    <img src="lock.jpg  " class="img3">
    

    </div>
    <div class="container1">
   
        <h1 class="heading">Responsive Registration Form</h1>
        <form class="container2" action="#" method="POST">
        <input type="email" name="email" class="item1" required=""  
                    placeholder="Email">
             <input type="password" name="password" class="item2" required=""
                    placeholder="Password">
             <input type="password" name="ReTypepassword" class="item3" required=""
                    placeholder="Re-Type Password">
            <div class="FLName">
            <img src="person.png" class="img4"> 
          <input type="text" name="Firstname" required=""
                        placeholder="First Name" class="item-4">
                 <img src="person.png " class="img4"><input type="text" name="Lastname"
                        placeholder="Last Name" class="item-5">
            </div>
            <div class="gender">

                <input type="radio" name="Gender" class="item6" id="male" value="male" required=""><label for id="male">Male</label>

                <input type="radio" name="Gender" class="item7" id="female" value="female" required=""> <label for id="female">Female</label>


            </div>
            <label for="country"></label>
            <select id="country" name="country" class="item8">
                <option class="country" value="not a value">Select the country</option>
                <option value="India">India</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Srilanka">Srilanka</option>
            </select>
            <div class="terms">

                <p><input type="checkbox" name="terms" class="terms-item" required="">I agree the terms and conditons</p>
                <p><input type="checkbox" name="terms" class="terms-item" required="">I want to receive new seletter</p>
            </div>
            <input type="submit" class="btn" value="Register" name="register" >
        </form>
    </div>

    </div>
</body>

</html>
<?php
error_reporting(0);

    if($_POST['register']){

$email=$_POST['email'];
$pwd=$_POST['password'];
$cpwd=$_POST['ReTypepassword'];
$fname=$_POST['Firstname'];
$lname=$_POST['Lastname'];
$gender=$_POST['Gender'];
$country=$_POST['country'];
$query= "insert into response values ('$email','$pwd','$cpwd','$fname','$lname','$gender','$country')";
$data=mysqli_query($conn,$query) ;
if($data){
    echo"Data inserted sucessfully" ;
}
else{
    echo"not inserted";
}
}
?>